@extends('layouts.front')

@section('content')
<div class="subheader py-2 py-lg-6 subheader-solid">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Purchases</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Purchase</li>
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
                            <h3 class="card-label mb-0 font-weight-bold text-body">Edit Purchase - {{ $purchase->reference_no }}</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('purchases.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        
                        <form action="{{ route('purchases.update', $purchase->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reference_no">Reference No *</label>
                                        <input type="text" class="form-control" id="reference_no" name="reference_no" 
                                               value="{{ old('reference_no', $purchase->reference_no) }}" required>
                                        @error('reference_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="warehouse_id">Warehouse *</label>
                                        <select class="form-control" id="warehouse_id" name="warehouse_id" required>
                                            <option value="">Select Warehouse</option>
                                            @foreach($warehouses as $warehouse)
                                                <option value="{{ $warehouse->id }}" 
                                                    {{ old('warehouse_id', $purchase->warehouse_id) == $warehouse->id ? 'selected' : '' }}>
                                                    {{ $warehouse->warehouse }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('warehouse_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supplier_id">Supplier</label>
                                        <select class="form-control" id="supplier_id" name="supplier_id">
                                            <option value="">Select Supplier</option>
                                            @foreach($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}" 
                                                    {{ old('supplier_id', $purchase->supplier_id) == $supplier->id ? 'selected' : '' }}>
                                                    {{ $supplier->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status *</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="0" {{ old('status', $purchase->status) == '0' ? 'selected' : '' }}>Ordered</option>
                                            <option value="1" {{ old('status', $purchase->status) == '1' ? 'selected' : '' }}>Received</option>
                                            <option value="2" {{ old('status', $purchase->status) == '2' ? 'selected' : '' }}>Pending</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="payment_status">Payment Status *</label>
                                        <select class="form-control" id="payment_status" name="payment_status" required>
                                            <option value="0" {{ old('payment_status', $purchase->payment_status) == '0' ? 'selected' : '' }}>Due</option>
                                            <option value="1" {{ old('payment_status', $purchase->payment_status) == '1' ? 'selected' : '' }}>Paid</option>
                                            <option value="2" {{ old('payment_status', $purchase->payment_status) == '2' ? 'selected' : '' }}>Partial</option>
                                        </select>
                                        @error('payment_status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="grand_total">Grand Total *</label>
                                        <input type="number" step="0.01" class="form-control" id="grand_total" name="grand_total" 
                                               value="{{ old('grand_total', $purchase->grand_total) }}" required>
                                        @error('grand_total')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="paid_amount">Paid Amount</label>
                                        <input type="number" step="0.01" class="form-control" id="paid_amount" name="paid_amount" 
                                               value="{{ old('paid_amount', $purchase->paid_amount) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_cost">Total Cost</label>
                                        <input type="number" step="0.01" class="form-control" id="total_cost" name="total_cost" 
                                               value="{{ old('total_cost', $purchase->total_cost) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="note">Note</label>
                                <textarea class="form-control" id="note" name="note" rows="3">{{ old('note', $purchase->note) }}</textarea>
                            </div>

                            <!-- Products Section -->
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h5>Products</h5>
                                </div>
                                <div class="card-body">
                                    <div id="products-container">
                                        @foreach($productPurchases as $index => $productPurchase)
                                        <div class="product-row row mb-3">
                                            <div class="col-md-4">
                                                <select class="form-control" name="products[{{ $index }}][product_id]" required>
                                                    <option value="">Select Product</option>
                                                    @foreach($products as $product)
                                                        <option value="{{ $product->id }}" 
                                                            {{ $productPurchase->product_id == $product->id ? 'selected' : '' }}>
                                                            {{ $product->product_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control" name="products[{{ $index }}][qty]" 
                                                       placeholder="Quantity" value="{{ $productPurchase->qty }}" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control" name="products[{{ $index }}][net_unit_cost]" 
                                                       placeholder="Unit Cost" value="{{ $productPurchase->net_unit_cost }}" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control" name="products[{{ $index }}][total]" 
                                                       placeholder="Total" value="{{ $productPurchase->total }}" required>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger remove-product">Remove</button>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-success" id="add-product">Add Product</button>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary font-weight-bold">
                                    <i class="fas fa-save"></i> Update Purchase
                                </button>
                                <a href="{{ route('purchases.index') }}" class="btn btn-secondary font-weight-bold">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let productIndex = {{ count($productPurchases) }};

document.getElementById('add-product').addEventListener('click', function() {
    const container = document.getElementById('products-container');
    const newRow = document.createElement('div');
    newRow.className = 'product-row row mb-3';
    newRow.innerHTML = `
        <div class="col-md-4">
            <select class="form-control" name="products[${productIndex}][product_id]" required>
                <option value="">Select Product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <input type="number" class="form-control" name="products[${productIndex}][qty]" placeholder="Quantity" required>
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" class="form-control" name="products[${productIndex}][net_unit_cost]" placeholder="Unit Cost" required>
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" class="form-control" name="products[${productIndex}][total]" placeholder="Total" required>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger remove-product">Remove</button>
        </div>
    `;
    container.appendChild(newRow);
    productIndex++;
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-product')) {
        e.target.closest('.product-row').remove();
    }
});
</script>
@endsection
