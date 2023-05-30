<?php $this->load->view('_inc/dashHead')?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       
        <a href="<?=site_url('Manager/tabStd')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>
        
    </div>




    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 font-weight-bold text-primary">Dados</h6>
        </div>
        <div class="card-body">
            
            <form id="formAluno" action="<?=site_url('Forms/add')?>" method="post" class="form user mt-5">
                <div class="row mt-2 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <input value="<?php echo set_value('fullname')?>" type="text" name="fullname" id="fullname" class="form-control form-control-user" placeholder="Nome completo">
                        <div class="erro-small"><small><?php echo form_error('fullname')?></small></div>
                    </div>
                    
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('nome_pai')?>" type="text" name="nome_pai" id="nome_pai" class="form-control form-control-user" placeholder="Nome do encaregado | Nome do pai | Nome da mae">
                        <!--small style="color: red;">?php echo form_error('nome_pai')?></small-->
                        <div class="erro-small"><small><?php echo form_error('nome_pai')?></small></div>
                    </div>
                
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('idade')?>" type="date" name="idade" id="idade" class="form-control form-control-user" placeholder="Idade">
                        <!--small style="color: red;">?= form_error('idade');?></small-->
                        <div class="erro-small"><small><?php echo form_error('idade')?></small></div>
                    </div>

                </div>
                    
                <div class="row mt-2 form-group mt-5">
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('nacionalidade')?>" type="text" name="nacionalidade" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                        <!--small style="color: red;">?php echo form_error('nacionalidade')?></small-->
                        <div class="erro-small"><small><?php echo form_error('nacionalidade')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('naturalidade')?>" type="text" name="naturalidade" id="naturalidade" class="form-control form-control-user" placeholder="Naturalidade">
                        <!--small style="color: red;">?php echo form_error('naturalidade')?></small-->
                        <div class="erro-small"><small><?php echo form_error('naturalidade')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('morada')?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                        <!--small style="color: red;">?php echo form_error('morada')?></small-->
                        <div class="erro-small"><small><?php echo form_error('morada')?></small></div>
                    </div>
                </div>    

                <div class="row mt-2 form-group mt-5"> 
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <!--small style="color: red;">?= form_error('idade');?></small-->
                        <select name="genero" id="genero" class="form-control form-control-user">
                            <option value="">SELECIONE O GENERO</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('genero')?></small></div>
                    </div>

                    <div class="form-field col-sm-5 mb-sm-0 mb-4">
                        <select name="tipo_documento" id="tipo_documento" class="form-control form-control-user">
                            <option value="">*DOCUMENTO DE IDENTIFICA&Ccedil;&Atilde;O*</option>
                            <option value="BI">
                                BI
                            </option>
                            <option value="DIRE">
                                DIRE
                            </option>
                            <option value="PASSAPORT">
                                PASSAPORT
                            </option>
                            <option value="CONDUCAO">
                                CARTA DE CONDU&Ccedil;&Atilde;O
                            </option>
                        </select>
                        <!--small style="color: red;">?php echo form_error('tipo_documento')?></small-->
                        <div class="erro-small"><small><?php echo form_error('tipo_documento')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('nr_documento')?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="Nr do documento de indetifica&ccirc;&atilde;o">
                        <!--small style="color: red;"><?php echo form_error('nr_documento')?></small-->
                        <div class="erro-small"><small><?php echo form_error('nr_documento')?></small></div>
                    </div>
                </div>
                        
                <div class="row mt-2 form-group mt-5">   

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <!--small style="color: red;">?php echo form_error('curso')?></small--> 
                        <select name="curso" id="curso" class="form-control form-control-user selectpicker" title="SELECIONE O CURSO" data-live-search="true">
                            <?php
                                foreach($retrieveCrs->result() as $key=>$retrieveCrs):?>
                                <option value="<?=$retrieveCrs->nome_curso?>"><?=$retrieveCrs->nome_curso?></option>
                            <?php endforeach?>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('curso')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <select name="periodo" id="periodo" class="form-control form-control-user" >
                            <option value="">*****SELECIONE O PERIODO*****</option>
                            <option value="1">
                                LABORAL
                            </option>
                            <option value="2">
                                P&Oacute;S-LABORAL
                            </option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('periodo')?></small></div>
                    </div>

                    <div class="form-field col-sm-2 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('ano_frequentar')?>" type="text" name="ano_frequentar" id="ano_frequentar" class="form-control form-control-user" placeholder="Ano a frequentar">
                        <!--small style="color: red;"><?php echo form_error('ano_frequentar')?></small-->
                        <div class="erro-small"><small><?php echo form_error('ano_frequentar')?></small></div>
                    </div>

                    <div class="form-field col-sm-2 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('turma')?>" type="text" name="turma" id="turma" class="form-control form-control-user" placeholder="Turma">
                        <!--small style="color: red;"><?php echo form_error('turma')?></small-->
                        <div class="erro-small"><small><?php echo form_error('turma')?></small></div>
                        
                    </div>
                </div>     
                
                <div class="row mt-2 form-group mt-5">
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('contato_pessoal')?>" type="text" name="contato_pessoal" id="contato_pessoal" class="form-control form-control-user" placeholder="Contacto pessola">
                        <!--small style="color: red;">?php echo form_error('contato_pessoal')?></small-->
                        <div class="erro-small"><small><?php echo form_error('contato_pessoal')?></small></div>
                    </div>

                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                        <input value="<?php echo set_value('contato_emergencia')?>" type="text" name="contato_emergencia" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia">
                        <!--small style="color: red;">?php echo form_error('contato_emergencia')?></small-->
                        <div class="erro-small"><small><?php echo form_error('contato_emergencia')?>></small></div>
                    </div>
                </div>
                   
                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">
                    REGISTRAR
                </button>
            </form>
        </div>
    </div> 
















































<?php $this->load->view('_inc/dashFooter')?>