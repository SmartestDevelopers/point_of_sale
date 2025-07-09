@extends('layouts.front')

@section('content')
<div class="container mt-4">
    <h1 class="mb-0">Warehouse List</h1>
    <div class="d-flex justify-content-end mb-4">
        <a href="{{ url('/add-warehouse') }}" title="Add Warehouse">
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
                <div style="width: 20%" class="py-2 px-1">Warehouse</div>
                <div style="width: 20%" class="py-2 px-1">Phone Number</div>
                <div style="width: 30%" class="py-2 px-1">Address</div>
                <div style="width: 10%" class="py-2 px-1">Is Deleted</div>
                <div style="width: 10%" class="py-2 px-1">Created At</div>
                <div style="width: 10%" class="py-2 px-1">Updated At</div>
                <div style="width: 10%" class="py-2 px-1">Actions</div>
            </div>
            <div class="">
            @forelse($warehouses as $warehouse)
                <div class="d-flex align-items-center flex-nowrap" style="border-bottom:1px solid #eee;">
                    <div style="width: 10%" class="text-center">{{ $warehouse->id }}</div>
                    <div style="width: 20%" class="text-center">{{ $warehouse->warehouse }}</div>
                    <div style="width: 20%" class="text-center">{{ $warehouse->phone_number }}</div>
                    <div style="width: 30%" class="text-center">{{ $warehouse->address }}</div>
                    <div style="width: 10%" class="text-center">{{ $warehouse->is_deleted }}</div>
                    <div style="width: 10%" class="text-center">{{ $warehouse->created_at }}</div>
                    <div style="width: 10%" class="text-center">{{ $warehouse->updated_at }}</div>
                    <div style="width: 10%" class="text-center">
                        <a href="{{ url('/warehouse-edit/'.$warehouse->id) }}" class="btn btn-xs btn-primary mx-1 py-0 px-2" style="font-size: 0.75rem;">Edit</a>
                        <a href="{{ url('/warehouse-delete/'.$warehouse->id) }}" class="btn btn-xs btn-danger mx-1 py-0 px-2" style="font-size: 0.75rem;" onclick="return confirm('Are you sure?')">Delete</a>
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col-12 text-center">No warehouses found.</div>
                </div>
            @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
