<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-9/assets/css/login-9.css">

	<title>Login Readines Criteria</title>
</head>
<body>
	<!-- Login 9 - Bootstrap Brain Component -->
	<section class="bg-primary py-3 py-md-5 py-xl-8">
		<div class="container">
			<div class="row gy-4 align-items-center">
				<div class="col-12 col-md-6 col-xl-7">
					<div class="d-flex justify-content-center text-bg-primary">
						<div class="col-12 col-xl-9">
							<img class="img-fluid rounded mb-4" loading="lazy" src="<?= base_url(); ?>assets/Logo - pu.png" width="100" height="15" alt="PUPR">
							<hr class="border-primary-subtle mb-4">
							<h2 class="h1 mb-4">Sistem Pengunggahan Readiness Criteria Infrastruktur PUPR Bidang Perkim</h2>
							<p class="lead mb-5">Sistem ini dirancang untuk mempermudah proses pengunggahan dokumen readiness criteria terkait infrastruktur di bidang Perumahan dan Kawasan Permukiman (Perkim) Kementerian PUPR. Melalui antarmuka yang user-friendly, pengguna dapat mengunggah, menyimpan, dan mengelola dokumen secara efisien. Fitur utama mencakup validasi otomatis, pelacakan status pengunggahan, dan notifikasi real-time untuk memastikan bahwa semua dokumen yang dibutuhkan selalu tersedia dan sesuai dengan standar yang ditetapkan.</p>
							<div class="text-endx">
								<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
									<path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-xl-5">
					<div class="card border-0 rounded-4">
						<div class="card-body p-3 p-md-4 p-xl-5">
							<div class="row">
								<div class="col-12">
									<?php if ($this->session->flashdata('psn')) { ?>
										<div class="mb-4">
											<?= $this->session->flashdata('psn'); ?>
										</div>
									<?php } ?>
									<div class="mb-4">
										<h3>Login Page</h3>
									</div>
								</div>
							</div>
							<form action="<?= base_url(); ?>Login/prs_login" method="POST">
								<div class="row gy-3 overflow-hidden">
									<div class="col-12">
										<div class="form-floating mb-3">
											<input type="text" class="form-control" name="Username" id="Username" placeholder="Username" required>
											<label for="Username" class="form-label">Username</label>
										</div>
									</div>
									<div class="col-12">
										<div class="form-floating mb-3">
											<input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
											<label for="password" class="form-label">Password</label>
										</div>
									</div>
									<div class="col-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
											<label class="form-check-label text-secondary" for="remember_me">
												Keep me logged in
											</label>
										</div>
									</div>
									<div class="col-12">
										<div class="d-grid">
											<button class="btn btn-primary btn-lg" type="submit">Login</button>
										</div>
									</div>
								</div>
							</form>
							<div class="row">
								<div class="col-12">
									<div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4">

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p class="mt-4 mb-4"></p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>