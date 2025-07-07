@extends('layouts.front')

@section('content')
<div class="subheader py-2 py-lg-6 subheader-solid">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profit & Loss Report</li>
            </ol>
        </nav>
    </div>
</div>

<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-header align-items-center border-0">
                        <div class="card-title mb-0">
                            <h3 class="card-label mb-0 font-weight-bold text-body">Profit & Loss Report</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h5>Total Sales</h5>
                                        <h3>${{ number_format($totalSales, 2) }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <h5>Total Purchases</h5>
                                        <h3>${{ number_format($totalPurchases, 2) }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card bg-warning text-white">
                                    <div class="card-body">
                                        <h5>Return Sales</h5>
                                        <h3>${{ number_format($totalReturnSales, 2) }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <h5>Return Purchases</h5>
                                        <h3>${{ number_format($totalReturnPurchases, 2) }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <h5>Gross Profit</h5>
                                        <h3>${{ number_format($grossProfit, 2) }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card {{ $netProfit >= 0 ? 'bg-success' : 'bg-danger' }} text-white">
                                    <div class="card-body">
                                        <h5>Net Profit</h5>
                                        <h3>${{ number_format($netProfit, 2) }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Quick Report Links</h5>
                                <div class="row">
                                    <div class="col-md-3 mb-2">
                                        <a href="/sale-report" class="btn btn-primary btn-block">Sales Report</a>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <a href="/purchase-report" class="btn btn-secondary btn-block">Purchase Report</a>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <a href="/stock-report" class="btn btn-success btn-block">Stock Report</a>
                                    </div>
                                    <div class="col-md-3 mb-2">
                                        <a href="/customer-report" class="btn btn-info btn-block">Customer Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
