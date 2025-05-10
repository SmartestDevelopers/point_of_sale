@extends('layouts.front')

@section('content')

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item " aria-current="page">Report</li>
									<li class="breadcrumb-item active" aria-current="page">Expense Report</li>
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
														<h3 class="card-label mb-0 font-weight-bold text-body">Expense Report
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
										<div class="col-12 px-4">
											<div class="card card-custom gutter-b bg-white border-0" >
											
												<div class="card-body">
													<form>
														<div class="form-group row mb-0">
															<div class="col-md-4">
																<div class="form-group mb-0" >
																	<label class="text-dark" >Business Location</label>
																		<select class="arabic-select w-100 mb-3 h-30px">
																			<option value="1">All Location</option>
																			<option value="2">Awesome</option>
																		</select>
																  </div>
															</div>
															<div class="col-md-4">
																<div class="form-group mb-0" >
																	<label class="text-dark" >Category</label>
																		<select class="arabic-select w-100 mb-3 h-30px">
																			<option value="1">All</option>
																		</select>
																  </div>
															</div>
															<div class="col-md-4">
																<label class="text-dark" >Choose Your Date</label>
																<div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
																	<i class="fa fa-calendar"></i>&nbsp;
																	<span></span> <i class="fa fa-caret-down"></i>
																</div>
															</div>
														
														
														</div>
													</form>

												</div>
											
											</div>
										</div>
										<div class="col-12  px-4">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-body" >
													<div >
														<div class=" table-responsive" id="printableTable">
															<table id="productUnitTable" class="display ">
																
																<thead class="text-body">
																	<tr>
																		
																		<th>
																		Expense Categories</th>
																		<th>
																			Total Expense 
																		 </th>
																	
																	</tr>
																</thead>
																<tbody class="kt-table-tbody text-dark">
																
																	<tr class="kt-table-row kt-table-row-level-0">
																
																		<td  >Mouse</td>
																		<td class="">93620.00</td>
																	</tr>
																	
																	<tr class="kt-table-row kt-table-row-level-0">
																
																		<td  >Charger</td>
																		<td class="">9620.00</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																
																		<td  >Mouse</td>
																		<td class="">93620.00</td>
																	</tr>
																	
																	<tr class="kt-table-row kt-table-row-level-0">
																
																		<td  >Charger</td>
																		<td class="">9620.00</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																
																		<td  >Mouse</td>
																		<td class="">93620.00</td>
																	</tr>
																	
																	<tr class="kt-table-row kt-table-row-level-0">
																
																		<td  >Charger</td>
																		<td class="">9620.00</td>
																	</tr>
																
																</tbody>
																<tfoot>
																	<tr class="kt-table-row kt-table-row-level-0">
																	<th  >Total</th>
																	<th class="">200000</th>
																</tr>
																</tfoot>
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