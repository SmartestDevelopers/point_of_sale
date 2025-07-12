@extends('layouts.front')

@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-header align-items-center border-0">
                        <div class="card-title mb-0">
                            <h3 class="card-label mb-0 font-weight-bold text-body">Edit Stock Adjustment</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('stocks.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('stocks.update', $stock->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="reference_no">Reference No *</label>
                                        <input type="text" class="form-control" id="reference_no" name="reference_no" 
                                               value="{{ old('reference_no', $stock->reference_no) }}" required>
                                        @error('reference_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="product_id">Product *</label>
                                        <select class="form-control" id="product_id" name="product_id" required>
                                            <option value="">Select Product</option>
                                            @foreach($products as $product)
                                                <option value="{{ $product->id }}" {{ old('product_id', $stock->product_id) == $product->id ? 'selected' : '' }}>
                                                    {{ $product->product_name }} (Stock: {{ $product->product_stock ?? 0 }})
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('product_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="warehouse_id">Warehouse *</label>
                                        <select class="form-control" id="warehouse_id" name="warehouse_id" required>
                                            <option value="">Select Warehouse</option>
                                            @foreach($warehouses as $warehouse)
                                                <option value="{{ $warehouse->id }}" {{ old('warehouse_id', $stock->warehouse_id) == $warehouse->id ? 'selected' : '' }}>
                                                    {{ $warehouse->warehouse }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('warehouse_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="unit_id">Unit *</label>
                                        <select class="form-control" id="unit_id" name="unit_id" required>
                                            <option value="">Select Unit</option>
                                            @foreach($units as $unit)
                                                <option value="{{ $unit->id }}" {{ old('unit_id', $stock->unit_id) == $unit->id ? 'selected' : '' }}>
                                                    {{ $unit->unit_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('unit_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="quantity">Quantity *</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" 
                                               value="{{ old('quantity', $stock->quantity) }}" required>
                                        @error('quantity')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="adjustment_type">Adjustment Type *</label>
                                        <select class="form-control" id="adjustment_type" name="adjustment_type" required>
                                            <option value="">Select Type</option>
                                            <option value="add" {{ old('adjustment_type', $stock->adjustment_type) == 'add' ? 'selected' : '' }}>Add</option>
                                            <option value="subtract" {{ old('adjustment_type', $stock->adjustment_type) == 'subtract' ? 'selected' : '' }}>Subtract</option>
                                        </select>
                                        @error('adjustment_type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <textarea class="form-control" id="note" name="note" rows="4">{{ old('note', $stock->note) }}</textarea>
                                        @error('note')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary font-weight-bold">
                                    <i class="fas fa-save"></i> Update Stock Adjustment
                                </button>
                                <a href="{{ route('stocks.index') }}" class="btn btn-secondary font-weight-bold">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection