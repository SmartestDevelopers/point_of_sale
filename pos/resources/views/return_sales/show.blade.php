@extends('layouts.front')

@section('content')
@if(!$sale)
    <div class="alert alert-danger mt-4">Return Sale not found.</div>
@else

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
                            <div class="col-md-12">
                                <h5>Return Sale Information</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Ref#:</strong><br/> {{ $sale->reference_no }}</td>
                                        <td><strong>Customer: </strong> <br/>{{ $sale->customer_name ?? '-' }}</td>
                                        <td><strong>Warehouse:</strong><br/> {{ $sale->warehouse_name ?? '-' }}</td>
                                         <td><strong>User:</strong><br/> {{ $sale->user_name ?? '-' }}</td>
                                        <td><strong>Date:</strong><br/> {{ $sale->created_at ? date('M d, Y H:i', strtotime($sale->created_at)) : '-' }}</td>
                                         <td><strong>Total Items:</strong> <br/>{{ $sale->item ?? 0 }}</td>
                                         <td><strong>Total Quantity:</strong> <br/>{{ $sale->total_qty ?? 0 }}</td>
                                        
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
                     <div class="col-md-12">
                                <h5>Financial Details</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Grand Total:</strong><br/>{{ number_format($sale->grand_total, 2) }}</td>
                                        <td><strong>Due Amount:</strong><br/>{{ number_format($sale->grand_total, 2) }}</td>
                                        <td><strong>Total Price:</strong><br/>{{ number_format($sale->total_price, 2) }}</td>
                                        <td><strong>Shipping Cost:</strong><br/>{{ number_format($sale->shipping_cost ?? 0, 2) }}</td>
                                        <td><strong>Total Discount:</strong><br/>{{ number_format($sale->total_discount ?? 0, 2) }}</td>
                                        <td><strong>Total Tax:</strong><br/>{{ number_format($sale->total_tax ?? 0, 2) }}</td>
                                        <td><strong>Order Tax Rate:</strong><br/>{{ number_format($sale->order_tax_rate ?? 0, 2) }}%</td>
                                        <td><strong>Order Tax:</strong><br/>{{ number_format($sale->order_tax ?? 0, 2) }}</td>
                                        <td><strong>Order Discount:</strong><br/>{{ number_format($sale->order_discount ?? 0, 2) }}</td>
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
            </div>
        </div>
    </div>
</div>
@endif
@endsection