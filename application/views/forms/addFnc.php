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
            <h6 class="m-0 text-primary text-center mt-3" style="font-size: 30px;text-transform: uppercase;font-weight: 200">CADASTRAR funcionario <i class="fas fa-user-cog"></i></h6>
        </div>
        <div class="card-body" >
            <form id="formAluno" action="<?=site_url('Forms/addFnc')?>" method="post" class="form user mt-5" enctype="multipart/form-data">
                
                <!--DADOS PESSOAIS-->
                <div class="row form-group">
                    <div class="form-field col-sm-12 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Foto tipo passe</label>
                        <input type="file" name="foto_fnc" class="form-control form-control-user">
                        <div class="erro-small"><small><?php if(isset($foto_Error)){echo $foto_Error;}?></small></div>
                    </div>
                </div>

                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome completo</label>
                        <input value="<?php echo set_value('nome')?>" type="text" name="nome" id="nome" class="form-control form-control-user" placeholder="Nome completo">
                        <div class="erro-small"><small><?php echo form_error('nome')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Data de nascimento</label>
                        <input value="<?php echo set_value('idade')?>" type="date" name="idade" id="idade" class="form-control form-control-user" placeholder="Data de nascimento">
                        <div class="erro-small"><small><?php echo form_error('idade')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Estado civil</label>
                        <select name="estado_civil" id="estado_civil" class="form-control form-control-user" placeholder="Data de nascimento">
                            <option value="">***ESTADO CIVIL***</option>
                            <option value="solteiro">Solteiro/a</option>
                            <option value="casado">Casado/a</option>
                            <option value="viuvo">Viuvo/a</option>
                            <option value="divorciado">divorciado/a</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('estado_civil')?></small></div>
                    </div>

                    <div class="form-field col-sm-2 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Genero</label>
                        <select name="genero" id="genero" class="form-control form-control-user">
                            <option value="">SELECIONE O GENERO</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('genero')?></small></div>
                    </div>
                </div>

                <!--PARENTES-->
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;"></span>Nome do conjugue</label>
                        <input value="<?php echo set_value('nome_conjugue')?>" name="nome_conjugue" id="nome_conjugue" class="form-control form-control-user" placeholder="Nome do conjugue">
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Nome do pai</label>
                        <input value="<?php echo set_value('nome_pai')?>" name="nome_pai" id="nome_pai" class="form-control form-control-user" placeholder="Nome do pai">
                        <div class="erro-small"><small><?php echo form_error('nome_pai')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Nome do mae</label>
                        <input value="<?php echo set_value('nome_mae')?>" name="nome_mae" id="nome_pai" class="form-control form-control-user" placeholder="Nome do mae">
                        <div class="erro-small"><small><?php echo form_error('nome_mae')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nacionalidade</label>
                        <input value="<?php echo set_value('nacionalidade')?>" type="text" name="nacionalidade" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                        <div class="erro-small"><small><?php echo form_error('nacionalidade')?></small></div>
                    </div>

                </div>

                <!--NACIONAL-->
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Naturalidade (Provincia)</label>
                        <input value="<?php echo set_value('naturalidade')?>" type="text" name="naturalidade" id="naturalidade" class="form-control form-control-user" placeholder="Naturalidade">
                        <div class="erro-small"><small><?php echo form_error('naturalidade')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> local de nascimento (Distrito)</label>
                        <input value="<?php echo set_value('local_nascimento')?>" name="local_nascimento" id="local_nascimento" class="form-control form-control-user" placeholder="local nascimento->Distrito">
                        <div class="erro-small"><small><?php echo form_error('local_nascimento')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Cidade atual</label>
                        <input value="<?php echo set_value('cidade_atual')?>" type="text" name="cidade_atual" id="nacionalidade" class="form-control form-control-user" placeholder="Cidade atual">
                        <div class="erro-small"><small><?php echo form_error('cidade_atual')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Morada (Bairro|Rua|Av)</label>
                        <input value="<?php echo set_value('morada')?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                        <div class="erro-small"><small><?php echo form_error('morada')?></small></div>
                    </div>
                </div>



                <!--DOCUMENTO-->
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
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

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> N&ugrave;mero do documento</label>
                        <input value="<?php echo set_value('nr_documento')?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="Nr do documento de indetifica&ccirc;&atilde;o">
                        <div class="erro-small"><small><?php echo form_error('nr_documento')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Local de emissao</label>
                        <input value="<?php echo set_value('local_emissao')?>" name="local_emissao" id="local_emissao" class="form-control form-control-user" placeholder="local de emissao">
                        <div class="erro-small"><small><?php echo form_error('local_emissao')?></small></div>
                    </div>
                </div>


                <!--AREA TRABALHO-->
                <div class="row mt-5 form-group" >
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nivel academico</label>
                        <input value="<?php echo set_value('nivel_academico')?>" name="nivel_academico" id="nivel_academico" class="form-control form-control-user" placeholder="nivel academico">
                        <div class="erro-small"><small><?php echo form_error('nivel_academico')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Estado academico</label>
                        <select name="estado_academico" id="estado_academico" class="form-control form-control-user" placeholder="Estado academico">
                            <option value="">***ESTADO ACADEMICO***</option>
                            <option value="concluido">Completo</option>
                            <option value="nao concluido">Incompleto</option>
                            <option value="cursando">Cursando</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('estado_academico')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Categoria do funcionario</label>
                        <select name="categoria" id="tipo_documento" class="form-control form-control-user">
                            <option value="">***CATEGORIA DO FUNCIONARIO***</option>
                            <option value="ecfetivo">
                                Ecfetivo
                            </option>
                            <option value="colaborador">
                                Colaborador
                            </option>
                            <option value="parcial">
                                Contrato parcial
                            </option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('tipo_documento')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Inicio de actividade</label>
                        <input value="<?php echo set_value('ano_entrada')?>" type="date" name="ano_entrada" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                        <div class="erro-small"><small><?php echo form_error('ano_entrada')?></small></div>
                    </div>
                </div>
            
                

                <!--ENTRADA-->
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Departamento</label>
                        <input value="<?php echo set_value('departament')?>" type="text" name="departament" id="departament" class="form-control form-control-user" placeholder="Departamento">
                        <div class="erro-small"><small><?php echo form_error('departament')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Cargo | area de trabalho</label>
                        <input value="<?php echo set_value('cargo')?>" type="text" name="cargo" id="morada" class="form-control form-control-user" placeholder="Cargo | area de trabalho">
                        <div class="erro-small"><small><?php echo form_error('cargo')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Local de trabalho</label>
                        <input value="<?php echo set_value('local')?>" type="text" name="local" id="morada" class="form-control form-control-user" placeholder="Local de trabalho">
                        <div class="erro-small"><small><?php echo form_error('local')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;"></span>Salario</label>
                        <input name="salario" id="salario" class="form-control form-control-user" placeholder="salario">
                        <div class="erro-small"><small><?php echo form_error('salario')?></small></div>
                    </div>
                </div>

                <!--CONTACTO-->            
                <div class="row form-group mt-5 mb-5">
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contacto pessoal</label>
                        <input value="<?php echo set_value('contato_pessoal')?>" type="text" name="contato_pessoal" id="contato_pessoal" class="form-control form-control-user" placeholder="Contacto pessola">
                        <div class="erro-small"><small><?php echo form_error('contato_pessoal')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contacto de emergencia 1</label>
                        <input value="<?php echo set_value('contato_emergencia')?>" type="text" name="contato_emergencia" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia">
                        <div class="erro-small"><small><?php echo form_error('contato_emergencia')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;"></span> Contacto de emergencia 2</label>
                        <input value="<?php echo set_value('contato_emergencia_2')?>" type="text" name="contato_emergencia_2" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia 2">
                        <!--div class="erro-small"><small>?php echo form_error('contato_emergencia_2')?></small></div-->
                    </div>
                </div>

                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 13px;">
                    Save record
                </button>
            </form>
        </div>
    </div>







<?php $this->load->view('_inc/dashFooter')?>