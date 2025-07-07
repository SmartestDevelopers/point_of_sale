@extends('layouts.front')

@section('content')

					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-primary">
												<div class="card-body">
													<h3 class="text-body font-weight-bold">Total Sales</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 me-3">{{ $totalSales }}</span>
														</div>
														<div class="text-black-50 mt-3">Amount: ${{ number_format($totalSalesAmount, 2) }}</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle theme-circle-secondary">
												<div class="card-body">
													<h3 class="text-body font-weight-bold">Total Purchases</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 me-3">{{ $totalPurchases }}</span>
														</div>
														<div class="text-black-50 mt-3">Amount: ${{ number_format($totalPurchasesAmount, 2) }}</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-success">
												<div class="card-body">
													<h3 class="text-body font-weight-bold">Products</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 me-3">{{ $totalProducts }}</span>
														</div>
														<div class="text-black-50 mt-3">Low Stock: {{ $lowStockProducts }}</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-info">
												<div class="card-body">
													<h3 class="text-body font-weight-bold">Today Sales</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 me-3">{{ $todaySales }}</span>
														</div>
														<div class="text-black-50 mt-3">Amount: ${{ number_format($todaySalesAmount, 2) }}</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<!-- Second Row of Statistics -->
									<div class="row">
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-warning">
												<div class="card-body">
													<h3 class="text-body font-weight-bold">Return Sales</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 me-3">{{ $totalReturnSales }}</span>
														</div>
														<div class="text-black-50 mt-3">Amount: ${{ number_format($totalReturnSalesAmount, 2) }}</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-danger">
												<div class="card-body">
													<h3 class="text-body font-weight-bold">Return Purchases</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 me-3">{{ $totalReturnPurchases }}</span>
														</div>
														<div class="text-black-50 mt-3">Amount: ${{ number_format($totalReturnPurchasesAmount, 2) }}</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-primary">
												<div class="card-body">
													<h3 class="text-body font-weight-bold">Customers</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 me-3">{{ $totalCustomers }}</span>
														</div>
														<div class="text-black-50 mt-3">Active Customers</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-secondary">
												<div class="card-body">
													<h3 class="text-body font-weight-bold">Suppliers</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 me-3">{{ $totalSuppliers }}</span>
														</div>
														<div class="text-black-50 mt-3">Active Suppliers</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Payment Status Statistics -->
									<div class="row">
										<div class="col-lg-6 col-xl-4">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center border-0">
													<div class="card-title mb-0">
														<h3 class="card-label text-body font-weight-bold mb-0">Payment Status</h3>
													</div>
												</div>
												<div class="card-body">
													<div class="d-flex justify-content-between mb-3">
														<span>Paid Sales:</span>
														<span class="badge badge-success">{{ $paidSales }}</span>
													</div>
													<div class="d-flex justify-content-between mb-3">
														<span>Due Sales:</span>
														<span class="badge badge-danger">{{ $dueSales }}</span>
													</div>
													<div class="d-flex justify-content-between mb-3">
														<span>Partial Sales:</span>
														<span class="badge badge-warning">{{ $partialSales }}</span>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-xl-8">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center border-0">
													<div class="card-title mb-0">
														<h3 class="card-label text-body font-weight-bold mb-0">Quick Actions</h3>
													</div>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-md-3 mb-3">
															<a href="{{ route('sales.create') }}" class="btn btn-primary btn-block">
																<i class="fas fa-plus"></i> Add Sale
															</a>
														</div>
														<div class="col-md-3 mb-3">
															<a href="{{ route('purchases.create') }}" class="btn btn-secondary btn-block">
																<i class="fas fa-plus"></i> Add Purchase
															</a>
														</div>
														<div class="col-md-3 mb-3">
															<a href="{{ route('sales.index') }}" class="btn btn-info btn-block">
																<i class="fas fa-list"></i> View Sales
															</a>
														</div>
														<div class="col-md-3 mb-3">
															<a href="{{ route('purchases.index') }}" class="btn btn-warning btn-block">
																<i class="fas fa-list"></i> View Purchases
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-6 col-xl-6">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center border-0">
													<div class="card-title mb-0">
														<h3 class="card-label text-body font-weight-bold mb-0">Recent Sales</h3>
													</div>
												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-borderless">
															<thead>
																<tr>
																	<th>Reference</th>
																	<th>Customer</th>
																	<th>Amount</th>
																	<th>Date</th>
																</tr>
															</thead>
															<tbody>
																@forelse($recentSales as $sale)
																<tr>
																	<td>{{ $sale->reference_no }}</td>
																	<td>{{ $sale->customer_name }}</td>
																	<td>${{ number_format($sale->grand_total, 2) }}</td>
																	<td>{{ date('M d', strtotime($sale->created_at)) }}</td>
																</tr>
																@empty
																<tr>
																	<td colspan="4" class="text-center">No recent sales</td>
																</tr>
																@endforelse
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-xl-6">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center border-0">
													<div class="card-title mb-0">
														<h3 class="card-label text-body font-weight-bold mb-0">Recent Purchases</h3>
													</div>
												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-borderless">
															<thead>
																<tr>
																	<th>Reference</th>
																	<th>Supplier</th>
																	<th>Amount</th>
																	<th>Date</th>
																</tr>
															</thead>
															<tbody>
																@forelse($recentPurchases as $purchase)
																<tr>
																	<td>{{ $purchase->reference_no }}</td>
																	<td>{{ $purchase->supplier_name ?? 'N/A' }}</td>
																	<td>${{ number_format($purchase->grand_total, 2) }}</td>
																	<td>{{ date('M d', strtotime($purchase->created_at)) }}</td>
																</tr>
																@empty
																<tr>
																	<td colspan="4" class="text-center">No recent purchases</td>
																</tr>
																@endforelse
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
