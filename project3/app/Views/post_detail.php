<!-- NAVBAR -->
<?= $this->include('layouts/header'); ?>

<!-- HEADER -->
<section class="section-top">
	<div class="container text-center">
		<h1>Blog Detail</h1>
		<p><a href="<?= base_url('/') ?>">Home</a> / Blog Detail</p>
	</div>
</section>

<!-- DETAIL POST -->
<section class="section-padding">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-8">
				<div class="card shadow-sm">

					<div class="card-body">

						<h2 class="mb-3"><?= $post['title'] ?></h2>

						<p class="text-muted">
							<?= $post['author'] ?> | <?= date('d M Y', strtotime($post['created_at'])) ?>
						</p>

						<hr>

						<div class="mt-3">
							<?= $post['content'] ?>
						</div>

						<div class="mt-4">
							<a href="<?= base_url('post') ?>" class="btn btn-secondary btn-sm">
								← Kembali ke Blog
							</a>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</section>

<!-- FOOTER -->
<?= $this->include('layouts/footer'); ?>