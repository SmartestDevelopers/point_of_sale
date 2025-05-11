@extends('layouts.front')

@section('content')
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Report</li>
									<li class="breadcrumb-item active" aria-current="page">Profit / Loss Report</li>
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
												<h3 class="card-label mb-0 font-weight-bold text-body">Profit / Loss Report
												</h3>
											</div>
											<div class="icons d-flex">
										
												<a href="#" onclick="printDiv2()" class="ms-2">
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
												<ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
													<li class="nav-item">
													  <a class="nav-link active" id="ProductPL-tab" data-bs-toggle="pill" href="#ProductPL" role="tab" aria-controls="ProductPL" aria-selected="true">
														<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
															<path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
															<path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
														  </svg>  
														Profit By Product</a>
													</li>
													<li class="nav-item">
													  <a class="nav-link" id="CategoriesPL-tab" data-bs-toggle="pill" href="#CategoriesPL" role="tab" aria-controls="CategoriesPL" aria-selected="false">
														<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
															<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
														  </svg>  
														  Profit By Categories
													  </a>
													</li>
													<li class="nav-item">
													  <a class="nav-link" id="BrandPL-tab" data-bs-toggle="pill" href="#BrandPL" role="tab" aria-controls="BrandPL" aria-selected="false">
														<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-check2-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
															<path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z"/>
														  </svg>
														  Profit By Brand
													  </a>
													</li>
													<li class="nav-item">
														<a class="nav-link" id="LocationPL-tab" data-bs-toggle="pill" href="#LocationPL" role="tab" aria-controls="LocationPL" aria-selected="false">
														  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															  <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
															  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
															  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
															</svg>
															Profit By Location
														</a>
													  </li>
													  <li class="nav-item">
														<a class="nav-link" id="invoicePL-tab" data-bs-toggle="pill" href="#invoicePL" role="tab" aria-controls="invoicePL" aria-selected="false">
														  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															  <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
															  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
															  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
															</svg>
															Profit By Invoice
														</a>
													  </li>
													  <li class="nav-item">
														<a class="nav-link" id="DatePL-tab" data-bs-toggle="pill" href="#DatePL" role="tab" aria-controls="DatePL" aria-selected="false">
														  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															  <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
															  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
															  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
															</svg>
															Profit By Date
														</a>
													  </li>
													  <li class="nav-item">
														<a class="nav-link" id="CustomerPL-tab" data-bs-toggle="pill" href="#CustomerPL" role="tab" aria-controls="CustomerPL" aria-selected="false">
														  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															  <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
															  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
															  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
															</svg>
															Profit By Customer
														</a>
													  </li>
													  <li class="nav-item">
														<a class="nav-link" id="DayPL-tab" data-bs-toggle="pill" href="#DayPL" role="tab" aria-controls="DayPL" aria-selected="false">
														  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															  <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
															  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
															  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
															</svg>
															Profit By Day
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
										<div class="tab-pane fade show active" id="ProductPL" role="tabpanel" aria-labelledby="ProductPL-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Profit BY Product
													</h3>
												</div>
												<div class="card-body">
													<div class=" table-responsive" id="printableTable1">
														<table id="ReportByProduct" class="display ">
															<thead class="text-body">
																<tr>
																	<th>
																	  Product
																	</th>
																	<th>Profit</th>
																	<th class="">Loss</th>
																</tr>
															</thead>
															<tbody class="kt-table-tbody text-dark">
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Acer</td>
																	<td class="">50.00</td>
																	<td class=""></td>
																</tr>
														
															</tbody>
															<tfoot>
																<tr class="kt-table-row kt-table-row-level-0">
																<th  >Total</th>
																<th class="">1000.0</th>
																<th class="">0.0</th>
															</tr>
															</tfoot>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="CategoriesPL" role="tabpanel" aria-labelledby="CategoriesPL-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Profit BY Categories
													</h3>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-md-4">
															<div class="form-group mb-0">
																<label class="text-dark" >Categories</label>
																	<select class="arabic-select w-100 h-30px">
																		<option value="1">All</option>

																	</select>
															  </div>
														</div>
													</div>
												</div>	
												<div class="card-body">
													<div class=" table-responsive" id="printableTable2">
														<table id="ReportByCategories" class="display ">
															<thead class="text-body">
																<tr>
																	<th>
																	  Category
																	</th>
																	<th>Profit</th>
																	<th class="">Loss</th>
																</tr>
															</thead>
															<tbody class="kt-table-tbody text-dark">
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Laptop</td>
																	<td class="">50.00</td>
																	<td class=""></td>
																</tr>
														
															</tbody>
															<tfoot>
																<tr class="kt-table-row kt-table-row-level-0">
																<th  >Total</th>
																<th class="">1000.0</th>
																<th class="">0.0</th>
															</tr>
															</tfoot>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="BrandPL" role="tabpanel" aria-labelledby="BrandPL-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Profit BY Brand
													</h3>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-md-4">
															<div class="form-group mb-0">
																<label class="text-dark" >Brand</label>
																	<select class="arabic-select w-100 h-30px">
																		<option value="1">All</option>
																		<option value="1">Armani</option>
																	</select>
															  </div>
														</div>
													</div>
												</div>
												<div class="card-body">
													<div class=" table-responsive" id="printableTable3">
														<table id="ReportByBrand" class="display ">
															<thead class="text-body">
																<tr>
																	<th>
																	  Brand
																	</th>
																	<th>Profit</th>
																	<th class="">Loss</th>
																</tr>
															</thead>
															<tbody class="kt-table-tbody text-dark">
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Acer</td>
																	<td class="">500.00</td>
																	<td class="">0.00</td>
																</tr>
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >hp</td>
																	<td class="">100.00</td>
																	<td class="">0.00</td>
																</tr>
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Dell</td>
																	<td class="">400.00</td>
																	<td class="">0.00</td>
																</tr>
														
															</tbody>
															<tfoot>
																<tr class="kt-table-row kt-table-row-level-0">
																<th  >Total</th>
																<th class="">1000.0</th>
																<th class="">0.00</th>
															</tr>
															</tfoot>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="LocationPL" role="tabpanel" aria-labelledby="LocationPL-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Profit BY Location
													</h3>
												</div>
												<div class="card-body">
													<div class=" table-responsive" id="printableTable4">
														<table id="ReportByLoc" class="display ">
															<thead class="text-body">
																<tr>
																	<th>
																		Location
																	</th>
																	<th>Profit</th>
																	<th class="">Loss</th>
																</tr>
															</thead>
															<tbody class="kt-table-tbody text-dark">
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Awesome Shop</td>
																	<td class="">50.00</td>
																	<td class=""></td>
																</tr>
														
															</tbody>
															<tfoot>
																<tr class="kt-table-row kt-table-row-level-0">
																<th  >Total</th>
																<th class="">1000.0</th>
																<th class="">0.0</th>
															</tr>
															</tfoot>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="invoicePL" role="tabpanel" aria-labelledby="invoicePL-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Profit BY Invoice
													</h3>
												</div>
												<div class="card-body">
													<div class=" table-responsive" id="printableTable">
														<table id="ReportByinvoice" class="display ">
															<thead class="text-body">
																<tr>
																	<th>
																		Invoice no
																	</th>
																	<th>Profit</th>
																	<th class="">Loss</th>
																</tr>
															</thead>
															<tbody class="kt-table-tbody text-dark">
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >A0000</td>
																	<td class="">50.00</td>
																	<td class=""></td>
																</tr>
														
															</tbody>
															<tfoot>
																<tr class="kt-table-row kt-table-row-level-0">
																<th  >Total</th>
																<th class="">1000.0</th>
																<th class="">0.0</th>
															</tr>
															</tfoot>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="DatePL" role="tabpanel" aria-labelledby="DatePL-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Profit BY Date
													</h3>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-md-4">
															<label class="text-dark" >Date Range</label>
															<input type="text" class="form-control w-100" name="daterange" value="01/01/2020 - 01/15/2020" />
														</div>
													</div>
												</div>	
												<div class="card-body">
													<div class=" table-responsive" id="printableTable5">
														<table id="ReportByDate" class="display ">
															<thead class="text-body">
																<tr>
																	<th>
																		Date
																	</th>
																	<th>Profit</th>
																	<th class="">Loss</th>
																</tr>
															</thead>
															<tbody class="kt-table-tbody text-dark">
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >02/12/2020</td>
																	<td class="">50.00</td>
																	<td class=""></td>
																</tr>
														
															</tbody>
															<tfoot>
																<tr class="kt-table-row kt-table-row-level-0">
																<th  >Total</th>
																<th class="">1000.0</th>
																<th class="">0.0</th>
															</tr>
															</tfoot>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="CustomerPL" role="tabpanel" aria-labelledby="CustomerPL-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Profit BY Customer
													</h3>
												</div>
												<div class="card-body">
													<div class=" table-responsive" id="printableTable6">
														<table id="ReportByCustomer" class="display ">
															<thead class="text-body">
																<tr>
																	<th>
																		Customer
																	</th>
																	<th>Profit</th>
																	<th class="">Loss</th>
																</tr>
															</thead>
															<tbody class="kt-table-tbody text-dark">
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Advid</td>
																	<td class="">50.00</td>
																	<td class=""></td>
																</tr>
														
															</tbody>
															<tfoot>
																<tr class="kt-table-row kt-table-row-level-0">
																<th  >Total</th>
																<th class="">1000.0</th>
																<th class="">0.0</th>
															</tr>
															</tfoot>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade " id="DayPL" role="tabpanel" aria-labelledby="DayPL-tab">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header border-0 align-items-center">
													<h3 class="card-label mb-0 font-weight-bold text-body">Profit BY Days
													</h3>
												</div>
												<div class="card-body">
													<div class=" table-responsive" id="printableTable7">
														<table id="ReportByDay" class="display ">
															<thead class="text-body">
																<tr>
																	<th>
																		Days
																	</th>
																	<th>Profit</th>
																	<th class="">Loss</th>
																</tr>
															</thead>
															<tbody class="kt-table-tbody text-dark">
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Monday</td>
																	<td class="">50.00</td>
																	<td class=""></td>
																</tr>
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Tuesday</td>
																	<td class="">500.00</td>
																	<td class=""></td>
																</tr>
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Wednesday</td>
																	<td class="">200.00</td>
																	<td class=""></td>
																</tr>
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Thursday</td>
																	<td class="">200.00</td>
																	<td class=""></td>
																</tr>
																<tr class="kt-table-row kt-table-row-level-0">
																
																	<td  >Friday</td>
																	<td class="">200.00</td>
																	<td class=""></td>
																</tr>
														
															</tbody>
															<tfoot>
																<tr class="kt-table-row kt-table-row-level-0">
																<th  >Total</th>
																<th class="">1000.0</th>
																<th class="">0.0</th>
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

@endsection