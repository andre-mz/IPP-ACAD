<?php $this->load->view('_inc/dashHead')?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       
        <a href="<?=site_url('Manager/tabStd')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>
        
    </div>




    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top" style="height: 80px;">
            <h6 class="m-0 text-primary text-center mt-3" style="font-size: 30px;text-transform: uppercase;font-weight: 200">ADICIONAR NOVO FORMANDO <i class="fas fa-user-graduate"></i></h6>
        </div>
        <div class="card-body">
            <form id="formAluno" action="<?=site_url('Forms/add')?>" method="post" class="form user mt-5">
                <div class="row mt-2 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome completo</label>
                        <input value="<?php echo set_value('fullname')?>" type="text" name="fullname" id="fullname" class="form-control form-control-user" placeholder="Nome completo">
                        <div class="erro-small"><small><?php echo form_error('fullname')?></small></div>
                    </div>
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome do encaregado-> Pai | mae </label>
                        <input value="<?php echo set_value('nome_pai')?>" type="text" name="nome_pai" id="nome_pai" class="form-control form-control-user" placeholder="Nome do encaregado | Nome do pai | Nome da mae">
                        <div class="erro-small"><small><?php echo form_error('nome_pai')?></small></div>
                    </div>
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Data de nascimento</label>
                        <input value="<?php echo set_value('idade')?>" type="date" name="idade" id="idade" class="form-control form-control-user" placeholder="Data de nascimento">
                        <div class="erro-small"><small><?php echo form_error('idade')?></small></div>
                    </div>
                </div>

                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nacionalidade</label>
                        <input value="<?php echo set_value('nacionalidade')?>" type="text" name="nacionalidade" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                        <div class="erro-small"><small><?php echo form_error('nacionalidade')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Naturalidade</label>
                        <input value="<?php echo set_value('naturalidade')?>" type="text" name="naturalidade" id="naturalidade" class="form-control form-control-user" placeholder="Naturalidade">
                        <div class="erro-small"><small><?php echo form_error('naturalidade')?></small></div>
                    </div>
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Morada</label>
                        <input value="<?php echo set_value('morada')?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                        <div class="erro-small"><small><?php echo form_error('morada')?></small></div>
                    </div>
                </div>

                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Genero</label>
                        <select name="genero" id="genero" class="form-control form-control-user">
                            <option value="">SELECIONE O GENERO</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('genero')?></small></div>
                    </div>

                    <div class="form-field col-sm-5 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> DOCUMENTO DE IDENTIFICA&Ccedil;&Atilde;O</label>
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
                        <div class="erro-small"><small><?php echo form_error('tipo_documento')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> N&ugrave;mero do codumento</label>
                        <input value="<?php echo set_value('nr_documento')?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="Nr do documento de indetifica&ccirc;&atilde;o">
                        <div class="erro-small"><small><?php echo form_error('nr_documento')?></small></div>
                    </div>
                </div>


                <div class='form-field row mt-5 form-group'>
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Periodo</label>
                        <select name="periodo" id="periodo" class="form-control form-control-user" >
                            <option value="">*****SELECIONE O PERIODO*****</option>
                            <option value="laboral">
                                LABORAL
                            </option>
                            <option value="pos-laboral">
                                P&Oacute;S-LABORAL
                            </option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('periodo')?></small></div>
                    </div>

                    <div class="form-field col-sm-2 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Ano a frequentar</label>
                        <input value="<?php echo set_value('ano_frequentar')?>" type="text" name="ano_frequentar" id="ano_frequentar" class="form-control form-control-user" placeholder="Ano a frequentar">
                        <div class="erro-small"><small><?php echo form_error('ano_frequentar')?></small></div>
                    </div>

                    <div class="form-field col-sm-2 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Turma</label>
                        <input value="<?php echo set_value('turma')?>" type="text" name="turma" id="turma" class="form-control form-control-user" placeholder="Turma">
                        <div class="erro-small"><small><?php echo form_error('turma')?></small></div>
                    </div>
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Curso</label>
                        <input type="text" name="curso" class="form-control form-control-user selectpicker" data-width="100%" title='***CURSO***' data-live-search="true">
                            
                        <div class="erro-small"><small><?php echo form_error('curso')?></small></div>
                    </div>  
                </div>


                <div class="row form-group mt-5 mb-5">
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contacto pessoal</label>
                        <input value="<?php echo set_value('contato_pessoal')?>" type="text" name="contato_pessoal" id="contato_pessoal" class="form-control form-control-user" placeholder="Contacto pessola">
                        <div class="erro-small"><small><?php echo form_error('contato_pessoal')?></small></div>
                    </div>

                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contacto de emergencia</label>
                        <input value="<?php echo set_value('contato_emergencia')?>" type="text" name="contato_emergencia" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia">
                        <div class="erro-small"><small><?php echo form_error('contato_emergencia')?></small></div>
                    </div>
                </div>


                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 13px;">
                    Save record
                </button>
            </form>
        </div>
    </div> 





    <!--
                        

                    
                </div>
                        
                <div class="row mt-2 form-group mt-5">   
                <?php
                                foreach($retrieveCrs->result() as $key=>$retrieveCrs):?>
                                <option><?=$retrieveCrs->nome_curso?></option>
                            <?php endforeach?>
                    

                    

                    
                </div>     
                
                
                   
    -->










































    <?php $this->load->view('_inc/dashFooter')?>