@extends('layouts.front')

@section('content')
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Catalog</li>
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
												<div class="card-header align-items-center  border-bottom-dark px-0">
													<div class="card-title mb-0">
														<h3 class="card-label mb-0 font-weight-bold text-body">Product
														</h3>
													</div>
												    <div class="icons d-flex">
														<a href="{{url('add-product')}}" class="ms-2" >
															<span class="bg-secondary h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center  rounded-circle shadow-sm ">
															
																<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
																  </svg>
															</span>
														
														</a>
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
															<table id="productTable" class="display ">
																
																<thead class="text-body">
																	<tr>
																		<th>ID</th>
																		<th>Products</th>
																		<th>Category</th>
																		<th>Price</th>
																		<th>
																			Status	
																		</th>
																		<th class="no-sort"></th>
																	</tr>
																</thead>
																<tbody class="kt-table-tbody text-dark">
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td  >#01</td>
																		<td>
																			<div class="d-flex align-items-center">
																			<!-- <div class="h-45px w-45px d-flex align-items-center me-2">
																				<img class="img-fluid" src="../images/product_images/product_2x.jpg" alt="product">
																			</div> -->
																				<span
																					>Clayton Bates</span></div>
																		</td>
																		<td>Cloth</td>
																		<td>$137.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class=" text-success">Approved</span>
																			</div>
																		
																			</div>
																		
																		
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td>#02</td>
																		<td>
																			<div class="d-flex align-items-center"><span
																				>Gabriel Frazier</span>
																			</div>
																		</td>
																		<td>Cloth</td>
																		<td>$322.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton1" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td>#03</td>
																		<td>
																			<div class="d-flex align-items-center">
																					Debra Hamilton</div>
																		</td>
																		<td>Cloth</td>
																		<td>$543.00</td>
																		<td>
																			
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-info">Pending</span>
																			</div>
																		
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton2" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr>
																		<td>#04</td>
																		<td>
																			<div class="d-flex align-items-center"><span
																					>Stacey Ward</span></div>
																		</td>
																		<td>Cloth</td>
																		<td>$876.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-danger">Rejected</span>
																			</div>
																	
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton3" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td>#05</td>
																		<td>
																			<div class="d-flex align-items-center"><span
																					>Troy Alexander</span></div>
																		</td>
																		<td>Bag</td>
																		<td>$241.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton4" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr >
																		<td>#06</td>
																		<td >
																			<div class="d-flex align-items-center"><span
																					>Clayton Bates</span>
																				</div>
																		</td>
																		<td >Cloth</td>
																		<td>$137.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																			
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton5" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr >
																		<td>#07</td>
																		<td >
																			<div class="d-flex align-items-center"><span
																					>Gabriel Frazier</span>
																			</div>
																		</td>
																		<td>Bag</td>
																		<td>$322.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton6" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr>
																		<td>#08</td>
																		<td>
																			<div class="d-flex align-items-center">
																				<span
																					>Debra Hamilton</span></div>
																		</td>
																		<td>Bag</td>
																		<td>$543.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-info">Pending</span>
																			</div>
																		
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton7" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr>
																		<td>#09</td>
																		<td>
																			<div class="d-flex align-items-center"><span
																					>Stacey Ward</span></div>
																		</td>
																		<td>Bag</td>
																		<td>$876.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-danger">Rejected</span>
																			</div>
																	
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton8" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton8" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr>
																		<td>#10</td>
																		<td>
																			<div class="d-flex align-items-center"><span
																					>Troy Alexander</span></div>
																		</td>
																		<td >Bag</td>
																		<td >$241.00</td>
																		<td >
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																	
																			</div>
																		</td>
																		<td>
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton9" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton9" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr >
																		<td>#11</td>
																		<td>
																			<div class="d-flex align-items-center"><span
																					>Clayton Bates</span></div>
																		</td>
																		<td>Cloth</td>
																		<td>$137.00</td>
																		<td>
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		
																			</div>
																		</td>
																		<td >
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton11" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton11" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td>#12</td>
																		<td>
																			<div class="d-flex align-items-center"><span
																					>Gabriel Frazier</span>
																			</div>
																		</td>
																		<td >Bag</td>
																		<td >$322.00</td>
																		<td >
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		
																			</div>
																		</td>
																		<td >
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton12" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton12" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr >
																		<td >#13</td>
																		<td >
																			<div class="d-flex align-items-center"><span
																					>Debra Hamilton</span></div>
																		</td>
																		<td >Bag</td>
																		<td >$543.00</td>
																		<td >
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-info">Pending</span>
																			</div>
																	
																			</div>
																		</td>
																		<td >
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton13" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton13" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr >
																		<td >#14</td>
																		<td >
																			<div class="d-flex align-items-center"><span
																				>Stacey Ward</span></div>
																		</td>
																		<td>Cloth</td>
																		<td >$876.00</td>
																		<td >
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-danger">Rejected</span>
																			</div>
																		
																			</div>
																		</td>
																		<td >
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton14" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton14" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
																	<tr >
																		<td >#15</td>
																		<td >
																			<div class="d-flex align-items-center"><span
																				>Troy Alexander</span></div>
																		</td>
																		<td >Shoes</td>
																		<td >$241.00</td>
																		<td >
																			<div class="">
																				<div class=""><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																	
																			</div>
																		</td>
																		<td >
																			<div class="card-toolbar text-end">
																				<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																					<span class="svg-icon">
																						<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																						</svg>
																					</span>
																				</button>
																				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton15" >
																					<a class="dropdown-item" href="add-product.html">Edit</a>
																					<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																				</div>
																				</div>
																		</td>
																	</tr>
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