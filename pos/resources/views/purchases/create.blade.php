@extends('layouts.front')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-header align-items-center border-0">
                        <div class="card-title mb-0">
                            <h3 class="card-label mb-0 font-weight-bold text-body">Add Purchase</h3>
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
                        
                        <form action="{{ route('purchases.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="reference_no">Reference No *</label>
                                        <input type="text" class="form-control" id="reference_no" name="reference_no" 
                                               value="{{ old('reference_no', 'PUR-' . date('YmdHis')) }}" required>
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
                                               value="{{ old('grand_total', 0) }}" required>
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

                            <!-- Simple Products Section -->
                            <div class="card mt-1">

                                <div class="card-body">
                                    <div id="products-container">
                                        <div class="product-row row mb-3">
                                            <div class="col-md-4">
                                                <select class="form-control" name="products[0][product_variation_id]" required>
                                                    <option value="">Select Product Variation</option>
                                                    @foreach($productVariations as $variation)
                                                        <option value="{{ $variation->id }}">
                                                            {{ $variation->options }} - {{ $variation->values }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control qty-input" name="products[0][qty]" placeholder="Quantity" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control unit-cost-input" name="products[0][net_unit_cost]" placeholder="Unit Cost" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control total-input" name="products[0][total]" placeholder="Total" required readonly>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger remove-product">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success" id="add-product">Add Product</button>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary font-weight-bold">
                                    <i class="fas fa-save"></i> Save Purchase
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
let productIndex = 1;

const productVariationOptions = `@foreach($productVariations as $variation)<option value="{{ $variation->id }}">{{ $variation->options }} - {{ $variation->values }}</option>@endforeach`;

document.getElementById('add-product').addEventListener('click', function() {
    const container = document.getElementById('products-container');
    const newRow = document.createElement('div');
    newRow.className = 'product-row row mb-3';
    newRow.innerHTML = `
        <div class="col-md-4">
            <select class="form-control" name="products[${productIndex}][product_variation_id]" required>
                <option value="">Select Product Variation</option>
                ${productVariationOptions}
            </select>
        </div>
        <div class="col-md-2">
            <input type="number" class="form-control qty-input" name="products[${productIndex}][qty]" placeholder="Quantity" required>
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" class="form-control unit-cost-input" name="products[${productIndex}][net_unit_cost]" placeholder="Unit Cost" required>
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" class="form-control total-input" name="products[${productIndex}][total]" placeholder="Total" required readonly>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger remove-product">Remove</button>
        </div>
    `;
    container.appendChild(newRow);
    productIndex++;
});

function updateTotal(row) {
    const qty = parseFloat(row.querySelector('.qty-input').value) || 0;
    const unitCost = parseFloat(row.querySelector('.unit-cost-input').value) || 0;
    row.querySelector('.total-input').value = (qty * unitCost).toFixed(2);
}

document.addEventListener('input', function(e) {
    if (e.target.classList.contains('qty-input') || e.target.classList.contains('unit-cost-input')) {
        const row = e.target.closest('.product-row');
        updateTotal(row);
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Initial row calculation
    document.querySelectorAll('.product-row').forEach(function(row) {
        row.querySelector('.qty-input').addEventListener('input', function() { updateTotal(row); });
        row.querySelector('.unit-cost-input').addEventListener('input', function() { updateTotal(row); });
    });
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-product')) {
        e.target.closest('.product-row').remove();
    }
});
</script>
@endsection
