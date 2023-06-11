<?php $this->load->view('_inc/head2')?>

    <div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx"><img src="<?=base_url('assets/images/news_background.jpg')?>" alt="ilm"></div>
		</div>
		<div class="home_content" style="background-color: #00204A;">
			<h1><?= $retrieveActi->titulo?></h1>
		</div>
	</div>







    <div class="card shadow mb-4">
        <div class="card-body">
        <p class='text-center btn-block btn-success'><?php echo $this->session->flashdata('status');?></p>
            <div class="row">
                
                
                    <div class="col-sm-8">
                        <input value="<?= $retrieveActi->titulo?>" type="text" name='titulo'>
                   
                        
                    
                        <textarea name="content" id="content" cols="30" rows="10"><?=$retrieveActi->content?></textarea>
                   
                        
                    </div>

                    <div class="col-sm-4">
                        <img src="<?=base_url('upload/'.$retrieveActi->activ_image)?>" alt="" class="img-responsive ">
                    </div>    
                   
            </div>
        </div>
    </div>
















<?php $this->load->view('_inc/footer')?>