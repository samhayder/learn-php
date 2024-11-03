<?php
include_once("./config/config.php");
include_once("./include/header.php");
?>

<title>Reset Password | Library</title>
</head>

<body>
	<!-- Start login -->
	<section class="login_section vh-100 d-flex align-items-center justify-content-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3" style="max-width: 75vw">
						<div class="row g-0">
							<div class="col-md-5 d-grid align-content-center">
								<img
									src="./assets/img/forgot_password.png"
									class="img-fluid rounded-start" />
							</div>
							<div class="col-md-7">
								<div class="card-body">
									<h5 class="card-title text-uppercase fw-bold">
										Star Library
									</h5>
									<p class="card-text">Reset password</p>

									<form action="./index.php">
										<div class="mb-3">
											<label for="reset-password-code class=" form-label">Reset Password Code</label>
											<input
												type="text"
												class="form-control"
												id="reset-password-code
													aria-describedby=" emailHelp" />
										</div>
										<div class="mb-3">
											<label for="new-password class=" form-label">New Password</label>
											<input
												type="password"
												class="form-control"
												id="new-password
													aria-describedby=" emailHelp" />
										</div>
										<div class="mb-3">
											<label for="confirm-password class=" form-label">Confirm Password</label>
											<input
												type="password"
												class="form-control"
												id="confirm-password
													aria-describedby=" emailHelp" />
										</div>
										<button type="submit" class="btn btn-primary">
											Submit
										</button>
									</form>

									<hr>

									<a href="./index.php" class="card-link link-underline-light">Login Now</a>
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