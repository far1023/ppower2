<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $title ?></title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<link href="assets/public_src/img/favicon.png" rel="icon">
	<link href="assets/public_src/img/apple-touch-icon.png" rel="apple-touch-icon">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link href="<?= base_url() ?>assets/public_src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/public_src/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/public_src/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/public_src/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/public_src/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/public_src/vendor/aos/aos.css" rel="stylesheet">

	<link href="<?= base_url() ?>assets/public_src/css/style.css" rel="stylesheet">

	<?php if ($filecss): ?>
	<?php endif ?>

	<!-- =======================================================
	* Template Name: Appland - v2.2.0
	* Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
</head>

<body>
	<header id="header" class="fixed-top header-transparent">
		<?php include 'components/header.php'; ?>
	</header>

	<main id="main">
		<?php include 'pages/'.$filemain.'.php'; ?>
	</main>

	<footer id="footer">
		<?php include 'components/footer.php'; ?>
	</footer>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<script src="<?= base_url() ?>assets/public_src/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/public_src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/public_src/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= base_url() ?>assets/public_src/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>assets/public_src/vendor/venobox/venobox.min.js"></script>
	<script src="<?= base_url() ?>assets/public_src/vendor/aos/aos.js"></script>

	<script src="<?= base_url() ?>assets/public_src/js/main.js"></script>

	<?php if ($filejs): ?>
		<?php include 'js/'.$filejs.'.js'; ?>
	<?php endif ?>

</body>

</html>