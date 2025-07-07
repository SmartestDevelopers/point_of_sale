@extends('layouts.front')

@section('content')
<div class="subheader py-2 py-lg-6 subheader-solid">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Purchases</li>
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
                            <h3 class="card-label mb-0 font-weight-bold text-body">Purchase List</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('purchases.create') }}" class="btn btn-success font-weight-bold">
                                <i class="fas fa-plus"></i> Add Purchase
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        
                        <div class="table-responsive">
                            <table class="table table-head-custom table-vertical-center">
                                <thead>
                                    <tr class="text-left">
                                        <th>Reference No</th>
                                        <th>Supplier</th>
                                        <th>Warehouse</th>
                                        <th>Status</th>
                                        <th>Grand Total</th>
                                        <th>Paid Amount</th>
                                        <th>Payment Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($purchases as $purchase)
                                    <tr>
                                        <td>{{ $purchase->reference_no }}</td>
                                        <td>{{ $purchase->supplier_name ?? 'N/A' }}</td>
                                        <td>{{ $purchase->warehouse_name }}</td>
                                        <td>
                                            @if($purchase->status == 1)
                                                <span class="badge badge-success">Received</span>
                                            @elseif($purchase->status == 2)
                                                <span class="badge badge-warning">Pending</span>
                                            @else
                                                <span class="badge badge-danger">Ordered</span>
                                            @endif
                                        </td>
                                        <td>${{ number_format($purchase->grand_total, 2) }}</td>
                                        <td>${{ number_format($purchase->paid_amount, 2) }}</td>
                                        <td>
                                            @if($purchase->payment_status == 1)
                                                <span class="badge badge-success">Paid</span>
                                            @elseif($purchase->payment_status == 2)
                                                <span class="badge badge-warning">Partial</span>
                                            @else
                                                <span class="badge badge-danger">Due</span>
                                            @endif
                                        </td>
                                        <td>{{ date('M d, Y', strtotime($purchase->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('purchases.show', $purchase->id) }}" class="btn btn-sm btn-info">View</a>
                                            <a href="{{ route('purchases.edit', $purchase->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No purchases found</td>
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
@endsection
