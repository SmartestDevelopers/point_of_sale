@extends('layouts.front')

@section('content')
                
                <!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item " aria-current="page">People</li>
									<li class="breadcrumb-item active" aria-current="page">Customer</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end::Subheader-->
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 px-4">
									<div class="row">
										<div class="col-lg-12 col-xl-12 px-4">
											<div class="card card-custom gutter-b bg-transparent shadow-none border-0" >
												@if (session('success'))
															<div class="alert alert-success mt-2">
																{{ session('success') }}
															</div>
														@endif
														@if (session('error'))
															<div class="alert alert-danger mt-2">
																{{ session('error') }}
															</div>
														@endif
												<div class="card-header align-items-center  border-bottom-dark px-0">
													<div class="card-title mb-0">
														<h3 class="card-label mb-0 font-weight-bold text-body">Customer 
														</h3>
													</div>
												    <div class="icons d-flex">
														<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Customer
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
    <div class="modal-content">
	<form id="customerListForm" method="POST" action="{{ route('add-customer.store') }}">
		@csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 mb-2">
                <label>Customer Group</label>
                <input type="text" class="form-control" id="customer_group" name="customer_group" value="" placeholder="Enter Customer Group">
            </div>
            <div class="col-md-6 mb-2">
                <label>Name</label>
                <input type="text" class="form-control" id="name" name="name" value="" placeholder="Enter Name">
            </div>
            <div class="col-md-6 mb-2">
                <label>Company Name</label>
                <input type="text" class="form-control" id="company_name" name="company_name" value="" placeholder="Enter Company Name">
            </div>
            <div class="col-md-6 mb-2">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" value="" placeholder="Enter Email">
            </div>
            <div class="col-md-6 mb-2">
                <label>Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone Number">
            </div>
            <div class="col-md-6 mb-2">
                <label>Tax Number</label>
                <input type="text" class="form-control" id="tax_number" name="tax_number"  placeholder="Enter Tax Number">
            </div>
            <div class="col-md-6 mb-2">
                <label>Address</label>
                <input type="text" class="form-control" id="address" name="address"  placeholder="Enter Address">
            </div>
            <div class="col-md-6 mb-2">
                <label>Balance</label>
                <input type="text" class="form-control" id="balance" name="balance"  placeholder="Enter Balance">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
	</form>
  </div>
</div>

														<button  class="btn ms-2 p-0" 
														id="kt_notes_panel_toggle" data-bs-toggle="tooltip" title="" data-bs-placement="right"
																			data-original-title="Check out more demos" >
															<span class="bg-secondary h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center  rounded-circle shadow-sm ">
															
																  <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
																  </svg>
															</span>
														
														</button>
														<a href="#" onclick="printDiv()" class="ms-2">
															<span class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
																<svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z"/>
																	<path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
																	<path fill-rule="evenodd" d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
																  </svg>
															</span>
														
														</a>
														<a href="#" class="ms-2" >
															<span class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
																<svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-file-earmark-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
																  </svg>
															</span>
														
														</a>
													
													</div>
												</div>
											
											</div>


										</div>
									</div>
									<div class="row">
										
										<div class="col-12  px-4">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-body" >
													<div >
														<div class=" table-responsive" id="printableTable">
															<table id="customerListTable" class="display ">
																
																<thead class="text-body">
																	<tr>
																		<th>
																		  Customer Group
																		</th>
																		<th>Name</th>
																		<th class="">Company Name</th>
																		<th class="">Email</th>
																	
																		<th class="">Phone Number</th>
																		<th class="">Tax Number</th>
																		<th class="">Address</th>
																		<th class="">Balance</th>
																		<th class="no-sort text-end">Action</th>
																	</tr>
																</thead>
																<tbody class="kt-table-tbody text-dark">
																	@php
																	$number = 1;

																@endphp
																	@foreach($customer_lists as $customer_list)
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td>
																			{{ $customer_list->customer_group}}
																		</td>
																		<td >{{ $customer_list->name}}</td>
																		<td class="">{{ $customer_list->company_name}}</td>
																	
																		<td class="">
																		{{ $customer_list->email}}
																		</td>
																	
																		<td class="">{{ $customer_list->phone_number}}</td>
																		<td class="">{{ $customer_list->tax_number}}</td>
																		<td class="">{{ $customer_list->address}}</td>
																		<td class="">{{ $customer_list->balance}}</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																					<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $customer_list->id }}">
  Edit Customer List
</button>

																					<a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit2" data-bs-toggle="tooltip" title="" data-bs-placement="right"
																					data-original-title="Check out more demos">Edit</a>
																					<a class="dropdown-item" title="Delete" href="{{url('customer-delete',$customer_list->id)}}">Delete</a>
																					
																				</div>
																			</div>
																		</td>
																	</tr>

																	<!-- Modal -->
<div class="modal fade" id="editModal{{ $customer_list->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form id="customerListForm" method="POST" action="{{ route('customer-update.update', $customer_list->id) }}">
		@csrf
		
		<input type="hidden" name="id" value="{{ $customer_list->id }}">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Product Unit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <Label>Customer Group</Label>
				<input type="text" class="form-control" id="customer_group" name="customer_group" value="{{ $customer_list->customer_group }} " placeholder="Enter Customer Group">
				<Label>Name</Label>
				<input type="text" class="form-control" id="name" name="name" value="{{ $customer_list->name }} " placeholder="Enter Name">
				<Label>Company Nmae</Label>
				<input type="text" class="form-control" id="company_name" name="company_name" value="{{ $customer_list->company_name }} " placeholder="Enter Company Name">
				<Label>Email</Label>
				<input type="email" class="form-control" id="email" name="email" value="{{ $customer_list->email }} " placeholder="Enter Email">
				<Label>Phone Number</Label>
				<input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $customer_list->phone_number }} " placeholder="Enter Phone Number">
				<Label>Tax Number</Label>
				<input type="text" class="form-control" id="tax_number" name="tax_number" value="{{ $customer_list->tax_number }} " placeholder="Enter Tax Number">
				<Label>Address</Label>
				<input type="text" class="form-control" id="address" name="address" value="{{ $customer_list->address }} " placeholder="Enter Address">
				<Label>Balance</Label>
				<input type="text" class="form-control" id="balance" name="balance" value="{{ $customer_list->balance }} " placeholder="Enter Balance">
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>

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
							</div>
						</div>
						
						
					</div>
					
				</div>
@endsection