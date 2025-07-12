@extends('layouts.front')

@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-header align-items-center border-0">
                        <div class="card-title mb-0">
                            <h3 class="card-label mb-0 font-weight-bold text-body">Return Purchases</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('return-purchases.create') }}" class="btn btn-primary font-weight-bold">
                                <i class="fas fa-plus"></i> Add Return Purchase
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
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Reference No</th>
                                    <th>Supplier</th>
                                    <th>Warehouse</th>
                                    <th>Total Qty</th>
                                    <th>Grand Total</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($returnPurchases as $returnPurchase)
                                    <tr>
                                        <td>{{ $returnPurchase->reference_no }}</td>
                                        <td>{{ $returnPurchase->supplier_name ?? 'N/A' }}</td>
                                        <td>{{ $returnPurchase->warehouse_name }}</td>
                                        <td>{{ $returnPurchase->total_qty }}</td>
                                        <td>{{ number_format($returnPurchase->grand_total, 2) }}</td>
                                        <td>{{ $returnPurchase->user_name }}</td>
                                        <td>{{ $returnPurchase->created_at }}</td>
                                        <td>
                                            <a href="{{ route('return-purchases.show', $returnPurchase->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a href="{{ route('return-purchases.edit', $returnPurchase->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('return-purchases.destroy', $returnPurchase->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection