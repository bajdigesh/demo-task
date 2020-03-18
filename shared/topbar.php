<header class="shadow-sm">
	<nav class="navbar navbar-light">
		<div class="d-flex mr-lg-auto align-items-center">
			<a class="navbar-brand" href="#">
				<img src="dist/images/balaju-hospital.png" alt="">
			</a>

			<a href="javascript:void(0)" class="sidebar-toggle"><i class="fa fa-bars fs-24"></i></a>

			<form class="form-inline search-form">
				<input class="form-control rounded-pill shadow-sm" type="search" placeholder="Search" aria-label="Search">
				<i class="fa fa-search"></i>
			</form>
		</div>

		<div class="d-flex ml-lg-auto align-items-center justify-content-sm-between">
			<div class="dropdown calendar-dropdown">
				<span class="has-new indication"></span>
				<a class="dropdown-toggle" href="#" id="calendar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-calendar-alt fs-18"></i>
				</a>
			</div>

			<!-- Notification Section -->
			<div class="dropdown notification-dropdown">
				<span class="has-new indication"></span>
				<a class="dropdown-toggle" href="#" id="notification-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-bell fs-18"></i>
				</a>
				<div class="dropdown-menu" aria-labelledby="notification-dropdown">
					<h4 class="text-uppercase fs-14">Notifications</h4>
					<ul class="notification-list pl-0 mb-0">
						<li class="notification-item d-flex align-items-center">
							<span class="icon-container">
								<i class="fas fa-stethoscope rounded-circle text-center fs-22"></i>
							</span>
							<div>
								<p class="mb-1 fs-14 bold">OPD visit created.</p>
								<p class="mb-0 fs-14"><span class="date">17/12/2019</span> <span class="time">10:35 AM</span></p>
							</div>
						</li>

						<li class="notification-item d-flex align-items-center">
							<span class="icon-container">
								<i class="fas fa-cut rounded-circle text-center fs-22"></i>
							</span>
							<div>
								<p class="mb-1 fs-14 bold">OT Visit has been created for <span class="patient-name">Aditya Singh</span>.</p>
								<p class="mb-0 fs-14"><span class="date">17/12/2019</span> <span class="time">10:35 AM</span></p>
							</div>
						</li>

						<li class="notification-item d-flex align-items-center">
							<span class="icon-container">
								<i class="fa fa-clipboard rounded-circle text-center fs-22"></i>
							</span>
							<div>
								<p class="mb-1 fs-14 bold">Appointment has been approved for <span class="patient-name">Bhuwan Bogati</span>.</p>
								<p class="mb-0 fs-14"><span class="date">17/12/2019</span> <span class="time">10:35 AM</span></p>
							</div>
						</li>

						<li class="notification-item d-flex align-items-center">
							<span class="icon-container">
								<i class="fa fa-money-bill rounded-circle text-center fs-22"></i>
							</span>
							<div>
								<p class="mb-1 fs-14 bold">Salary Amount 250000.00 has been paid for Month of October to <span class="patient-name">Bhuwan Bogati</span>.</p>
								<p class="mb-0 fs-14"><span class="date">17/12/2019</span> <span class="time">10:35 AM</span></p>
							</div>
						</li>
					</ul>
					<p class="text-right mb-0 py-2 px-4"><a href="#" class="text-capitalize text-primary">See all notifications</a></p>
				</div>
			</div>
			<!-- Notification Section -->

			<!-- Staff Post Section -->
			<div class="dropdown post-dropdown">
				<a class="dropdown-toggle rounded-pill py-1 px-3 shadow-sm" href="#" id="post-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctor</a>
				<div class="dropdown-menu" aria-labelledby="post-dropdown">
					<a class="dropdown-item" href="#">Admin</a>
					<a class="dropdown-item" href="#">Doctor</a>
					<a class="dropdown-item" href="#">Nurse</a>
					<a class="dropdown-item" href="#">Accountant</a>
					<a class="dropdown-item" href="#">Receptionist</a>
				</div>
			</div>
			<!-- Staff Post Section -->

			<div class="dropdown user-dropdown">
				<a class="dropdown-toggle d-flex align-items-center" href="#" id="user-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<figure class="user-image rounded-circle mb-0">
						<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
					</figure>
					<p class="mb-0 fs-14"> Welcome, <span class="user-name">Dr John Chettri</span></p>
				</a>
				<div class="dropdown-menu" aria-labelledby="user-dropdown">
					<a class="dropdown-item" href="#"><i class="fa fa-user"></i>My Profile</a>
					<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>Logout</a>
				</div>
			</div>
		</div>
	</nav>
</header>