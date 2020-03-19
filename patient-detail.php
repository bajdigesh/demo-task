<?php
include('./shared/header.php');
include('./shared/topbar.php');
include('./shared/sidebar.php');
?>
<div class="page-header">
	<h2 class="fs-25">Patient Detail</h2>
	<p class="breadcrumbs fs-14">
		<a href="index.php"><i class="fa fa-home"></i></a>
		<span>Settings</span>
		<span>Patient</span>
		<span>Patient Detail</span>
	</p>
</div>

<div class="content-patient">
	<!-- Patient Infos -->
	<div class="row">
		<div class="col-md-12">
			<a href="#" class="btn btn-warning float-right text-white mb-3"><i class="fa fa-edit"></i></a>
		</div>
		<!-- Patient Image & Info -->
		<div class="col-md-6 mb-4">
			<div class="card shadow-sm">
				<div class="card-body d-flex patient-basic-info">
					<figure class="rounded-circle mb-0 image-wrapper pt-image">
						<img src="https://i.picsum.photos/id/973/200/200.jpg" alt="">
					</figure>
					<div class="pt-records pl-4">
						<h4 class="fs-20 pt-name">Digesh Bajracharya</h4>
						<table class="table">
							<tr>
								<th>ID:</th>
								<td>v1017</td>
							</tr>
							<tr>
								<th>Status:</th>
								<td>In hospital</td>
							</tr>
							<tr>
								<th>Age:</th>
								<td>31yrs</td>
							</tr>
							<tr>
								<th>Gender:</th>
								<td>Male</td>
							</tr>
							<tr>
								<th>Email:</th>
								<td>digesh@loremipsum.com</td>
							</tr>
							<tr>
								<th>Phone:</th>
								<td>9841000000</td>
							</tr>
							<tr>
								<th>Admission Date:</th>
								<td>09/10/2019 07:02 AM</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Patient Image & Info -->

		<!-- Patient Blood Group & Other Info -->
		<div class="col-md-6 mb-4">
			<div class="card shadow-sm">
				<div class="card-body">
					<div class="pt-records">
						<table class="table">
							<tr>
								<th>Blood Type:</th>
								<td>O+</td>
							</tr>
							<tr>
								<th>Allergies:</th>
								<td class="text-danger">Penicilin, Milk, Peanuts</td>
							</tr>
							<tr>
								<th>Disease:</th>
								<td>Diabetes</td>
							</tr>
						</table>
					</div>
					<div class="pt-records">
						<h5 class="fs-16">Regular Checkups</h5>
						<table class="table">
							<tr>
								<th>dr. Aron Shrestha:</th>
								<td>Dermatologist</td>
							</tr>
							<tr>
								<th>dr. Tekendra Dahal:</th>
								<td>Dentist</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Patient Blood Group & Other Info -->
	</div>
	<!-- Patient Infos -->

	<!-- Patient Medical History -->
	<div class="pt-medical-history">
		<div class="section-header row mb-4 mt-2">
			<div class="col-md-6">
				<h4 class="fs-20 mb-0">Medical History</h4>
			</div>
			<div class="col-md-6">
				<form class="search-form">
					<input class="form-control border-0 rounded-pill" type="search" placeholder="Search" aria-label="Search">
					<i class="fa fa-search"></i>
				</form>
			</div>
		</div>

		<!-- Medical History Collapsible Panel-->
		<div class="accordion" id="medical-history-lists">
			<!-- History List -->
			<div class="card mb-4 shadow-sm">
				<div class="card-header fs-18" id="history-1">
					<span class="checkup-type hospital-visit">Hospital Visit</span>
					<div class="checkup-by-doctor">
						<figure class="mb-0 rounded-circle image-wrapper">
							<img src="https://i.picsum.photos/id/1027/200/200.jpg" alt="">
						</figure>
						<span>dr. Shashi Pariyar</span>
					</div>
					<span class="doctor-type">Physician</span>
					<span class="checkup-date"><i class="fa fa-calendar-alt"></i> 02/01/2020</span>
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#history-detail-1" aria-expanded="true" aria-controls="history-detail-1">
						<i class="fa fa-chevron-down"></i>
					</button>
				</div>

				<div id="history-detail-1" class="collapse show" aria-labelledby="history-1" data-parent="#medical-history-lists">
					<div class="card-body px-0">
						<!-- Tab Bars -->
						<ul class="nav nav-tabs" id="medical-history-types" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="vitals-tab" data-toggle="tab" href="#vitals" role="tab" aria-controls="vitals" aria-selected="false">Vitals</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="physical-examination-tab" data-toggle="tab" href="#physical-examination" role="tab" aria-controls="physical-examination" aria-selected="false">Physical Examination</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="regular-medicines-tab" data-toggle="tab" href="#regular-medicines" role="tab" aria-controls="regular-medicines" aria-selected="false">Regular Medicines</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="labs-tab" data-toggle="tab" href="#labs" role="tab" aria-controls="labs" aria-selected="false">Labs</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="diagnosis-tab" data-toggle="tab" href="#diagnosis" role="tab" aria-controls="diagnosis" aria-selected="false">Diagnosis</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="prescriptions-tab" data-toggle="tab" href="#prescriptions" role="tab" aria-controls="prescriptions" aria-selected="false">Prescriptions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="issues-tab" data-toggle="tab" href="#issues" role="tab" aria-controls="issues" aria-selected="false">Issues</a>
							</li>
						</ul>
						<!-- Tab Bars -->

						<div class="tab-content" id="medical-history-types-content">
							<!-- General Tab Content -->
							<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
								<div class="row">
									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Chief Complaint</h5>
										<ul class="pl-0">
											<li>Severe stomach pain </li>
											<li>Nausea & vomiting </li>
											<li>High Fever</li>
										</ul>
									</div>

									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Provisional Diagnosis</h5>
										<ul class="pl-0">
											<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </li>
											<li>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</li>
											<li>Aliquyam erat, sed diam voluptua.</li>
											<li>At vero eos et accusam et justo duo dolores et ea rebum.</li>
											<li>Stet clita kasd gubergren, no sea</li>
										</ul>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Vitals</h5>
										<ul class="pl-0">
											<li>Severe stomach pain </li>
											<li>Nausea & vomiting </li>
											<li>High Fever</li>
										</ul>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<h5 class="fs-18 mb-3">Prescriptions</h5>
										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Prescription.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>
									</div>

									<div class="col-md-6">
										<h5 class="fs-18 mb-3">Reports</h5>
										<a href="javascript:void(0);" class="has-attachment mb-4" data-toggle="modal" data-target="#reports-modal">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Blood_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Xray_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>ECG_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>MRI_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>
									</div>
								</div>
							</div>
							<!-- General Tab Content -->

							<!-- Vitals Tab Content -->
							<div class="tab-pane fade" id="vitals" role="tabpanel" aria-labelledby="vitals-tab">
								<p class="bold">All the current vitals information of [patient_name] displays below:</p>
								<div class="row">
									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between"><span>Pulse (/min)</span> <span>72</span></p>
										<div class="notes has-line-through">
											<span class="fs-14">Notes</span>
											<p class="semi-bold mb-0">Everything seems normal</p>
										</div>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between"><span>SPO2 (%)</span> <span>92</span></p>
										<div class="notes has-line-through">
											<span class="fs-14">Notes</span>
											<p class="semi-bold mb-0">Patient has less SPO2 of 92 but its normal for him with past medical history</p>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>RR (/min)</span> <span>18</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Temperature (F)</span> <span>99</span></p>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mb-4">
										<div class="has-line-through"><span class="bold">Blood Pressure</span></div>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Diastolic (mm Hg)</span> <span>70</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Systolic (mm Hg)</span> <span class="text-danger">100</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Posture</span> <span>Sitting</span></p>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mb-4">
										<div class="has-line-through mb-4"><span class="bold">Additional Notes</span></div>
										<ul class="pl-0">
											<li>Occasional Pain in left arm followed by over sweating and fainting. </li>
											<li>Have recently operated for Appendicitis.</li>
										</ul>
									</div>
								</div>

								<button type="submit" class="btn btn-primary float-right">Save</button>
							</div>
							<!-- Vitals Tab Content -->

							<!-- History Tab Content -->
							<div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
								<p class="bold mb-5">SOAP Report</p>
								<div class="row">
									<div class="col-md-12 mb-5">
										<div class="editor rounded">
											<span>Subjective Note</span>
											<textarea name="editor1"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-5">
										<div class="editor rounded">
											<span>Objective Note</span>
											<textarea name="editor2"></textarea>
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-primary float-right">Save</button>
							</div>
							<!-- History Tab Content -->
						</div>
					</div>
				</div>
			</div>
			<!-- History List -->

			<!-- History List -->
			<div class="card mb-4 shadow-sm">
				<div class="card-header fs-18" id="history-2">
					<span class="checkup-type general-checkup">General Checkup</span>
					<div class="checkup-by-doctor">
						<figure class="mb-0 rounded-circle image-wrapper">
							<img src="https://i.picsum.photos/id/375/200/200.jpg" alt="">
						</figure>
						<span>dr. Pranav Pradhan</span>
					</div>
					<span class="doctor-type">Dentist</span>
					<span class="checkup-date"><i class="fa fa-calendar-alt"></i> 09/01/2020</span>
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#history-detail-2" aria-expanded="false" aria-controls="history-detail-2">
						<i class="fa fa-chevron-down"></i>
					</button>
				</div>

				<div id="history-detail-2" class="collapse" aria-labelledby="history-2" data-parent="#medical-history-lists">
					<div class="card-body px-0">
						<!-- Tab Bars -->
						<ul class="nav nav-tabs" id="medical-history-types" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="vitals-tab" data-toggle="tab" href="#vitals" role="tab" aria-controls="vitals" aria-selected="false">Vitals</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="physical-examination-tab" data-toggle="tab" href="#physical-examination" role="tab" aria-controls="physical-examination" aria-selected="false">Physical Examination</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="regular-medicines-tab" data-toggle="tab" href="#regular-medicines" role="tab" aria-controls="regular-medicines" aria-selected="false">Regular Medicines</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="labs-tab" data-toggle="tab" href="#labs" role="tab" aria-controls="labs" aria-selected="false">Labs</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="diagnosis-tab" data-toggle="tab" href="#diagnosis" role="tab" aria-controls="diagnosis" aria-selected="false">Diagnosis</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="prescriptions-tab" data-toggle="tab" href="#prescriptions" role="tab" aria-controls="prescriptions" aria-selected="false">Prescriptions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="issues-tab" data-toggle="tab" href="#issues" role="tab" aria-controls="issues" aria-selected="false">Issues</a>
							</li>
						</ul>
						<!-- Tab Bars -->

						<div class="tab-content" id="medical-history-types-content">
							<!-- General Tab Content -->
							<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
								<div class="row">
									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Chief Complaint</h5>
										<ul class="pl-0">
											<li>Severe stomach pain </li>
											<li>Nausea & vomiting </li>
											<li>High Fever</li>
										</ul>
									</div>

									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Provisional Diagnosis</h5>
										<ul class="pl-0">
											<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </li>
											<li>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</li>
											<li>Aliquyam erat, sed diam voluptua.</li>
											<li>At vero eos et accusam et justo duo dolores et ea rebum.</li>
											<li>Stet clita kasd gubergren, no sea</li>
										</ul>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Vitals</h5>
										<ul class="pl-0">
											<li>Severe stomach pain </li>
											<li>Nausea & vomiting </li>
											<li>High Fever</li>
										</ul>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<h5 class="fs-18 mb-3">Prescriptions</h5>
										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Prescription.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>
									</div>

									<div class="col-md-6">
										<h5 class="fs-18 mb-3">Reports</h5>
										<a href="javascript:void(0);" class="has-attachment mb-4" data-toggle="modal" data-target="#reports-modal">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Blood_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Xray_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>ECG_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>MRI_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>
									</div>
								</div>
							</div>
							<!-- General Tab Content -->

							<!-- Vitals Tab Content -->
							<div class="tab-pane fade" id="vitals" role="tabpanel" aria-labelledby="vitals-tab">
								<p class="bold">All the current vitals information of [patient_name] displays below:</p>
								<div class="row">
									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between"><span>Pulse (/min)</span> <span>72</span></p>
										<div class="notes has-line-through">
											<span class="fs-14">Notes</span>
											<p class="semi-bold mb-0">Everything seems normal</p>
										</div>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between"><span>SPO2 (%)</span> <span>92</span></p>
										<div class="notes has-line-through">
											<span class="fs-14">Notes</span>
											<p class="semi-bold mb-0">Patient has less SPO2 of 92 but its normal for him with past medical history</p>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>RR (/min)</span> <span>18</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Temperature (F)</span> <span>99</span></p>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mb-4">
										<div class="has-line-through"><span class="bold">Blood Pressure</span></div>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Diastolic (mm Hg)</span> <span>70</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Systolic (mm Hg)</span> <span class="text-danger">100</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Posture</span> <span>Sitting</span></p>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mb-4">
										<div class="has-line-through mb-4"><span class="bold">Additional Notes</span></div>
										<ul class="pl-0">
											<li>Occasional Pain in left arm followed by over sweating and fainting. </li>
											<li>Have recently operated for Appendicitis.</li>
										</ul>
									</div>
								</div>

								<button type="submit" class="btn btn-primary float-right">Save</button>
							</div>
							<!-- Vitals Tab Content -->

							<!-- History Tab Content -->
							<div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
								<p class="bold mb-5">SOAP Report</p>
								<div class="row">
									<div class="col-md-12 mb-5">
										<div class="editor rounded">
											<span>Subjective Note</span>
											<textarea name="editor1"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-5">
										<div class="editor rounded">
											<span>Objective Note</span>
											<textarea name="editor2"></textarea>
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-primary float-right">Save</button>
							</div>
							<!-- History Tab Content -->
						</div>
					</div>
				</div>
			</div>
			<!-- History List -->

			<!-- History List -->
			<div class="card mb-4 shadow-sm">
				<div class="card-header fs-18" id="history-3">
					<span class="checkup-type emergency">Emergency</span>
					<div class="checkup-by-doctor">
						<figure class="mb-0 rounded-circle image-wrapper">
							<img src="https://i.picsum.photos/id/550/200/200.jpg" alt="">
						</figure>
						<span>dr. Alina Dahal</span>
					</div>
					<span class="doctor-type">Dermatologist</span>
					<span class="checkup-date"><i class="fa fa-calendar-alt"></i> 10/01/2020</span>
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#history-detail-3" aria-expanded="false" aria-controls="history-detail-3">
						<i class="fa fa-chevron-down"></i>
					</button>
				</div>

				<div id="history-detail-3" class="collapse" aria-labelledby="history-3" data-parent="#medical-history-lists">
					<div class="card-body px-0">
						<!-- Tab Bars -->
						<ul class="nav nav-tabs" id="medical-history-types" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="vitals-tab" data-toggle="tab" href="#vitals" role="tab" aria-controls="vitals" aria-selected="false">Vitals</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="physical-examination-tab" data-toggle="tab" href="#physical-examination" role="tab" aria-controls="physical-examination" aria-selected="false">Physical Examination</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="regular-medicines-tab" data-toggle="tab" href="#regular-medicines" role="tab" aria-controls="regular-medicines" aria-selected="false">Regular Medicines</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="labs-tab" data-toggle="tab" href="#labs" role="tab" aria-controls="labs" aria-selected="false">Labs</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="diagnosis-tab" data-toggle="tab" href="#diagnosis" role="tab" aria-controls="diagnosis" aria-selected="false">Diagnosis</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="prescriptions-tab" data-toggle="tab" href="#prescriptions" role="tab" aria-controls="prescriptions" aria-selected="false">Prescriptions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="issues-tab" data-toggle="tab" href="#issues" role="tab" aria-controls="issues" aria-selected="false">Issues</a>
							</li>
						</ul>
						<!-- Tab Bars -->

						<div class="tab-content" id="medical-history-types-content">
							<!-- General Tab Content -->
							<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
								<div class="row">
									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Chief Complaint</h5>
										<ul class="pl-0">
											<li>Severe stomach pain </li>
											<li>Nausea & vomiting </li>
											<li>High Fever</li>
										</ul>
									</div>

									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Provisional Diagnosis</h5>
										<ul class="pl-0">
											<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </li>
											<li>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</li>
											<li>Aliquyam erat, sed diam voluptua.</li>
											<li>At vero eos et accusam et justo duo dolores et ea rebum.</li>
											<li>Stet clita kasd gubergren, no sea</li>
										</ul>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-4">
										<h5 class="fs-18 mb-3">Vitals</h5>
										<ul class="pl-0">
											<li>Severe stomach pain </li>
											<li>Nausea & vomiting </li>
											<li>High Fever</li>
										</ul>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<h5 class="fs-18 mb-3">Prescriptions</h5>
										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Prescription.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>
									</div>

									<div class="col-md-6">
										<h5 class="fs-18 mb-3">Reports</h5>
										<a href="javascript:void(0);" class="has-attachment mb-4" data-toggle="modal" data-target="#reports-modal">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Blood_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>Xray_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>ECG_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>

										<a href="javascript:void(0);" class="has-attachment mb-4">
											<i class="fa fa-paperclip fs-20"></i>
											<p class="mb-0">
												<label>MRI_report.pdf</label>
												<span class="fs-14">2019-12-30</span>
											</p>
										</a>
									</div>
								</div>
							</div>
							<!-- General Tab Content -->

							<!-- Vitals Tab Content -->
							<div class="tab-pane fade" id="vitals" role="tabpanel" aria-labelledby="vitals-tab">
								<p class="bold">All the current vitals information of [patient_name] displays below:</p>
								<div class="row">
									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between"><span>Pulse (/min)</span> <span>72</span></p>
										<div class="notes has-line-through">
											<span class="fs-14">Notes</span>
											<p class="semi-bold mb-0">Everything seems normal</p>
										</div>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between"><span>SPO2 (%)</span> <span>92</span></p>
										<div class="notes has-line-through">
											<span class="fs-14">Notes</span>
											<p class="semi-bold mb-0">Patient has less SPO2 of 92 but its normal for him with past medical history</p>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>RR (/min)</span> <span>18</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Temperature (F)</span> <span>99</span></p>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mb-4">
										<div class="has-line-through"><span class="bold">Blood Pressure</span></div>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Diastolic (mm Hg)</span> <span>70</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Systolic (mm Hg)</span> <span class="text-danger">100</span></p>
									</div>

									<div class="col-md-6 mb-4">
										<p class="semi-bold d-flex justify-content-between mb-0"><span>Posture</span> <span>Sitting</span></p>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 mb-4">
										<div class="has-line-through mb-4"><span class="bold">Additional Notes</span></div>
										<ul class="pl-0">
											<li>Occasional Pain in left arm followed by over sweating and fainting. </li>
											<li>Have recently operated for Appendicitis.</li>
										</ul>
									</div>
								</div>

								<button type="submit" class="btn btn-primary float-right">Save</button>
							</div>
							<!-- Vitals Tab Content -->

							<!-- History Tab Content -->
							<div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
								<p class="bold mb-5">SOAP Report</p>
								<div class="row">
									<div class="col-md-12 mb-5">
										<div class="editor rounded">
											<span>Subjective Note</span>
											<textarea name="editor1"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-5">
										<div class="editor rounded">
											<span>Objective Note</span>
											<textarea name="editor2"></textarea>
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-primary float-right">Save</button>
							</div>
							<!-- History Tab Content -->
						</div>
					</div>
				</div>
			</div>
			<!-- History List -->

		</div>
		<!-- Medical History Collapsible Panel-->
	</div>
	<!-- Patient Medical History -->
