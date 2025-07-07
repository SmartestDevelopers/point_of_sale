@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sales') }}</div>

                <div class="card-body">
                    <a href="{{ route('sales.create') }}" class="btn btn-primary">Add Sale</a>
                    <br /><br />
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Reference No</th>
                                <th>Customer</th>
                                <th>Warehouse</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $sale)
                                <tr>
                                    <td>{{ $sale->reference_no }}</td>
                                    <td>{{ $sale->customer->name }}</td>
                                    <td>{{ $sale->warehouse->name }}</td>
                                    <td>{{ $sale->grand_total }}</td>
                                    <td>{{ $sale->sale_status }}</td>
                                    <td>
                                        <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
@endsection
