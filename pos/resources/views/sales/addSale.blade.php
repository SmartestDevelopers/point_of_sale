@extends('layouts.front')

@section('content')



<!DOCTYPE html>
<html>

<head>
<!-- Bootstrap CSS CDN -->
<link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity=
"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
      crossorigin="anonymous">
</head>

<body>
  

<!-- Bootstrap JS CDN -->
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity=
"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous">
    </script>
<!-- jQuery CDN -->
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
            integrity=
"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
            crossorigin="anonymous" referrerpolicy="no-referrer">
      </script>
<script>
    $(document).ready(() => {
        let count=1;

        // Adding row on click to Add New Row button
        $('#addBtn').click(function () {
            let dynamicRowHTML = `
            <tr class="rowClass""> 
                <td class="row-index text-center"> 
                    Name Row ${count}
                </td> 
                <td class="row-index text-center"> 
                    Code ${count}
                </td> 
				<td class="row-index text-center"> 
                    Quantity ${count}
                </td> 
				<td class="row-index text-center"> 
                    Cost ${count}
                </td> 
				<td class="row-index text-center"> 
                    Discount ${count}
                </td> 
				<td class="row-index text-center"> 
                    Tax ${count}
                </td> 
				<td class="row-index text-center"> 
                    Subtotal ${count}
                </td> 
                <td class="text-center"> 
                    <button class="btn btn-danger remove"
                        type="button">Remove
                    </button> 
                </td> 
            </tr>`;
            $('#tbody').append(dynamicRowHTML);
            count++;
        });

        // Removing Row on click to Remove button
        $('#tbody').on('click', '.remove', function () {
            $(this).parent('td.text-center').parent('tr.rowClass').remove(); 
        });
    })
</script>
</body>

</html>



	<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Sales</li>
									<li class="breadcrumb-item active" aria-current="page">Add Sale</li>
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
									<div class="card card-custom gutter-b bg-white border-0" >
										<div class="card-body">
											<form>
												<div class="form-group row">
													<div class="col-md-2">
														<label  class="text-body">Select Quotation(if any)</label>
														<fieldset class="form-group mb-3">
															<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																<option value="AL">5522-655</option>
																  
																<option value="WY">00151-444</option>
															  </select>
														</fieldset>
													</div>

                                                    
													<div class="col-md-2">
														<label  class="text-body">Select Warehouse</label>
														<fieldset class="form-group mb-3">
															<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																<option value="AL">Warehouse 1</option>
																  
																<option value="WY">Warehouse 2</option>
															  </select>
														</fieldset>
													</div>
													<div class="col-md-2">
														<label  class="text-body">Select Biller</label>
														<fieldset class="form-group mb-3">
															<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																<option value="AL">Biller a</option>
																  
																<option value="WY">Biller b</option>
															  </select>
														</fieldset>
													</div>
													<div class="col-md-2">
														<label  class="text-body">Select Customer</label>
														<fieldset class="form-group mb-3">
															<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																<option value="AL">Joe </option>
																  
																<option value="WY">Bae</option>
																
																<option value="WY">Beden</option>
															  </select>
														</fieldset>
													</div>
													<div class="col-md-2">
														<label  class="text-body">Customer Address</label>
														<fieldset class="form-group mb-3">
															<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
																<option value="AL">Joe road singapur </option>
															  </select>
														</fieldset>
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
												<div class="col-md-12">
													<label  class="text-body">Select Product</label>
													<fieldset class="form-group mb-3 d-flex">
														<input type="text" name="text"  class="form-control bg-white" id="exampleInputText" value="Polo Sweatshirt" >
														<a href="javascript:void(0)" class="btn-secondary btn ms-2 white pt-1 pb-1 d-flex align-items-center justify-content-center">ADD</a>
                                                         <button class="btn btn-md btn-primary" id="addBtn" type="button"> Add New Row</button>
													</fieldset>
												</div>
                                                  <div class="container pt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">
                              Name
                          </th>
                           <th class="text-center">
                              Code
                          </th>
						  <th class="text-center">
                              Quantity
                          </th>
						  <th class="text-center">
                              Cost
                          </th>
						  <th class="text-center">
                              Discount
                          </th>
						  <th class="text-center">
                              Tax
                          </th>
						  <th class="text-center">
                              Subtotal
                          </th>
                        <th class="text-center">
                              Remove Row
                          </th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
       
    </div>

												<div class="col-12 px-4">
													<div class="table-responsive"  id="printableTable">
														<table class="table table-striped  text-body">
															<thead>
															  <tr class=""> 
																<th class="border-0  header-heading" scope="col">Name</th>
																<th class="border-0  header-heading" scope="col">Code</th>
																<th class="border-0  header-heading" scope="col">Quantity</th>
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
																<td >
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
																<td >
																	<input type="number" class="form-control" id="basicInput2" placeholder="Enter Quantity" value="0">
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
																  <th class="border-0  header-heading" scope="col">0</th>
															 
																  <th class="border-0  header-heading" scope="col"></th>
																  <th class="border-0  header-heading" scope="col">0.00</th>
																  <th class="border-0  header-heading" scope="col">25.04</th>
																  <th class="border-0  header-heading" scope="col">192.0</th>
																  <th class="border-0  header-heading text-end" scope="col">
																	<a href="#" class="confirm-delete" title="Delete">
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
								<div class="col-md-6">
									<div class="card card-custom gutter-b bg-white border-0" >
										<div class="card-body">
											<label  class="text-body">Customer Address</label>
											<fieldset class="form-group mb-3">
												<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
													<option value="AL">Joe road singapur </option>
												  </select>
											</fieldset>
											<div class="p-3 bg-light d-flex justify-content-between border-bottom">
												<h5 class="font-size-bold mb-0">Shipping Cost:</h5>
												<h5 class="font-size-bold mb-0">$20</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card card-custom gutter-b bg-white border-0" >
										<div class="card-body">
											<label  class="text-body">Apply Coupon Code</label>
											<fieldset class="form-group mb-3 d-flex">
												<input type="text" name="text" class="form-control bg-white" id="exampleInputText2"  placeholder="Enter Coupon code">
												<a href="javascript:void(0)" class="btn-secondary btn ms-2 white pt-1 pb-1 d-flex align-items-center justify-content-center">Apply</a>
											</fieldset>
											<div class="p-3 bg-light d-flex justify-content-between border-bottom">
												<h5 class="font-size-bold mb-0">Coupon Code Applied of:</h5>
												<h5 class="font-size-bold mb-0">20%</h5>
											</div>
										</div>
									</div>
								</div>			
								<div class="col-md-12">
									<div class="card card-custom gutter-b bg-white border-0" >
										<div class="card-body">
											<label  class="text-body">Payment Method</label>
											<fieldset class="form-group mb-0">
												<select class="js-example-basic-single js-states form-control bg-transparent" name="state">
													<option value="AL">Cash on delievry </option>
													<option value="AL">Credit Card </option>
												  </select>
											</fieldset>
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
																<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
																
																	Coupon Code
																</th>
																<td class="border-0 justify-content-end d-flex text-black-50 font-size-base">20%</td>
																
															  </tr>
															<tr class="d-flex align-items-center justify-content-between item-price">
															  <th class="border-0 font-size-h5 mb-0 font-size-bold text-dark" >
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