</div>

<!-- Modal -->
<div class="modal fade" id="reports-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="row">
					<div class="col-md-4">
						<figure class="mb-1">
							<img src="https://prod-images-static.radiopaedia.org/images/10859219/0e752ba4d814a25093289fd2b58782_jumbo.jpg" alt="">
						</figure>
						<span>Plain Abdominal X-ray</span>
					</div>
					<div class="col-md-8">
						<h4 class="fs-20">Plain Abdominal X-ray</h4>
						<p>This patient has acute cholecystitis. Continued secretion by the gallbladder leads to increased pressure and inflammation of the gallbladder wall. Bacterial infection is usually by Gram-negative organisms and anaerobes. Ischaemia in the distended gallbladder can lead to perforation causing either generalized peritonitis or formation of a localized abscess. Alternatively the stone can spontaneously disimpact and the symptoms spontaneously improve. Gallstones can get stuck in the common bile duct leading to cholangitis or pancreatitis. Rarely, gallstones can perforate through the inflamed gallbladder wall into the small intestine and cause intestinal obstruction (gallstone ileus). The typical symptom is of sudden-onset right upper quadrant abdominal pain which radiates into the back.</p>
						<a href="javascript:void(0);" class="btn btn-outline-warning float-right">Download <i class="fa fa-cloud-download-alt"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('./shared/footer.php'); ?>
<script>
	CKEDITOR.replace( 'editor1' );
	CKEDITOR.replace( 'editor2' );
</script>