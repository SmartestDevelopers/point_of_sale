@extends('layouts.front')

@section('content')
<div class="subheader py-2 py-lg-6 subheader-solid">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">Sales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sale Details</li>
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
                            <h3 class="card-label mb-0 font-weight-bold text-body">Sale Details - {{ $sale->reference_no }}</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('sales.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                            <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-primary font-weight-bold ml-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Sale Information</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Reference No:</strong></td>
                                        <td>{{ $sale->reference_no }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Customer:</strong></td>
                                        <td>{{ $sale->customer_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Warehouse:</strong></td>
                                        <td>{{ $sale->warehouse_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>User:</strong></td>
                                        <td>{{ $sale->user_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Date:</strong></td>
                                        <td>{{ date('M d, Y H:i', strtotime($sale->created_at)) }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5>Status & Payment</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Sale Status:</strong></td>
                                        <td>
                                            @if($sale->sale_status == 1)
                                                <span class="badge badge-success">Completed</span>
                                            @elseif($sale->sale_status == 2)
                                                <span class="badge badge-warning">Pending</span>
                                            @else
                                                <span class="badge badge-danger">Draft</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Payment Status:</strong></td>
                                        <td>
                                            @if($sale->payment_status == 1)
                                                <span class="badge badge-success">Paid</span>
                                            @elseif($sale->payment_status == 2)
                                                <span class="badge badge-warning">Partial</span>
                                            @else
                                                <span class="badge badge-danger">Due</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Grand Total:</strong></td>
                                        <td>${{ number_format($sale->grand_total, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Paid Amount:</strong></td>
                                        <td>${{ number_format($sale->paid_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Due Amount:</strong></td>
                                        <td>${{ number_format($sale->grand_total - $sale->paid_amount, 2) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Products</h5>
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-vertical-center">
                                        <thead>
                                            <tr class="text-left">
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th>Discount</th>
                                                <th>Tax</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($productSales as $productSale)
                                            <tr>
                                                <td>{{ $productSale->product_name }}</td>
                                                <td>{{ $productSale->qty }}</td>
                                                <td>${{ number_format($productSale->net_unit_price, 2) }}</td>
                                                <td>${{ number_format($productSale->discount, 2) }}</td>
                                                <td>${{ number_format($productSale->tax, 2) }}</td>
                                                <td>${{ number_format($productSale->total, 2) }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No products found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        @if($sale->sale_note || $sale->staff_note)
                        <div class="row mt-4">
                            <div class="col-md-6">
                                @if($sale->sale_note)
                                <h6>Sale Note:</h6>
                                <p>{{ $sale->sale_note }}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($sale->staff_note)
                                <h6>Staff Note:</h6>
                                <p>{{ $sale->staff_note }}</p>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
