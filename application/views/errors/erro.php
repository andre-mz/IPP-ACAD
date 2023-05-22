<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link href="<?= base_url('assets/dash/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/dash/css/sb-admin-2.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/dash/css/style.css')?>" rel="stylesheet">


	<title>ERRO 403</title>
	<style type="text/css">
		body{
			background: rgb(255, 255, 255);
		}
		h1{
			color: #000;
			padding-top: 40px;
			font-weight: 700;
			margin-top: 40px;
		}
		i{
			font-size: 190px!important;
			color: #00204A;
		}
	</style>

</head>
<body>

	<h1 class="text-center">ACESSO NEGADO :(</h1>
	<p class="text-center">Infelizmente n&atilde;o tens permiss&atilde;o para aceder essa pagina, fa&ccedil;a login novamente</br> ou contacte o adminstrador do sistema</p>
	<div class="text-center">
		<i class="fa fa-ban"></i>
	</div>
	<div class="text-center mt-4">
		<strong><a href="<?= base_url()?>/IndexCont/login">LOGIN!</a></strong>
	</div>

	<!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/dash/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/dash/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/dash/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/dash/js/sb-admin-2.min.js')?>"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url('assets/dash/vendor/chart.js/Chart.min.js')?>"></script>
    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/dash/js/demo/chart-area-demo.js')?>"></script>
    <script src="<?= base_url('assets/dash/js/demo/chart-pie-demo.js')?>"></script>
    <script src="<?= base_url('assets/js/validacao.js')?>"></script>
    <script src="<?= base_url('assets/js/validacao_2.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</body>
</html>
