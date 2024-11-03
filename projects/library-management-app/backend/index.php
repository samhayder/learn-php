<?php
include_once("./config/config.php");
include_once("./include/header.php");
?>
<title>Library | Home</title>
</head>

<body>
	<!-- Start login -->
	<section class="login_section vh-100 d-flex align-items-center justify-content-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3 mx-auto" style="max-width: 75vw">
						<div class="row g-0">
							<div class="col-md-5 d-grid align-content-center">
								<img
									src="./assets/img/login.png"
									class="img-fluid rounded-start" />
							</div>
							<div class="col-md-7">
								<div class="card-body">
									<h5 class="card-title text-uppercase fw-bold">
										Star Library
									</h5>
									<p class="card-text">Enter email & password to login</p>

									<form action="./dashboard.php">
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Email address</label>
											<input
												type="email"
												class="form-control"
												id="exampleInputEmail1"
												aria-describedby="emailHelp" />
										</div>
										<div class="mb-3">
											<label for="exampleInputPassword1" class="form-label">Password</label>
											<input
												type="password"
												class="form-control"
												id="exampleInputPassword1" />
										</div>
										<button type="submit" class="btn btn-primary">
											Login
										</button>
									</form>

									<hr>

									<a href="./forget-password.php" class="card-link link-underline-light">Forget Password</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End login -->

	<?php
	include_once(DIR_URL . "include/footer.php");
	?>