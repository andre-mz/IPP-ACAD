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
</head>
    
</head>
<body>

<div class="super_container">
	<!-- Header -->
	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">

			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="<?=base_url('assets/images/IPP-LOGO.png"')?>" alt="" width="40%" style="border-radius: 15rem 15rem 15rem 15rem;">
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
						<li class="main_nav_item"><a href="<?= base_url()?>IndexCont/news">NOTICIAS</a></li>
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
                    <li class="menu_item menu_mm"><a href="<?= base_url()?>IndexCont/news">NOTICIAS</a></li>
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
    <div class="home">
		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">	
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background slide_1">  
                    </div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">
								A nossa marca &eacute; a <span>&nbsp;QUALIDADE&nbsp;</span>
							</h1>
						</div>
					</div>
				</div>

				<div class="hero_slide">
					<div class="hero_slide_background slide_2"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">
								O futuro &eacute; agora!
							</h1>
						</div>
					</div>
				</div>

				<div class="hero_slide">
					<div class="hero_slide_background slide_3"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">
								Venha e matricule-se hoje!
							</h1>
						</div>
					</div>
				</div>
			</div>
			
			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
        </div>
	</div>

	


    <div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?=base_url('assets/images/earth-globe.svg')?>" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Cursos</h2>
								<a href="<?= base_url()?>IndexCont/curso" class="hero_box_link">ver mais...</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?=base_url('assets/images/books.svg')?>" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Nossa biblioteca</h2>
								<a href="" class="hero_box_link">ver mais...</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="<?=base_url('assets/images/professor.svg')?>" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Nossa Estrutra</h2>
								<a href="<?= base_url()?>IndexCont/sobre" class="hero_box_link">ver mais...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    







