<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Post List</title>
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
                    <?php if (logged_in()) : ?>
                        <a class="btn btn-outline-light" href="<?= base_url('logout') ?>">Logout</a>
                    <?php else: ?>
                        <a class="btn btn-outline-light" href="<?= base_url('login') ?>">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <main class="page-shell">
        <div class="container">
            <div class="admin-card p-4 p-md-5 mb-4">
                <h1 class="page-title h3 mb-1">Blog Dashboard</h1>
                <p class="page-subtitle mb-0">Kelola artikel, review konten, dan update status publikasi.</p>
            </div>

            <div class="admin-card p-3 p-md-4">
                <div class="table-wrap">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $post): ?>
                                <tr>
                                    <td><?= $post['id'] ?></td>
                                    <td>
                                        <strong><?= $post['title'] ?></strong><br>
                                        <small class="text-muted"><?= $post['created_at'] ?></small>
                                    </td>
                                    <td>
                                        <?php if ($post['status'] === 'published'): ?>
                                            <span class="status-pill published"><?= $post['status'] ?></span>
                                        <?php else: ?>
                                            <span class="status-pill draft"><?= $post['status'] ?></span>
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/post/' . $post['id'] . '/preview') ?>"
                                            class="btn btn-sm btn-outline-secondary" target="_blank">Preview</a>
                                        <a href="<?= base_url('admin/post/' . $post['id'] . '/edit') ?>"
                                            class="btn btn-sm btn-outline-secondary">Edit</a>
                                        <a href="#" data-href="<?= base_url('admin/post/' . $post['id'] . '/delete') ?>"
                                            onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="footer-lite text-center mt-4">
                &copy; <?= Date('Y') ?> UNews
            </div>
        </div>
    </main>

    <div id="confirm-dialog" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content admin-card border-0">
                <div class="modal-body">
                    <h2 class="h4 mb-2">Are you sure?</h2>
                    <p class="mb-0 text-muted">The data will be deleted and lost forever.</p>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        function confirmToDelete(el) {
            document.getElementById('delete-button').setAttribute('href', el.dataset.href);
            var myModal = new bootstrap.Modal(document.getElementById('confirm-dialog'), {
                keyboard: false
            });
            myModal.show();
        }
    </script>
</body>

</html>
