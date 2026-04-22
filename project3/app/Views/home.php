<?= $this->include('layouts/header'); ?>

<!-- HERO -->
<section class="home_bg hb_height" style="background-image:url('<?= base_url('img/bg/home-bg.jpg') ?>'); background-size:cover;">

	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-6">
				<div class="hero-text ht_top">
					<h1><span>Portal Berita</span> Informasi Cepat & Terpercaya</h1>
					<p>Baca berita terbaru seputar teknologi, pendidikan, dan informasi terkini.</p>
				</div>

				<div class="home_sb">
					<a href="<?= base_url('post') ?>" class="btn_one">
						Lihat Semua Berita
					</a>
				</div>
			</div>

			<div class="col-lg-6">
				<img src="<?= base_url('img/home-img2.png') ?>" class="img-fluid">
			</div>

		</div>
	</div>
</section>


<!-- BERITA TERBARU -->
<section class="home_course section-padding">
	<div class="container">

		<div class="section-title text-center">
			<h2>Berita Terbaru</h2>
			<p>Update informasi paling baru hari ini</p>
		</div>

		<div class="row">

			<div class="col-md-4">
				<div class="single_course">
					<h4>Perkembangan Teknologi Web Semakin Pesat</h4>
					<p>Dunia pengembangan web terus berkembang pesat.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="single_course">
					<h4>Tampilan dan Interaktivitas Jadi Sorotan</h4>
					<p>UI/UX kini menjadi fokus utama website modern.</p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="single_course">
					<h4>Framework Bantu Efisiensi Developer</h4>
					<p>Framework mempermudah proses coding lebih cepat.</p>
				</div>
			</div>

		</div>
	</div>
</section>

<?= $this->include('layouts/footer'); ?>