@extends('layouts.front')

@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-header align-items-center border-0">
                        <div class="card-title mb-0">
                            <h3 class="card-label mb-0 font-weight-bold text-body">Return Sales List</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('return-sales.create') }}" class="btn btn-primary font-weight-bold">
                                <i class="fas fa-plus"></i> Add Return Sale
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
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Reference No</th>
                                        <th>Customer</th>
                                        <th>Warehouse</th>
                                        <th>Grand Total</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($returnSales as $sale)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sale->reference_no }}</td>
                                            <td>{{ $sale->customer_name ?? '-' }}</td>
                                            <td>{{ $sale->warehouse_name ?? '-' }}</td>
                                            <td>{{ number_format($sale->grand_total, 2) }}</td>
                                            <td>{{ $sale->created_at ? date('Y-m-d', strtotime($sale->created_at)) : '-' }}</td>
                                            <td>
                                                <a href="{{ route('return-sales.show', $sale->id) }}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{ route('return-sales.edit', $sale->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('return-sales.destroy', $sale->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No return sales found.</td>
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
