@extends('layouts.front')

@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-header align-items-center border-0">
                        <div class="card-title mb-0">
                            <h3 class="card-label mb-0 font-weight-bold text-body">Add Return Purchase</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('return-purchases.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        
                        <form action="{{ route('return-purchases.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="reference_no">Reference No *</label>
                                        <input type="text" class="form-control" id="reference_no" name="reference_no" 
                                               value="{{ old('reference_no', 'PUR-' . date('is')) }}" required>
                                        @error('reference_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="warehouse_id">Warehouse *</label>
                                        <select class="form-control" id="warehouse_id" name="warehouse_id" required>
                                            <option value="">Select Warehouse</option>
                                            @foreach($warehouses as $warehouse)
                                                <option value="{{ $warehouse->id }}" {{ old('warehouse_id') == $warehouse->id ? 'selected' : '' }}>
                                                    {{ $warehouse->warehouse }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('warehouse_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="supplier_id">Supplier</label>
                                        <select class="form-control" id="supplier_id" name="supplier_id">
                                            <option value="">Select Supplier</option>
                                            @foreach($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                                                    {{ $supplier->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="status">Status *</label>
                                        <select class="form-control" id="status" name="status" required>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ordered</option>
                                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Received</option>
                                            <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>Pending</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="payment_status">Payment Status *</label>
                                        <select class="form-control" id="payment_status" name="payment_status" required>
                                            <option value="0" {{ old('payment_status') == '0' ? 'selected' : '' }}>Due</option>
                                            <option value="1" {{ old('payment_status') == '1' ? 'selected' : '' }}>Paid</option>
                                            <option value="2" {{ old('payment_status') == '2' ? 'selected' : '' }}>Partial</option>
                                        </select>
                                        @error('payment_status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="grand_total">Grand Total *</label>
                                        <input type="number" step="0.01" class="form-control" id="grand_total" name="grand_total" 
                                               value="{{ old('grand_total', 0) }}" readonly>
                                        @error('grand_total')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="paid_amount">Paid Amount</label>
                                        <input type="number" step="0.01" class="form-control" id="paid_amount" name="paid_amount" 
                                               value="{{ old('paid_amount', 0) }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="total_cost">Total Cost</label>
                                        <input type="number" step="0.01" class="form-control" id="total_cost" name="total_cost" 
                                               value="{{ old('total_cost', 0) }}">
                                    </div>
                                </div>
                            </div>

                            <!-- Products Section -->
                            <div class="card mt-1">
                                <div class="card-body">
                                    <div id="products-container">
                                        <div class="product-row row mb-3">
                                            <div class="col-md-3">
                                                <select class="form-control" name="products[0][product_id]" required>
                                                    <option value="">Select Product</option>
                                                    @foreach($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->product_name }} (Stock: {{ $product->product_stock ?? 0 }})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <select class="form-control" name="products[0][purchase_unit_id]" required>
                                                    <option value="">Select Unit</option>
                                                    @foreach($units as $unit)
                                                        <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control qty" name="products[0][qty]" placeholder="Quantity" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control net_unit_cost" name="products[0][net_unit_cost]" placeholder="Unit Cost" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control total" name="products[0][total]" placeholder="Total" readonly>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="button" class="btn btn-danger remove-product">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success" id="add-product">Add Product</button>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary font-weight-bold" id="save-purchase-returns">
                                    <i class="fas fa-save"></i> Save Purchase Returns
                                </button>
                                <a href="{{ route('return-purchases.index') }}" class="btn btn-secondary font-weight-bold">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let productIndex = 1;

function updateTotals() {
    let grandTotal = 0;
    document.querySelectorAll('.product-row').forEach(row => {
        const qty = parseFloat(row.querySelector('.qty').value) || 0;
        const unitCost = parseFloat(row.querySelector('.net_unit_cost').value) || 0;
        const total = qty * unitCost;
        row.querySelector('.total').value = total.toFixed(2);
        grandTotal += total;
    });
    document.getElementById('grand_total').value = grandTotal.toFixed(2);
}

document.getElementById('add-product').addEventListener('click', function() {
    const container = document.getElementById('products-container');
    const newRow = document.createElement('div');
    newRow.className = 'product-row row mb-3';
    newRow.innerHTML = `
        <div class="col-md-3">
            <select class="form-control" name="products[${productIndex}][product_id]" required>
                <option value="">Select Product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }} (Stock: {{ $product->product_stock ?? 0 }})</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <select class="form-control" name="products[${productIndex}][purchase_unit_id]" required>
                <option value="">Select Unit</option>
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <input type="number" class="form-control qty" name="products[${productIndex}][qty]" placeholder="Quantity" required>
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" class="form-control net_unit_cost" name="products[${productIndex}][net_unit_cost]" placeholder="Unit Cost" required>
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" class="form-control total" name="products[${productIndex}][total]" placeholder="Total" readonly>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-danger remove-product">Remove</button>
        </div>
    `;
    container.appendChild(newRow);
    productIndex++;
    
    newRow.querySelector('.qty').addEventListener('input', updateTotals);
    newRow.querySelector('.net_unit_cost').addEventListener('input', updateTotals);
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-product')) {
        e.target.closest('.product-row').remove();
        updateTotals();
    }
});

document.getElementById('save-purchase-returns').addEventListener('click', function(e) {
    const productRows = document.querySelectorAll('.product-row');
    if (productRows.length === 0) {
        e.preventDefault();
        alert('Please add at least one product to save the return purchase.');
    }
});

document.querySelectorAll('.qty, .net_unit_cost').forEach(input => {
    input.addEventListener('input', updateTotals);
});

document.addEventListener('DOMContentLoaded', updateTotals);
</script>
@endsection