<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Sales Statistics
        $totalSales = DB::table('sales')->count();
        $totalSalesAmount = DB::table('sales')->sum('grand_total');
        $todaySales = DB::table('sales')->whereDate('created_at', today())->count();
        $todaySalesAmount = DB::table('sales')->whereDate('created_at', today())->sum('grand_total');
        
        // Purchase Statistics
        $totalPurchases = DB::table('purchases')->count();
        $totalPurchasesAmount = DB::table('purchases')->sum('grand_total');
        $todayPurchases = DB::table('purchases')->whereDate('created_at', today())->count();
        $todayPurchasesAmount = DB::table('purchases')->whereDate('created_at', today())->sum('grand_total');
        
        // Return Sales Statistics
        $totalReturnSales = DB::table('return_sales')->count();
        $totalReturnSalesAmount = DB::table('return_sales')->sum('grand_total');
        
        // Return Purchases Statistics
        $totalReturnPurchases = DB::table('return_purchases')->count();
        $totalReturnPurchasesAmount = DB::table('return_purchases')->sum('grand_total');
        
        // Product Statistics
        $totalProducts = DB::table('products')->count();
        $lowStockProducts = DB::table('products')->where('product_stock', '<', 10)->count();
        
        // Customer & Supplier Statistics
        $totalCustomers = DB::table('customers')->where('is_deleted', '0')->count();
        $totalSuppliers = DB::table('suppliers')->where('is_deleted', '0')->count();
        
        // Recent Sales (Last 10)
        $recentSales = DB::table('sales')
            ->join('customers', 'sales.customer_id', '=', 'customers.id')
            ->select('sales.*', 'customers.name as customer_name')
            ->orderBy('sales.created_at', 'desc')
            ->limit(10)
            ->get();
            
        // Recent Purchases (Last 10)
        $recentPurchases = DB::table('purchases')
            ->leftJoin('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
            ->select('purchases.*', 'suppliers.name as supplier_name')
            ->orderBy('purchases.created_at', 'desc')
            ->limit(10)
            ->get();
            
        // Monthly Sales Data for Chart (Last 12 months)
        $monthlySales = DB::table('sales')
            ->select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('YEAR(created_at) as year'),
                DB::raw('COUNT(*) as total_sales'),
                DB::raw('SUM(grand_total) as total_amount')
            )
            ->where('created_at', '>=', now()->subMonths(12))
            ->groupBy(DB::raw('YEAR(created_at), MONTH(created_at)'))
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
            
        // Payment Status Statistics
        $paidSales = DB::table('sales')->where('payment_status', 1)->count();
        $dueSales = DB::table('sales')->where('payment_status', 0)->count();
        $partialSales = DB::table('sales')->where('payment_status', 2)->count();
        
        return view('home', compact(
            'totalSales', 'totalSalesAmount', 'todaySales', 'todaySalesAmount',
            'totalPurchases', 'totalPurchasesAmount', 'todayPurchases', 'todayPurchasesAmount',
            'totalReturnSales', 'totalReturnSalesAmount',
            'totalReturnPurchases', 'totalReturnPurchasesAmount',
            'totalProducts', 'lowStockProducts',
            'totalCustomers', 'totalSuppliers',
            'recentSales', 'recentPurchases', 'monthlySales',
            'paidSales', 'dueSales', 'partialSales'
        ));
    }
}
