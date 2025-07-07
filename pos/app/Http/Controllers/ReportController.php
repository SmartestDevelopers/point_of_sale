<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    /**
     * Display the main reports dashboard
     */
    public function index()
    {
        // Get basic statistics for reports dashboard
        $totalSales = DB::table('sales')->sum('grand_total');
        $totalPurchases = DB::table('purchases')->sum('grand_total');
        $totalReturnSales = DB::table('return_sales')->sum('grand_total');
        $totalReturnPurchases = DB::table('return_purchases')->sum('grand_total');
        
        $grossProfit = $totalSales - $totalPurchases;
        $netProfit = ($totalSales + $totalReturnPurchases) - ($totalPurchases + $totalReturnSales);
        
        return view('reports.index', compact(
            'totalSales', 'totalPurchases', 'totalReturnSales', 'totalReturnPurchases',
            'grossProfit', 'netProfit'
        ));
    }

    /**
     * Sales Reports
     */
    public function salesReport(Request $request)
    {
        $period = $request->get('period', 'daily');
        $startDate = $request->get('start_date', now()->startOfMonth());
        $endDate = $request->get('end_date', now()->endOfMonth());

        $salesData = $this->getSalesData($period, $startDate, $endDate);
        
        return view('reports.sales', compact('salesData', 'period', 'startDate', 'endDate'));
    }

    /**
     * Purchase Reports
     */
    public function purchaseReport(Request $request)
    {
        $period = $request->get('period', 'daily');
        $startDate = $request->get('start_date', now()->startOfMonth());
        $endDate = $request->get('end_date', now()->endOfMonth());

        $purchaseData = $this->getPurchaseData($period, $startDate, $endDate);
        
        return view('reports.purchases', compact('purchaseData', 'period', 'startDate', 'endDate'));
    }

    /**
     * Return Sales Reports
     */
    public function returnSalesReport(Request $request)
    {
        $period = $request->get('period', 'daily');
        $startDate = $request->get('start_date', now()->startOfMonth());
        $endDate = $request->get('end_date', now()->endOfMonth());

        $returnSalesData = $this->getReturnSalesData($period, $startDate, $endDate);
        
        return view('reports.return_sales', compact('returnSalesData', 'period', 'startDate', 'endDate'));
    }

    /**
     * Return Purchase Reports
     */
    public function returnPurchaseReport(Request $request)
    {
        $period = $request->get('period', 'daily');
        $startDate = $request->get('start_date', now()->startOfMonth());
        $endDate = $request->get('end_date', now()->endOfMonth());

        $returnPurchaseData = $this->getReturnPurchaseData($period, $startDate, $endDate);
        
        return view('reports.return_purchases', compact('returnPurchaseData', 'period', 'startDate', 'endDate'));
    }

    /**
     * Stock Reports
     */
    public function stockReport(Request $request)
    {
        $type = $request->get('type', 'current');
        
        switch($type) {
            case 'low':
                $stockData = $this->getLowStockData();
                break;
            case 'out':
                $stockData = $this->getOutOfStockData();
                break;
            case 'movement':
                $stockData = $this->getStockMovementData($request);
                break;
            default:
                $stockData = $this->getCurrentStockData();
        }
        
        return view('reports.stock', compact('stockData', 'type'));
    }

    /**
     * Customer Ledger
     */
    public function customerLedger(Request $request)
    {
        $customerId = $request->get('customer_id');
        $startDate = $request->get('start_date', now()->startOfYear());
        $endDate = $request->get('end_date', now()->endOfYear());

        $customers = DB::table('customers')->get();
        $ledgerData = [];

        if ($customerId) {
            $ledgerData = $this->getCustomerLedgerData($customerId, $startDate, $endDate);
        }

        return view('reports.customer_ledger', compact('customers', 'ledgerData', 'customerId', 'startDate', 'endDate'));
    }

    /**
     * Supplier Ledger
     */
    public function supplierLedger(Request $request)
    {
        $supplierId = $request->get('supplier_id');
        $startDate = $request->get('start_date', now()->startOfYear());
        $endDate = $request->get('end_date', now()->endOfYear());

        $suppliers = DB::table('suppliers')->get();
        $ledgerData = [];

        if ($supplierId) {
            $ledgerData = $this->getSupplierLedgerData($supplierId, $startDate, $endDate);
        }

        return view('reports.supplier_ledger', compact('suppliers', 'ledgerData', 'supplierId', 'startDate', 'endDate'));
    }

    /**
     * Trial Balance
     */
    public function trialBalance(Request $request)
    {
        $date = $request->get('date', now()->format('Y-m-d'));
        
        $trialBalanceData = $this->getTrialBalanceData($date);
        
        return view('reports.trial_balance', compact('trialBalanceData', 'date'));
    }

    /**
     * Profit & Loss Statement
     */
    public function profitLoss(Request $request)
    {
        $startDate = $request->get('start_date', now()->startOfYear());
        $endDate = $request->get('end_date', now()->endOfYear());

        $profitLossData = $this->getProfitLossData($startDate, $endDate);
        
        return view('reports.profit_loss', compact('profitLossData', 'startDate', 'endDate'));
    }

    /**
     * Balance Sheet
     */
    public function balanceSheet(Request $request)
    {
        $date = $request->get('date', now()->format('Y-m-d'));
        
        $balanceSheetData = $this->getBalanceSheetData($date);
        
        return view('reports.balance_sheet', compact('balanceSheetData', 'date'));
    }

    /**
     * Cash Flow Statement
     */
    public function cashFlow(Request $request)
    {
        $startDate = $request->get('start_date', now()->startOfYear());
        $endDate = $request->get('end_date', now()->endOfYear());

        $cashFlowData = $this->getCashFlowData($startDate, $endDate);
        
        return view('reports.cash_flow', compact('cashFlowData', 'startDate', 'endDate'));
    }

    // Helper Methods for Data Retrieval

    private function getSalesData($period, $startDate, $endDate)
    {
        $dateFormat = $this->getDateFormat($period);
        
        return DB::table('sales')
            ->join('customers', 'sales.customer_id', '=', 'customers.id')
            ->select(
                DB::raw("DATE_FORMAT(sales.created_at, '$dateFormat') as period"),
                DB::raw('COUNT(*) as total_sales'),
                DB::raw('SUM(sales.grand_total) as total_amount'),
                DB::raw('AVG(sales.grand_total) as average_amount'),
                'customers.name as customer_name'
            )
            ->whereBetween('sales.created_at', [$startDate, $endDate])
            ->groupBy('period', 'customers.name')
            ->orderBy('period', 'desc')
            ->get();
    }

    private function getPurchaseData($period, $startDate, $endDate)
    {
        $dateFormat = $this->getDateFormat($period);
        
        return DB::table('purchases')
            ->leftJoin('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
            ->select(
                DB::raw("DATE_FORMAT(purchases.created_at, '$dateFormat') as period"),
                DB::raw('COUNT(*) as total_purchases'),
                DB::raw('SUM(purchases.grand_total) as total_amount'),
                DB::raw('AVG(purchases.grand_total) as average_amount'),
                'suppliers.name as supplier_name'
            )
            ->whereBetween('purchases.created_at', [$startDate, $endDate])
            ->groupBy('period', 'suppliers.name')
            ->orderBy('period', 'desc')
            ->get();
    }

    private function getReturnSalesData($period, $startDate, $endDate)
    {
        $dateFormat = $this->getDateFormat($period);
        
        return DB::table('return_sales')
            ->join('customers', 'return_sales.customer_id', '=', 'customers.id')
            ->select(
                DB::raw("DATE_FORMAT(return_sales.created_at, '$dateFormat') as period"),
                DB::raw('COUNT(*) as total_returns'),
                DB::raw('SUM(return_sales.grand_total) as total_amount'),
                'customers.name as customer_name'
            )
            ->whereBetween('return_sales.created_at', [$startDate, $endDate])
            ->groupBy('period', 'customers.name')
            ->orderBy('period', 'desc')
            ->get();
    }

    private function getReturnPurchaseData($period, $startDate, $endDate)
    {
        $dateFormat = $this->getDateFormat($period);
        
        return DB::table('return_purchases')
            ->leftJoin('suppliers', 'return_purchases.supplier_id', '=', 'suppliers.id')
            ->select(
                DB::raw("DATE_FORMAT(return_purchases.created_at, '$dateFormat') as period"),
                DB::raw('COUNT(*) as total_returns'),
                DB::raw('SUM(return_purchases.grand_total) as total_amount'),
                'suppliers.name as supplier_name'
            )
            ->whereBetween('return_purchases.created_at', [$startDate, $endDate])
            ->groupBy('period', 'suppliers.name')
            ->orderBy('period', 'desc')
            ->get();
    }

    private function getCurrentStockData()
    {
        return DB::table('products')
            ->leftJoin('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select(
                'products.*',
                'product_categories.name as category_name',
                DB::raw('(SELECT COALESCE(SUM(qty), 0) FROM product_purchases WHERE product_id = products.id) as total_purchased'),
                DB::raw('(SELECT COALESCE(SUM(qty), 0) FROM product_sales WHERE product_id = products.id) as total_sold'),
                DB::raw('(SELECT COALESCE(SUM(qty), 0) FROM product_return_purchases WHERE product_id = products.id) as total_purchase_returns'),
                DB::raw('(SELECT COALESCE(SUM(qty), 0) FROM product_return_sales WHERE product_id = products.id) as total_sale_returns'),
                DB::raw('((SELECT COALESCE(SUM(qty), 0) FROM product_purchases WHERE product_id = products.id) - 
                         (SELECT COALESCE(SUM(qty), 0) FROM product_sales WHERE product_id = products.id) + 
                         (SELECT COALESCE(SUM(qty), 0) FROM product_return_sales WHERE product_id = products.id) - 
                         (SELECT COALESCE(SUM(qty), 0) FROM product_return_purchases WHERE product_id = products.id)) as current_stock')
            )
            ->get();
    }

    private function getLowStockData()
    {
        return $this->getCurrentStockData()->filter(function($product) {
            return $product->current_stock <= ($product->alert_quantity ?? 10);
        });
    }

    private function getOutOfStockData()
    {
        return $this->getCurrentStockData()->filter(function($product) {
            return $product->current_stock <= 0;
        });
    }

    private function getCustomerLedgerData($customerId, $startDate, $endDate)
    {
        $sales = DB::table('sales')
            ->where('customer_id', $customerId)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->select('created_at as date', 'reference_no', 'grand_total as debit', DB::raw('0 as credit'), DB::raw('"Sale" as type'))
            ->get();

        $returns = DB::table('return_sales')
            ->where('customer_id', $customerId)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->select('created_at as date', 'reference_no', DB::raw('0 as debit'), 'grand_total as credit', DB::raw('"Return" as type'))
            ->get();

        return $sales->concat($returns)->sortBy('date');
    }

    private function getSupplierLedgerData($supplierId, $startDate, $endDate)
    {
        $purchases = DB::table('purchases')
            ->where('supplier_id', $supplierId)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->select('created_at as date', 'reference_no', DB::raw('0 as debit'), 'grand_total as credit', DB::raw('"Purchase" as type'))
            ->get();

        $returns = DB::table('return_purchases')
            ->where('supplier_id', $supplierId)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->select('created_at as date', 'reference_no', 'grand_total as debit', DB::raw('0 as credit'), DB::raw('"Return" as type'))
            ->get();

        return $purchases->concat($returns)->sortBy('date');
    }

    private function getTrialBalanceData($date)
    {
        // This would require a proper chart of accounts implementation
        // For now, we'll provide basic data from existing tables
        
        $totalSales = DB::table('sales')->whereDate('created_at', '<=', $date)->sum('grand_total');
        $totalPurchases = DB::table('purchases')->whereDate('created_at', '<=', $date)->sum('grand_total');
        $totalReturnSales = DB::table('return_sales')->whereDate('created_at', '<=', $date)->sum('grand_total');
        $totalReturnPurchases = DB::table('return_purchases')->whereDate('created_at', '<=', $date)->sum('grand_total');

        return [
            'sales' => $totalSales,
            'purchases' => $totalPurchases,
            'return_sales' => $totalReturnSales,
            'return_purchases' => $totalReturnPurchases,
            'gross_profit' => $totalSales - $totalPurchases,
            'net_profit' => ($totalSales + $totalReturnPurchases) - ($totalPurchases + $totalReturnSales)
        ];
    }

    private function getProfitLossData($startDate, $endDate)
    {
        $revenue = DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('grand_total');

        $cogs = DB::table('purchases')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('grand_total');

        $returnSales = DB::table('return_sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('grand_total');

        $returnPurchases = DB::table('return_purchases')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('grand_total');

        return [
            'revenue' => $revenue,
            'cost_of_goods_sold' => $cogs,
            'return_sales' => $returnSales,
            'return_purchases' => $returnPurchases,
            'gross_profit' => ($revenue - $returnSales) - ($cogs - $returnPurchases),
            'net_profit' => ($revenue - $returnSales) - ($cogs - $returnPurchases)
        ];
    }

    private function getBalanceSheetData($date)
    {
        // Basic balance sheet data
        $totalSales = DB::table('sales')->whereDate('created_at', '<=', $date)->sum('grand_total');
        $totalPurchases = DB::table('purchases')->whereDate('created_at', '<=', $date)->sum('grand_total');
        $stockValue = $this->calculateStockValue($date);

        return [
            'assets' => [
                'current_assets' => [
                    'cash' => $totalSales - $totalPurchases,
                    'inventory' => $stockValue,
                    'accounts_receivable' => 0 // Would need payment tracking
                ]
            ],
            'liabilities' => [
                'current_liabilities' => [
                    'accounts_payable' => 0 // Would need payment tracking
                ]
            ],
            'equity' => [
                'retained_earnings' => $totalSales - $totalPurchases
            ]
        ];
    }

    private function getCashFlowData($startDate, $endDate)
    {
        $salesCash = DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('paid_amount');

        $purchaseCash = DB::table('purchases')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('paid_amount');

        return [
            'operating_activities' => [
                'cash_from_sales' => $salesCash,
                'cash_to_suppliers' => $purchaseCash,
                'net_operating_cash' => $salesCash - $purchaseCash
            ],
            'investing_activities' => [
                'equipment_purchases' => 0,
                'net_investing_cash' => 0
            ],
            'financing_activities' => [
                'loans' => 0,
                'net_financing_cash' => 0
            ]
        ];
    }

    private function calculateStockValue($date)
    {
        return DB::table('products')
            ->join('product_purchases', 'products.id', '=', 'product_purchases.product_id')
            ->join('purchases', 'product_purchases.purchase_id', '=', 'purchases.id')
            ->whereDate('purchases.created_at', '<=', $date)
            ->sum(DB::raw('product_purchases.qty * product_purchases.net_unit_cost'));
    }

    private function getDateFormat($period)
    {
        switch($period) {
            case 'daily':
                return '%Y-%m-%d';
            case 'weekly':
                return '%Y-%u';
            case 'monthly':
                return '%Y-%m';
            case 'yearly':
                return '%Y';
            default:
                return '%Y-%m-%d';
        }
    }
}
