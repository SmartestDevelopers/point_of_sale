@extends('layouts.front')

@section('content')
<div class="subheader py-2 py-lg-6 subheader-solid">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-0 px-0 py-2">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">Sales</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Sale</li>
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
                            <h3 class="card-label mb-0 font-weight-bold text-body">Add Sale</h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ route('sales.index') }}" class="btn btn-secondary font-weight-bold">
                                <i class="fas fa-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        
                        <form action="{{ route('sales.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reference_no">Reference No *</label>
                                        <input type="text" class="form-control" id="reference_no" name="reference_no" 
                                               value="{{ old('reference_no', 'SALE-' . date('YmdHis')) }}" required>
                                        @error('reference_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer_id">Customer *</label>
                                        <select class="form-control" id="customer_id" name="customer_id" required>
                                            <option value="">Select Customer</option>
                                            @foreach($customers as $customer)
                                                <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                                    {{ $customer->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('customer_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="biller_id">Biller ID *</label>
                                        <input type="number" class="form-control" id="biller_id" name="biller_id" 
                                               value="{{ old('biller_id', 1) }}" required>
                                        @error('biller_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sale_status">Sale Status *</label>
                                        <select class="form-control" id="sale_status" name="sale_status" required>
                                            <option value="0" {{ old('sale_status') == '0' ? 'selected' : '' }}>Draft</option>
                                            <option value="1" {{ old('sale_status') == '1' ? 'selected' : '' }}>Completed</option>
                                            <option value="2" {{ old('sale_status') == '2' ? 'selected' : '' }}>Pending</option>
                                        </select>
                                        @error('sale_status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="grand_total">Grand Total *</label>
                                        <input type="number" step="0.01" class="form-control" id="grand_total" name="grand_total" 
                                               value="{{ old('grand_total', 0) }}" required>
                                        @error('grand_total')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="paid_amount">Paid Amount</label>
                                        <input type="number" step="0.01" class="form-control" id="paid_amount" name="paid_amount" 
                                               value="{{ old('paid_amount', 0) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_price">Total Price</label>
                                        <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" 
                                               value="{{ old('total_price', 0) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shipping_cost">Shipping Cost</label>
                                        <input type="number" step="0.01" class="form-control" id="shipping_cost" name="shipping_cost" 
                                               value="{{ old('shipping_cost', 0) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sale_note">Sale Note</label>
                                        <textarea class="form-control" id="sale_note" name="sale_note" rows="3">{{ old('sale_note') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="staff_note">Staff Note</label>
                                        <textarea class="form-control" id="staff_note" name="staff_note" rows="3">{{ old('staff_note') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Products Section -->
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h5>Products</h5>
                                </div>
                                <div class="card-body">
                                    <div id="products-container">
                                        <div class="product-row row mb-3">
                                            <div class="col-md-4">
                                                <select class="form-control" name="products[0][product_id]" required>
                                                    <option value="">Select Product</option>
                                                    @foreach($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control" name="products[0][qty]" placeholder="Quantity" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control" name="products[0][net_unit_price]" placeholder="Unit Price" required>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" step="0.01" class="form-control" name="products[0][total]" placeholder="Total" required>
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
                                    <i class="fas fa-save"></i> Save Sale
                                </button>
                                <a href="{{ route('sales.index') }}" class="btn btn-secondary font-weight-bold">Cancel</a>
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
            <input type="number" step="0.01" class="form-control" name="products[${productIndex}][net_unit_price]" placeholder="Unit Price" required>
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
