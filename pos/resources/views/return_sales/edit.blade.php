@extends('layouts.front')

@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                    <div class="card-header align-items-center border-0">
                        <div class="card-title mb-0">
                            <h3 class="card-label mb-0 font-weight-bold text-body">Edit Return Sale - {{ $returnSale->reference_no }}</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('return-sales.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        
                        <form action="{{ route('return-sales.update', $returnSale->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="reference_no">Reference No *</label>
                                        <input type="text" class="form-control" id="reference_no" name="reference_no" 
                                               value="{{ old('reference_no', $returnSale->reference_no) }}" required>
                                        @error('reference_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="customer_id">Customer *</label>
                                        <select class="form-control" id="customer_id" name="customer_id" required>
                                            <option value="">Select Customer</option>
                                            @foreach($customers as $customer)
                                                <option value="{{ $customer->id }}" {{ old('customer_id', $returnSale->customer_id) == $customer->id ? 'selected' : '' }}>
                                                    {{ $customer->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('customer_id')
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
                                                <option value="{{ $warehouse->id }}" {{ old('warehouse_id', $returnSale->warehouse_id) == $warehouse->id ? 'selected' : '' }}>
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
                                        <label for="biller_id">Biller ID *</label>
                                        <input type="number" class="form-control" id="biller_id" name="biller_id" 
                                               value="{{ old('biller_id', $returnSale->biller_id) }}" required>
                                        @error('biller_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="grand_total">Grand Total *</label>
                                        <input type="number" step="0.01" class="form-control" id="grand_total" name="grand_total" 
                                               value="{{ old('grand_total', $returnSale->grand_total) }}" required readonly>
                                        @error('grand_total')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="total_price">Total Price</label>
                                        <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" 
                                               value="{{ old('total_price', $returnSale->total_price) }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="shipping_cost">Shipping Cost</label>
                                        <input type="number" step="0.01" class="form-control" id="shipping_cost" name="shipping_cost" 
                                               value="{{ old('shipping_cost', $returnSale->shipping_cost) }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="total_discount">Total Discount</label>
                                        <input type="number" step="0.01" class="form-control" id="total_discount" name="total_discount" 
                                               value="{{ old('total_discount', $returnSale->total_discount) }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="total_tax">Total Tax</label>
                                        <input type="number" step="0.01" class="form-control" id="total_tax" name="total_tax" 
                                               value="{{ old('total_tax', $returnSale->total_tax) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="order_tax_rate">Order Tax Rate (%)</label>
                                        <input type="number" step="0.01" class="form-control" id="order_tax_rate" name="order_tax_rate" 
                                               value="{{ old('order_tax_rate', $returnSale->order_tax_rate) }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="order_tax">Order Tax</label>
                                        <input type="number" step="0.01" class="form-control" id="order_tax" name="order_tax" 
                                               value="{{ old('order_tax', $returnSale->order_tax) }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="order_discount">Order Discount</label>
                                        <input type="number" step="0.01" class="form-control" id="order_discount" name="order_discount" 
                                               value="{{ old('order_discount', $returnSale->order_discount) }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="document">Document</label>
                                        <input type="file" class="form-control" id="document" name="document">
                                        @if($returnSale->document)
                                            <small>Current: <a href="{{ $returnSale->document }}" target="_blank">View Document</a></small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="return_note">Return Note</label>
                                        <textarea class="form-control" id="return_note" name="return_note">{{ old('return_note', $returnSale->return_note) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="staff_note">Staff Note</label>
                                        <textarea class="form-control" id="staff_note" name="staff_note">{{ old('staff_note', $returnSale->staff_note) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Products Section -->
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div id="products-container">
                                        @foreach($productReturnSales as $index => $productSale)
                                        <div class="product-row row mb-3">
                                            <div class="col-md-3">
                                                <select class="form-control" name="products[{{ $index }}][product_id]" required>
                                                    <option value="">Select Product</option>
                                                    @foreach($products as $product)
                                                        <option value="{{ $product->id }}" {{ $productSale->product_id == $product->id ? 'selected' : '' }}>
                                                            {{ $product->product_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <select class="form-control" name="products[{{ $index }}][sale_unit_id]" required>
                                                    <option value="">Select Unit</option>
                                                    @foreach($units as $unit)
                                                        <option value="{{ $unit->id }}" {{ $productSale->sale_unit_id == $unit->id ? 'selected' : '' }}>
                                                            {{ $unit->unit_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control qty" name="products[{{ $index }}][qty]" 
                                                       value="{{ $productSale->qty }}" placeholder="Quantity" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control unit-price" name="products[{{ $index }}][net_unit_price]" 
                                                       value="{{ $productSale->net_unit_price }}" placeholder="Unit Price" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control discount" name="products[{{ $index }}][discount]" 
                                                       value="{{ $productSale->discount }}" placeholder="Discount">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control tax" name="products[{{ $index }}][tax]" 
                                                       value="{{ $productSale->tax }}" placeholder="Tax">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control total" name="products[{{ $index }}][total]" 
                                                       value="{{ $productSale->total }}" placeholder="Total" readonly>
                                            </div>
                                            <div class="col-mm d-1">
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
                                    <i class="fas fa-save"></i> Update Return Sale
                                </button>
                                <a href="{{ route('return-sales.index') }}" class="btn btn-secondary font-weight-bold">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let productIndex = {{ count($productReturnSales) }};

document.getElementById('add-product').addEventListener('click', function() {
    const container = document.getElementById('products-container');
    const newRow = document.createElement('div');
    newRow.className = 'product-row row mb-3';
    newRow.innerHTML = `
        <div class="col-md-3">
            <select class="form-control" name="products[${productIndex}][product_id]" required>
                <option value="">Select Product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <select class="form-control" name="products[${productIndex}][sale_unit_id]" required>
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
            <input type="number" step="0.01" class="form-control unit-price" name="products[${productIndex}][net_unit_price]" placeholder="Unit Price" required>
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" class="form-control discount" name="products[${productIndex}][discount]" placeholder="Discount" value="0">
        </div>
        <div class="col-md-2">
            <input type="number" step="0.01" class="form-control tax" name="products[${productIndex}][tax]" placeholder="Tax" value="0">
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
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-product')) {
        e.target.closest('.product-row').remove();
        updateTotals();
    }
});

document.addEventListener('input', function(e) {
    if (e.target.classList.contains('qty') || e.target.classList.contains('unit-price') || 
        e.target.classList.contains('discount') || e.target.classList.contains('tax')) {
        const row = e.target.closest('.product-row');
        const qty = parseFloat(row.querySelector('.qty').value) || 0;
        const unitPrice = parseFloat(row.querySelector('.unit-price').value) || 0;
        const discount = parseFloat(row.querySelector('.discount').value) || 0;
        const tax = parseFloat(row.querySelector('.tax').value) || 0;
        const totalInput = row.querySelector('.total');
        totalInput.value = ((qty * unitPrice) - discount + tax).toFixed(2);
        updateTotals();
    }
});

function updateTotals() {
    const rows = document.querySelectorAll('.product-row');
    let totalPrice = 0;
    let totalDiscount = 0;
    let totalTax = 0;
    
    rows.forEach(row => {
        const qty = parseFloat(row.querySelector('.qty').value) || 0;
        const unitPrice = parseFloat(row.querySelector('.unit-price').value) || 0;
        const discount = parseFloat(row.querySelector('.discount').value) || 0;
        const tax = parseFloat(row.querySelector('.tax').value) || 0;
        totalPrice += qty * unitPrice;
        totalDiscount += discount;
        totalTax += tax;
    });

    const orderTaxRate = parseFloat(document.getElementById('order_tax_rate').value) || 0;
    const orderDiscount = parseFloat(document.getElementById('order_discount').value) || 0;
    const shippingCost = parseFloat(document.getElementById('shipping_cost').value) || 0;
    
    const orderTax = (totalPrice * (orderTaxRate / 100)).toFixed(2);
    document.getElementById('order_tax').value = orderTax;
    document.getElementById 'total_price').value = totalPrice.toFixed(2);
    document.getElementById('total_discount').value = totalDiscount.toFixed(2);
    document.getElementById('total_tax').value = totalTax.toFixed(2);
    document.getElementById('grand_total').value = (totalPrice - totalDiscount + totalTax + parseFloat(orderTax) + shippingCost - orderDiscount).toFixed(2);
}
</script>
@endsection