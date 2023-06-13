<?php $this->load->view('_inc/dashHead')?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       
        <a href="<?=site_url('Manager/tabFnc')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>
        
    </div>


    <p class='text-center btn-block btn-success' style="text-transform: uppercase;font-size: 12px;"><?php echo $this->session->flashdata('success');?></p>
    <p class='text-center btn-block btn-danger' style="text-transform: uppercase;font-size: 12px;"><?php echo $this->session->flashdata('error');?></p>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top" style="height: 80px;">
            <h6 class="m-0 text-primary text-center mt-3" style="font-size: 30px;text-transform: uppercase;font-weight: 200">ADICIONAR funcionario <i class="fas fa-user-cog"></i></h6>
        </div>
        <div class="card-body">
            <form id="formAluno" action="<?=site_url('Forms/addFnc')?>" method="post" class="form user mt-5">
                <div class="row mt-2 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome completo</label>
                        <input value="<?php echo set_value('nome')?>" type="text" name="nome" id="nome" class="form-control form-control-user" placeholder="Nome completo">
                        <div class="erro-small"><small><?php echo form_error('nome')?></small></div>
                    </div>
                </div>
            
            
            
                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 13px;">
                    Save record
                </button>
            </form>
        </div>
    </div>







<?php $this->load->view('_inc/dashFooter')?>