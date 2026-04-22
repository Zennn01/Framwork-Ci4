<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $title ?? 'MyBlog' ?></title>

	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">

	<link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Jost&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('fonts/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('fonts/themify-icons.css') ?>">

	<link rel="stylesheet" href="<?= base_url('owlcarousel/css/owl.carousel.css') ?>">
	<link rel="stylesheet" href="<?= base_url('owlcarousel/css/owl.theme.css') ?>">

	<link rel="stylesheet" href="<?= base_url('css/jquery-simple-mobilemenu.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/animate.css') ?>">
	<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

<!-- NAVBAR -->
<?= $this->include('layouts/navbar'); ?>