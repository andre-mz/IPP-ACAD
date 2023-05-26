<?php $this->load->view('_inc/dashHead')?>


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabelas</h1>
        <a href="" data-toggle="modal" data-target="#addStd" class="d-none d-sm-inline-block btn btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Adicioncar estudante
        </a>
    </div>

        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 font-weight-bold text-primary">Dados</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTables" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>codigo aluno</th>
                            <th>Nome</th>
                            <th>Curso</th>
                            <th>Ano</th>
                            <th>Turma</th>
                            <th>Periodo</th>
                            <th>Estado</th>
                            <th>Contacto</th>
                            <?php if ($this->session->userdata('level') <= 2):?>
                                <th>Ac&ccedil;&atilde;o</th>
                            <?php endif?>   
                        </tr>
                    </thead>
                       
                    <tbody>
                        <?php 
                            foreach($retrieveStd->result() as $key=>$retrieveStd):?>
                            <tr>
                                <td><?=$retrieveStd->nr_estudante?></td>
                                <td><?=$retrieveStd->fullname?></td>
                                <td>
                                    <?php if($retrieveStd->curso     === 'tmg'):?>
                                        ENFERMAGEM T.M GERAL
                                    <?php elseif($retrieveStd->curso === 'farmacia'):?>
                                        F&Aacute;RMACIA
                                    <?php elseif($retrieveStd->curso === 'smi'):?>
                                        ESMI
                                    <?php elseif($retrieveStd->curso === 'nutricao'):?>   
                                        NUTRI&Ccedil;&Atilde;O
                                    <?php else:?>
                                        N/A
                                    <?php endif?>
                                </td>
                                <td><?=$retrieveStd->ano_frequentar.' Ano'?></td>
                                <td><?=$retrieveStd->turma?></td>
                                <td>
                                    <?php if($retrieveStd->periodo == 1) :?>
                                        <span>Laboral</span>
                                    <?php else:?>
                                        <span>P&oacute;s-laboral</span>    
                                    <?php endif?>   
                                </td>
                                <td>
                                    <?php if ($retrieveStd->estado_estudante    == 1):?>
                                        <span class="btn btn-primary">disponivel</span>
                                    <?php elseif($retrieveStd->estado_estudante == 2):?>
                                        <span class="btn btn-danger">Desistiu</span>
                                    <?php elseif($retrieveStd->estado_estudante == 3):?>
                                        <span class="btn btn-success">Concluido</span>
                                    <?php endif?>
                                </td>
                                <td><?php if($retrieveStd->contato_pessoal === ''):?><?=$retrieveStd->contato_emergencia?> <span style="color: #e33e5a;">emerg.</span><?php else:?><?=$retrieveStd->contato_pessoal?><?php endif?></td>
                                <?php if ($this->session->userdata('level') <= 2 ) :?>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="<?=base_url('GeneratePdf/generatePdf/'.$retrieveStd->id_estudante)?>">
                                                    <i class="fas fa-eye fa-2x" style="color: #ffb423;"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <!--a href="" data-target="#deleteModel" data-toggle='modal'>
                                                    <i class="fas fa-trash-alt fa-2x" style="color: #e33e5a;"></i>
                                                </a-->
                                                <?php
                                                    echo "
                                                    <a name='delete' class='' href='deleteStd?id_estudante=".$retrieveStd->id_estudante."'>
                                                    <i class='fas fa-trash-alt fa-2x' style='color: #e33e5a;'></i>
                                                    </a>";
                                                ?>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="<?=base_url('Manager/viewStd/'.$retrieveStd->id_estudante);?>">
                                                <i class="fas fa-pen-fancy fa-2x" style="color: #00204A;"></i></a>
                                            </div>
                                            <!--div class="col-sm-3">
                                                <a href="<?=base_url('Manager/addPayment/'.$retrieveStd->id_estudante);?>">
                                                <i class="fas fa-money-bill-wave-alt" style="color:#21aba5;"></i></a>
                                            </div-->
                                        </div>
                                    </td>
                                <?php endif?>    
                            </tr> 
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    
    
    <div class="modal fade bd-example-modal-lg" id="addStd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #00204A;">
                    <h6 class="m-0 font-weight-bold text-primary" style="color:#fff!important">Adcionar estudante</h6>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:#fff!important">
                        <span aria-hidden="true"><i class="fas fa-window-close"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class='text-center btn-block btn-success'><?php echo $this->session->flashdata('success');?></p>
                    <p class='text-center btn-block btn-danger'><?php echo $this->session->flashdata('error');?></p>
         
                    <form id="formAluno" action="<?=site_url('Forms/add')?>" method="post" class="form user mt-5">
                        <?php echo validation_errors(); ?>
                        <div class="row mt-2 form-group">
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <input value="<?php echo set_value('fullname')?>" type="text" name="fullname" id="fullname" class="form-control form-control-user" placeholder="Nome completo">
                                <!--small style="color: red;">?php echo form_error('fullname')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('nome_pai')?>" type="text" name="nome_pai" id="nome_pai" class="form-control form-control-user" placeholder="Nome do encaregado | Nome do pai | Nome da mae">
                                <!--small style="color: red;">?php echo form_error('nome_pai')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('idade')?>" type="date" name="idade" id="idade" class="form-control form-control-user" placeholder="Idade">
                                <!--small style="color: red;">?= form_error('idade');?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>

                        </div>
                        
                        <div class="row mt-2 form-group mt-5">
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('nacionalidade')?>" type="text" name="nacionalidade" id="nacionalidade" class="form-control form-control-user" placeholder="Nacionalidade">
                                <!--small style="color: red;">?php echo form_error('nacionalidade')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('naturalidade')?>" type="text" name="naturalidade" id="naturalidade" class="form-control form-control-user" placeholder="Naturalidade">
                                <!--small style="color: red;">?php echo form_error('naturalidade')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('morada')?>" type="text" name="morada" id="morada" class="form-control form-control-user" placeholder="Morada -> Bairro | Rua | Avenida">
                                <!--small style="color: red;">?php echo form_error('morada')?></small-->
                                <div class="erro-small"><small></small></div>
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
                                <div class="erro-small"><small></small></div>
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
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-3 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('nr_documento')?>" type="text" name="nr_documento" id="nr_documento" class="form-control form-control-user" placeholder="Nr do documento de indetifica&ccirc;&atilde;o">
                                <!--small style="color: red;"><?php echo form_error('nr_documento')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>
                        
                        <div class="row mt-2 form-group mt-5">
                            
                            
                            <div class="form-field col-sm-4 mb-sm-0 mb-4">
                                <!--small style="color: red;">?php echo form_error('curso')?></small-->
                                <select name="curso" id="curso" class="form-control form-control-user">
                                    <option value="">*****SELECIONE O CURSO*****</option>
                                    <?php
                                        $value = 1;
                                        foreach($retrieveCrs->result() as $key=>$retrieveCrs):?>
                                        <option value="<?=$value++?>"><?=$retrieveCrs->nome_curso?></option>
                                    <?php endforeach?>
                                </select>
                                <div class="erro-small"><small></small></div>
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
                                <div class="erro-small"><small></small></div>
                            </div>

                            <div class="form-field col-sm-2 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('ano_frequentar')?>" type="text" name="ano_frequentar" id="ano_frequentar" class="form-control form-control-user" placeholder="Ano a frequentar">
                                <!--small style="color: red;"><?php echo form_error('ano_frequentar')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-2 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('turma')?>" type="text" name="turma" id="turma" class="form-control form-control-user" placeholder="Turma">
                                <!--small style="color: red;"><?php echo form_error('turma')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>
                        
                        <div class="row mt-2 form-group mt-5">
                            <div class="form-field col-sm-6 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('contato_pessoal')?>" type="text" name="contato_pessoal" id="contato_pessoal" class="form-control form-control-user" placeholder="Contacto pessola">
                                <!--small style="color: red;">?php echo form_error('contato_pessoal')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                            <div class="form-field col-sm-6 mb-sm-0 mb-4">
                                <input value="<?php echo set_value('contato_emergencia')?>" type="text" name="contato_emergencia" id="contato_emergencia" class="form-control form-control-user" placeholder="Contacto de emergencia">
                                <!--small style="color: red;">?php echo form_error('contato_emergencia')?></small-->
                                <div class="erro-small"><small></small></div>
                            </div>
                        </div>
                        
                        <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">
                            REGISTRAR
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="width: 640px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Apagar estudante da base de dados</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <p><strong>OBS:</strong>  Esse processo &eacute; inreversivel.</p>
                    
                    <p>
                        Caso n&atilde;o queiras que os dados do estudante estejam visiveis na tabela, 
                        Actualiza o estado do estudante para<strong> DESISTIDO</strong>.
                        Assim os dados do ficaram guardados, mas n&atilde;o estar&atilde;o visiveis.
                    </p>
                </div>
                <div class="modal-footer">
                </div>
                <div class="row pt-1 pl-3 pr-3 pb-4">
                    <div class="col-sm-6">
                        <button class="btn btn-lg btn-block btn-info" type="button" data-dismiss="modal">CANCELAR</button>
                    </div>
                    <div class="col-sm-6">
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
<?php $this->load->view('_inc/dashFooter')?>