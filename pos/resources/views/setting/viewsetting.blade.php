@extends('layouts.front')

@section('content')
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Bussiness Setting</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end::Subheader-->
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container-fluid ">
						
							<div class="row">
								<div class="col-lg-12 col-xl-12 px-4">
									<div class="card card-custom gutter-b bg-transparent shadow-none border-0" >
										<div class="card-header align-items-center   border-bottom-dark px-0">
											<div class="card-title mb-0">
												<h3 class="card-label mb-0 font-weight-bold text-body">Bussiness Setting 
												</h3>
											</div>
											<div class="icons d-flex">
										
												<a href="#" >
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
										<div class="card-header border-0 align-items-center">
											<h3 class="card-label mb-0 font-weight-bold text-body">Bussiness Setting
											</h3>
										</div>
										<div class="card-body">
								
											<div class="row">
                                                <div class="col-md-3">
													<ul class="nav flex-column nav-pills mb-3" id="v-pills-tab1" role="tablist" aria-orientation="vertical">
														<li class="nav-item" >
															<a class="nav-link active" id="general-tab2" data-bs-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
														</li>
														<li class="nav-item" >
															<a class="nav-link" id="general-tab-warehouse" data-bs-toggle="pill" href="#warehouse" role="tab" aria-controls="warehouse" aria-selected="true">Warehouse</a>
														</li>
														<li class="nav-item" >
															<a class="nav-link" id="pos-tab" data-bs-toggle="pill" href="#pos" role="tab" aria-controls="pos" aria-selected="false">POS</a>
														</li>
														<li class="nav-item" >
															<a class="nav-link" id="email-tab1" data-bs-toggle="pill" href="#email" role="tab" aria-controls="email" aria-selected="false">Email SMTP Settings</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="sms-tab1" data-bs-toggle="pill" href="#sms" role="tab" aria-controls="sms" aria-selected="false">SMS</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="notification-tab1" data-bs-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">Notification</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="invoice-tab1" data-bs-toggle="pill" href="#invoice" role="tab" aria-controls="invoice" aria-selected="false">INVOICE</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="barcodes-tab1" data-bs-toggle="pill" href="#barcodes" role="tab" aria-controls="barcodes" aria-selected="false">Barcodes</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" id="emailtemp-tab1" data-bs-toggle="pill" href="#emailtemp" role="tab" aria-controls="emailtemp" aria-selected="false">
																Email Template
															</a>
														</li>
													</ul>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="tab-content" id="v-pills-tabContent1">
                                                        <div class="tab-pane fade show active" id="general" role="tabpanel" >
															<div class="form-group row">
																<div class="col-md-6">
																	<label >Business Name</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="" value="Awesome Shop">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Start Date</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" name="birthday" class="form-control w-100" value="10/24/1984" />
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Default profit percent</label>
																	<fieldset class="form-group mb-3">
																		<input type="number" class="form-control border-dark"  placeholder="" value="20">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Currency</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">Dollar</option>
																			  
																			<option value="WY">Rupee</option>
																			
																			<option value="WY">American Dollar</option>
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Currency Symbol Placement</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">Before Amount</option>
																			  
																			<option value="WY">After Amount</option>
																			
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Time zone</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">America Phoenix</option>
																			  
																			<option value="WY">America/port_of_spain</option>
																			
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Upload Logo</label>
																	<fieldset class="form-group mb-3 border-dark rounded p-1">
																		<input type="file" class="d-block w-100" id="img1" name="img" accept="image/*">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Financial year start month</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">January</option>
																			  
																			<option value="WY">Febrary</option>
																			
																			<option value="WY">March</option>
																		  </select>
																	</fieldset>
																</div>
															
																<div class="col-md-6">
																	<label >Stock Accounting Method</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">FIFO</option>
																			  
																			<option value="WY">LIFO</option>
																			
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Transaction Edit Days</label>
																	<fieldset class="form-group mb-3">
																		<input type="number" class="form-control border-dark"  placeholder="" value="20">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Date Format</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">mm/dd/yyyy</option>
																			  
																			<option value="WY">mm-dd-yyyy</option>
																			
																			<option value="WY">dd-mm-yyyy</option>
																			
																			<option value="WY">dd/mm/yyyy</option>
																			
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Time Format</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">12 hr</option>
																			  
																			<option value="WY">24 hr</option>
																			
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary">Submit</button>
																</div>
			
															</div>	
                                                        </div>



														<div class="tab-pane fade show active" id="warehouse" role="tabpanel" >
															<div class="form-group row">
															<h1>Warehouse  Listing</h1>
																
																<div class="row">


																<div style="border:1px solid #000" class="col-md-6">
																	<h2>Warehouse Form </h2>

																	<form method="POST" action="{{route('submitWarehouse')}}">
																	@csrf
																		<label>Add Warehouse</label>
																		<input class="form-control" name="warehouse" type="text"/>
																		<label>Warehouse Address</label>
																		<input class="form-control" name="address" type="text"/>
																		<label>Warehouse PHone</label>
																		<input class="form-control" name="phone" type="text"/>
																		<hr/>
																		<input class="form-control" class="btn btn-primary white me-2" name="submit" type="submit"/>
																	</form>

																</div>

																<div style="border:1px solid #000" class="col-md-6">
																<h2>Warehouse Listing </h2>

																{{$warehouses}}

																
																</div>



																</div>
															</div>	
                                                        </div>



                                                        <div class="tab-pane fade " id="pos" role="tabpanel" aria-labelledby="pos-tab">
															<div class="form-group row">
																<div class="col-md-6">
																	<label >Default Customer</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">dhiman(+8820115121)</option>
																			  
																			<option value="WY">par(+33003)</option>
																			
																			<option value="WY">rar(+0123456789)</option>
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Warehouse </label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">Warehouse  1</option>
																			  
																			<option value="WY">Warehouse  2</option>
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Default Biller</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">David</option>
																			  
																			<option value="WY">Miller</option>
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Select Product</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary">Submit</button>
																</div>
			
															</div>	
														</div>
														<div class="tab-pane fade " id="email" role="tabpanel" aria-labelledby="email-tab">
															<div class="form-group row">
																<div class="col-md-6">
																	<label >SMTP</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="ac">Active</option>
																			  
																			<option value="ia">In Active</option>
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Mail Engine</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="SMTP">SMTP</option>
																			  
																			<option value="SM">Send Mail</option>
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >SMTP Host</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="SMTP Host">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >SMTP Port</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="SMTP Port">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Encryption</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="Encryption">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >SMTP Username</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="SMTP Username">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >SMTP Password </label>
																	<fieldset class="form-group mb-3">
																		<input type="password" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >From Email</label>
																	<fieldset class="form-group mb-3">
																		<input type="email" class="form-control border-dark"  placeholder="From Email">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >From Name</label>
																	<fieldset class="form-group mb-3">
																		<input type="email" class="form-control border-dark"  placeholder="From Name">
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary">Submit</button>
																</div>
			
															</div>	
														</div>
														<div class="tab-pane fade " id="sms" role="tabpanel" aria-labelledby="sms-tab">
															<div class="form-group row">
																<div class="col-md-12">
																	<label >Gateway</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">Twilio</option>
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >ACCOUNT SID</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark" id="ACCOUNTInput" placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >AUTH TOKEN</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark" id="AUTHInput" placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Twilio Number</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary">Submit</button>
																</div>
			
															</div>	
														</div>
														<div class="tab-pane fade " id="notification" role="tabpanel" aria-labelledby="notification-tab">
															<div class="form-group row">
																<div class="col-md-6">
																	<label >Default Notification</label>
																	<fieldset class="form-group mb-3">
																		<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																			<option value="AL">FCM</option>
																			  
																			<option value="WY">One Signal</option>
																			
																		  </select>
																	</fieldset>
																</div>
																<div class="col-md-6"></div>
																<div class="col-md-6">
																	<label >Onesignal App ID</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="" value="6053d948-b8f6-472a-87e4-379fa89f78d8">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Onsignal Sender ID</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="" value="50877237723">
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary">Submit</button>
																</div>
			
															</div>	
														</div>
														<div class="tab-pane fade " id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
															<div class="form-group row">
															
																<div class="col-md-6">
																	<label >Invoice Address</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Invoice Email</label>
																	<fieldset class="form-group mb-3">
																		<input type="email" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Mobile Number</label>
																	<fieldset class="form-group mb-3">
																		<input type="number" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Phone Number</label>
																	<fieldset class="form-group mb-3">
																		<input type="number" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Phone Number</label>
																	<fieldset class="form-group mb-3">
																		<input type="number" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >AInvoice Logo</label>
																	<fieldset class="form-group mb-3 border-dark rounded p-1">
																		<input type="file" class="d-block w-100" id="img" name="img" accept="image/*">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Invoice  Prefix</label>
																	<fieldset class="form-group mb-3">
																		<input type="number" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Invoice Footer Content</label>
																	<fieldset class="form-group mb-3">
																		<input type="number" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary">Submit</button>
																</div>
			
															</div>	
														</div>
														<div class="tab-pane fade " id="barcodes" role="tabpanel" aria-labelledby="barcodes-tab">
															<div class="form-group row">
																<div class="col-md-12">
																	<label >Sticker Sheet setting Name</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<label >Sticker Sheet setting Description</label>
																	<fieldset class="form-group mb-5">
																		<textarea class="form-control"  rows="3" placeholder="Sticker Sheet setting Description"></textarea>
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<fieldset>
																		<div class="checkbox mb-5">
																		  <input type="checkbox" class="checkbox-input" id="checkbox12" >
																		  <label for="checkbox12">Continous feed or rolls</label>
																		</div>
																	  </fieldset>
																</div>
																<div class="col-md-6">
																	<label >Additional top margin (In Inches)</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Height of sticker (In Inches)</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Width of sticker (In Inches)</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Height of sticker (In Inches)</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Paper width (In Inches)</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Paper height (In Inches)</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Stickers in one row</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Distance between two rows (In Inches)</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >Distance between two columns (In Inches)</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-6">
																	<label >No. of Stickers per sheet</label>
																	<fieldset class="form-group mb-3">
																		<input type="text" class="form-control border-dark"  placeholder="">
																	</fieldset>
																</div>
																<div class="col-md-12">
																	<fieldset>
																		<div class="checkbox mb-5">
																		  <input type="checkbox" class="checkbox-input" id="checkbox1" >
																		  <label for="checkbox1">Continous feed or rolls</label>
																		</div>
																	  </fieldset>
																</div>
																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary">Submit</button>
																</div>
															</div>	
													
														</div>
														<div class="tab-pane fade " id="emailtemp" role="tabpanel" aria-labelledby="emailtemp-tab">
														
															<ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
																<li class="nav-item">
																	<a class="nav-link active" id="amazingDeal-tab-center" data-bs-toggle="pill" href="#amazingDeal-center" role="tab" aria-controls="amazingDeal-center" aria-selected="true">
																	  Amazing Deals
																</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" id="forgetPassword-tab" data-bs-toggle="pill" href="#forgetPassword" role="tab" aria-controls="forgetPassword" aria-selected="false">
																		Forgot Password
																  </a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" id="newArrival-tab" data-bs-toggle="pill" href="#newArrival" role="tab" aria-controls="newArrival" aria-selected="false">
																		New Arrival
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" id="overallSale-tab" data-bs-toggle="pill" href="#overallSale" role="tab" aria-controls="overallSale" aria-selected="false">
																		Overall Sale
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" id="Sale-tab" data-bs-toggle="pill" href="#Sale" role="tab" aria-controls="Sale" aria-selected="false">
																	 Sale
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" id="signup-tab" data-bs-toggle="pill" href="#signup" role="tab" aria-controls="signup" aria-selected="false">
																		Signup
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" id="winterSale-tab" data-bs-toggle="pill" href="#winterSale" role="tab" aria-controls="winterSale" aria-selected="false">
																		Winter Sale
																	</a>
																</li>
															</ul>
															<div class="row">
				
																<div class="col-12 px-4">
																	<div class="tab-content" id="v-pills-tabContent">
																		<div class="tab-pane fade show active" id="amazingDeal-center" role="tabpanel" aria-labelledby="amazingDeal-tab-center">
																			<div class="form-group row">
																				<div class="col-md-12">
																					<label >Subject</label>
																					<fieldset class="form-group mb-3">
																						<input type="text" class="form-control border-dark"  placeholder="" value="Awesome Shop">
																					</fieldset>
																				</div>
																				<div class="col-md-12">
																					<label >Body</label>
																					<fieldset class="form-group mb-3">
																						<textarea class="form-control"  rows="8" placeholder="Label in Textarea" ></textarea>
																					</fieldset>
																				</div>
																			
																				<div class="col-md-12">
																					<button type="submit" class="btn btn-primary">Submit</button>
																				</div>
							
																			</div>	
																		</div>
																		<div class="tab-pane fade " id="forgetPassword" role="tabpanel" aria-labelledby="forgetPassword-tab">
																			<div class="form-group row">
																				<div class="col-md-12">
																					<label >Subject</label>
																					<fieldset class="form-group mb-3">
																						<input type="text" class="form-control border-dark"  placeholder="" value="Awesome Shop">
																					</fieldset>
																				</div>
																				<div class="col-md-12">
																					<label >Body</label>
																					<fieldset class="form-group mb-3">
																						<textarea class="form-control"  rows="8" placeholder="Label in Textarea" ></textarea>
																					</fieldset>
																				</div>
																			
																				<div class="col-md-12">
																					<button type="submit" class="btn btn-primary">Submit</button>
																				</div>
							
																			</div>	
																		</div>
																		<div class="tab-pane fade " id="newArrival" role="tabpanel" aria-labelledby="newArrival-tab">
																			<div class="form-group row">
																				<div class="col-md-12">
																					<label >Subject</label>
																					<fieldset class="form-group mb-3">
																						<input type="text" class="form-control border-dark"  placeholder="" value="Awesome Shop">
																					</fieldset>
																				</div>
																				<div class="col-md-12">
																					<label >Body</label>
																					<fieldset class="form-group mb-3">
																						<textarea class="form-control"  rows="8" placeholder="Label in Textarea" ></textarea>
																					</fieldset>
																				</div>
																			
																				<div class="col-md-12">
																					<button type="submit" class="btn btn-primary">Submit</button>
																				</div>
							
																			</div>	
																		</div>
																		<div class="tab-pane fade " id="overallSale" role="tabpanel" aria-labelledby="overallSale-tab">
																			<div class="form-group row">
																				<div class="col-md-12">
																					<label >Subject</label>
																					<fieldset class="form-group mb-3">
																						<input type="text" class="form-control border-dark"  placeholder="" value="Awesome Shop">
																					</fieldset>
																				</div>
																				<div class="col-md-12">
																					<label >Body</label>
																					<fieldset class="form-group mb-3">
																						<textarea class="form-control"  rows="8" placeholder="Label in Textarea" ></textarea>
																					</fieldset>
																				</div>
																			
																				<div class="col-md-12">
																					<button type="submit" class="btn btn-primary">Submit</button>
																				</div>
							
																			</div>	
																		</div>
																		<div class="tab-pane fade " id="Sale" role="tabpanel" aria-labelledby="Sale-tab">
																			<div class="form-group row">
																				<div class="col-md-12">
																					<label >Subject</label>
																					<fieldset class="form-group mb-3">
																						<input type="text" class="form-control border-dark"  placeholder="" value="Awesome Shop">
																					</fieldset>
																				</div>
																				<div class="col-md-12">
																					<label >Body</label>
																					<fieldset class="form-group mb-3">
																						<textarea class="form-control"  rows="8" placeholder="Label in Textarea" ></textarea>
																					</fieldset>
																				</div>
																			
																				<div class="col-md-12">
																					<button type="submit" class="btn btn-primary">Submit</button>
																				</div>
							
																			</div>	
																		</div>
																		<div class="tab-pane fade " id="signup" role="tabpanel" aria-labelledby="signup-tab">
																			<div class="form-group row">
																				<div class="col-md-12">
																					<label >Subject</label>
																					<fieldset class="form-group mb-3">
																						<input type="text" class="form-control border-dark"  placeholder="" value="Awesome Shop">
																					</fieldset>
																				</div>
																				<div class="col-md-12">
																					<label >Body</label>
																					<fieldset class="form-group mb-3">
																						<textarea class="form-control"  rows="8" placeholder="Label in Textarea" ></textarea>
																					</fieldset>
																				</div>
																			
																				<div class="col-md-12">
																					<button type="submit" class="btn btn-primary">Submit</button>
																				</div>
							
																			</div>	
																		</div>
																		<div class="tab-pane fade " id="winterSale" role="tabpanel" aria-labelledby="winterSale-tab">
																			<div class="form-group row">
																				<div class="col-md-12">
																					<label >Subject</label>
																					<fieldset class="form-group mb-3">
																						<input type="text" class="form-control border-dark"  placeholder="" value="Awesome Shop">
																					</fieldset>
																				</div>
																				<div class="col-md-12">
																					<label >Body</label>
																					<fieldset class="form-group mb-3">
																						<textarea class="form-control"  rows="8" placeholder="Label in Textarea" ></textarea>
																					</fieldset>
																				</div>
																			
																				<div class="col-md-12">
																					<button type="submit" class="btn btn-primary">Submit</button>
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
									
									</div>
								</div>
							</div>			
						</div>
						
					</div>
					
				</div>

@endsection