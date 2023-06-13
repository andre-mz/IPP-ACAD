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


        <div class="form-field col-sm-11 mb-sm-0 mb-5 ">
            <label for="fullname">Nome completo</label>
            <input value="<?=$retrieveStd->fullname?>" type="text" class="form-control form-control-user">
        </div>
        
        <div class="form-field col-sm-11 mb-sm-0 mb-5 first-place" >
            <label for="fullname">Encaregado</label>
            <input value="<?=$retrieveStd->nome_pai ?>" type="text" class="form-control form-control-user">
        </div>
                    
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="idade">Data de nascimento</label>
            <input value="<?=$retrieveStd->idade ?>" type="text" name="idade" id="idade" class="form-control form-control-user" placeholder="Idade">
        </div>

        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="Genero">Genero</label>
            <input type="text" value="<?php if($retrieveStd->genero =='M'):?> Masculino <?php else:?> Femenino <?php endif?>"  class="form-control form-control-user">
        </div>
        
        
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="nacionalidade">Nacionalidade</label>
            <input value="<?=$retrieveStd->nacionalidade ?>" type="text" class="form-control form-control-user">
        </div>
                
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="naturalidade">Naturalidade</label>
            <input value="<?=$retrieveStd->naturalidade?>" type="text" class="form-control form-control-user">       
        </div>
                
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="morada">Morada</label>
            <input value="<?=$retrieveStd->morada ?>" type="text" class="form-control form-control-user" >
        </div>
                                
            
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="documento">Documento de identifica&ccedil;&atilde;o</label>  
            <input type="text" value="<?=$retrieveStd->tipo_documento?>" class="form-control form-control-user">          
        </div>
                
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="nr_documento">Numero do documento</label>
            <input value="<?=$retrieveStd->nr_documento ?>" type="text" class="form-control form-control-user">      
        </div>
                
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="curso">Curso a frequentar</label>
            <input type="text" value="<?=$retrieveStd->curso?>" class="form-control form-control-user">
        </div>
                
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="ano_frequentar">Ano a frequentar</label>
            <input value="<?=$retrieveStd->ano_frequentar?> Ano" type="text" class="form-control form-control-user">
        </div>
            

        <div class="form-field col-sm-11 mb-sm-0 mb-5">
            <label for="turma">Turma</label>
            <input value="<?=$retrieveStd->turma?>" type="text" class="form-control form-control-user">
        </div>
                
        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="periodo">Periodo</label>
            <input type="text" value="<?=$retrieveStd->periodo ?>" class="form-control form-control-user">
        </div>
                
        <!--div class="form-field col-sm-11 mb-sm-0 mb-4">
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
        </div-->


        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="contato">Contacto pessoal do estudante</label>
            <input value="<?php if($retrieveStd->contato_pessoal === ''):?>N&Atilde;O EXPECIFICADO<?php else:?><?=$retrieveStd->contato_pessoal ?><?php endif?>" type="text" class="form-control form-control-user">
        </div>

        <div class="form-field col-sm-11 mb-sm-0 mb-4">
            <label for="emergencia">Contacto de emergencia</label>
            <input value="<?php if($retrieveStd->contato_emergencia === ''):?>N&Atilde;O EXPECIFICADO<?php else:?><?=$retrieveStd->contato_emergencia ?><?php endif?>" type="text" class="form-control form-control-user">
        </div>
         
    
    <?php elseif(isset($retrieveFnc->id_funcionario)):?>
        <div class="text-center">
            <img class="img-fluid"  src="<?=base_url('assets/images/logo_ipp.jpg')?>" alt=""  >
        </div>

        <div class="row" >
        
        <div class="col-sm-12">
            
            <div class="card shadow mb-4 dep">
                <div class="card-header py-3 dataTable-top">
                    <h6 class="m-0 text-primary text-center text-danger" style="font-size: 30px;text-transform: uppercase;font-weight: 200">
                        <?=$retrieveFnc->nome?>&nbsp;<i class="fa fa-user-cog"></i>  
                    </h6>
                </div>
                <div class="card-body">
                
                    <div class="row mt-2 form-group">
                        <div class="form-field col-sm-11 mb-sm-0 mb-5">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Nome completo</label>
                            <input style="border-radius: 0!important;" value="<?php echo set_value('nome')?><?=$retrieveFnc->nome?>" type="text" name="nome" id="nome" class="form-control form-control-user" placeholder="Nome completo">
                            <div class="erro-small"><small><?php echo form_error('nome')?></small></div>
                        </div>

                        <div class="form-field col-sm-11 mb-sm-0 mb-4">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;">Data de nascimento</label>
                            <input style="border-radius: 0!important;" value="<?php echo set_value('idade')?><?=$retrieveFnc->idade?>" type="text" name="idade" id="idade" class="form-control form-control-user" placeholder="Data de nascimento">
                        </div>

                        <div class="form-field col-sm-11 mb-sm-0 mb-4">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;">Estado civil</label>
                            <input type="text" value="<?=$retrieveFnc->estado_civil?>" class="form-control form-control-user">
                        </div>
                    </div>

                        <div class="row form-group">
                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Genero</label>
                                <input type="text" value="<?=$retrieveFnc->genero?>" class="form-control form-control-user">
                                <div class="erro-small"><small><?php echo form_error('genero')?></small></div>
                            </div>

                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;">DOCUMENTO DE IDENTIFICA&Ccedil;&Atilde;O</label>
                                <input type="text" value="<?=$retrieveFnc->tipo_documento?>" class="form-control form-control-user">
                            </div>

                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"> N&ugrave;mero do codumento</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('nr_documento')?><?=$retrieveFnc->nr_documento?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="Nr do documento de indetifica&ccirc;&atilde;o">
                            </div>
                        </div>
                    
                        <div class="row mt-5 form-group">
                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;">Nacionalidade</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('nacionalidade')?><?=$retrieveFnc->nacionalidade?>" type="text" name="nacionalidade" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                            </div>

                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Naturalidade</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('naturalidade')?><?=$retrieveFnc->naturalidade?>" type="text" name="naturalidade" id="naturalidade" class="form-control form-control-user" placeholder="Naturalidade">
                            </div>
                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Morada</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('morada')?><?=$retrieveFnc->morada?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                            </div>
                        </div>

                        <!--ENTRADA-->
                        <div class="row mt-5 form-group">
                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Inicio de actividade</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('ano_entrada')?><?=$retrieveFnc->ano_entrada?>" type="text" name="ano_entrada" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">

                            </div>

                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Departamento</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('morada')?><?=$retrieveFnc->departament?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                                <div class="erro-small"><small><?php echo form_error('departament')?></small></div>
                            </div>
                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Cargo | area de trabalho</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('cargo')?><?=$retrieveFnc->cargo?>" type="text" name="cargo" id="morada" class="form-control form-control-user" placeholder="Cargo | area de trabalho">
                            </div>
                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Local de trabalho</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('local')?><?=$retrieveFnc->local?>" type="text" name="local" id="morada" class="form-control form-control-user" placeholder="Local de trabalho">
                            </div>
                        </div>

                        <!--CATEGORIA-->
                        <div class="row mt-5 form-group">
                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;">Categoria do funcionario</label>
                                <input type="text" value="<?=$retrieveFnc->categoria?>" class="form-control form-control-user">
                            </div>

                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;">Estado do funcionario</label>
                                <input type="text" value="<?=$retrieveFnc->estado?>" class="form-control form-control-user">
                            </div>
                        </div>

                    
                        <div class="row form-group mt-5 mb-5">
                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Contacto pessoal</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('contato_pessoal')?><?=$retrieveFnc->contato_pessoal?>" type="text" name="contato_pessoal" id="contato_pessoal" class="form-control form-control-user" placeholder="Contacto pessola">
                            </div>

                            <div class="form-field col-sm-11 mb-sm-0 mb-4">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;"> Contacto de emergencia</label>
                                <input style="border-radius: 0!important;" value="<?php echo set_value('contato_emergencia')?><?=$retrieveFnc->contato_emergencia?>" type="text" name="contato_emergencia" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--div class="col-sm-3">
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
            </div-->
        
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
