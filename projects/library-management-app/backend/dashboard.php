<?php
include_once("./config/config.php");
?>

<title>Dashboard | Library</title>
</head>

<body>
	<?php
	include_once(DIR_URL . "include/header.php");
	include_once(DIR_URL . "include/navbar.php");
	include_once(DIR_URL . "include/sideBar.php");
	?>

	<!-- Start Main -->
	<main class="mt-1 pt-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h2 class="text-uppercase">dashboard</h2>
					<p>Statistics of the System!</p>
				</div>
			</div>
			<!-- end of title row-->

			<div class="row mt-3">
				<div class="col-12 col-md-3 mb-3">
					<div class="card text-center">
						<div class="card-body">
							<h6 class="card-title text-uppercase text-muted">
								total books
							</h6>
							<h1>130</h1>
							<a href="#" class="card-link link-underline-light">View more</a>
						</div>
					</div>
				</div>
				<!-- end of single card -->

				<div class="col-12 col-md-3 mb-3">
					<div class="card text-center">
						<div class="card-body">
							<h6 class="card-title text-uppercase text-muted">
								total students
							</h6>
							<h1>86</h1>
							<a href="#" class="card-link link-underline-light">View more</a>
						</div>
					</div>
				</div>
				<!-- end of single card -->

				<div class="col-12 col-md-3 mb-3">
					<div class="card text-center">
						<div class="card-body">
							<h6 class="card-title text-uppercase text-muted">
								total revenue
							</h6>
							<h1>
								<span><i class="fa fa-dollar" aria-hidden="true"></i></span>
								1,245.00
							</h1>
							<a href="#" class="card-link link-underline-light">View more</a>
						</div>
					</div>
				</div>
				<!-- end of single card -->

				<div class="col-12 col-md-3 mb-3">
					<div class="card text-center">
						<div class="card-body">
							<h6 class="card-title text-uppercase text-muted">
								total books loan
							</h6>
							<h1>35</h1>
							<a href="#" class="card-link link-underline-light">View more</a>
						</div>
					</div>
				</div>
				<!-- end of single card -->
			</div>
			<!-- end of card row -->

			<div class="row mt-5">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button
							class="nav-link text-uppercase fw-bold active tabs_link"
							id="new-student"
							data-bs-toggle="tab"
							data-bs-target="#new-student-pane"
							type="button"
							role="tab"
							aria-controls="new-student-pane"
							aria-selected="true">
							new students
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button
							class="nav-link text-uppercase fw-bold tabs_link"
							id="recent-loan"
							data-bs-toggle="tab"
							data-bs-target="#recent-loan-pane"
							type="button"
							role="tab"
							aria-controls="recent-loan-pane"
							aria-selected="false">
							recent loans
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button
							class="nav-link text-uppercase fw-bold tabs_link"
							id="recent-subscription"
							data-bs-toggle="tab"
							data-bs-target="#recent-subscription-pane"
							type="button"
							role="tab"
							aria-controls="recent-subscription-pane"
							aria-selected="false">
							recent subscription
						</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div
						class="tab-pane fade show active"
						id="new-student-pane"
						role="tabpanel"
						aria-labelledby="new-student"
						tabindex="0">
						<table class="table">
							<thead class="table-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">Preparing For</th>
									<th scope="col">Registered On</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>UPSC</td>
									<td>13-10-2024,11:40 PM</td>
									<td><span class="badge text-bg-success">Active</span></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Yasin</td>
									<td>UPSC</td>
									<td>13-10-2024,11:40 PM</td>
									<td><span class="badge text-bg-danger">Inactive</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- end of new student tab -->

					<div
						class="tab-pane fade"
						id="recent-loan-pane"
						role="tabpanel"
						aria-labelledby="recent-loan"
						tabindex="0">
						<table class="table">
							<thead class="table-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Book Name</th>
									<th scope="col">Student Name</th>
									<th scope="col">Loan Date</th>
									<th scope="col">Due Date</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>UPSC</td>
									<td>13-10-2024</td>
									<td>23-11-2024</td>
									<td><span class="badge text-bg-success">Active</span></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Yasin</td>
									<td>UPSC</td>
									<td>13-10-2024</td>
									<td>13-10-2024</td>
									<td><span class="badge text-bg-warning">Return</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- end of recent loan tab -->

					<div
						class="tab-pane fade"
						id="recent-subscription-pane"
						role="tabpanel"
						aria-labelledby="recent-subscription"
						tabindex="0">
						<table class="table">
							<thead class="table-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Student Name</th>
									<th scope="col">Amount</th>
									<th scope="col">Start Date</th>
									<th scope="col">End Date</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td><i class="fa fa-dollar" aria-hidden="true"></i> 15</td>
									<td>13-10-2024</td>
									<td>23-11-2024</td>
									<td><span class="badge text-bg-success">Active</span></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Yasin</td>
									<td><i class="fa fa-dollar" aria-hidden="true"></i> 15</td>
									<td>13-10-2024</td>
									<td>13-10-2024</td>
									<td><span class="badge text-bg-danger">Inactive</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- end of recent subscription tab -->
				</div>
			</div>
			<!-- end of tabs row -->
		</div>
	</main>
	<!-- End Main -->

	<?php
	include_once(DIR_URL . "include/footer.php");
	?>