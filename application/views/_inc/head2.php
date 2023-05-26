<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
	IPP CHIMOIO
    </title>

    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap4/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/fontawesome-free-5.0.1/css/fontawesome-all.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/OwlCarousel2-2.2.1/owl.carousel.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/OwlCarousel2-2.2.1/animate.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/main_styles.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/sec_style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/responsive.css')?>">
    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/courses_styles.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/courses_responsive.css')?>">
    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/contact_styles.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/contact_responsive.css')?>">
    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/news_post_styles.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/news_post_responsive.css')?>">
    <!---->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/teachers_styles.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/teachers_responsive.css')?>">
	
</head>
<body>

<div class="super_container">
	<!-- Header -->
	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">

			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="<?=base_url('assets/images/IPP-LOGO.png"')?>" alt="" width="40%" style="border-radius: 5rem;">
					<span></span>
				</div>
			</div>
            
			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="<?= base_url()?>">HOME</a></li>
						<li class="main_nav_item"><a href="<?= base_url()?>IndexCont/sobre">SOBRE N&Oacute;S</a></li>
						<li class="main_nav_item"><a href="<?= base_url()?>IndexCont/curso">CURSOS</a></li>
						<li class="main_nav_item"><a href="<?= base_url()?>IndexCont/news">NEWS</a></li>
						<li class="main_nav_item"><a href="<?= base_url()?>IndexCont/contato">CONTACTO</a></li>
						<li class="main_nav_item"><a href="<?= base_url()?>IndexCont/login">IPP LOG</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="<?=base_url('assets/images/phone-call.svg')?>" alt="">
			<span>+258 87 645 2222</span>
		</div>
		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>
	</header>

    <!-- COLLAPSED MENU -->
	<div class="menu_container menu_mm">
        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm mb-5" style="margin-top: -5rem;">
                    <li class="menu_item menu_mm"><a href="<?= base_url()?>">HOME</a></li>
                    <li class="menu_item menu_mm"><a href="<?= base_url()?>IndexCont/sobre">SOBRE N&Oacute;S</a></li>
                    <li class="menu_item menu_mm"><a href="<?= base_url()?>IndexCont/curso">CURSOS</a></li>
                    <li class="menu_item menu_mm"><a href="<?= base_url()?>IndexCont/news">NEWS</a></li>
                    <li class="menu_item menu_mm"><a href="<?= base_url()?>IndexCont/contato">CONTACTO</a></li>
					<li class="menu_item menu_mm"><a href="<?= base_url()?>IndexCont/login">IPP LOG</a></li>
                </ul>

                <!-- Menu Social -->
                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   

	


    






