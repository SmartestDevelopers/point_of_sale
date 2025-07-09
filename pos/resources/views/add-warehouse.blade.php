@extends('layouts.front')

@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-4">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 px-4">
                        <div class="card card-custom gutter-b bg-transparent shadow-none border-0">
                            <div class="card-header align-items-center border-bottom-dark px-0">
                                <div class="card-title mb-0">
                                    <h3 class="card-label mb-0 font-weight-bold text-body">Add Warehouse</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-4">
                        <div class="card card-custom gutter-b bg-white border-0">
                            <div class="card-body">
                                <form action="{{ url('/submit-warehouse') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="warehouse">Warehouse</label>
                                            <input type="text" name="warehouse" id="warehouse" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="text" name="phone_number" id="phone_number" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" id="address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-end">
                                            <button type="submit" class="btn btn-primary">Add Warehouse</button>
                                            <a href="{{ url('/warehouse-list') }}" class="btn btn-secondary">Cancel</a>
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
