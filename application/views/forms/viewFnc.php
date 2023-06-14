<?php $this->load->view('_inc/dashHead')?>



    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?=site_url('Manager/tabFnc')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>
        
        <a href="<?=base_url('GeneratePdf/generatePdfFnc/'.$retrieveFnc->id_funcionario)?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Gerar PDF
        </a>
    </div>


    
    <!-- DataTales Example -->
    <div class="row" >
        <p class='text-center btn-block btn-success' style="text-transform: uppercase;font-size: 12px;"><?php echo $this->session->flashdata('status');?></p>
        <p class='text-center btn-block btn-danger' style="text-transform: uppercase;font-size: 12px;"><?php echo $this->session->flashdata('erro');?></p>
    
        <div class="col-sm-9">
            
            <div class="card shadow mb-4 dep">
                <div class="card-header py-3 dataTable-top">
                    <h6 class="m-0 text-primary text-center text-danger" style="font-size: 30px;text-transform: uppercase;font-weight: 200">
                        <?=$retrieveFnc->nome?>&nbsp;<i class="fa fa-user-cog"></i>  
                    </h6>
                </div>
                <div class="card-body">
                
                    <form action="<?=base_url('Manager/updateFnc/'.$retrieveFnc->id_funcionario)?>" method="post">
                    <div class="row mt-2 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome completo</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('nome')?><?=$retrieveFnc->nome?>" type="text" name="nome" id="nome" class="form-control form-control-user" placeholder="Nome completo">
                        <div class="erro-small"><small><?php echo form_error('nome')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Data de nascimento</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('idade')?><?=$retrieveFnc->idade?>" type="date" name="idade" id="idade" class="form-control form-control-user" placeholder="Data de nascimento">
                        <div class="erro-small"><small><?php echo form_error('idade')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Estado civil</label>
                        <?php $estado_civil = $this->input->post('estado_civil') ? $this->input->post('estado_civil') : $retrieveFnc->estado_civil?>
                        <select style="border-radius: 0!important;" name="estado_civil" id="" class="form-control form-control-user">
                            <option value="solteiro"   <?= $estado_civil === 'solteiro'   ? 'selected' : null?>>Solteiro/a</option>
                            <option value="casado"     <?= $estado_civil === 'casado'     ? 'selected' : null?>>Casado/a</option>
                            <option value="viuvo"      <?= $estado_civil === 'viuvo'      ? 'selected' : null?>>Viuvo/a</option>
                            <option value="divorciado" <?= $estado_civil === 'divorciado' ? 'selected' : null?>>divorciado/a</option>
                            <option value=""           <?= $estado_civil === ''           ? 'selected' : null?>>N&Atilde;O EXPECIFICADO</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('estado_civil')?></small></div>
                    </div>
                </div>

                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Genero</label>
                        <?php $genero = $this->input->post('genero') ? $this->input->post('genero') : $retrieveFnc->genero;?>
                        <select style="border-radius: 0!important;" class="form-control form-control-user" name="genero" id="genero">
                            <option value="M" <?=$genero === 'M' ? 'selected' : null?>>
                                MASCULINO
                            </option>
                            <option value="F" <?=$genero === 'F' ? 'selected' : null?>>
                                FEMENINO
                            </option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('genero')?></small></div>
                    </div>

                    <div class="form-field col-sm-5 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> DOCUMENTO DE IDENTIFICA&Ccedil;&Atilde;O</label>
                        <?php $tipo_documento = $this->input->post('tipo_documento') ? $this->input->post('tipo_documento') : $retrieveFnc->tipo_documento?>
                        <select style="border-radius: 0!important;" name="tipo_documento" id="" class="form-control form-control-user">
                            <option value="BI"         <?= $tipo_documento === 'BI'         ? 'selected' : null?>>BI</option>
                            <option value="DIRE"       <?= $tipo_documento === 'DIRE'       ? 'selected' : null?>>DIRE</option>
                            <option value="PASSAPORT"  <?= $tipo_documento === 'PASSAPORT'  ? 'selected' : null?>>PASSAPORTE</option>
                            <option value="CONDUCAO"   <?= $tipo_documento === 'CONDUCAO'   ? 'selected' : null?>>CARTA DE CONDU&Ccedil;&Atilde;O</option>
                            <option value=""           <?= $tipo_documento === ''           ? 'selected' : true?>>N&Atilde;O EXPECIFICADO</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('tipo_documento')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> N&ugrave;mero do codumento</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('nr_documento')?><?=$retrieveFnc->nr_documento?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="Nr do documento de indetifica&ccirc;&atilde;o">
                        <div class="erro-small"><small><?php echo form_error('nr_documento')?></small></div>
                    </div>
                </div>
            
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nacionalidade</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('nacionalidade')?><?=$retrieveFnc->nacionalidade?>" type="text" name="nacionalidade" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                        <div class="erro-small"><small><?php echo form_error('nacionalidade')?></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Naturalidade</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('naturalidade')?><?=$retrieveFnc->naturalidade?>" type="text" name="naturalidade" id="naturalidade" class="form-control form-control-user" placeholder="Naturalidade">
                        <div class="erro-small"><small><?php echo form_error('naturalidade')?></small></div>
                    </div>
                    <div class="form-field col-sm-4 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Morada</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('morada')?><?=$retrieveFnc->morada?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                        <div class="erro-small"><small><?php echo form_error('morada')?></small></div>
                    </div>
                </div>

                <!--ENTRADA-->
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Inicio de actividade</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('ano_entrada')?><?=$retrieveFnc->ano_entrada?>" type="date" name="ano_entrada" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                        <div class="erro-small"><small><?php echo form_error('ano_entrada')?></small></div>
                    </div>

                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Departamento</label>
                        <?php $departament = $this->input->post('departament') ? $this->input->post('departament') : $retrieveFnc->departament?>
                        <select style="border-radius: 0!important;" name="departament" id="departament" class="form-control form-control-user">
                            <option value="Informatica"       <?= $departament === 'Informatica'       ? 'selected' : null?>>SECTOR INFORMATICO</option>
                            <option value="Administrativo"    <?= $departament === 'Administrativo'    ? 'selected' : null?>>SECTOR ADMINIATRATIVO</option>
                            <option value="Pedagogico"        <?= $departament === 'Pedagogico'        ? 'selected' : null?>>SECTOR PEDAGOGICO</option>
                            <option value="Academico"         <?= $departament === 'Academico'         ? 'selected' : null?>>REG.ACADEMICO</option>
                            <option value="Agente de servico" <?= $departament === 'agente de servico' ? 'selected' : null?>>AGENTE DE SERVI&Ccedil;O</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('departament')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Cargo | area de trabalho</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('cargo')?><?=$retrieveFnc->cargo?>" type="text" name="cargo" id="morada" class="form-control form-control-user" placeholder="Cargo | area de trabalho">
                        <div class="erro-small"><small><?php echo form_error('cargo')?></small></div>
                    </div>
                    <div class="form-field col-sm-3 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Local de trabalho</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('local')?><?=$retrieveFnc->local?>" type="text" name="local" id="morada" class="form-control form-control-user" placeholder="Local de trabalho">
                        <div class="erro-small"><small><?php echo form_error('local')?></small></div>
                    </div>
                </div>

                <!--CATEGORIA-->
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Categoria do funcionario</label>
                        <?php $categoria = $this->input->post('categoria') ? $this->input->post('categoria') : $retrieveFnc->categoria?>
                        <select style="border-radius: 0!important;" name="categoria" id="categoria" class="form-control form-control-user">
                            <option value="ecfetivo"    <?= $categoria === 'ecfetivo'    ? 'selected' : null?>>Ecfetivo</option>
                            <option value="colaborador" <?= $categoria === 'colaborador' ? 'selected' : null?>>Colaborador</option>
                            <option value="parcial"     <?= $categoria === 'parcial'     ? 'selected' : null?>>REG.Contrato parcial</option>
                            <option value=""            <?= $categoria === null          ? 'selected' : null?>>N&Atilde;O EXPECIFICADO</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('tipo_documento')?></small></div>
                    </div>

                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Estado do funcionario</label>
                        <?php $estado = $this->input->post('estado') ? $this->input->post('estado') : $retrieveFnc->estado?>
                        <select style="border-radius: 0!important;" name="estado" id="estado" class="form-control form-control-user">
                            <option value="1" <?= $estado == 1 ? 'selected' : null?>>Disponivel / De trabalho</option>
                            <option value="3" <?= $estado == 3 ? 'selected' : null?>>Ferias sem remunera&ccedil;o</option>
                            <option value="4" <?= $estado == 4 ? 'selected' : null?>>Ferias remuneradas</option>
                            <option value="0" <?= $estado == 0 ? 'selected' : null?>>Demitido</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('tipo_documento')?></small></div>
                    </div>
                </div>

            
                <div class="row form-group mt-5 mb-5">
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contacto pessoal</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('contato_pessoal')?><?=$retrieveFnc->contato_pessoal?>" type="text" name="contato_pessoal" id="contato_pessoal" class="form-control form-control-user" placeholder="Contacto pessola">
                        <div class="erro-small"><small><?php echo form_error('contato_pessoal')?></small></div>
                    </div>

                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contacto de emergencia</label>
                        <input style="border-radius: 0!important;" value="<?php echo set_value('contato_emergencia')?><?=$retrieveFnc->contato_emergencia?>" type="text" name="contato_emergencia" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia">
                        <div class="erro-small"><small><?php echo form_error('contato_emergencia')?></small></div>
                    </div>
                </div>
                        <button type="submit" name="update" class="mt-5 mb-2 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 13px;">
                            Update record
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card shadow mb-4 dep">
                    <div class="card-header py-3 dataTable-top">
                        <h6 class="m-0 text-primary text-center text-danger" style="font-size: 30px;text-transform: uppercase;font-weight: 200">
                            FOTO 
                        </h6>
                    </div>
                    <div class="card-body p-2">
                        <img src="<?=base_url('assets/images/IPP-LOGO.png')?>"  srcset="" alt='fotoDePerfil' class="p-5 img">
                    </div>
                </div>
            </div>
        </form>
    </div>






























<?php $this->load->view('_inc/dashFooter')?>