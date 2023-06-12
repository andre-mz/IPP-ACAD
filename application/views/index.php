<?php $this->load->view('_inc/head')?>

	
    <div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>CURSOS POPULARES</h1>
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
							<div class="button button_1 register_button mx-auto trans_200">
								<a href="#">INSCREVA-SE HOJE</a>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background"></div>
						<div class="search_content text-center">
							<h1 class="search_title">PESQUISE O SEU CURSO</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Nome do curso" required="required" data-error="Course name is required.">
								
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">PESQUISAR CURSO</button>
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
						<h1>NOSSOS SERVI&Ccedil;OS</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?=base_url('assets/images/earth-globe-2.svg')?>" alt="IPP CHIMOIO1">
					</div>
					<h3>Cursos diversificados</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>


				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?=base_url('assets/images/books2.svg')?>" alt="">
					</div>
					<h3>Biblioteca abrangente</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?=base_url('assets/images/professor2.svg')?>" alt="">
					</div>
					<h3>Formadores Excepsionais</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?=base_url('assets/images/exam.svg')?>" alt="">
					</div>
					<h3>Programas de Est&aacute;gio</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="<?=base_url('assets/images/mortarboard.svg')?>" alt="">
					</div>
					<h3>Diploma de gradua&ccedil;&atilde;o</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

			</div>
		</div>
	</div>



	<div class="events page_section" style="margin-top: -10rem;">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>PROXIMOS EVENTOS</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<?php foreach($retrieveActi->result() as $key=>$retrieveActi):?>
					<?php if($retrieveActi->categoria == 'evento'):?>
						<div class="row event_item">
							<div class="col">
								<div class="row d-flex flex-row align-items-end">

									<div class="col-lg-2 order-lg-1 order-2">
										<div class="event_date d-flex flex-column align-items-center justify-content-center">
											<div class="event_day"><?=$retrieveActi->data_acont?></div>
											<div class="event_month"><?=$retrieveActi->mes_acont?></div>
											<div class="event_month"><?=$retrieveActi->ano_acont?></div>
										</div>
									</div>

									<div class="col-lg-6 order-lg-2 order-3">
										<div class="event_content">
											<div class="event_name"><a class="trans_200" href="<?=base_url('IndexCont/view/'.$retrieveActi->id_activity)?>"><?=$retrieveActi->titulo?></a></div>
											<div class="event_location"><?=$retrieveActi->local_acont?></div>
											<p>
												<?= print word_limiter($retrieveActi->content, 25)?>.  <span style="font-weight: bold;color: #000;"><?=$retrieveActi->data_adicionado?></span>
											</p>
										</div>
									</div>

									<div class="col-lg-4 order-lg-3 order-1">
										<div class="event_image">
											<img src="<?=base_url('upload/'.$retrieveActi->activ_image)?>" alt="IPP HIMOIO">
										</div>
									</div>

								</div>	
							</div>
						</div>
					<?php endif?>
				<?php endforeach?>

			</div>
				
		</div>
	</div>


<?php $this->load->view('_inc/footer')?>