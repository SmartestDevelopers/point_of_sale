@extends('layouts.front')

   @section('content')
   <div class="d-flex flex-column-fluid">
       <div class="container-fluid">
           <div class="row">
               <div class="col-12">
                   <div class="card card-custom gutter-b bg-white border-0">
                       <div class="card-header align-items-center border-0">
                           <div class="card-title mb-0">
                               <h3 class="card-label mb-0 font-weight-bold text-body">Stock Adjustments</h3>
                           </div>
                           <div class="card-toolbar">
                               <a href="{{ route('stocks.create') }}" class="btn btn-primary font-weight-bold">
                                   <i class="fas fa-plus"></i> Add Stock Adjustment
                               </a>
                           </div>
                       </div>
                       <div class="card-body">
                           @if(session('success'))
                               <div class="alert alert-success">{{ session('success') }}</div>
                           @endif
                           @if(session('error'))
                               <div class="alert alert-danger">{{ session('error') }}</div>
                           @endif
                           <div class="table-responsive">
                               <table class="table table-bordered">
                                   <thead>
                                       <tr>
                                           <th>ID</th>
                                           <th>Reference No</th>
                                           <th>Product</th>
                                           <th>Warehouse</th>
                                           <th>Unit</th>
                                           <th>Quantity</th>
                                           <th>Type</th>
                                           <th>User</th>
                                           <th>Created At</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach($stocks as $stock)
                                           <tr>
                                               <td>{{ $stock->id }}</td>
                                               <td>{{ $stock->reference_no }}</td>
                                               <td>{{ $stock->product_name }}</td>
                                               <td>{{ $stock->warehouse_name }}</td>
                                               <td>{{ $stock->unit_name }}</td>
                                               <td>{{ $stock->quantity }}</td>
                                               <td>{{ ucfirst($stock->adjustment_type) }}</td>
                                               <td>{{ $stock->user_name }}</td>
                                               <td>{{ $stock->created_at }}</td>
                                               <td>
                                                   <a href="{{ route('stocks.show', $stock->id) }}" class="btn btn-sm btn-info">
                                                       <i class="fas fa-eye"></i> View
                                                   </a>
                                                   <a href="{{ route('stocks.edit', $stock->id) }}" class="btn btn-sm btn-primary">
                                                       <i class="fas fa-edit"></i> Edit
                                                   </a>
                                                   <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display:inline;">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                           <i class="fas fa-trash"></i> Delete
                                                       </button>
                                                   </form>
                                               </td>
                                           </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   @endsection