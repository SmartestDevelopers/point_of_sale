@extends('layouts.front')

@section('content')
@if(!$purchase)
    <div class="alert alert-danger">Purchase not found.</div>
@else
<div class="subheader py-2 py-lg-6 subheader-solid">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Purchases</a></li>
                <li class="breadcrumb-item active" aria-current="page">Purchase Details</li>
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
                            <h3 class="card-label mb-0 font-weight-bold text-body">Purchase Details - {{ $purchase->reference_no }}</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('purchases.edit', $purchase->id) }}" class="btn btn-primary font-weight-bold me-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('purchases.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Reference No:</strong></td>
                                        <td>{{ $purchase->reference_no }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Supplier:</strong></td>
                                        <td>{{ $purchase->supplier_name ?? 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Warehouse:</strong></td>
                                        <td>{{ $purchase->warehouse_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>User:</strong></td>
                                        <td>{{ $purchase->user_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Status:</strong></td>
                                        <td>
                                            @if($purchase->status == 1)
                                                <span class="badge badge-success">Received</span>
                                            @elseif($purchase->status == 2)
                                                <span class="badge badge-warning">Pending</span>
                                            @else
                                                <span class="badge badge-danger">Ordered</span>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Payment Status:</strong></td>
                                        <td>
                                            @if($purchase->payment_status == 1)
                                                <span class="badge badge-success">Paid</span>
                                            @elseif($purchase->payment_status == 2)
                                                <span class="badge badge-warning">Partial</span>
                                            @else
                                                <span class="badge badge-danger">Due</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Grand Total:</strong></td>
                                        <td>${{ number_format($purchase->grand_total, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Paid Amount:</strong></td>
                                        <td>${{ number_format($purchase->paid_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Due Amount:</strong></td>
                                        <td>${{ number_format($purchase->grand_total - $purchase->paid_amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Date:</strong></td>
                                        <td>{{ date('M d, Y', strtotime($purchase->created_at)) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        @if($purchase->note)
                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Note:</h5>
                                <p>{{ $purchase->note }}</p>
                            </div>
                        </div>
                        @endif

                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Products</h5>
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-vertical-center">
                                        <thead>
                                            <tr class="text-left">
                                                <th>Product</th>
                                                <th>Code</th>
                                                <th>Quantity</th>
                                                <th>Unit Cost</th>
                                                <th>Discount</th>
                                                <th>Tax</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($productPurchases as $productPurchase)
                                            <tr>
                                                <td>{{ $productPurchase->product_name }}</td>
                                                <td>{{ $productPurchase->product_code }}</td>
                                                <td>{{ $productPurchase->qty }}</td>
                                                <td>${{ number_format($productPurchase->net_unit_cost, 2) }}</td>
                                                <td>${{ number_format($productPurchase->discount, 2) }}</td>
                                                <td>${{ number_format($productPurchase->tax, 2) }}</td>
                                                <td>${{ number_format($productPurchase->total, 2) }}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
