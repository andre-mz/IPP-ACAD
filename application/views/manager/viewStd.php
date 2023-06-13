<?php $this->load->view('_inc/dashHead')?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       
        <a href="<?=site_url('Manager/tabStd')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>
        
        <a href="<?=base_url('GeneratePdf/generatePdf/'.$retrieveStd->id_estudante)?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Gerar PDF
        </a>
    </div>
    
    <!-- DataTales Example -->
            <p class='text-center btn-block btn-success' style="text-transform: uppercase;font-size: 15px;"><?php echo $this->session->flashdata('status');?></p>
            <p class='text-center btn-block btn-danger'><?php echo $this->session->flashdata('status-2');?></p>
    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top" style="height: 80px;">
            <h6 class="m-0 text-primary text-center mt-3" style="font-size: 30px;text-transform: uppercase;font-weight: 200;">Dados do formando <i class="fas fa-user-edit"></i></h6>
        </div>
        <div class="card-body">
            <div class="">
                <div class="">
                    <form action="<?= base_url('Manager/updateStd/'.$retrieveStd->id_estudante)?>" method="POST" enctype="multipart/form-data">
                        <div class="row mt-2 form-group">
                            <input name="id_estudante" value="<?=$retrieveStd->id_estudante?>" hidden>
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome completo</label>
                                <input value="<?=$retrieveStd->fullname?>" type="text" name="fullname" id="fullname" class="form-control form-control-user" placeholder="Nome completo">
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                            <label for="nome_pai" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Encarregado de educao&ccedil;&atilde;o</label>
                                <input value="<?=$retrieveStd->nome_pai ?>" type="text" name="nome_pai" id="nome_pai" class="form-control form-control-user" placeholder="Nome do encaregado | Nome do pai | Nome da mae">
                                <!--small style="color: red;">?php echo form_error('nome_pai')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-2 mb-sm-0 mb-4">
                                <label for="idade" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Data de nascimento</label>
                                <input value="<?=$retrieveStd->idade ?>" type="date" name="idade" id="idade" class="form-control form-control-user" placeholder="Idade">
                                <!--small style="color: red;">?= form_error('idade');?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>

                            <div class="form-field col-sm-2 mb-sm-0 mb-4">
                                <label for="Genero" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Genero</label>
                                <?php $genero = $this->input->post('genero') ? $this->input->post('genero') : $retrieveStd->genero;?>
                                <select class="form-control form-control-user" name="genero" id="genero">
                                    <option value="M" <?=$genero === 'M' ? 'selected' : null?>>
                                        MASCULINO
                                    </option>
                                    <option value="F" <?=$genero === 'F' ? 'selected' : null?>>
                                        FEMENINO
                                    </option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>

                        </div>
                        
                        <div class="row mt-2 form-group mt-5">
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                            <label for="nacionalidade" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Nacionalidade</label>
                                <input value="<?=$retrieveStd->nacionalidade ?>" type="text" name="nacionalidade" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                                <!--small style="color: red;">?php echo form_error('nacionalidade')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                            <label for="naturalidade" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Naturalidade</label>
                                <input value="<?=$retrieveStd->naturalidade?>" type="text" name="naturalidade" id="naturalidade" class="form-control form-control-user" placeholder="Naturalidade">
                                <!--small style="color: red;">?php echo form_error('naturalidade')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                            <label for="morada" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Morada: bairro, rua, avenida</label>
                                <input value="<?=$retrieveStd->morada ?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                                <!--small style="color: red;">?php echo form_error('morada')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>
                        
                        <div class="row mt-2 form-group mt-5">
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <label for="documento" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Documento de identifica&ccedil;&atilde;o</label>
                                <?php $tipo_documento = $this->input->post('tipo_documento') ? $this->input->post('tipo_documento') : $retrieveStd->tipo_documento;?>
                                <select class="form-control form-control-user" name="tipo_documento" id="tipo_documento">
                                    <option value="">
                                        ****SELECIONE O DOCUMENTO DE IDENTIFICA&Ccedil;&Atilde;o
                                    </option>
                                    <option value="BI" <?=$tipo_documento === 'BI'        ? 'selected' : null?>>
                                        BI
                                    </option>
                                    <option value="DIRE" <?=$tipo_documento === 'DIRE'      ? 'selected' : null?>>
                                        DIRE
                                    </option>
                                    <option value="PASSAPORT" <?=$tipo_documento === 'PASSAPORT' ? 'selected' : null ?>>
                                        PASSAPORT
                                    </option>
                                    <option value="CONDUCAO" <?=$tipo_documento === 'CONDUCAO'  ? 'selected' : null?>>
                                        CARTA DE CONDU&Ccedil;&Atilde;O
                                    </option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <label for="nr_documento" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Numero do documento</label>
                                <input value="<?=$retrieveStd->nr_documento ?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="Numeor do documento de indetifica&ccirc;&atilde;o">
                                <!--small style="color: red;"><?php echo form_error('nr_documento')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <label for="curso" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Curso a frequentar</label>
                                <?php $curso = $this->input->post('curso') ? $this->input->post('curso') : $retrieveStd->curso?>
                                <select class="form-control form-control-user" name="curso" id='curso'>
                                    <option value="tmg"     <?=$curso === 'tmg'       ? 'selected' : null?>>
                                        ENFERMAGEM T.M GERAL
                                    </option>
                                    <option value="farmacia" <?=$curso === 'farmacia' ? 'selected' : null?>>
                                        F&Aacute;RMACIA
                                    </option>
                                    <option value="smi"      <?=$curso === 'smi'      ? 'selected' : null?>>
                                        ENFERMAGEM S.M INFANTIL
                                    </option>
                                    <option value="nutricao" <?=$curso === 'nutricao' ? 'selected' : null?>>
                                        NUTRI&Ccedil;&Atilde;O
                                    </option>
                                    <option value="informatica" <?=$curso === 'Informatica' ? 'selected' : null?>>
                                        INFORMATICA
                                    </option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <label for="ano_frequentar" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Ano a frequentar</label>
                                <input value="<?=$retrieveStd->ano_frequentar?>" type="text" name="ano_frequentar" id="ano_frequentar" class="form-control form-control-user" placeholder="Ano a frequentar">
                                <!--small style="color: red;"><?php echo form_error('ano_frequentar')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>

                        <div class="row mt-5 form-group">
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <label for="turma" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Turma</label>
                                <input value="<?=$retrieveStd->turma?>" type="text" name="turma" id="turma" class="form-control form-control-user" placeholder="Nome completo">
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <label for="periodo" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Periodo</label>
                                <?php $periodo = $this->input->post('periodo') ? $this->input->post('periodo') : $retrieveStd->periodo ?>
                                <select name="periodo" id="periodo" class="form-control form-control-user" >
                                    <option value="laboral"     <?=$periodo === 'laboral'     ? 'selected' : null?>>
                                        LABORAL
                                    </option>
                                    <option value="pos-laboral" <?=$periodo === 'pos-laboral' ? 'selected' : null?>>
                                        P&Oacute;S-LABORAL
                                    </option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <!--small style="color: red;">?= form_error('idade');?></small-->
                                <label for="estado" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Estado do estudante</label>
                                <?php $estado_estudante =  $this->input->post('estado_estudante') ? $this->input->post('estado_estudante') : $retrieveStd->estado_estudante?>
                                <select class="form-control form-control-user" name="estado_estudante" id="estado_estudante">
                                    <option value="">
                                        *****SELECIONE O ESTADO DO ESTUDANTE*****
                                    </option>
                                    <option value="1" <?=$estado_estudante == 1 ? "selected" : null?>>
                                        Disponivel
                                    </option>
                                    <option value="2" <?=$estado_estudante == 2 ? "selected" : null?>>
                                        Desistiu
                                    </option>
                                    <option value="3" <?=$estado_estudante == 3 ? "selected" : null?>>
                                        Concluido
                                    </option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>


                        
                        <div class="row form-group mt-5">
                            <div class="form-field col-sm-6 mb-sm-0 mb-4">
                                <label for="contato"style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contacto pessoal do estudante</label>
                                <input value="<?=$retrieveStd->contato_pessoal ?>" type="text" name="contato_pessoal" id="contato_pessoal" class="form-control form-control-user" placeholder="Contacto pessola">
                                <!--small style="color: red;">?php echo form_error('contato_pessoal')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-6 mb-sm-0 mb-4">
                                <label for="emergencia"style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Contacto de emergencia</label>
                                <input value="<?=$retrieveStd->contato_emergencia ?>" type="text" name="contato_emergencia" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia">
                                <!--small style="color: red;">?php echo form_error('contato_emergencia')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>
                     
                        <button type="submit" name="update" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 20px;">
                            Update record
                        </button>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
        



<?php $this->load->view('_inc/dashFooter')?>