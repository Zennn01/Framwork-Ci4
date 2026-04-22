
<!-- NAVBAR -->
<?= $this->include('layouts/header'); ?>

<!-- HEADER -->
<section class="section-top text-center p-5 bg-light">
	<h1>FAQ</h1>
	<p><a href="<?= base_url('/') ?>">Home</a> / FAQ</p>
</section>

<!-- FAQ -->
<section class="faq_area section-padding">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-7">

				<div class="accordion" id="faqAccordion">

					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
								Apa tujuan website ini?
							</button>
						</h2>
						<div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
							<div class="accordion-body">
								Website ini bertujuan menyajikan informasi teknologi secara ringkas dan mudah dipahami.
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
								Apakah informasi selalu terbaru?
							</button>
						</h2>
						<div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
							<div class="accordion-body">
								Kami selalu berusaha update konten agar tetap relevan.
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
								Bagaimana cara menghubungi admin?
							</button>
						</h2>
						<div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
							<div class="accordion-body">
								Kamu bisa melalui halaman contact yang sudah tersedia.
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="col-lg-5">
				<img src="<?= base_url('img/faq.jpg') ?>" class="img-fluid" alt="faq">
			</div>

		</div>
	</div>
</section>

<!-- FOOTER -->
<?= $this->include('layouts/footer'); ?>