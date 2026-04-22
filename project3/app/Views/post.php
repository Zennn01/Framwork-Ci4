<?= $this->include('layouts/header'); ?>

<!-- HEADER (TEMPLATE STYLE) -->
<section class="section-top">
	<div class="container text-center">
		<h1>Blog</h1>
		<p><a href="<?= base_url('/') ?>">Home</a> / Blog</p>
	</div>
</section>

<!-- BLOG LIST -->
<section class="section-padding">
	<div class="container">
		<div class="row">

			<?php foreach ($posts as $post) : ?>
				<div class="col-md-6 col-lg-4 mb-4">
					<div class="card h-100 shadow-sm">

						<div class="card-body">
							<h5 class="card-title">
								<a href="<?= base_url('post/'.$post['slug']) ?>">
									<?= $post['title'] ?>
								</a>
							</h5>

							<p class="card-text">
								<?= substr(strip_tags($post['content']), 0, 120) ?>...
							</p>

							<a href="<?= base_url('post/'.$post['slug']) ?>" class="btn btn-primary btn-sm">
								Read More
							</a>
						</div>

					</div>
				</div>
			<?php endforeach ?>

		</div>
	</div>
</section>

<?= $this->include('layouts/footer'); ?>