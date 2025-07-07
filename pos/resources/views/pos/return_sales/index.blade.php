@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Return Sales') }}</div>

                <div class="card-body">
                    <a href="{{ route('return-sales.create') }}" class="btn btn-primary">Add Return Sale</a>
                    <br /><br />
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Reference No</th>
                                <th>Customer</th>
                                <th>Warehouse</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($return_sales as $return_sale)
                                <tr>
                                    <td>{{ $return_sale->reference_no }}</td>
                                    <td>{{ $return_sale->customer->name }}</td>
                                    <td>{{ $return_sale->warehouse->name }}</td>
                                    <td>{{ $return_sale->grand_total }}</td>
                                    <td>
                                        <a href="{{ route('return-sales.show', $return_sale->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('return-sales.edit', $return_sale->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('return-sales.destroy', $return_sale->id) }}" method="POST" style="display: inline-block;">
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
