@extends('layouts.front')

@section('content')
@if(!$sale)
    <div class="alert alert-danger mt-4">Return Sale not found.</div>
@else
<div class="subheader py-2 py-lg-6 subheader-solid">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('return-sales.index') }}">Return Sales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Return Sale Details</li>
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
                            <h3 class="card-label mb-0 font-weight-bold text-body">Return Sale Details - {{ $sale->reference_no }}</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('return-sales.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                            <a href="{{ route('return-sales.edit', $sale->id) }}" class="btn btn-primary font-weight-bold ml-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Return Sale Information</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Reference No:</strong></td>
                                        <td>{{ $sale->reference_no }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Customer:</strong></td>
                                        <td>{{ $sale->customer_name ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Warehouse:</strong></td>
                                        <td>{{ $sale->warehouse_name ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>User:</strong></td>
                                        <td>{{ $sale->user_name ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Date:</strong></td>
                                        <td>{{ $sale->created_at ? date('M d, Y H:i', strtotime($sale->created_at)) : '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Items:</strong></td>
                                        <td>{{ $sale->item ?? 0 }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Quantity:</strong></td>
                                        <td>{{ $sale->total_qty ?? 0 }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5>Financial Details</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Grand Total:</strong></td>
                                        <td>{{ number_format($sale->grand_total, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Paid Amount:</strong></td>
                                        <td>{{ number_format($sale->paid_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Due Amount:</strong></td>
                                        <td>{{ number_format($sale->grand_total - $sale->paid_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Price:</strong></td>
                                        <td>{{ number_format($sale->total_price, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Shipping Cost:</strong></td>
                                        <td>{{ number_format($sale->shipping_cost ?? 0, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Discount:</strong></td>
                                        <td>{{ number_format($sale->total_discount ?? 0, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Tax:</strong></td>
                                        <td>{{ number_format($sale->total_tax ?? 0, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Tax Rate:</strong></td>
                                        <td>{{ number_format($sale->order_tax_rate ?? 0, 2) }}%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Tax:</strong></td>
                                        <td>{{ number_format($sale->order_tax ?? 0, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Discount:</strong></td>
                                        <td>{{ number_format($sale->order_discount ?? 0, 2) }}</td>
                                    </tr>
                                    @if($sale->document)
                                    <tr>
                                        <td><strong>Document:</strong></td>
                                        <td><a href="{{ $sale->document }}" target="_blank">View Document</a></td>
                                    </tr>
                                    @endif
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
                                                <th>Unit</th>
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
                                                <td>{{ $productSale->product_name ?? '-' }}</td>
                                                <td>{{ $productSale->unit_name ?? '-' }}</td>
                                                <td>{{ $productSale->qty }}</td>
                                                <td>{{ number_format($productSale->net_unit_price, 2) }}</td>
                                                <td>{{ number_format($productSale->discount ?? 0, 2) }}</td>
                                                <td>{{ number_format($productSale->tax ?? 0, 2) }}</td>
                                                <td>{{ number_format($productSale->total, 2) }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No products found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        @if($sale->return_note || $sale->staff_note)
                        <div class="row mt-4">
                            <div class="col-md-6">
                                @if($sale->return_note)
                                <h6>Return Note:</h6>
                                <p>{{ $sale->return_note }}</p>
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
@endif
@endsection