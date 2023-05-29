<?php $this->load->view('_inc/head2')?>

    <div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx"><img src="<?=base_url('assets/images/courses_background.jpg')?>" alt="ilm"></div>
		</div>
		<div class="home_content" style="background-color: #00204A;">
			<h1>Cursos</h1>
		</div>
	</div>



	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Nossos cursos</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="<?=base_url('assets/images/img-5.jpg')?>" alt="imagem">
						<div class="card-body text-center">
							<div class="card-title"><a href="">Enfermagem S. Materna Infantil</a></div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="<?=base_url('assets/images/IPP-LOGO.png')?>" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">IPP Chimoio, <span>Autor</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>5/2023</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>












































<?php $this->load->view('_inc/footer')?>