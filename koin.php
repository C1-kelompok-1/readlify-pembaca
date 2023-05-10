<?php

require 'helpers/auth.php';

redirectIfNotAuthenticated('login.php');

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Readify</title>

	<?php require 'layouts/favicon.php'; ?>
	<?php require 'layouts/styles.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
	</script>
</head>

<body>

	<main>
		<?php require 'layouts/navbar.php'; ?>

		<header class="site-header d-flex flex-column justify-content-center align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12 text-center">
						<h2 class="mb-0">Koin Readify</h2>
					</div>
				</div>
			</div>
		</header>

		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4 d-flex justify-content-center mb-5">
						<div class="card" style="width: 18rem;">
							<img src="assets/Group 17544.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title d-flex justify-content-center">50</h5> <br>
								<button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
									data-bs-target="#dropdown">IDR 9.000</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- Modal -->
	<div class="modal fade" id="dropdown" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Pilih Metode Pembayaran</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h6>E-Wallet</h6>
					<div class="form-check mt-4">
						<label class="form-check-label d-flex align-items-start" for="flexRadioDefault1">
							<img src="assets/images/pembayaran/dana.png" class="me-2" style="width: auto; height: 20px" alt="Image 1">
							<div>
								<span class="flex-grow-1">Dana</span>
								<p style="max-width: 60vh">Pembayaran menggunakan saldo DANA - Pastikan aplikasi DANA ter-install di HP
									kamu - Untuk pengajuan refund, pembayaran admin fee tidak dapat dikembalikan pada saldo Dana kamu</p>
							</div>
							<input class="form-check-input position-relative" type="radio" name="flexRadioDefault"
								id="flexRadioDefault1" style="width: 20px; ">
						</label>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary w-100">Pilih Metode Pembayaran</button>
				</div>
			</div>
		</div>
	</div>

	<?php require 'layouts/footer.php'; ?>
	<?php require 'layouts/scripts.php'; ?>
</body>

</html>