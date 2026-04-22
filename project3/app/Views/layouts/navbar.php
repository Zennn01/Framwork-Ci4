<nav id="navigation" class="navbar-light bg-faded site-navigation">
    <div class="container-fluid">
        <div class="row align-items-center">

            <!-- Logo -->
            <div class="col-20">
                <div class="site-logo">
                    <a href="<?= base_url('/') ?>">
                        <h3 style="margin:0; font-weight:700; color:#000;">Unews</h3>
                    </a>
                </div>
            </div>

            <!-- Menu Desktop -->
            <div class="col-60 d-flex">
                <nav id="main-menu">
                    <ul>
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li><a href="<?= base_url('about') ?>">About</a></li>
                        <li><a href="<?= base_url('post') ?>">Blog</a></li>
                        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                        <li><a href="<?= base_url('faqs') ?>">FAQ</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Button kanan -->
            <div class="col-20 d-none d-xl-block text-end">
                <a href="<?= base_url('post') ?>" class="header-btn">Posting</a>
                <a href="<?= base_url('contact') ?>" class="btn_one">Hubungi</a>
            </div>

            <!-- Mobile Menu -->
            <ul class="mobile_menu">
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('about') ?>">About</a></li>
                <li><a href="<?= base_url('post') ?>">Blog</a></li>
                <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                <li><a href="<?= base_url('faqs') ?>">FAQ</a></li>
            </ul>

        </div>
    </div>
</nav>