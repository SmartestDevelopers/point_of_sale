@extends('layouts.front')

@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-4">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 px-4">
                        <div class="card card-custom gutter-b bg-transparent shadow-none border-0">
                            <div class="card-header align-items-center border-bottom-dark px-0">
                                <div class="card-title mb-0">
                                    <h3 class="card-label mb-0 font-weight-bold text-body">Add Supplier</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-4">
                        <div class="card card-custom gutter-b bg-white border-0">
                            <div class="card-body">
                                <form action="{{ url('/submit-supplier') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="images">Image</label>
                                            <input type="file" name="images" id="images" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="company_name">Company Name</label>
                                            <input type="text" name="company_name" id="company_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="vat_number">VAT Number</label>
                                            <input type="text" name="vat_number" id="vat_number" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="text" name="phone_number" id="phone_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="address">Address</label>
                                            <textarea name="address" id="address" class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="balance">Balance</label>
                                            <input type="number" step="0.01" name="balance" id="balance" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-end">
                                            <button type="submit" class="btn btn-primary">Add Supplier</button>
                                            <a href="{{ url('/supplier-list') }}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
