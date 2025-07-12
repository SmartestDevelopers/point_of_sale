@extends('layouts.front')

   @section('content')
   <div class="d-flex flex-column-fluid">
       <div class="container-fluid">
           <div class="row">
               <div class="col-12">
                   <div class="card card-custom gutter-b bg-white border-0">
                       <div class="card-header align-items-center border-0">
                           <div class="card-title mb-0">
                               <h3 class="card-label mb-0 font-weight-bold text-body">Stock Adjustment Details</h3>
                           </div>
                           <div class="card-toolbar">
                               <a href="{{ route('stocks.index') }}" class="btn btn-secondary font-weight-bold">
                                   <i class="fas fa-arrow-left"></i> Back to List
                               </a>
                           </div>
                       </div>
                       <div class="card-body">
                           @if(!$stock)
                               <div class="alert alert-danger">Stock adjustment not found.</div>
                           @else
                               <div class="row">
                                   <div class="col-md-6">
                                       <p><strong>ID:</strong> {{ $stock->id }}</p>
                                       <p><strong>Reference No:</strong> {{ $stock->reference_no }}</p>
                                       <p><strong>Product:</strong> {{ $stock->product_name }}</p>
                                       <p><strong>Warehouse:</strong> {{ $stock->warehouse_name }}</p>
                                       <p><strong>Unit:</strong> {{ $stock->unit_name }}</p>
                                   </div>
                                   <div class="col-md-6">
                                       <p><strong>Quantity:</strong> {{ $stock->quantity }}</p>
                                       <p><strong>Adjustment Type:</strong> {{ ucfirst($stock->adjustment_type) }}</p>
                                       <p><strong>User:</strong> {{ $stock->user_name }}</p>
                                       <p><strong>Created At:</strong> {{ $stock->created_at }}</p>
                                       <p><strong>Note:</strong> {{ $stock->note ?? 'N/A' }}</p>
                                   </div>
                               </div>
                               <div class="mt-4">
                                   <a href="{{ route('stocks.edit', $stock->id) }}" class="btn btn-primary font-weight-bold">
                                       <i class="fas fa-edit"></i> Edit
                                   </a>
                                   <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display:inline;">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-danger font-weight-bold" onclick="return confirm('Are you sure?')">
                                           <i class="fas fa-trash"></i> Delete
                                       </button>
                                   </form>
                               </div>
                           @endif
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   @endsection