<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Dalton Andre|Andirson Quemela - Pixel Tech">

    <title>
        <?php if(isset($retrieveStd->id_estudante)):?>
            <?=$retrieveStd->fullname?>
        <?php elseif(isset($retrieveFnc->id_funcionario)):?>
            <?=$retrieveFnc->nome?>
        <?php endif?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap4/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/main_style.css')?>">

    <style>
       img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 20%;
       }
    </style>
</head>
<body>


    <?php if(isset($retrieveStd->id_estudante)):?>
        <div class="text-center">
            <img class="img-fluid"  src="<?=base_url('assets/images/logo_ipp.jpg')?>" alt=""  >
        </div>

        <div class="card-header py-3 mt-3 mb-3" style="background-color: #012a61;color: #fff;">
            <h6 class="m-0 font-weight-bold text-center">Dados do estudante</h6>
        </div>


        <div class="form-field col-sm-6 mb-sm-0 mb-5 ">
            <label for="fullname">Nome completo</label>
            <input value="<?=$retrieveStd->fullname?>" type="text" class="form-control form-control-user">
        </div>
        
        <div class="form-field col-sm-6 mb-sm-0 mb-5 first-place" >
            <label for="fullname">Encaregado</label>
            <input value="<?=$retrieveStd->nome_pai ?>" type="text" class="form-control form-control-user">
        </div>
                    
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="idade">Data de nascimento</label>
            <input value="<?=$retrieveStd->idade ?>" type="text" name="idade" id="idade" class="form-control form-control-user" placeholder="Idade">
        </div>

        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="Genero">Genero</label>
            <input type="text" value="<?php if($retrieveStd->genero =='M'):?> Masculino <?php else:?> Femenino <?php endif?>"  class="form-control form-control-user">
        </div>
        
        
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="nacionalidade">Nacionalidade</label>
            <input value="<?=$retrieveStd->nacionalidade ?>" type="text" class="form-control form-control-user">
        </div>
                
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="naturalidade">Naturalidade</label>
            <input value="<?=$retrieveStd->naturalidade?>" type="text" class="form-control form-control-user">       
        </div>
                
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="morada">Morada</label>
            <input value="<?=$retrieveStd->morada ?>" type="text" class="form-control form-control-user" >
        </div>
                                
            
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="documento">Documento de identifica&ccedil;&atilde;o</label>
            <?php $tipo_documento = $this->input->post('tipo_documento') ? $this->input->post('tipo_documento') : $retrieveStd->tipo_documento;?>
            <select class="form-control form-control-user">
                <option value="1" <?=$tipo_documento === 'BI'       ? 'selected' : null?>>
                    BI
                </option>
                <option value="2" <?=$tipo_documento === 'DIRE'     ? 'selected' : null?>>
                    DIRE
                </option>
                <option value="3" <?=$tipo_documento === 'PASSAPORT' ? 'selected' : null ?>>
                    PASSAPORT
                </option>
                <option value="4" <?=$tipo_documento === 'CONDUCAO'  ? 'selected' : null?>>
                    CARTA DE CONDU&Ccedil;&Atilde;O
                </option>
            </select>             
        </div>
                
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="nr_documento">Numero do documento</label>
            <input value="<?=$retrieveStd->nr_documento ?>" type="text" class="form-control form-control-user">      
        </div>
                
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="curso">Curso a frequentar</label>
            <?php $curso = $this->input->post('curso') ? $this->input->post('curso') : $retrieveStd->curso?>
            <select class="form-control form-control-user">
                <option value="1" <?=$curso === 'tmg'      ? 'selected' : null?>>
                    TMG
                </option>
                <option value="2" <?=$curso === 'farmacia' ? 'selected' : null?>>
                    F&Aacute;RMACIA
                </option>
                <option value="3" <?=$curso === 'smi'      ? 'selected' : null?>>
                    SMI
                </option>
                <option value="4" <?=$curso === 'nutricao' ? 'selected' : null?>>
                    NUTRI&Ccedil;&Atilde;O
                </option>
            </select>
        </div>
                
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="ano_frequentar">Ano a frequentar</label>
            <input value="<?=$retrieveStd->ano_frequentar?> Ano" type="text" class="form-control form-control-user">
        </div>
            

        <div class="form-field col-sm-6 mb-sm-0 mb-5">
            <label for="turma">Turma</label>
            <input value="<?=$retrieveStd->turma?>" type="text" class="form-control form-control-user">
        </div>
                
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
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
        </div>
                
        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="estado">Estado do estudante</label>
            <?php $estado_estudante =  $this->input->post('estado_estudante') ? $this->input->post('estado_estudante') : $retrieveStd->estado_estudante?>
            <select class="form-control form-control-user" name="estado_estudante" id="estado_estudante">                
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
        </div>


        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="contato">Contacto pessoal do estudante</label>
            <input value="<?php if($retrieveStd->contato_pessoal === ''):?>N&Atilde;O EXPECIFICADO<?php else:?><?=$retrieveStd->contato_pessoal ?><?php endif?>" type="text" class="form-control form-control-user">
        </div>

        <div class="form-field col-sm-6 mb-sm-0 mb-4">
            <label for="emergencia">Contacto de emergencia</label>
            <input value="<?php if($retrieveStd->contato_emergencia === ''):?>N&Atilde;O EXPECIFICADO<?php else:?><?=$retrieveStd->contato_emergencia ?><?php endif?>" type="text" class="form-control form-control-user">
        </div>
         
    
    <?php elseif(isset($retrieveFnc->id_funcionario)):?>
        <div class="text-center">
            <img class="img-fluid"  src="<?=base_url('assets/images/logo_ipp.jpg')?>" alt=""  >
        </div>

        <div class="row form-group">
            <div class="card-header py-3 mt-3 mb-3" style="background-color: #012a61;color: #fff;">
                <h6 class="m-0 font-weight-bold text-center" style="text-transform: uppercase;">Dados do Funcionario</h6>
            </div>


            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="fullname">Nome completo</label>
                <input value="<?=$retrieveFnc->nome?>" type="text" class="form-control form-control-user">
            </div>

            <div class="form-field col-sm-6 mb-sm-0 mb-2" >
                <label for="fullname">Data de nascimento</label>
                <input value="<?=$retrieveFnc->ano_nascimento ?>" type="text" class="form-control form-control-user">
            </div>
        
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="Genero">Genero</label>
                <input type="text" value="<?php if($retrieveFnc->genero =='M'):?> Masculino <?php else:?> Femenino <?php endif?>"  class="form-control form-control-user">
            </div>
        
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="nacionalidade">Nacionalidade</label>
                <input value="<?=$retrieveFnc->nacionalidade ?>" type="text" class="form-control form-control-user">
            </div>
                
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="naturalidade">Naturalidade</label>
                <input value="<?=$retrieveFnc->naturalidade?>" type="text" class="form-control form-control-user">       
            </div>
                
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="morada">Morada</label>
                <input value="<?php if($retrieveFnc->morada == ''):?> N&Atilde;O EXPECIFICADO<?php else:?><?=$retrieveFnc->morada?><?php endif?>" type="text" class="form-control form-control-user" >
            </div>
        
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="documento">Documento de identifica&ccedil;&atilde;o</label>
                <?php $documento = $this->input->post('documento') ? $this->input->post('documento') : $retrieveFnc->documento;?>
                <select class="form-control form-control-user">
                    <option value="BI"        <?=$documento === 'BI'        ? 'selected' : null?>>
                        BI
                    </option>
                    <option value="DIRE"      <?=$documento === 'DIRE'      ? 'selected' : null?>>
                        DIRE
                    </option>
                    <option value="PASSAPORT" <?=$documento === 'PASSAPORT' ? 'selected' : null ?>>
                        PASSAPORT
                    </option>
                    <option value="CONDUCAO"  <?=$documento === 'CONDUCAO'  ? 'selected' : null?>>
                        CARTA DE CONDU&Ccedil;&Atilde;O
                    </option>
                    <option value=""  <?=$documento === ''  ? 'selected' : null?>>
                        N&Atilde;O EXPECIFICADO
                    </option>
                </select>             
            </div>
                
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="nr_documento">Numero do documento</label>
                <input value="<?=$retrieveFnc->nr_documento ?>" type="text" class="form-control form-control-user">      
            </div>
                
                
            <div class="form-field col-sm-6 mb-sm-0 mb-1">
                <label for="ano_frequentar">Membro desde</label>
                <input value="<?=$retrieveFnc->ano_entrada?>" type="text" class="form-control form-control-user">
            </div>
       
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="turma">Departamento</label>
                <input value="<?=$retrieveFnc->departament?>" type="text" class="form-control form-control-user">
            </div>
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="periodo">Local de trabalho</label>
                <input value="<?=$retrieveFnc->local?>" type="text" class="form-control form-control-user">
            </div>
                
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="estado">Area de trabalho</label>
                <input value="<?=$retrieveFnc->cargo?>" type="text" class="form-control form-control-user">
            </div>
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="estado">Contacto</label>
                <input value="<?php if($retrieveFnc->contato === ''):?>N&Atilde;O EXPECIFICADO<?php else:?><?=$retrieveFnc->cantato2?><?php endif?>" type="text" class="form-control form-control-user">
            </div>
            <div class="form-field col-sm-6 mb-sm-0 mb-2">
                <label for="estado">Contacto de emergencia</label>
                <input value="<?php if($retrieveFnc->contato2 === ''):?>N&Atilde;O EXPECIFICADO<?php else:?><?=$retrieveFnc->cantato2?><?php endif?>" type="text" class="form-control form-control-user">
            </div>
        </div>
    <?php endif?>
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap4/popper.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap4/bootstrap.min.js')?>"></script>
</body>
</html>
