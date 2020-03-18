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
	</p>
</div>

<div class="content content-dashboard">
	<!-- Overview Section -->
	<div class="overview row">
		<div class="card-wrapper">
			<a class="card shadow-sm text-center" href="#">
				<p class="icon rounded-circle"><img src="dist/images/appointment.svg" alt=""></p>
				<span class="fs-13">Booken Appointments</span>
				<h4 class="mb-0 mt-3">25</h4>
			</a>
		</div>
		<div class="card-wrapper">
			<a class="card shadow-sm text-center" href="#">
				<p class="icon rounded-circle"><img src="dist/images/patient.svg" alt=""></p>
				<span class="fs-13">Active Patients</span>
				<h4 class="mb-0 mt-3">42</h4>
			</a>
		</div>
		<div class="card-wrapper">
			<a class="card shadow-sm text-center" href="#">
				<p class="icon rounded-circle"><img src="dist/images/patient-1.svg" alt=""></p>
				<span class="fs-13">Follow-Up Patients</span>
				<h4 class="mb-0 mt-3">19</h4>
			</a>
		</div>
		<div class="card-wrapper">
			<a class="card shadow-sm text-center" href="pending-appointment.php">
				<p class="icon rounded-circle"><img src="dist/images/appointment-1.svg" alt=""></p>
				<span class="fs-13">Pending Appointments</span>
				<h4 class="mb-0 mt-3">05</h4>
			</a>
		</div>
		<div class="card-wrapper">
			<a class="card shadow-sm text-center" href="#">
				<p class="icon rounded-circle"><img src="dist/images/icu-monitor.svg" alt=""></p>
				<span class="fs-13">Patientsin ICU</span>
				<h4 class="mb-0 mt-3">25</h4>
			</a>
		</div>
	</div>
	<!-- Overview Section -->

	<div class="row mt-5">
		<div class="col-lg-8 col-md-12 mb-4 booked-appointemnts">
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-pending"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-finished"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-pending"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-pending"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-pending"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-pending"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-pending"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-pending"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
												<span class="indicator indicator-pending"></span>
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
										<a href="patient-detail.php" class="has-detail">
											<figure class="rounded-circle mb-0">
												<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
											</figure>
											<span>Sharom Garcia</span>
										</a>
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
		<div class="col-lg-4 col-md-12 calendar-wrapper">
			<div class="card shadow-sm" id="calendar">
			</div>
		</div>
	</div>
</div>
<?php include('./shared/footer.php'); ?>
<script>

	document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
			defaultView: 'dayGridMonth',
			defaultDate: '2020-02-07',
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			events: [
			{
				title: 'All Day Event',
				start: '2020-02-01'
			},
			{
				title: 'Long Event',
				start: '2020-02-07',
				end: '2020-02-10'
			},
			{
				groupId: '999',
				title: 'Repeating Event',
				start: '2020-02-09T16:00:00'
			},
			{
				groupId: '999',
				title: 'Repeating Event',
				start: '2020-02-16T16:00:00'
			},
			{
				title: 'Conference',
				start: '2020-02-11',
				end: '2020-02-13'
			},
			{
				title: 'Meeting',
				start: '2020-02-12T10:30:00',
				end: '2020-02-12T12:30:00'
			},
			{
				title: 'Lunch',
				start: '2020-02-12T12:00:00'
			},
			{
				title: 'Meeting',
				start: '2020-02-12T14:30:00'
			},
			{
				title: 'Birthday Party',
				start: '2020-02-13T07:00:00'
			},
			{
				title: 'Click for Google',
				url: 'http://google.com/',
				start: '2020-02-28'
			}
			]
		});

		calendar.render();
	});

</script>
