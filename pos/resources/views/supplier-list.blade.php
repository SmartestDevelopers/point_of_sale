@extends('layouts.front')

@section('content')
<div class="container mt-4">
    <h1 class="mb-0">Supplier List</h1>
    <div class="d-flex justify-content-end mb-4"> <!-- Increased mb-4 for more gap -->
        <a href="{{ url('/add-supplier') }}" title="Add Supplier">
            <button class="btn p-0" style="background: none; border: none;">
                <span class="bg-secondary h-25px w-25px d-flex align-items-center justify-content-center rounded-circle shadow-sm" style="height:28px;width:28px;">
                    <svg width="18px" height="18px" viewBox="0 0 16 16" class="bi bi-plus white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </span>
            </button>
        </a>
    </div>
    <div class="card card-custom gutter-b bg-white border-0 shadow-sm mb-3">
        <div class="card-body p-2">
            <div class="d-flex align-items-end flex-nowrap table-header-row" style="background: #f8f9fa; border-radius: 0.5rem; font-weight: 600;">
                <div style="width: 10%" class="py-2 px-1">ID</div>
                <div style="width: 10%" class="py-2 px-1">Image</div>
                <div style="width: 10%" class="py-2 px-1">Name</div>
                <div style="width: 10%" class="py-2 px-1">Company Name</div>
                <div style="width: 10%" class="py-2 px-1">VAT Number</div>
                <div style="width: 10%" class="py-2 px-1">Email</div>
                <div style="width: 10%" class="py-2 px-1">Phone Number</div>
                <div style="width: 10%" class="py-2 px-1">Address</div>
                <div style="width: 10%" class="py-2 px-1">Balance</div>
                <div style="width: 10%" class="py-2 px-1">Actions</div>
            </div>
        </div>
    </div>
    @forelse($suppliers as $supplier)
    <div class="d-flex mb-2 align-items-center flex-nowrap" style="border-bottom:1px solid #eee;">
        <div style="width: 10%" class="text-center">{{ $supplier->id }}</div>
        <div style="width: 10%" class="text-center">
            @if($supplier->images)
                <img src="{{ asset('storage/'.$supplier->images) }}" alt="Image" style="width:40px;height:40px;object-fit:cover;">
            @else
                <span class="text-muted">No Image</span>
            @endif
        </div>
        <div style="width: 10%" class="text-center">{{ $supplier->name }}</div>
        <div style="width: 10%" class="text-center">{{ $supplier->company_name }}</div>
        <div style="width: 10%" class="text-center">{{ $supplier->vat_number }}</div>
        <div style="width: 10%" class="text-center">{{ $supplier->email }}</div>
        <div style="width: 10%" class="text-center">{{ $supplier->phone_number }}</div>
        <div style="width: 10%" class="text-center">{{ $supplier->address }}</div>
        <div style="width: 10%" class="text-center">{{ $supplier->balance }}</div>
        <div style="width: 10%" class="text-center">
            <a href="{{ url('/supplier-edit/'.$supplier->id) }}" class="btn btn-sm btn-primary mx-1">Edit</a>
            <a href="{{ url('/supplier-delete/'.$supplier->id) }}" class="btn btn-sm btn-danger mx-1" onclick="return confirm('Are you sure?')">Delete</a>
        </div>
    </div>
    @empty
    <div class="row">
        <div class="col-12 text-center">No suppliers found.</div>
    </div>
    @endforelse
</div>
@endsection
