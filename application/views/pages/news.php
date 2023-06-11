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
						<?php foreach($retrieveActi->result() as $key=>$retrieveActi):?>
							<!-- News Post -->
							<div class="news_post">
								<div class="news_post_image">
									<img src="<?= base_url('upload/'.$retrieveActi->activ_image)?>" alt="img">
								</div>
								<div class="news_post_top d-flex flex-column flex-sm-row">
									<div class="news_post_date_container">
										<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
											<div style="font-size: 12px;"><?=$retrieveActi->data_adicionado?></div>
										</div>
									</div>
									<div class="news_post_title_container">
										<div class="news_post_title">
											<a href="<?=base_url('Activity/editAct'.$retrieveAct->id_activity)?>"><?=$retrieveActi->titulo?></a>
										</div>
										<div class="news_post_meta">
											<span class="news_post_author"><a href="">Por IPP</a></span>
										</div>
									</div>
								</div>
								<div class="news_post_text">
									<p class="text-justify">
									</p>
								</div>
								<div class="news_post_button text-center trans_200" style="background-color: #00204A;">
									<a href="<?=base_url('Activity/editAct'.$retrieveAct->id_activity)?>">LER MAIS</a>
								</div>
							</div>
						<?php endforeach?>	
					</div>
				</div>

				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h3>Titulos</h3>
							</div>
							<ul class="sidebar_list">
								<?php foreach($retrieveAct->result() as $key=>$retrieveAct):?>
									<li class="sidebar_list_item"><a href="<?=base_url('Activity/editAct'.$retrieveAct->id_activity)?>"><?=$retrieveAct->titulo?></a></li>
								<?php endforeach?>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>













































<?php $this->load->view('_inc/footer')?>