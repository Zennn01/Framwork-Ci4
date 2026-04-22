<?= $this->include('layouts/header'); ?>

<!-- HEADER -->
<section class="section-top">
    <div class="container">
        <div class="col-lg-10 offset-lg-1 text-center">
            <div class="section-top-title">
                <h1>About Us</h1>
                <ul>
                    <li><a href="<?= base_url('/') ?>">Home</a></li>
                    <li> / About</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="ab_area section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="ab_img">
                    <img src="<?= base_url('img/about1.png') ?>" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ab_content">
                    <h2>Tentang Website Kami</h2>
                    <p>
                        Website ini merupakan portal berita modern yang menyajikan
                        informasi terbaru seputar teknologi, digital, bisnis dan
                        perkembangan dunia online.
                    </p>

                    <p>
                        Kami menghadirkan artikel yang singkat, jelas dan mudah
                        dipahami agar pembaca mendapatkan informasi dengan cepat.
                    </p>

                    <ul>
                        <li><span class="ti-check"></span> Berita terpercaya & update</li>
                        <li><span class="ti-check"></span> Tampilan modern dan responsif</li>
                        <li><span class="ti-check"></span> Mudah diakses semua perangkat</li>
                    </ul>

                    <a href="<?= base_url('post') ?>" class="btn_one">
                        Lihat Blog <i class="ti-arrow-top-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FEATURE -->
<section class="top_cat__area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2>Kenapa Memilih Kami</h2>
            <p>Kami memberikan informasi berkualitas dengan desain modern.</p>
        </div>

        <div class="row">

            <div class="col-lg-4">
                <div class="single_tp">
                    <span class="sc_one">01</span>
                    <h3>Konten Berkualitas</h3>
                    <p>Artikel dibuat informatif dan relevan.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single_tp">
                    <span class="sc_two">02</span>
                    <h3>Update Cepat</h3>
                    <p>Informasi terbaru setiap waktu.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="single_tp">
                    <span class="sc_three">03</span>
                    <h3>Tampilan Modern</h3>
                    <p>Nyaman dibuka lewat HP maupun Laptop.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->include('layouts/footer'); ?>