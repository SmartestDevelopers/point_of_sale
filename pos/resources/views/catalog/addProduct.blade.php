@extends('layouts.front')

@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Add Product</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end::Subheader-->
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container-fluid addproduct-main">
						
							<div class="row">
								<div class="col-lg-12 col-xl-12 px-4">
									<div class="card card-custom gutter-b bg-transparent shadow-none border-0" >
										<div class="card-header align-items-center   border-bottom-dark px-0">
											<div class="card-title mb-0">
												<h3 class="card-label mb-0 font-weight-bold text-body">Add Product 
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
										<div class="card-body pb-0 pt-4 ">
											<div class="d-flex justify-content-center">
												<ul class="nav nav-pills mb-0" id="pills-tabmain" role="tablist">
													<li class="nav-item">
													  <a class="nav-link active" id="info-tab" data-bs-toggle="pill" href="#info" role="tab" aria-controls="info" aria-selected="true">
														<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
															<path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
															<path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
														  </svg>  
														Basic Info</a>
													</li>
													<li class="nav-item">
													  <a class="nav-link" id="ad-info-tab" data-bs-toggle="pill" href="#ad-info" role="tab" aria-controls="ad-info" aria-selected="false">
														<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
															<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
														  </svg>  
														Advance Info
													  </a>
													</li>
													<li class="nav-item">
													  <a class="nav-link" id="pricing-tab" data-bs-toggle="pill" href="#pricing" role="tab" aria-controls="pricing" aria-selected="false">
														<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-check2-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
															<path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z"/>
														  </svg>
														  Pricing
													  </a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="seo-tab" data-bs-toggle="pill" href="#seo" role="tab" aria-controls="seo" aria-selected="false">
														  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															  <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
															  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
															  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
															</svg>
															Seo
														</a>
													  </li>
												  </ul>
											</div>
										
										</div>
									</div>


								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-xl-12 px-4">
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Product Information
													</h3>
												</div>
											
											
												<div class="card-body" id="printableTable">
													<div class="row">

													<h2 class="mb-4">Add New Product</h2>
    <form>
      <!-- Product Name -->
	  <div class="row">

      <div class="col-md-4 mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
      </div>

      <!-- Product Category -->
      <div class="col-md-4 mb-3">
        <label for="productCategory" class="form-label">Product Category</label>
        <select class="form-select" id="productCategory" required>
          <option selected disabled>Choose category</option>
          <option value="Beverages">Beverages</option>
          <option value="Snacks">Snacks & Confectionery</option>
          <option value="Dairy">Dairy & Eggs</option>
          <option value="Fruits">Fruits & Vegetables</option>
          <option value="Bakery">Bakery & Breads</option>
          <option value="Meat">Meat & Seafood</option>
          <option value="Frozen">Frozen Foods</option>
          <option value="Household">Household Supplies</option>
          <option value="Health">Health & Personal Care</option>
          <option value="Grocery">Groceries & Dry Goods</option>
        </select>
      </div>

      <!-- Product Unit -->
      <div class="col-md-4 mb-3">
        <label for="productUnit" class="form-label">Product Unit</label>
        <select class="form-select" id="productUnit" required>
          <option selected disabled>Choose unit</option>
          <option value="pcs">Piece (pcs)</option>
          <option value="kg">Kilogram (kg)</option>
          <option value="g">Gram (g)</option>
          <option value="L">Liter (L)</option>
          <option value="ml">Milliliter (ml)</option>
          <option value="pack">Pack</option>
          <option value="box">Box</option>
          <option value="dozen">Dozen</option>
          <option value="m">Meter (m)</option>
          <option value="sqm">Square Meter (sqm)</option>
        </select>
      </div>

      <!-- Price -->
      <div class="col-md-4 mb-3">
        <label for="productPrice" class="form-label">Price</label>
        <input type="number" class="form-control" id="productPrice" placeholder="Enter price" step="0.01" required>
      </div>

      <!-- Product Code -->
      <div class="col-md-4 mb-3">
        <label for="productCode" class="form-label">Product Code</label>
        <input type="text" class="form-control" id="productCode" placeholder="e.g., SKU12345" required>
      </div>

      <!-- Product Image -->
      <div class="col-md-4 mb-3">
        <label for="productImage" class="form-label">Product Image</label>
        <input class="form-control" type="file" id="productImage" accept="image/*">
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
	</div>
  </div>



														<div class="col-md-4 col-12">
															<div class="bg-light h-300px mb-3  d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																<i class="fas fa-plus"></i>
															</div>
															<div class="row ">
											
																<div class="col-12 px-4">
																	<div class="addproduct-js row">                        
																		<div class="">
																				<div class="thumb h-70px bg-light  d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																					<i class="fas fa-plus"></i>
																				</div>
																		</div>   
																			<div class="">
																				<div class="thumb h-70px bg-light  d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																					<i class="fas fa-plus"></i>
																				</div>
																			</div>  
																			<div class="">
																				<div class="thumb h-70px bg-light  d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																					<i class="fas fa-plus"></i>
																				</div>
																			</div>  
																			<div class="">
																				<div class="thumb h-70px bg-light  d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																					<i class="fas fa-plus"></i>
																				</div>
																		</div>   
																		<div class="">
																			<div class="thumb h-70px bg-light  d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#quickViewModal">
																				<i class="fas fa-plus"></i>
																			</div>
																		</div>   
																	</div>  
																</div>
															  </div>
															  <div class="row mt-5">
																  <div class="col-12 px-4">
																	<div class="switch-h d-flex justify-content-between align-items-center border p-2 mb-3">
																		<h4 class="font-size-h4 text-dark mb-0">Embed Video</h4>
																		<div class="custom-control switch custom-switch-info custom-switch form-check form-switch custom-control-inline me-0">
																			<input type="checkbox" class="custom-control-input form-check-input" checked="" id="customSwitchcolor5">
																			<label class="custom-control-label form-check-label me-1" for="customSwitchcolor5">
																			</label>
																		  </div>
																	</div>
																	 <label >Video Embeded Code</label>
																	 <fieldset class="form-label-group mb-3">
																		<textarea class="border-dark w-100 fixed-size" id="horizontalTextarea" rows="4" placeholder="Textarea" style="outline: none;"></textarea>
																	
																	</fieldset>
																  </div>
																  <div class="col-12 px-4">
																	  <label > Video Display Setting</label>
																	<ul class="list-unstyled mb-0">
																		<li class=" mb-1">
																		  <fieldset>
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
																				<label class="form-check-label" for="exampleRadios1">
																				Display as first side for image slider
																				</label>
																			</div>
																		  </fieldset>
																		</li>
																		<li class=" mb-1">
																		  <fieldset>
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio21" value="option2">
																				<label class="form-check-label" for="inlineRadio21">Display After Product Description</label>
																			</div>
																		  </fieldset>
																		</li>
																		<li class=" mb-1">
																			<fieldset>
																			  <div class="form-check form-check-inline">
																				  <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio22" value="option2">
																				  <label class="form-check-label" for="inlineRadio22">Display In Tab</label>
																			  </div>
																			</fieldset>
																		  </li>
																	
																	  </ul>
																  </div>
															  </div>
														</div>
														<div class="col-md-4 col-12">
															<label >Units</label>
															<select class="single-select w-100 mb-3 categories-select">
																
																@foreach($productUnits as $rowUnit)

																<option value="{{$rowUnit->id}}">{{$rowUnit->unit_name}}</option>
																@endforeach
																
															  </select>
															 

															<label >Categories</label>
															<select class="single-select w-100 mb-3 categories-select">
																@foreach($productCategories as $rowCategories)
																	<option value="{{$rowCategories->id}}">{{$rowCategories->category_name}}</option>
																@endforeach
																
															  </select>
															  <ul class="nav nav-pills lang-tab" id="pills-tab1" role="tablist">
																<li class="nav-item ">
																	<a class="nav-link btn-light active shadow-none rounded-0" id="home-tab-basic" data-bs-toggle="pill" href="#home-basic" role="tab" aria-controls="home-basic" aria-selected="true">
																	  Home
																</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link btn-light shadow-none rounded-0" id="service-tab-basic" data-bs-toggle="pill" href="#service-basic" role="tab" aria-controls="service-basic" aria-selected="false">
																	Service
																  </a>
																</li>
																
															</ul>
															<div class="row">
				
																<div class="col-12 px-4">
																	<div class="tab-content lang-content" id="v-pills-tabContent">
																		<div class="tab-pane fade show active" id="home-basic" role="tabpanel" aria-labelledby="home-tab-basic">
																			<h6 class="text-body">
																			Product Name
																			</h6>
																			<fieldset class="form-group mb-3">
																				<form id="myform">
																					<input type="text" class="form-control bg-transparent text-dark" id="basicInput" placeholder="Product Name">
								
																				</form>
																			</fieldset>
																			<h6 class="text-body">
																				Description
																			</h6>
																			<div class="row mb-3">
																				<div class="col-12 overflow-hidden">
																					<div id="editor" class="bg-transparent text-dark">
																							
																					</div>
																				</div>
																				
																			</div>
																			<h6 class="text-body">
																				Tags
																			</h6>
																			<div class="row ">
																				<div class="col-12  px-4" data-select2-id="173">
																					<fieldset class="form-group mb-0">
																						<select class="js-example-basic-multiple js-states form-control" name="states[]" multiple="multiple">
																					
																					<option selected value="AL">Alabama</option>
																					 
																					<option value="WY">Wyoming</option>
																				  </select>
																					</fieldset>
																				</div>
																			</div>		
																		

																		</div>
																		<div class="tab-pane fade " id="service-basic" role="tabpanel" aria-labelledby="service-tab-basic">
																			<p class="text-dark">
																				..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lorem est, vestibulum eu ex ac, mattis aliquam turpis. Vivamus sed orci nibh. Donec scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lorem est, vestibulum
																				eu ex ac, mattis aliquam turpis. Vivamus sed orci nibh. Donec scelerisque
																			</p>
																		</div>
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										  <div class="row">
											  <div class="col-12 d-flex justify-content-end">
												<a data-bs-toggle="pill" href="#ad-info" class="btn btn-primary cta">Continue</a>
											  </div>
										  </div>
										</div>
										<div class="tab-pane fade " id="ad-info" role="tabpanel" aria-labelledby="ad-info-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Advance Information
													</h3>
												</div>
												<div class="card-body">
													<form>
														<div class="form-group row">
															<div class="col-md-4">
																<div class="switch-h d-flex justify-content-between align-items-center border p-2 mb-3">
																	<h4 class="font-size-h4 text-dark mb-0">In Active</h4>
																	<div class="custom-control switch custom-switch-info custom-switch form-check form-switch custom-control-inline me-0">
																		<input type="checkbox" class="custom-control-input form-check-input" checked="" id="customSwitchcolor445">
																		<label class="custom-control-label form-check-label me-1" for="customSwitchcolor445">
																		</label>
																	  </div>
																</div>
															</div>
															<div class="col-md-4">
																<div class="switch-h d-flex justify-content-between align-items-center border p-2 mb-3">
																	<h4 class="font-size-h4 text-dark mb-0">Is Feature</h4>
																	<div class="custom-control switch custom-switch-info custom-switch form-check form-switch custom-control-inline me-0">
																		<input type="checkbox" class="custom-control-input form-check-input" checked="" id="features">
																		<label class="custom-control-label form-check-label me-1" for="features">
																		</label>
																	  </div>
																</div>
															</div>
															<div class="col-md-4">
																<label >Units</label>
																<fieldset class="form-group mb-3">
																	<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																		<option value="AL">Alabama</option>
																		
																		<option value="WY">Wyoming</option>
																	  </select>
																</fieldset>
															</div>
															<div class="col-md-4">
																<label >Product Weight</label>
																<fieldset class="form-group mb-3">
																	<input type="text" id="weight" class="form-control round bg-transparent text-dark" placeholder="Enter Weight">
																</fieldset>
															</div>
															<div class="col-md-4">
																<label >Minimum Order</label>
																<fieldset class="form-group mb-3">
																	<input type="text" id="type" class="form-control round bg-transparent text-dark" placeholder="Type Here">
																</fieldset>
															</div>
															<div class="col-md-4">
																<label >Maximum Order</label>
																<fieldset class="form-group mb-3">
																	<input type="text" id="type-max" class="form-control round bg-transparent text-dark" placeholder="Type Here">
																</fieldset>
															</div>

														</div>
													</form>

												</div>
											
											</div>
											<div class="row">
												<div class="col-12 d-flex justify-content-end">
													<a data-bs-toggle="pill" href="#info" class="btn btn-dark swipe-to-top cta ">Back</a>
												<a data-bs-toggle="pill" href="#pricing" class="btn btn-primary swipe-to-top cta ms-2">Continue</a>
												</div>
											</div>
										
										</div>
										<div class="tab-pane fade status-tab-style" id="pricing" role="tabpanel" aria-labelledby="pricing-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Pricing
													</h3>
												</div>
												<div class="card-body">
													<form>
														<div class="form-group row">
															<div class="col-md-4">
																<label >Price</label>
																<fieldset class="form-group mb-3">
																	<input type="text" id="weight1" class="form-control round bg-transparent text-dark" placeholder="Enter Price">
																</fieldset>
															</div>
															<div class="col-md-4">
																<label >Discount</label>
																<fieldset class="form-group mb-3">
																	<input type="text" id="type2" class="form-control round bg-transparent text-dark" placeholder="Enter Discount">
																</fieldset>
															</div>
															<div class="col-md-4">
																<label >Flash</label>
																<div class="switch-h d-flex justify-content-between align-items-center border p-2 mb-3">
																	<h4 class="font-size-h4 text-dark mb-0">Flash Sale</h4>
																	<div class="custom-control switch custom-switch-info custom-switch form-check form-switch custom-control-inline me-0">
																		<input type="checkbox" class="custom-control-input form-check-input" checked="" id="flash">
																		<label class="custom-control-label form-check-label me-1" for="flash">
																		</label>
																	  </div>
																</div>
															</div>
															<div class="col-md-4">
																<label >Units</label>
																<fieldset class="form-group mb-3">
																	<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																		<option value="AL">Alabama</option>
																		
																		<option value="WY">Wyoming</option>
																	  </select>
																</fieldset>
															</div>
															<div class="col-12 px-4">
																<div class="row">
																	<div class="col-md-4">
																		<label >Product Type</label>
																		<fieldset class="form-group mb-3">
																			<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																				<option value="AL">Alabama</option>
																				 
																				<option value="WY">Wyoming</option>
																			  </select>
																		</fieldset>
																	  </div>
																</div>
														
															</div>
															<div class="col-12 px-4">
																<div class="row">
																	<div class="col-md-4">
																		<label >Select</label>
																		<fieldset class="form-group mb-3 d-flex">
																			<select id="slc" class="js-Select js-states form-control bg-transparent" name="state">
																				<option value="Color">Color</option>
																				 
																				<option value="Size">Size</option>
																			  </select>
																			  <a href="javascript:void(0)" class="btn-secondary btn ms-2 white pt-1 pb-1" onclick="myselect()">ADD</a>
																		</fieldset>
																	  </div>
																</div>
														
															</div>
															<div class="col-12 px-4">
																<div class="row">
																	<div  id="Size" class="col-md-4 selected-input" style="display: none;">
																		<div class="bg-light p-2 d-flex align-items-center  position-relative mb-3"  >
																			<label  class="mr-3 mb-0">Size</label>
																		
																			<fieldset class="form-group w-100 mb-0">
																				<select class="js-size-multiple js-states form-control" id="sizeSelect" name="states[]" multiple="multiple"  onchange="mysizeSelect()">
																			
																			<option  value="Xl">Xl</option>
																			 
																			<option value="Sm">Sm</option>
																			<option value="Lg">Lg</option>
																		  </select>
																			</fieldset>
																			<a href="javascript:void(0)" id="remove-s" class="remove-icon" >
																				<svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-x-octagon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path fill-rule="evenodd" d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
																					<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
																				  </svg>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-12 px-4">
																<div class="row">
																	<div  id="Color" class="col-md-4 selected-input" style="display: none;">
																		<div class="bg-light p-2 d-flex align-items-center position-relative"  >
																			<label  class="mr-3 mb-0">Color</label>
																			
																			<fieldset class="form-group w-100 mb-0">
																				<select class="js-size-multiple js-states form-control" id="selectColor" name="states[]" multiple="multiple" onchange="mysizeSelect()">
																			
																			<option  value="Brown">Brown</option>
																			
																			<option value="Red">Red</option>
																		  </select>
																			</fieldset>
																			<a href="javascript:void(0)" id="remove-c" class="remove-icon " >
																				<svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-x-octagon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path fill-rule="evenodd" d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1L1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
																					<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
																				  </svg>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														

														</div>
													</form>
													
														<table class="table table-bordered"	>
															<thead>
															  <tr class="row m-0 text-center">
																<th scope="col" class="col-2" >Color</th>
																<th scope="col" class="col-2">Size</th>
																<th scope="col" class="col-3">SKU</th>
																<th scope="col" class="col-2">Image</th>
																<th scope="col" class="col-3">Price</th>
															  </tr>
															</thead>
															<tbody id ="table-show" style="display: none;">
															  <!-- <tr class="row m-0 text-center">
																<td  class="col-2">Brown</td>
																<td class="col-2">Medium</td>
																<td class="col-3 d-flex justify-content-center">
																	<input type="text" class="form-control w-150px text-center" id="disabledInput" placeholder="Credit Card" disabled="">
																</td>
																<td class="col-2">
																	<img src="./assets/images/carousel/slide1.jpg" class="h-45px w-45px img-fluid" alt="img">
																</td>
																<td class="col-3 d-flex justify-content-center">
																	<input type="text" class="form-control w-150px text-center" id="disabledInput" placeholder="Credit Card" disabled="">
																</td>
															  </tr>
															  <tr class="row m-0 text-center">
																<td  class="col-2">Red</th>
																<td class="col-2">Large</td>
																<td class="col-3 d-flex justify-content-center">
																	<input type="text" class="form-control w-150px text-center" id="disabledInput" placeholder="Credit Card" disabled="">
																</td>
																<td class="col-2">
																	<img src="./assets/images/carousel/slide1.jpg" class="h-45px w-45px img-fluid" alt="img">
																</td>
																<td class="col-3 d-flex justify-content-center ">
																	<input type="text" class="form-control w-150px text-center" id="disabledInput" placeholder="Credit Card" disabled="">
																</td>
															  </tr>
															   -->
															</tbody>
														  </table>
												
													
												</div>
											</div>
											<div class="row">
												<div class="col-12 d-flex justify-content-end">
													<a data-bs-toggle="pill" href="#ad-info" class="btn btn-dark swipe-to-top cta ">Back</a>
												<a data-bs-toggle="pill" href="#seo" class="btn btn-primary swipe-to-top cta ms-2">Continue</a>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="seo" role="tabpanel" aria-labelledby="seo-tab">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Meta Tags
													</h3>
												</div>
												<div class="card-body">
													<form>
														<div class="form-group row">
															<div class="col-12 px-4">
																<label >Meta Title</label>
																<fieldset class="form-group mb-3">
																	<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																		<option value="AL">Alabama</option>
																		 
																		<option value="WY">Wyoming</option>
																	  </select>
																</fieldset>
															</div>
															<div class="col-12 px-4">
																<label >Discription</label>
																<fieldset class="form-label-group mb-3">
																	<textarea class="border-dark w-100 fixed-size" id="horizontalTextarea2" rows="6" placeholder="Textarea" style="outline: none;"></textarea>
																
																</fieldset>
															</div>
															<div class="col-12 px-4">
																<label >Meta Image</label>
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="customFile">
																	<label class="custom-file-label" for="customFile">Upload Image</label>
																  </div> 
															</div>
														</div>
													</form>		
												</div>
											</div>
											<div class="row">
												<div class="col-12 d-flex justify-content-end">
													<a data-bs-toggle="pill" href="#pricing" class="btn btn-dark swipe-to-top cta ">Back</a>
												<a data-bs-toggle="pill" href="#" class="btn btn-primary swipe-to-top cta ms-2">Save</a>
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