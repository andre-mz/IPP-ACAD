<?php $this->load->view('_inc/head2')?>

    <div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx"><img src="<?=base_url('assets/images/contact_background.jpg')?>" alt="ilm"></div>
		</div>
		<div class="home_content" style="background-color: #00204A;">
			<h1>Contacto</h1>
		</div>
	</div>



    <div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Fale conosco</div>

						<div class="contact_form_container">
							<form action="post">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Seu nome" required="required" data-error="Name is required.">
								<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message mt-5" name="message" placeholder="Mensagem" required="required" data-error="Please, write us a message."></textarea>
								<button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">enviar mensagem</button>
							</form>
						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						<!--div class="about_title">Join Courses</div>
						<p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p>
                        -->
						<div class="contact_info" >
							<ul class="mt-5" style="margin-top: 15rem!important;">
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="<?=base_url('assets/images/placeholder2.svg')?>" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Bairro 4, nr 04934 edificio Azul
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="<?=base_url('assets/images/smartphone2.svg')?>" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									+258 87 645 2222
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="<?=base_url('assets/images/envelope2.svg')?>" alt="https://www.flaticon.com/authors/lucy-g">
									</div>ipp@ip.ac.mz
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>








































<?php $this->load->view('_inc/footer')?>