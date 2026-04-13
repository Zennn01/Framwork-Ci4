<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">About</h1>
        
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Tentang Website</h5>
					<p>Website ini merupakan platform portal berita yang menyajikan berbagai informasi terkini seputar teknologi, perkembangan digital, serta topik menarik lainnya. Konten disusun secara ringkas dan mudah dipahami agar dapat diakses oleh berbagai kalangan.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Apa yang Disajikan</h5>
					<p>Melalui website ini, pengunjung dapat menemukan berbagai artikel informatif, mulai dari perkembangan teknologi web, tren digital, hingga pembahasan ringan yang relevan dengan kebutuhan masa kini. Setiap konten disajikan dengan tujuan memberikan informasi yang bermanfaat dan up-to-date.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Tujuan Website</h5>
					<p>Website ini bertujuan menjadi sumber informasi yang terpercaya dan mudah diakses. Dengan penyajian yang sederhana namun informatif, diharapkan pengunjung dapat memperoleh wawasan baru serta mengikuti perkembangan dunia digital dengan lebih mudah.</p>
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