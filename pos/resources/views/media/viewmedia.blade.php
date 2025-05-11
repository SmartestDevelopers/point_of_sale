@extends('layouts.front')

@section('content')

				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Add New Image </li>
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
									<div class="card card-custom bg-transparent shadow-none border-0 mb-0" >
										<div class="card-header align-items-center  border-bottom-dark px-0">
											<div class="card-title mb-0">
												<h3 class="card-label mb-0 font-weight-bold text-body">Manage Media
												</h3>
											</div>
									
										</div>
									
									</div>


								</div>

							</div>
							<div class="row">
								<div class="col-12 px-4">
									
									<div class="media-categories">
										<ul class="nav nav-pills justify-content-start  mb-0" id="pills-tab" role="tablist">
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none active me-4 mb-4" id="All-tab-center" data-bs-toggle="pill" href="#All-center" role="tab" aria-controls="All-center" aria-selected="true">
												  All
											</a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="general-tab-center" data-bs-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="false">
													General
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link btn-light-dark shadow-none me-4 mb-4" id="Fashion-tab-center" data-bs-toggle="pill" href="#Fashion" role="tab" aria-controls="Fashion" aria-selected="false">
													Fashion
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="grocery-tab-center" data-bs-toggle="pill" href="#grocery" role="tab" aria-controls="grocery" aria-selected="false">
													Grocery
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link btn-light-dark shadow-none me-4 mb-4" id="Other-tab-center" data-bs-toggle="pill" href="#Other" role="tab" aria-controls="Other" aria-selected="false">
													Other
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="Icons-tab-center" data-bs-toggle="pill" href="#Icons" role="tab" aria-controls="Icons" aria-selected="false">
													Icons
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="Logos-tab-center" data-bs-toggle="pill" href="#Logos" role="tab" aria-controls="Logos" aria-selected="false">
													Logos
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="Category-tab-center" data-bs-toggle="pill" href="#Category" role="tab" aria-controls="Category" aria-selected="false">
													Category
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="News-tab-center" data-bs-toggle="pill" href="#News" role="tab" aria-controls="News" aria-selected="false">
													News
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="Blog-tab-center" data-bs-toggle="pill" href="#Blog" role="tab" aria-controls="Blog" aria-selected="false">
													Blog
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="Furniture-tab-center" data-bs-toggle="pill" href="#Furniture" role="tab" aria-controls="Furniture" aria-selected="false">
													Furniture
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link btn-light-dark shadow-none me-4 mb-4" id="Shoes-tab-center" data-bs-toggle="pill" href="#Shoes" role="tab" aria-controls="Shoes" aria-selected="false">
													Shoes
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link btn-light-dark shadow-none me-4 mb-4" id="Jewellery-tab-center" data-bs-toggle="pill" href="#Jewelleryv" role="tab" aria-controls="Jewellery" aria-selected="false">
													Jewellery
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="Glasses-tab-center" data-bs-toggle="pill" href="#Glasses" role="tab" aria-controls="Glasses" aria-selected="false">
													Glasses
											  </a>
											</li>
											<li class="nav-item">
												<a class="nav-link  btn-light-dark shadow-none me-4 mb-4" id="Flowers-tab-center" data-bs-toggle="pill" href="#Flowers" role="tab" aria-controls="Flowers" aria-selected="false">
													Flowers
											  </a>
											</li>
										</ul>
									</div>
								
								</div>
							</div>
							<div class="row">
								
								<div class="col-12  px-4">
									<div id="generalmedia" class= "media0 linked card card-custom gutter-b bg-white border-0"  >
										<div class="card-header border-0 align-items-center">
											<fieldset>
												<div class="checkbox d-flex align-items-center" >
												<input type="checkbox" class="checkbox-input" id="checkbox1" >
												<span class="ms-2 changeme text-dark">Select All <small class="text-muted">(1 Item Selected)</small></span> 
												</div>
											</fieldset>
											<div class="icons d-flex">
											
												<button type="button" class="btn btn-danger p-2 ms-2" title="Delete" id="confirm-color">Delete</button>
											
												<button type="button" title="Add New" class="btn btn-primary white p-2 ms-2" data-bs-toggle="modal" data-bs-target="#imagepopup">
													Add New
												</button>
												<!--Basic Modal -->
												<div class="modal fade text-left" id="imagepopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
													<div class="modal-dialog " role="document">
													<div class="modal-content">
														<div class="modal-header">
														<h3 class="modal-title" id="myModalLabel1">Add File Here</h3>
														<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-bs-dismiss="modal" aria-label="Close">
															<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
															</svg>
														</button>
												
														</div>
														<div class="modal-body">
														<p>
															Click or Drop Images in the Box for Upload.
														</p>
														<div class="avatar-upload mb-3">
															<div class="avatar-edit">
																<input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
																<label for="imageUpload">
																	image upload
																</label>
															</div>
															<div class="avatar-preview">
																<div id="imagePreview" class="rounded" style="background-image: url(assets/images/carousel/slide3.jpg);">
																</div>
															</div>
														</div>
														<fieldset class="form-group">
															<select class="js-example-basic-multiple js-states form-control" name="states[]" multiple="multiple">
																<option selected value="AL">ALL</option>
															
																<option value="WY">
																	General</option>
															  </select>
														</fieldset>
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-light" data-bs-dismiss="modal">
														
															<span class="">Close</span>
														</button>
														<button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
														
															<span class="">Submit</span>
														</button>
														</div>
													</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-content" id="v-pills-tabContent">
											<div class="tab-pane fade show active" id="All-center" role="tabpanel" aria-labelledby="All-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="{{ url('assets/images/carousel/slide2.jpg')}}" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore" >
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 loadingmore">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-12 px-4">
														<nav aria-label="navigation">
															<div class="pagination d-flex justify-content-end align-items-center">
																<div class="me-2 text-dark">(Showing result <span id="numbering">12</span> out of <span id="totalnumber"></span> )</div>
															  <a class="btn btn-secondary white" href="#" id="loadMore">Load More</a>
															</div>
														</nav>
													</div>
												
												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="general" role="tabpanel" aria-labelledby="general-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Fashion" role="tabpanel" aria-labelledby="Fashion-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="grocery" role="tabpanel" aria-labelledby="grocery-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Other" role="tabpanel" aria-labelledby="Other-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="{{ asset('point-of-sale/assets/images/carousel/element-banner4-2.jpg')}}" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="{{ asset('point-of-sale/assets/images/carousel/full-banner.jpg')}}" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Icons" role="tabpanel" aria-labelledby="Icons-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Logos" role="tabpanel" aria-labelledby="Logos-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Category" role="tabpanel" aria-labelledby="Category-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="News" role="tabpanel" aria-labelledby="News-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Blog" role="tabpanel" aria-labelledby="Blog-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Furniture" role="tabpanel" aria-labelledby="Furniture-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="{{ asset('point-of-sale/assets/images/carousel/element-banner4-2.jpg')}}" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Shoes" role="tabpanel" aria-labelledby="Shoes-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Jewellery" role="tabpanel" aria-labelledby="Jewellery-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Glasses" role="tabpanel" aria-labelledby="Glasses-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>

												
													</div>
												</div>
											</div>
											<div class="tab-pane fade " id="Flowers" role="tabpanel" aria-labelledby="Flowers-tab-center">
												<div class="card-body" >
													<div class="row">
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4 active">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/slide2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner1-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-center.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner3-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-1.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-2.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner4-3.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/full-banner.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-left.jpg" alt="image">
															</a>
															</div>
														</div>
													</div>
													<div class="col-6 col-sm-4 col-md-3 col-lg-4  col-xl-3 LOADINGMORE">
														<div class="thumbnail text-center  mb-4">
															<div class="detail-link">
																<a href="media-detail.html" class="btn btn-link d-flex justify-content-center align-items-center flex-column ">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
																		<g>
																			<g>
																				<g>
																					<path  d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"/>
																				</g>
																			</g>
																			<g>
																				<g>
																					<path  d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"/>
																				</g>
																			</g>
																		</g>
																		</svg>
																	View Detail
																</a>
															</div>
															<div class="thumbnail-imges mb-2 ">
																<a class="img-select d-block" href="javascript:void(0);">
																<img class="img-fluid" src="assets/images/carousel/element-banner2-right.jpg" alt="image">
															</a>
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