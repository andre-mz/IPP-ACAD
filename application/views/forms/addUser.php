<?php $this->load->view('_inc/dashHead')?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       
        <a href="<?=site_url('Manager/tabUsr')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>
        
    </div>




    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 text-primary text-center" style="font-size: 30px;text-transform: uppercase;font-weight: 200">Adicionar novo user <i class="fas fa-user"></i></h6>
        </div>
        <div class="card-body">
                      
            <form id="formAlun" action="<?=base_url()?>Forms/addUser" method="post" class="form user mt-5">            
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome completo</label>
                        <select value="" name="name" id="disponibilidade" class="form-control form-control-user selectpicker" data-width="100%" title='***SELECIONE O NOME DO USER***' data-live-search="true">
                            <optgroup label="ESTUDANTES">
                                <?php foreach($retrieveStd->result() as $key=>$retrieveStd):?>
                                    <option><?=$retrieveStd->fullname?></option>
                                <?php endforeach?>   
                            </optgroup>
                            <optgroup label="FUNCIONARIOS > TODOS">
                                <?php foreach($retrieveFnc->result() as $key=>$retrieveFnc):?>
                                    <option><?=$retrieveFnc->nome?></option>
                                <?php endforeach?>   
                            </optgroup>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('name')?></small></div>
                    </div>
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nivel de acesso</label>
                        <select name="level" id="level" class="form-control form-control-user selectpicker" title='***SELECIONE O NIVEL DE ACESSO***'>
                            <option value="1">Super user</option>
                            <option value="2">Admin</option>
                            <option value="3">Docente</option>
                            <option value="4">Estudante</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('level')?></small></div>
                    </div>
                </div>
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-12 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Estado da conta</label>
                        <select name="estado" id="level" class="form-control form-control-user selectpicker" title='***SELECIONE O ESTADO DA CONTA***'>
                            <option value="1">Activo</option>
                            <option value="2">Em espera</option>
                            <option value="3">Desativo</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('estado')?></small></div>
                    </div>
                </div>
                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 13px;">Save record</button>
            </form> 
        </div>
    </div>


























<?php $this->load->view('_inc/dashFooter')?>

