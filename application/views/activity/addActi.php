<?php $this->load->view('_inc/dashHead')?>



    <div class="d-sm-flex align-items-center justify-content-between mb-4">  
        <a href="<?=base_url()?>Url/activity" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>    
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 font-weight-bold text-primary">Curso</h6>
        </div>
        <div class="card-body">
             
            <form id="formAlun" enctype="multipart/form-data" action="<?=base_url()?>Forms/addActivity" method="post" class="form user mt-5">
                <input value="<?= set_value('titulo')?>" type="text" name='titulo'>
                <small><?php echo form_error('titulo')?></small>

                <input type="file" name='activ_image'>
                <small><?php if(isset($imageError)){echo $imageError;}?></small>

                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                <small><?php echo form_error('content')?></small>
                
                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">save</button>
            </form>
        </div>
    </div>











































<?php $this->load->view('_inc/dashFooter')?>