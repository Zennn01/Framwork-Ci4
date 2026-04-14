<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aditia Adrian</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Selamat Datang</h1>
        <p class="col-md-8 fs-4">di laman portal berita</p>
        <button class="btn btn-primary btn-sm" type="button">Mulai Posting Berita Anda</button>
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Perkembangan Teknologi Web Semakin Pesat</h5>
					<p>Dunia pengembangan web terus mengalami perkembangan signifikan seiring meningkatnya kebutuhan digital. Berbagai teknologi dan bahasa pemrograman digunakan untuk menciptakan website yang cepat, aman, dan responsif.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Tampilan dan Interaktivitas Jadi Sorotan</h5>
					<p>Selain performa, tampilan dan pengalaman pengguna kini menjadi fokus utama. Penggunaan teknologi front-end memungkinkan website tampil lebih menarik serta memberikan interaksi yang lebih nyaman bagi pengguna.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Framework Bantu Efisiensi Pengembang</h5>
					<p>Untuk mendukung proses pengembangan, banyak developer memanfaatkan framework yang mampu menyederhanakan struktur kode. Hal ini membuat proses pembuatan aplikasi web menjadi lebih cepat dan terorganisir.</p>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>
		</footer>
	</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>