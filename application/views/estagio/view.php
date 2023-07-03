<?php $this->load->view('_inc/dashHead')?>





<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="<?=base_url()?>estagio/Estagio/add" class="d-none d-sm-inline-block btn btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Adicioncar formando
        </a>
    </div>

        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0  text-primary text-center mt-3" style="font-size: 30px;text-transform: uppercase;font-weight: 200">UNIFORMES-ESTAGIO</i></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTables" id="dataTable" width="100%" cellspacing="0">
                    <thead style="text-transform: uppercase;font-weight: 900!important;color: #000;background-color: #ccc;">
                        <tr >
                            <th>Nome</th>
                            <th>Curso</th>
                            <th>Ano</th>
                            <th>Turma</th>
                            <th>Estagio</th>
                            <th>valor pago</th>
                            <th>Data pagamento</th>
                            <th>Contacto</th>
                            <th>Ac&ccedil;&atilde;o</th>
                        </tr>
                    </thead>
                       
                    <tbody style="font-weight: 500!important;color: #000;">
                        <?php 
                            foreach($retrieveEtg->result() as $key=>$retrieveEtg):?>
                            <tr>
                                <td><?=$retrieveEtg->nome?></td>
                                <td><?=$retrieveEtg->curso?></td>
                                <td><?=$retrieveEtg->ano.' Ano'?></td>
                                <td><?=$retrieveEtg->turma?></td>
                                <td><?=$retrieveEtg->estagio?></td>
                                <td><?=$retrieveEtg->valor_pago?></td>
                                <td><?=$retrieveEtg->adicionado?></td>
                                <td><?=$retrieveEtg->contato?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                <a href="<?=base_url('GeneratePdf/generatePdf/'.$retrieveEtg->id_estagio)?>">
                                                    <i class="fas fa-print" style="color: #00204A;"></i>
                                                </a>
                                            </div>
                                            <!--div class="col-sm-4 text-center">
                                                <?php
                                                    echo "
                                                    <a name='delete' class='text-center' href='deleteStd?id_estudante=".$retrieveEtg->id_estagio."'>
                                                    <i class='fas fa-trash-alt' style='color: #00204A;'></i>
                                                    </a>";
                                                ?>
                                            </div-->
                                            <div class="col-sm-6 text-center">
                                                <a href="<?=base_url('Manager/viewStd/'.$retrieveEtg->id_estagio);?>">
                                                <i class="fas fa-pen-fancy" style="color: #00204A;"></i></a>
                                            </div>
                                        </div>
                                    </td> 
                            </tr> 
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    













































<?php $this->load->view('_inc/dashFooter')?>