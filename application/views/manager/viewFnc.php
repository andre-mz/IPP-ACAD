<?php $this->load->view('_inc/dashHead')?>



    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       
        <a href="<?=site_url('Manager/tabFnc')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>
        
        <a href="<?=base_url('GeneratePdf/generatePdf/'.$retrieveFnc->id_funcionario)?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Gerar PDF
        </a>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4 dep">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 font-weight-bold text-primary text-center text-danger" style="font-size: 27px;text-transform: uppercase;">
                <?=$retrieveFnc->nome?>&nbsp;<i class="fa fa-user-edit" style="color: grey;"></i>  
            </h6>
        </div>
        <div class="card-body">
        
            <form action="" method="post">
                <div class="row mt-2 form-group">
                    <input name="id_estudante" value="<?=$retrieveFnc->id_funcionario?>" hidden>
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <label for="fullname">Nome completo</label>
                        <input value="<?=$retrieveFnc->nome?>" type="text" name="nome" id="nome" class="form-control form-control-user" placeholder="Nome completo">
                        <div class="erro-small"><small></small></div>
                    </div>

                    <div class="form-field col-sm-2 mb-sm-0 mb-5">
                        <label for="fullname">Ano de nascimento</label>
                        <input value="<?=$retrieveFnc->ano_nascimento ?>" type="date" name="ano_nascimento" id="ano_nascimento" class="form-control form-control-user" placeholder="Idade">
                        <div class="erro-small"><small></small></div>
                    </div>

                    <div class="form-field col-sm-4 mb-sm-0 mb
                        <label for="fullname">Ano de nascimento</label>
                        <?php $documento = $this->input->post('documento') ? $this->input->post('documento') : $retrieveFnc->documento?>
                        <select name="documento" id="" class="form-control form-control-user">
                            <option value="BI"   <?= $documento === 'BI' ? 'selected' : null?>>BI</option>
                            <option value="DIRE" <?= $documento === 'DIRE' ? 'selected' : null?>>DIRE</option>
                            <option value="PASSAPORTE" <?= $documento === 'PASSAPORTE' ? 'selected' : null?>>PASSAPORTE</option>
                            <option value="CONDUCAO" <?= $documento === 'CONDUCAO' ? 'selected' : null?>>CARTA DE CONDU&Ccedil;&Atilde;O</option>
                            <option value="" <?= $documento === '' ? 'selected' : null?>>N&Atilde;O EXPECIFICADO</option>
                        </select>
                        <div class="erro-small"><small></small></div>
                    </div>
                </div>
            </form>
        </div>
    </div>






























<?php $this->load->view('_inc/dashFooter')?>