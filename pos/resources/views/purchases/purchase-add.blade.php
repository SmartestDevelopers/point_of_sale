@extends('layouts.front')
@section('content')
<div class="container-fluid addproduct-main">
    <div class="row">
        <div class="col-lg-12 col-xl-12 px-4">
            <div class="card card-custom gutter-b bg-transparent shadow-none border-0">
                <div class="card-header align-items-center border-bottom-dark px-0">
                    <div class="card-title mb-0">
                        <h3 class="card-label mb-0 font-weight-bold text-body">Add Purchase</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-12 px-4">
            <div class="card card-custom gutter-b bg-white border-0">
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="text-body">Select Quotation(if any)</label>
                                <fieldset class="form-group mb-3">
                                    <select class="js-example-basic-single js-states form-control bg-transparent" name="state">
                                        <option value="AL">5522-655</option>
                                        <option value="WY">00151-444</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <label class="text-body">Select Warehouse</label>
                                <fieldset class="form-group mb-3">
                                    <select class="js-example-basic-single js-states form-control bg-transparent" name="state">
                                        <option value="AL">Warehouse 1</option>
                                        <option value="WY">Warehouse 2</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <label class="text-body">Select Supplier</label>
                                <fieldset class="form-group mb-3">
                                    <select class="js-example-basic-single js-states form-control bg-transparent" name="state">
                                        <option value="AL">Supplier a</option>
                                        <option value="WY">Supplier b</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <label class="text-body">Purchase Status</label>
                                <fieldset class="form-group mb-3">
                                    <select class="js-example-basic-single js-states form-control bg-transparent" name="state">
                                        <option value="AL">Recieved</option>
                                        <option value="WY">Partial</option>
                                        <option value="WY">Pending</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <label class="text-body">Attach Document</label>
                                <fieldset class="form-group mb-3 border-dark rounded p-1">
                                    <input type="file" class="d-block w-100" id="img" name="img" accept="image/*">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <label class="text-body">Shupping Cost</label>
                                <fieldset class="form-group mb-3">
                                    <input type="text" name="text" value="$50" class="form-control bg-white">
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-12 px-4">
            <div class="card card-custom gutter-b bg-white border-0">
                <div class="card-body overflow-hidden">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="text-body">Select Product</label>
                            <fieldset class="form-group mb-3 d-flex">
                                <input type="text" name="text" class="form-control bg-white" value="Polo Sweatshirt">
                                <a href="javascript:void(0)" class="btn-secondary btn ms-2 white pt-1 pb-1 d-flex align-items-center justify-content-center">ADD</a>
                            </fieldset>
                        </div>
                        <div class="col-12 px-4">
                            <div class="table-responsive">
                                <table class="table table-striped text-body">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Quantity</th>
                                            <th>Recieved</th>
                                            <th>Cost</th>
                                            <th>Discount</th>
                                            <th>Tax Type</th>
                                            <th>Tax</th>
                                            <th>Subtotal</th>
                                            <th class="text-end">Clear</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mackbook</td>
                                            <td>2500</td>
                                            <td class="text-center"><input type="number" class="form-control" value="2"></td>
                                            <td class="text-center"><input type="number" class="form-control" value="2"></td>
                                            <td class="text-center"><input type="text" class="form-control" value="$200"></td>
                                            <td><input type="text" class="form-control" value="20%"></td>
                                            <td><select class="js-example-basic-single js-states form-control bg-transparent"><option value="AL">vat@10</option><option value="WY">vat@15</option></select></td>
                                            <td>15</td>
                                            <td>192.00</td>
                                            <td class="text-right"><a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <!-- ...more rows as needed... -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th></th>
                                            <th>1</th>
                                            <th></th>
                                            <th></th>
                                            <th>0.00</th>
                                            <th></th>
                                            <th>25.04</th>
                                            <th>192.0</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
