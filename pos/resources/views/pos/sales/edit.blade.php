@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Sale') }}</div>

                <div class="card-body">
                    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="customer_id">Customer</label>
                            <select name="customer_id" id="customer_id" class="form-control">
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}" {{ $sale->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="warehouse_id">Warehouse</label>
                            <select name="warehouse_id" id="warehouse_id" class="form-control">
                                @foreach ($warehouses as $warehouse)
                                    <option value="{{ $warehouse->id }}" {{ $sale->warehouse_id == $warehouse->id ? 'selected' : '' }}>{{ $warehouse->name }}</option>
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
                                    @foreach ($sale->productSales as $key => $productSale)
                                        <tr>
                                            <td>
                                                <select name="products[{{ $key }}][product_id]" class="form-control">
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}" {{ $productSale->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="number" name="products[{{ $key }}][qty]" class="form-control" value="{{ $productSale->qty }}"></td>
                                            <td><input type="number" name="products[{{ $key }}][net_unit_price]" class="form-control" value="{{ $productSale->net_unit_price }}"></td>
                                            <td><input type="number" name="products[{{ $key }}][total]" class="form-control" value="{{ $productSale->total }}"></td>
                                        </tr>
                                    @endforeach
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
