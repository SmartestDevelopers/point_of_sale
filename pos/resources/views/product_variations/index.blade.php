@extends('layouts.front')

@section('content')
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Product Variation</li>
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
														<h3 class="card-label mb-0 font-weight-bold text-body">Product Variation
														</h3>
													</div>
												    <div class="icons d-flex">
																											<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Product Variation
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form id="productUnitForm" method="POST" action="{{ route('product-variations.store') }}">
		@csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product Variation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
				<Label>Product</Label>
				<input type="text" class="form-control" name="product_id" list="products" required>
				<datalist id="products">
					@foreach($products as $product)
						<option value="{{ $product->product_id }}">
					@endforeach
				</datalist>
				<Label>Options</Label>
				<input type="text" class="form-control" id="options" name="options" placeholder="Enter Options">
				<Label class="mt-3">Values</Label>
				<input type="number" class="form-control" id="values" name="values" placeholder="Enter Values">
				
		
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
														id="kt_notes_panel_toggle" data-bs-toggle="tooltip"  data-bs-placement="right"
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
															<table id="productVariationTable" class="display ">
																
																<thead class="text-body">
																	<tr>
																		<th>ID</th>
																		<th class="text-center">Options</th>
																		<th class="text-center">Values</th>
																	
																		<th class="no-sort text-end">Action</th>
																	</tr>
																</thead>
																<tbody class="kt-table-tbody text-dark">
                                                                @php
																	$number = 1;

																@endphp
																@foreach($product_variations as $product_variation)

																	<tr class="kt-table-row kt-table-row-level-0">
																		<td >{{$number++}}</td>
																		<td class="text-center">
                                                                        {{ $product_variation->options }}
																		</td>
																		<td class="text-center">{{ $product_variation->values }}</td>
																		
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
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $product_variation->id }}">
  Edit Product Variations
</button>

																					<a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit2" data-bs-toggle="tooltip" title="" data-bs-placement="right"
																					data-original-title="Check out more demos">Edit</a>
																					
																					<a class="dropdown-item" title="Delete" href="{{ route('product-variations.destroy', $product_variation->id) }}">Delete</a>
																					<form action="{{ route('product-variations.destroy', $product_variation->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
																						@csrf
																						@method('DELETE')
																						<button type="submit" class="dropdown-item" title="Delete">Delete</button>
																					</form>

																					<a class="dropdown-item" title="Delete" href="{{ url('productVariationDelete', $product_variation->id) }}">Delete</a>


																					

																				</div>
																			</div>
																		</td>
																	</tr>

																	<!-- Modal -->
<div class="modal fade" id="editModal{{ $product_variation->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<form id="productUnitForm" method="POST" action="{{ route('product-variations.update', $product_variation->id) }}">
		@csrf
		
		<input type="hidden" name="id" value="{{ $product_variation->id }}">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Product Variation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <Label>Product Variations</Label>
				<input type="text" class="form-control" id="options" name="options" value="{{ $product_variation->options }} " placeholder="Edit">
				
				<input type="text" class="form-control" id="values" name="values" value="{{ $product_variation->values }} " placeholder="Edit">
				
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