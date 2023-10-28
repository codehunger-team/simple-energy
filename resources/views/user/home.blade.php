@extends('layouts.user')

@section('main-content')

   <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                                            Dashboard
                                        </h1>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </header>
					 <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body h-100 p-5">
                                        <div class="row align-items-center">
                                            <div class="col-xl-8 col-xxl-12">
                                                <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                                    <h1 class="text-primary">Welcome to SimpleEnergy Dealership!</h1>
                                                    <p class="text-gray-700 mb-0">If you are also planning to do business, then there is an attractive opportunity.!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="card shadow mb-4">
						 <div class="card-header">Order Now</div>
                           <div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Model No</th>
											<th width="10%" >Color</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Total Amount</th>
											<th>Remarks</th>
											<th><button id="addBtn" type="button" class="btn btn-info">+</button></th>
										</tr>
									</thead>
									<tbody id="newRow">
									</tbody>
								</table>
							 </div>	
                          </div>	
                        </div>							  
@endsection
