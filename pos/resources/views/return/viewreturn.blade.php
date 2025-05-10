@extends('layouts.front')

@section('content')

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Return</li>
									<li class="breadcrumb-item active" aria-current="page">Add Return</li>
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
												<h3 class="card-label mb-0 font-weight-bold text-body">Add Return 
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
													<span class="icon  h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
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
											<form>
												<div class="form-group row">
													<div class="col-md-12">
														<label  class="text-body">Select Order ID</label>
														<fieldset class="form-group mb-3">
															<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																<option value="AL">1</option>
																  
																<option value="WY">2</option>
															  </select>
														</fieldset>
													</div>
													<div class="col-md-12">
														<div class="table-responsive return-addtable">
															<table class="table text-body">
																<thead class="border-0">
																  <tr class="border-0"> 
																	<th class="border-0  header-heading" scope="col">Warehouse</th>
																	<th class="border-0  header-heading" scope="col">Biller</th>
																	<th class="border-0  header-heading" scope="col">Biller 2</th>
																	<th class="border-0  header-heading" scope="col">Customer</th>
																	<th class="border-0  header-heading" scope="col">Customer Address</th>
																  </tr>
																</thead>
																<tbody>
																  <tr class="">
																	
																	<td class="border-0">Warehouse2</td>
																	<td class="border-0">Biller</td>
																	<td class="border-0">Biller 2</td>
																	<td class="border-0">Customer</td>
																	<td class="border-0">9825 Johnson columbia,MD 21044</td>
																  </tr>
																</tbody>
															  </table>
														</div>
													</div>
												</div>
											</form>
										</div>
									
									</div>
								</div>
								<div class="col-lg-12 col-xl-12 px-4">
									<div class="card card-custom gutter-b bg-white border-0" >
										<div class="card-body">
											<div class="row">
												<div class="col-12 px-4">
													<div class="table-responsive">
														<table class="table table-striped  text-body">
															<thead>
															  <tr class=""> 
																<th class="border-0  header-heading" scope="col">Name</th>
																<th class="border-0  header-heading" scope="col">Code</th>
																<th class="border-0  header-heading" scope="col">Quantity</th>
																<th class="border-0  header-heading" scope="col">Return Quantity</th>
																<th class="border-0  header-heading" scope="col">Cost</th>
																<th class="border-0  header-heading" scope="col">Discount</th>
																<th class="border-0  header-heading" scope="col">Tax</th>
																<th class="border-0  header-heading" scope="col">Subtotal</th>
																<th class="border-0  header-heading text-end" scope="col">Clear</th>
	
															  </tr>
															</thead>
															<tbody>
															  <tr class="">
																
																<td class="">Mackbook</td>
																<td class="">2500</td>
																<td class="">2</td>
																<td class=" text-center">
																	<input type="number" class="form-control" id="basicInput1" placeholder="Enter Quantity" value="0">
																</td>
															
																<td class=" ">166.03</td>
																<td class="">00</td>
																<td class="">25.5</td>
																<td class="">192.00</td>
																<td class="text-right">
																	<a href="#" class="confirm-delete" title="Delete">
																		<i class="fas fa-trash-alt"></i>
																	</a>
																</td>
																
															  </tr>
															  <tr class="">
																
																<td class="">Mackbook</td>
																<td class="">2500</td>
																<td class="">2</td>
																<td class=" text-center">
																	<input type="number" class="form-control" id="basicInput" placeholder="Enter Quantity" value="1">
																</td>
															
																<td class=" ">166.03</td>
																<td class="">00</td>
																<td class="">25.5</td>
																<td class="">192.00</td>
																<td class="text-right">
																	<a href="#" class="confirm-delete" title="Delete">
																		<i class="fas fa-trash-alt"></i>
																	</a>
																</td>
															  </tr>
															
															
															</tbody>
															<tfoot>
																<tr class=""> 
																  <th class="border-0  header-heading" scope="col">Total</th>
																  <th class="border-0  header-heading" scope="col"></th>
																  <th class="border-0  header-heading" scope="col">2</th>
																  <th class="border-0  header-heading" scope="col">1</th>
															 
																  <th class="border-0  header-heading" scope="col">$110</th>
																  <th class="border-0  header-heading" scope="col">0.00</th>
																  <th class="border-0  header-heading" scope="col">25.04</th>
																  <th class="border-0  header-heading" scope="col">192.0</th>
																  <th class="border-0  header-heading text-end" scope="col">
																	<a href="#">
																		<i class="fas fa-trash-alt"></i>
																	</a>
																  </th>
	  
																</tr>
															  </tfoot>
														  </table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-xl-12 px-4">
									<div class="card card-custom gutter-b bg-white border-0" >
										<div class="card-body">
											<div class="row mb-3">
												<div class="col-12 px-4">
													<label  class="text-body">Note</label>
													<div id="editor" class="bg-transparent text-dark">
															
													</div>
												</div>
											</div>
											<div class="row justify-content-end">
												<div class="col-12 col-md-3">
												  <div>
													  <table class="table right-table mb-0">
   
														  <tbody>
															<tr class="d-flex align-items-center justify-content-between">
															  <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
																	  Subtotal
															  </th>
															  <td class="border-0 justify-content-end d-flex text-black-50 font-size-base">$750</td>
															  
															</tr>
															<tr class="d-flex align-items-center justify-content-between">
															  <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
															
																	  Discount(20%)
																  
															  </th>
															  <td class="border-0 justify-content-end d-flex text-black-50 font-size-base">$900</td>
															  
															</tr>
															<tr class="d-flex align-items-center justify-content-between">
															  <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
																  Tax
																
															  </th>
															  <td class="border-0 justify-content-end d-flex text-black-50 font-size-base">10%</td>
															  
															</tr>
															<tr class="d-flex align-items-center justify-content-between">
																<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
																	Shipping Cost
																	 
																</th>
																<td class="border-0 justify-content-end d-flex text-black-50 font-size-base">100</td>
																
															  </tr>
															  <tr class="d-flex align-items-center justify-content-between">
																<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark" >
																
																	Coupon Code
																	
																</th>
																<td class="border-0 justify-content-end d-flex text-black-50 font-size-base">20%</td>
																
															  </tr>
															<tr class="d-flex align-items-center justify-content-between item-price">
															  <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
																	  TOTAL
																  
															  </th>
															  <td class="border-0 justify-content-end d-flex text-dark font-size-base">$8100</td>
															  
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

@endsection