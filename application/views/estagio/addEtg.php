<?php $this->load->view('_inc/dashHead')?>




    <div class="d-sm-flex align-items-center justify-content-between mb-4">   
        <a href="<?=site_url('estagio/Estagio/view')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>
    </div>

    
    <div class="card shadow mb-4" style="border-radius: 0!important;">
        <div class="card-header py-3 dataTable-top" style="height: 30px;">
            <h6 class="m-0 text-primary text-center mt-3" style="font-size: 30px;text-transform: uppercase;font-weight: 200"></i></h6>
        </div>
        <div class="card-body">
            <form id="formAluno" action="<?=site_url('estagio/Estagio/addEtg')?>" method="post" class="form user mt-5" enctype="multipart/form-data">
    
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome completo</label>
                        <input value="<?php echo set_value('nome')?>" type="text" name="nome" id="nome" class="form-control form-control-user" placeholder="Nome completo" style="border-radius: 0!important;">
                        <div class="erro-small"><small><?php echo form_error('nome')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> curso</label>
                        <input value="<?php echo set_value('curso')?>" name="curso" id="curso" class="form-control form-control-user" style="border-radius: 0!important;">
                        <div class="erro-small"><small><?php echo form_error('curso')?></small></div>
                    </div>

                    <div class="form-field col-sm-2 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> ano</label>
                        <input value="<?php echo set_value('ano')?>" name="ano" id="curso" class="form-control form-control-user" style="border-radius: 0!important;">
                        <div class="erro-small"><small><?php echo form_error('ano')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Tipo de estagio</label>
                        <select name="estagio" id="estado_academico" class="form-control form-control-user" placeholder="Estado academico" style="border-radius: 0!important;">
                            <option value="">***Tipo de estagio***</option>
                            <option value="parcial-1">PARCIAL-1</option>
                            <option value="parcial-2">PARCIAL-2</option>
                            <option value="integral-1">INTEGRAL-1</option>
                            <option value="integral-2">INTEGRAL-2</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('estagio')?></small></div>
                    </div>
                </div>

                

                <!--ENTRADA-->
                <div class="row mt-5 form-group mb-5">
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> turma</label>
                        <input value="<?php echo set_value('turma')?>" type="text" name="turma" id="departament" class="form-control form-control-user" placeholder="turma" style="border-radius: 0!important;">
                        <div class="erro-small"><small><?php echo form_error('turma')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contato</label>
                        <input value="<?php echo set_value('contato')?>" type="text" name="contato" id="morada" class="form-control form-control-user" placeholder="contato" style="border-radius: 0!important;">
                        <div class="erro-small"><small><?php echo form_error('contato')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Valor</label>
                        <input value="<?php echo set_value('valor_pago')?>" type="text" name="valor_pago" id="morada" class="form-control form-control-user" placeholder="valor a pago" style="border-radius: 0!important;">
                        <div class="erro-small"><small><?php echo form_error('valor_pago')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <button type="submit" value="Save" class="btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;margin-top: 24.0px;">
                            GUARDAR
                        </button>
                    </div>
                </div>

                
            </form>
        </div>
    </div>















































<?php $this->load->view('_inc/dashFooter')?>