@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add Return Sale') }}</div>

                <div class="card-body">
                    <form action="{{ route('return-sales.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="customer_id">Customer</label>
                            <select name="customer_id" id="customer_id" class="form-control">
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="warehouse_id">Warehouse</label>
                            <select name="warehouse_id" id="warehouse_id" class="form-control">
                                @foreach ($warehouses as $warehouse)
                                    <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="products">Products</label>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select name="products[0][product_id]" class="form-control">
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input type="number" name="products[0][qty]" class="form-control"></td>
                                        <td><input type="number" name="products[0][net_unit_price]" class="form-control"></td>
                                        <td><input type="number" name="products[0][total]" class="form-control"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
