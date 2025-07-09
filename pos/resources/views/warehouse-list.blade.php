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
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th style="width: 20%">Warehouse</th>
                            <th style="width: 20%">Phone Number</th>
                            <th style="width: 30%">Address</th>
                            <th style="width: 10%">Is Deleted</th>
                            <th style="width: 10%">Created At</th>
                            <th style="width: 10%">Updated At</th>
                            <th style="width: 10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($warehouses as $warehouse)
                        <tr>
                            <td class="text-center">{{ $warehouse->id }}</td>
                            <td class="text-center">{{ $warehouse->warehouse }}</td>
                            <td class="text-center">{{ $warehouse->phone_number }}</td>
                            <td class="text-center">{{ $warehouse->address }}</td>
                            <td class="text-center">{{ $warehouse->is_deleted }}</td>
                            <td class="text-center">{{ $warehouse->created_at }}</td>
                            <td class="text-center">{{ $warehouse->updated_at }}</td>
                            <td class="text-center">
                                <a href="{{ url('/warehouse-edit/'.$warehouse->id) }}" class="btn btn-xs btn-primary mx-1" style="padding:2px 8px;font-size:12px;">Edit</a>
                                <a href="{{ url('/warehouse-delete/'.$warehouse->id) }}" class="btn btn-xs btn-danger mx-1" style="padding:2px 8px;font-size:12px;" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">No warehouses found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
