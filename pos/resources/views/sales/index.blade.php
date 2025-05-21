@extends('layouts.front')

@section('content')



<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item " aria-current="page">Sales</li>
									<li class="breadcrumb-item active" aria-current="page">Sales List</li>
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
								<div class="col-lg-12 col-xl-12 px-4">
									<div class="card card-custom gutter-b bg-transparent shadow-none border-0" >
										<div class="card-header align-items-center   border-bottom-dark px-0">
											<div class="card-title mb-0">
												<h3 class="card-label mb-0 font-weight-bold text-body">Sales List
												</h3>
											</div>
											<div class="icons d-flex">
											
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
								<div class="col-lg-12 col-xl-12 px-4">
									<div class="card card-custom gutter-b bg-white border-0" >
										<div class="card-body">
											<div >
												<div class="table-responsive" id="printableTable">
													<table id="orderTable" class="display" style="width:100%">
														<thead>
															<tr>
																<th>Order ID</th>
																<th>Customer Name</th>
																<th>Payment Type</th>
																<th>Total</th>
																<th>Date</th>
																<th>Status</th>
																<th class=" no-sort text-end">Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>#001</td>
																<td>Tiger Nixon</td>
																<td>Credit Card</td>
																<td>$1400</td>
																<td>2011/04/25</td>
																<td>	
																	<div class="mr-0 text-info">Pending
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
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton1"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="order-detail.html">Detail</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																		</div>
																</td>
															</tr>
															<tr>
																<td>#002</td>
																<td>Garrett Winters</td>
																<td>Credit Card</td>
																<td>$1500</td>
																<td>2011/07/25</td>
																<td>
																	<div class="mr-0 text-success">Completed
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
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton2"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="order-detail.html">Detail</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																		</div>
																</td>
															</tr>
															<tr>
																<td>#003</td>
																<td>Ashton Cox</td>
																<td>Credit Card</td>
																<td>$1300</td>
																<td>2009/01/12</td>
																<td>
																	<div class="mr-0 text-success">Completed
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
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton3"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="order-detail.html">Detail</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																		</div>
																</td>
															</tr>
															<tr>
																<td>#004</td>
																<td>Cedric Kelly</td>
																<td>Credit Card</td>
																<td>$2400</td>
																<td>2012/03/29</td>
																<td>	
																	<div class="mr-0 text-danger">Rejected
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
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton4"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="order-detail.html">Detail</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																		</div>
																</td>
															</tr>
															<tr>
																<td>#005</td>
																<td>Tiger Nixon</td>
																<td>Credit Card</td>
																<td>$1400</td>
																<td>2011/04/25</td>
																<td>	
																	<div class="mr-0 text-info">Pending
																	</div>
																</td>
																<td>
																	<div class="card-toolbar text-end">
																		<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton44" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<span class="svg-icon">
																				<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																				</svg>
																			</span>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton44"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="order-detail.html">Detail</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																		</div>
																</td>
															</tr>
															<tr>
																<td>#006</td>
																<td>Garrett Winters</td>
																<td>Credit Card</td>
																<td>$1500</td>
																<td>2011/07/25</td>
																<td>
																	<div class="mr-0 text-success">Completed
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
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton5"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="order-detail.html">Detail</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																		</div>
																</td>
															</tr>
															<tr>
																<td>#007</td>
																<td>Ashton Cox</td>
																<td>Credit Card</td>
																<td>$1300</td>
																<td>2009/01/12</td>
																<td>
																	<div class="mr-0 text-success">Completed
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
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton6"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="order-detail.html">Detail</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																		</div>
																</td>
															</tr>
															<tr>
																<td>#008</td>
																<td>Cedric Kelly</td>
																<td>Credit Card</td>
																<td>$2400</td>
																<td>2012/03/29</td>
																<td>	
																	<div class="mr-0 text-danger">Rejected
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
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton7"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="order-detail.html">Detail</a>
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


@endsection