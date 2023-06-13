<?php $this->load->view('_inc/dashHead')?>


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabelas</h1>
        <a href="<?=base_url()?>Url/addStd" class="d-none d-sm-inline-block btn btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Adicioncar formando
        </a>
    </div>

        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0  text-primary text-center mt-3" style="font-size: 30px;text-transform: uppercase;font-weight: 200">Table formandos <i class="fas fa-user-graduate"></i></h6>
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
                                    <?php elseif($retrieveStd->curso === 'Informatica'):?>   
                                        INFORMATICA
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
                                        <span class="btn btn-primary" style="border-radius: 0;">disponivel</span>
                                    <?php elseif($retrieveStd->estado_estudante == 2):?>
                                        <span class="btn btn-danger" style="border-radius: 0;">Desistiu</span>
                                    <?php elseif($retrieveStd->estado_estudante == 3):?>
                                        <span class="btn btn-success" style="border-radius: 0;">Concluido</span>
                                    <?php endif?>
                                </td>
                                <td><?php if($retrieveStd->contato_pessoal === ''):?><?=$retrieveStd->contato_emergencia?> <span style="color: #e33e5a;">emerg.</span><?php else:?><?=$retrieveStd->contato_pessoal?><?php endif?></td>
                                <?php if ($this->session->userdata('level') <= 2 ) :?>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4 text-center">
                                                <a href="<?=base_url('GeneratePdf/generatePdf/'.$retrieveStd->id_estudante)?>">
                                                    <i class="fas fa-eye fa-2x" style="color: #ffb423;"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <!--a href="" data-target="#deleteModel" data-toggle='modal'>
                                                    <i class="fas fa-trash-alt fa-2x" style="color: #e33e5a;"></i>
                                                </a-->
                                                <?php
                                                    echo "
                                                    <a name='delete' class='text-center' href='deleteStd?id_estudante=".$retrieveStd->id_estudante."'>
                                                    <i class='fas fa-trash-alt fa-2x' style='color: #e33e5a;'></i>
                                                    </a>";
                                                ?>
                                            </div>
                                            <div class="col-sm-4 text-center">
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
    
    
  

    
<?php $this->load->view('_inc/dashFooter')?>