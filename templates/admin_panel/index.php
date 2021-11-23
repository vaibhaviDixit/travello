<?php

include 'top.php';
$onbookings=onbookings();
$offbookings=offbookings();
$pendingBook=pendingBook();
$todaybookings=todaybookings();
$cnfBook=cnfBook();
$packages=packages();
$earnings=earnings();
$payDues=payDues();

?>
		

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<div class="row">
						<div class="col-xl-12 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Bookings</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="book"></i>
														</div>
													</div>
												</div>
												<table class="table" style="text-align: left;">
								                    <tbody>
								                      <tr>
								                        <th scope="row">Todays</th>
								                        <td><?php   echo $todaybookings; ?></td>
								                      </tr>
								                      <tr>
								                        <th scope="row">Online</th>
								                        <td><?php   echo $onbookings; ?></td>
								                      </tr>
								                     <tr>
								                        <th scope="row">Offline</th>
								                        <td><?php   echo $offbookings; ?></td>
								                      </tr>
								                      <tr>
								                        <th scope="row">Pending</th>
								                        <td><?php   echo $pendingBook; ?></td>
								                      </tr>
								                      <tr>
								                        <th scope="row">Confirmed</th>
								                        <td><?php echo $cnfBook; ?></td>
								                      </tr>
								                 
								                    </tbody>
							                  </table>

											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Tours</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="briefcase"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $packages; ?></h1>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Earnings</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $earnings; ?></h1>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Payment Dues</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php echo $payDues; ?></h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						
					</div>

				

				</div>
			</main>
			<?php 

			include 'footer.php';
			?>
