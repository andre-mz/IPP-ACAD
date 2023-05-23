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
    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 font-weight-bold text-primary">Dados do estudante</h6>
        </div>
        <div class="card-body">
            <div class="">
                <div class="">
                    <form action="<?= base_url()?>Manager/updateStd" method="POST" enctype="multipart/form-data">
                        <div class="row mt-2 form-group">
                            <input name="id_estudante" value="<?=$retrieveStd->id_estudante?>" hidden>
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <label for="fullname">Nome completo</label>
                                <input value="<?=$retrieveStd->fullname?>" type="text" name="fullname" id="fullname" class="form-control form-control-user" placeholder="Nome completo">
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                            <label for="nome_pai">Encarregado de educao&ccedil;&atilde;o</label>
                                <input value="<?=$retrieveStd->nome_pai ?>" type="text" name="nome_pai" id="nome_pai" class="form-control form-control-user" placeholder="Nome do encaregado | Nome do pai | Nome da mae">
                                <!--small style="color: red;">?php echo form_error('nome_pai')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-2 mb-sm-0 mb-4">
                                <label for="idade">Data de nascimento</label>
                                <input value="<?=$retrieveStd->idade ?>" type="date" name="idade" id="idade" class="form-control form-control-user" placeholder="Idade">
                                <!--small style="color: red;">?= form_error('idade');?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>

                            <div class="form-field col-sm-2 mb-sm-0 mb-4">
                                <label for="Genero">Genero</label>
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
                            <label for="nacionalidade">Nacionalidade</label>
                                <input value="<?=$retrieveStd->nacionalidade ?>" type="text" name="nacionalidade" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                                <!--small style="color: red;">?php echo form_error('nacionalidade')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                            <label for="naturalidade">Naturalidade</label>
                                <input value="<?=$retrieveStd->naturalidade?>" type="text" name="naturalidade" id="naturalidade" class="form-control form-control-user" placeholder="Naturalidade">
                                <!--small style="color: red;">?php echo form_error('naturalidade')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                            <label for="morada">Morada: bairro, rua, avenida</label>
                                <input value="<?=$retrieveStd->morada ?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                                <!--small style="color: red;">?php echo form_error('morada')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>
                        
                        <div class="row mt-2 form-group mt-5">
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <label for="documento">Documento de identifica&ccedil;&atilde;o</label>
                                <?php $tipo_documento = $this->input->post('tipo_documento') ? $this->input->post('tipo_documento') : $retrieveStd->tipo_documento;?>
                                <select class="form-control form-control-user" name="tipo_documento" id="tipo_documento">
                                    <option value="">
                                        ****SELECIONE O DOCUMENTO DE IDENTIFICA&Ccedil;&Atilde;o
                                    </option>
                                    <option value="1" <?=$tipo_documento == 1 ? 'selected' : null?>>
                                        BI
                                    </option>
                                    <option value="2" <?=$tipo_documento == 2 ? 'selected' : null?>>
                                        DIRE
                                    </option>
                                    <option value="3" <?=$tipo_documento == 3 ? 'selected' : null ?>>
                                        PASSAPORT
                                    </option>
                                    <option value="4" <?=$tipo_documento ==  4 ? 'selected' : null?>>
                                        CARTA DE CONDU&Ccedil;&Atilde;O
                                    </option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <label for="nr_documento">Numero do documento</label>
                                <input value="<?=$retrieveStd->nr_documento ?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="Numeor do documento de indetifica&ccirc;&atilde;o">
                                <!--small style="color: red;"><?php echo form_error('nr_documento')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <label for="curso">Curso a frequentar</label>
                                <?php $curso = $this->input->post('curso') ? $this->input->post('curso') : $retrieveStd->curso?>
                                <select class="form-control form-control-user" name="curso" id='curso'>
                                    <option value="">*****SELECIONE O CURSO*****</option>
                                    <option value="1" <?=$curso == 1 ? 'selected' : null?>>
                                        TMG
                                    </option>
                                    <option value="2" <?=$curso == 2 ? 'selected' : null?>>
                                        F&Aacute;RMACIA
                                    </option>
                                    <option value="3" <?=$curso == 3 ? 'selected' : null?>>
                                        SMI
                                    </option>
                                    <option value="4" <?=$curso == 4 ? 'selected' : null?>>
                                        NUTRI&Ccedil;&Atilde;O
                                    </option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <label for="ano_frequentar">Ano a frequentar</label>
                                <input value="<?=$retrieveStd->ano_frequentar?>" type="text" name="ano_frequentar" id="ano_frequentar" class="form-control form-control-user" placeholder="Ano a frequentar">
                                <!--small style="color: red;"><?php echo form_error('ano_frequentar')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>

                        <div class="row mt-5 form-group">
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <label for="turma">Turma</label>
                                <input value="<?=$retrieveStd->turma?>" type="text" name="turma" id="turma" class="form-control form-control-user" placeholder="Nome completo">
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <label for="periodo">Periodo</label>
                                <?php $periodo = $this->input->post('periodo') ? $this->input->post('periodo') : $retrieveStd->periodo ?>
                                <select name="periodo" id="periodo" class="form-control form-control-user" >
                                    <option value="1" <?=$periodo == 1 ? 'selected' : null?>>
                                        LABORAL
                                    </option>
                                    <option value="2" <?=$periodo == 2 ? 'selected' : null?>>
                                        P&Oacute;S-LABORAL
                                    </option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <!--small style="color: red;">?= form_error('idade');?></small-->
                                <label for="estado">Estado do estudante</label>
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
                                <label for="contato">Contacto pessoal do estudante</label>
                                <input value="<?=$retrieveStd->contato_pessoal ?>" type="text" name="contato_pessoal" id="contato_pessoal" class="form-control form-control-user" placeholder="Contacto pessola">
                                <!--small style="color: red;">?php echo form_error('contato_pessoal')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-6 mb-sm-0 mb-4">
                                <label for="emergencia">Contacto de emergencia</label>
                                <input value="<?=$retrieveStd->contato_emergencia ?>" type="text" name="contato_emergencia" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia">
                                <!--small style="color: red;">?php echo form_error('contato_emergencia')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>
                     
                        <button type="submit" name="update" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">
                            Actualizar dados
                        </button>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
        



<?php $this->load->view('_inc/dashFooter')?>