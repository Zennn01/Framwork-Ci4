<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/custom-admin.css') ?>" />
</head>

<body class="admin-page">
    <nav class="navbar navbar-expand-lg admin-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?= base_url() ?>">UNews Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/post') ?>">List Post</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center stack-mobile flex-column flex-md-row">
                    <a href="<?= base_url('admin/post/new') ?>" class="btn btn-primary me-md-2">New Post</a>
                    <a class="btn btn-outline-light me-md-2" href="<?= base_url('admin/setting') ?>">Settings</a>
                    <a class="btn btn-outline-light" href="<?= base_url('auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="page-shell">
        <div class="container">
            <div class="admin-card p-4 p-md-5 mb-4">
                <h1 class="page-title h3 mb-1">Create New Post</h1>
                <p class="page-subtitle mb-0">Tulis konten baru dengan tampilan editor yang ringkas dan nyaman.</p>
            </div>

            <div class="admin-card p-4 p-md-5">
                <form action="" method="post" id="text-editor">
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Post title" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" class="form-control" cols="30" rows="10"
                            placeholder="Write a great post!"></textarea>
                    </div>
                    <div class="d-flex stack-mobile flex-column flex-md-row">
                        <button type="submit" name="status" value="published"
                            class="btn btn-primary me-md-2">Publish</button>
                        <button type="submit" name="status" value="draft"
                            class="btn btn-outline-secondary">Save to Draft</button>
                    </div>
                </form>
            </div>

            <div class="footer-lite text-center mt-4">
                &copy; <?= Date('Y') ?> UNews
            </div>
        </div>
    </main>

    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>