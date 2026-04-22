
<?= $this->include('layouts/header'); ?>

<!-- HEADER -->
<section class="section-top bg-light p-5 text-center">
	<h1>Contact</h1>
	<p><a href="<?= base_url('/') ?>">Home</a> / Contact</p>
</section>

<!-- ADDRESS -->
<section class="container py-5">
	<div class="row text-center">

		<div class="col-md-4">
			<h4>Alamat</h4>
			<p>Jl. Contoh No.123, Jakarta</p>
		</div>

		<div class="col-md-4">
			<h4>Telepon</h4>
			<p>+62 812-3456-7890</p>
		</div>

		<div class="col-md-4">
			<h4>Email</h4>
			<p>info@portalberita.com</p>
		</div>

	</div>
</section>

<!-- FORM -->
<section class="container pb-5">
	<div class="row">

		<div class="col-md-7">
			<form>
				<input type="text" class="form-control mb-2" placeholder="Name">
				<input type="email" class="form-control mb-2" placeholder="Email">
				<input type="text" class="form-control mb-2" placeholder="Subject">
				<textarea class="form-control mb-2" rows="5" placeholder="Message"></textarea>
				<button class="btn btn-primary">Send</button>
			</form>
		</div>

		<div class="col-md-5">
			<iframe 
				src="https://www.google.com/maps?q=jakarta&output=embed"
				style="width:100%; height:300px; border:0;">
			</iframe>
		</div>

	</div>
</section>

<!-- FOOTER -->
<?= $this->include('layouts/footer'); ?>