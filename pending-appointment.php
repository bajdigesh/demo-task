<?php
include('./shared/header.php');
include('./shared/topbar.php');
include('./shared/sidebar.php');
?>
<div class="page-header">
	<h2 class="fs-25">Dashboard</h2>
	<p class="breadcrumbs fs-14">
		<a href="index.php"><i class="fa fa-home"></i></a>
		<span>Dashboard</span>
		<span>Doctor</span>
		<span>Pending Appointment List</span>
	</p>
</div>

<div class="content content-pending-appointment">
	<div class="row mt-5">
		<div class="col-lg-12">
			<div class="card shadow-sm">
				<div class="card-body">
					<div class="section-header d-flex align-items-center">
						<h4 class="fs-16 mb-0">Booked Appointment List</h4>
						<form class="search-form">
							<input class="form-control border-0 rounded-pill" type="search" placeholder="Search" aria-label="Search">
							<i class="fa fa-search"></i>
						</form>
					</div>
					<div class="table-wrapper mt-4">
						<table class="table table-borderless table-appointment-list">
							<thead>
								<tr class="fs-14">
									<th class="hidden-in-sm">MRN No <i class="fa fa-arrow-up"></i></th>
									<th>Patients</th>
									<th>Date <i class="fa fa-arrow-up"></i></th>
									<th>Time <i class="fa fa-arrow-up"></i></th>
									<th class="action-col"><span class="hidden-in-sm">Action</span></th>
								</tr>
							</thead>
							<tbody>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
								<tr class="fs-14">
									<td class="hidden-in-sm">1577688108</td>
									<td>
										<figure class="rounded-circle mb-0">
											<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
										</figure>
										<span>Sharom Garcia</span>
									</td>
									<td>2020-01-10</td>
									<td>10:45</td>
									<td class="action-col">
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="patient-detail.php"><i class="fa fa-eye"></i>View Details</a>
											<a class="dropdown-item" href="#"><i class="fa fa-clock"></i>Reschedule</a>
											<a class="dropdown-item" href="#"><i class="fa fa-ban"></i>Cancel</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="d-flex justify-content-between align-items-center records-summary mt-3 pt-3">
						<p class="mb-0">Records: 1 to 10 of 25</p>
						<nav>
							<ul class="pagination mb-0">
								<li class="page-item">
									<a class="page-link fs-10" href="#" aria-label="Previous">
										<span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
									</a>
								</li>
								<li class="page-item"><a class="page-link fs-14 active" href="#">1</a></li>
								<li class="page-item"><a class="page-link fs-14" href="#">2</a></li>
								<li class="page-item"><a class="page-link fs-14" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link fs-10" href="#" aria-label="Next">
										<span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('./shared/footer.php'); ?>