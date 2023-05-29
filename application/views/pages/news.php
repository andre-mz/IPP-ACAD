<?php $this->load->view('_inc/head2')?>

    <div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx"><img src="<?=base_url('assets/images/news_background.jpg')?>" alt="ilm"></div>
		</div>
		<div class="home_content" style="background-color: #00204A;">
			<h1>Noticias</h1>
		</div>
	</div>


	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<div class="news_posts">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?=base_url('assets/images/img-5.jpg')?>" alt="img">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="">Por que fazer medicina?</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">Por IPP</a></span>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p class="text-justify">
									In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl
									ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus 
									nec eros varius luctus. Praesent finibus risus facilisis ultricies.
								</p>
							</div>
							<div class="news_post_button text-center trans_200" style="background-color: #00204A;">
								<a href="index">LER MAIS</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Artigos</h3>
							</div>
							<ul class="sidebar_list">
								<li class="sidebar_list_item"><a href="#">Por que fazer medicina</a></li>
								<li class="sidebar_list_item"><a href="#">ESMI</a></li>
								<li class="sidebar_list_item"><a href="#">TMG</a></li>
								<li class="sidebar_list_item"><a href="#">Sobre vida</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>













































<?php $this->load->view('_inc/footer')?>