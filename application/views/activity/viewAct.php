<?php $this->load->view('_inc/dashHead')?>



<div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 font-weight-bold text-primary">Curso</h6>
        </div>
        <div class="card-body">
        <p class='text-center btn-block btn-success'><?php echo $this->session->flashdata('status');?></p>
            <div class="row">
                
                <form id="formAlun" enctype="multipart/form-data" action="<?=base_url('Activity/updateActivity/'.$retrieveAct->id_activity)?>" method="post" class="form user mt-5">
                    <div class="col-sm-8">
                        <input value="<?= $retrieveAct->titulo?>" type="text" name='titulo'>
                        <small><?php echo form_error('titulo')?></small>
                        
                        <input type="hidden" name='old_activ_image' hidden value="<?=$retrieveAct->activ_image?>">
                        <input type="file" name='activ_image'>
                        <small><?php if(isset($imageError)){echo $imageError;}?></small>

                        <textarea name="content" id="content" cols="30" rows="10"><?=$retrieveAct->content?></textarea>
                        <small><?php echo form_error('content')?></small>
                        
                    </div>

                    <div class="col-sm-4">
                        <img src="<?=base_url('upload/'.$retrieveAct->activ_image)?>" alt="" class="img-responsive ">
                    </div>    
                    <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">save</button>
                </form>
            </div>
        </div>
    </div>

















<?php $this->load->view('_inc/dashFooter')?>

