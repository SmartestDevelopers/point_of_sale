@extends('layouts.front')

@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-header align-items-center border-0">
                        <div class="card-title mb-0">
                            <h3 class="card-label mb-0 font-weight-bold text-body">Return Purchase Details</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('return-purchases.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <h4>Return Purchase Information</h4>
                                <p><strong>Reference No:</strong> {{ $returnPurchase->reference_no }}</p>
                                <p><strong>Supplier:</strong> {{ $returnPurchase->supplier_name ?? 'N/A' }}</p>
                                <p><strong>Warehouse:</strong> {{ $returnPurchase->warehouse_name }}</p>
                                <p><strong>Total Quantity:</strong> {{ $returnPurchase->total_qty }}</p>
                                <p><strong>Grand Total:</strong> {{ number_format($returnPurchase->grand_total, 2) }}</p>
                                <p><strong>Created By:</strong> {{ $returnPurchase->user_name }}</p>
                                <p><strong>Created At:</strong> {{ $returnPurchase->created_at }}</p>
                                <p><strong>Return Note:</strong> {{ $returnPurchase->return_note ?? 'N/A' }}</p>
                                <p><strong>Staff Note:</strong> {{ $returnPurchase->staff_note ?? 'N/A' }}</p>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-body">
                                <h4>Products</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Unit</th>
                                            <th>Quantity</th>
                                            <th>Unit Cost</th>
                                            <th>Discount</th>
                                            <th>Tax</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($productReturnPurchases as $product)
                                            <tr>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->unit_name }}</td>
                                                <td>{{ $product->qty }}</td>
                                                <td>{{ number_format($product->net_unit_cost, 2) }}</td>
                                                <td>{{ number_format($product->discount, 2) }}</td>
                                                <td>{{ number_format($product->tax, 2) }}</td>
                                                <td>{{ number_format($product->total, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <a href="{{ route('return-purchases.edit', $returnPurchase->id) }}" class="btn btn-primary font-weight-bold">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('return-purchases.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection