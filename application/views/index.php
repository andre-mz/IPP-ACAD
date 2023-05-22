<?php $this->load->view('_inc/head')?>

	<!--
		<php
			$numero_aleatorio = substr(mt_rand(0, 9999999999), 0, 4);
			$numero_formatado = '{:04d}'.number_format($numero_aleatorio);


			$numero_aleatorio = substr(mt_rand(0, 9999999999), 0, 4);
			$numero_formatado = str_pad($numero_aleatorio, 4, "0", STR_PAD_LEFT);
			echo date("Y").$numero_formatado;
		?>
	-->

    <div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Cursos Populares</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
                <!-- Popular Course Item -->
				<div class="col-lg-3 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('assets/images/img-5.jpg')?>" alt="">
						<div class="card-body text-center">
							<div class="card-title">
                                <a href="">
                                    T. de medicina geral
                                </a>
                            </div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?=base_url('assets/images/')?>" alt="">
							</div>
							<div class="course_author_name">IPP CHIMOIO<span></span></div>
						</div>
					</div>
				</div>

                <div class="col-lg-3 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('assets/images/img-3.jpg')?>" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title">
                                <a href="">
                                    E. de Saude materna infantil
                                </a>
                            </div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?=base_url('assets/images/')?>" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">IPP CHIMOIO<span></span></div>
						</div>
					</div>
				</div>

                <div class="col-lg-3 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('assets/images/img-2.jpg')?>" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title">
                                <a href="">
                                    Tecnico de farmacia
                                </a>
                            </div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?=base_url('assets/images/')?>" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">IPP CHIMOIO<span></span></div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 course_box">
					<div class="card">
						<img class="card-img-top" src="<?= base_url('assets/images/Img-4.webp')?>" alt="IMG">
						<div class="card-body text-center">
							<div class="card-title">
                                <a href="">
                                    Nutri&ccedil;&atilde;o
                                </a>
                            </div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?=base_url('assets/images/')?>" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">IPP CHIMOIO<span></span></div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Venha e registre-se em um curso <span></span></h1>
							<p class="register_text">
								In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, 
								vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, 
								finibus tortor fermentum. Aliquam, augue a gravida rutrum, 
								ante nisl fermentum nulla, vitae tempo.
							</p>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Search for your course</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree">
							</form>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Nossos servi&ccedil;os</h1>
					</div>
				</div>
			</div>

			<div class="row services_row" style="margin-top: -.5rem;">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/earth-globe.svg" alt="">
					</div>
					<h3>Est&aacute;gio</h3>
					<p>
						In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, 
						vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus 
						tortor fermentum.
					</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					<h3>Gradua&ccedil;&atilde;o</h3>
					<p>
						In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, 
						vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, 
						finibus tortor fermentum.
					</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/books.svg" alt="">
					</div>
					<h3>Jornada cientifica</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, 
						vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, 
						finibus tortor fermentum.
					</p>
				</div>
			</div>
		</div>
	</div>


<?php $this->load->view('_inc/footer')?>