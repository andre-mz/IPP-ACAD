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
    <div class="row">
        <div class="col-sm-8">
            <div class="card shadow mb-4 dep">
                <div class="card-header py-3 dataTable-top">
                    <h6 class="m-0 font-weight-bold text-primary text-center text-danger" style="font-size: 27px;text-transform: uppercase;">
                        <?=$retrieveFnc->nome?>&nbsp;<i class="fa fa-user-edit" style="color: grey;"></i>  
                    </h6>
                </div>
                <div class="card-body">
                
                    <form action="<?=base_url()?>Manager/updateFnc" method="post">
                        <div class="row mt-2 form-group">
                            <input name="id_funcionario" value="<?=$retrieveFnc->id_funcionario?>" hidden>
                            <div class="form-field col-sm-12 col-md-4 mb-sm-0 mb-5">
                                <label for="fullname">Nome completo</label>
                                <input value="<?=$retrieveFnc->nome?>" type="text" name="nome" id="nome" class="form-control form-control-user" placeholder="Nome completo">
                                <div class="erro-small"><small></small></div>
                            </div>

                            <div class="form-field col-sm-12 col-md-4 mb-sm-0 mb-5">
                                <label for="fullname">Ano de nascimento</label>
                                <input value="<?=$retrieveFnc->ano_nascimento ?>" type="date" name="ano_nascimento" id="ano_nascimento" class="form-control form-control-user" placeholder="Idade">
                                <div class="erro-small"><small></small></div>
                            </div>

                            <div class="form-field col-sm-12 col-md-4 mb-sm-0 mb-5">
                                <label for="fullname">DC de indetifica&ccedil;&atilde;o</label>
                                <?php $documento = $this->input->post('documento') ? $this->input->post('documento') : $retrieveFnc->documento?>
                                <select name="documento" id="" class="form-control form-control-user">
                                    <option value="BI"         <?= $documento === 'BI'         ? 'selected' : null?>>BI</option>
                                    <option value="DIRE"       <?= $documento === 'DIRE'       ? 'selected' : null?>>DIRE</option>
                                    <option value="PASSAPORTE" <?= $documento === 'PASSAPORTE' ? 'selected' : null?>>PASSAPORTE</option>
                                    <option value="CONDUCAO"   <?= $documento === 'CONDUCAO'   ? 'selected' : null?>>CARTA DE CONDU&Ccedil;&Atilde;O</option>
                                    <option value=""           <?= $documento === ''           ? 'selected' : true?>>N&Atilde;O EXPECIFICADO</option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>

                        <div class="row mt-2 form-group">

                            <div class="form-field col-sm-12 col-md-4 mb-sm-0 mb-5">
                                <label for="fullname">Nr de documento</label>
                                <input value="<?=$retrieveFnc->nr_documento ?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="nr documento">
                                <div class="erro-small"><small></small></div>
                            </div>
                    
                            <div class="form-field col-sm-12 col-md-4 mb-sm-0 mb-5">
                                <label for="fullname">Ano de entrada</label>
                                <input value="<?=$retrieveFnc->ano_entrada?>" type="date" name="ano_entrada" id="ano_entrada" class="form-control form-control-user" placeholder="ano de entrada">
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-12 col-md-4 mb-sm-0 mb-5">
                                <label for="fullname">Departamento</label>
                                <?php $departament = $this->input->post('departament') ? $this->input->post('departament') : $retrieveFnc->departament?>
                                <select name="departament" id="departament" class="form-control form-control-user">
                                    <option value="Informatica"       <?= $departament === 'Informatica'       ? 'selected' : null?>>SECTOR INFORMATICO</option>
                                    <option value="Administrativo"    <?= $departament === 'Administrativo'    ? 'selected' : null?>>SECTOR ADMINIATRATIVO</option>
                                    <option value="Pedagogico"        <?= $departament === 'Pedagogico'        ? 'selected' : null?>>SECTOR PEDAGOGICO</option>
                                    <option value="Academico"         <?= $departament === 'Academico'         ? 'selected' : null?>>REG.ACADEMICO</option>
                                    <option value="Agente de servico" <?= $departament === 'Agente de servico' ? 'selected' : null?>>AGENTE DE SERVI&Ccedil;O</option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>

                        <div class="row mt-2 form-group">
                            
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <label for="fullname">Area de trabalho</label>
                                <input value="<?=$retrieveFnc->cargo ?>" type="text" name="cargo" id="cargo" class="form-control form-control-user" placeholder="departamento">
                                <div class="erro-small"><small></small></div>
                            </div>
                        
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <label for="fullname">Local de trabalho</label>
                                <input value="<?=$retrieveFnc->local?>" type="text" name="local" id="local" class="form-control form-control-user" placeholder="ano de entrada">
                                <div class="erro-small"><small></small></div>
                            </div>

                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <label for="fullname">Estado do funcionario</label>
                                <?php $estado = $this->input->post('estado') ? $this->input->post('estado') : $retrieveFnc->estado?>
                                <select name="estado" id="estado" class="form-control form-control-user">
                                    <option value="1" <?= $estado == 1 ? 'selected' : null?>>Disponivel / De trabalho</option>
                                    <option value="2" <?= $estado == 2 ? 'selected' : null?>>De ferias</option>
                                    <option value="3" <?= $estado == 3 ? 'selected' : null?>>Ferias compulivas sem remunera&ccedil;o</option>
                                    <option value="4" <?= $estado == 4 ? 'selected' : null?>>Ferias compulivas remuneradas</option>
                                    <option value="0" <?= $estado == 0 ? 'selected' : null?>>Demitido</option>
                                </select>
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div> 
                        <button type="submit" name="update" class="mt-5 mb-2 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">
                            Actualizar dados
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card shadow mb-4 dep">
                    <div class="card-header py-3 dataTable-top">
                        <h6 class="m-0 font-weight-bold text-primary text-center text-danger" style="font-size: 27px;text-transform: uppercase;">
                            FOTO 
                        </h6>
                    </div>
                    <div class="card-body p-5">
                        <img src="<?=base_url('assets/images/IPP-LOGO.png')?>"  srcset="" alt='fotoDePerfil' class="p-5 img">
                    </div>
                </div>
            </div>
        </form>
    </div>






























<?php $this->load->view('_inc/dashFooter')?>