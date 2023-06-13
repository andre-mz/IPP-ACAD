<?php $this->load->view('_inc/dashHead')?>





    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabelas</h1>
        <a href="<?=base_url()?>Url/addUser" class="d-none d-sm-inline-block btn btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Adicioncar novo user
        </a>
    </div>

        <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 text-primary text-center" style="font-size: 30px;text-transform: uppercase;font-weight: 200">table users <i class="fas fa-user"></i></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table class="table table-bordered dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Login ID</th>
                            <th>Nome do usuer</th>
                            <th>Nivel</th>
                            <th>Estado</th>
                            <?php if ($this->session->userdata('level') <= 2):?>
                                <th>Ac&ccedil;&atilde;o</th>
                            <?php endif?>   
                        </tr>
                    </thead>
                       
                    <tbody>
                        <?php 
                            $n=1; 
                            foreach($retrieveUsr->result() as $key=>$retrieveUsr):?>
                            <tr>
                                <td><?=$n++?></td>
                                <td><?=$retrieveUsr->loginid?></td>
                                <td><?=$retrieveUsr->name?></td>
                                <td>
                                    <?php if($retrieveUsr->level == 1):?>
                                        Super user
                                    <?php elseif($retrieveUsr->level == 2):?>
                                        Admin
                                    <?php elseif($retrieveUsr->level == 3):?>
                                        Docente
                                    <?php else:?>
                                        Estudante
                                    <?php endif?>
                                </td>
                                <td>
                                    <?php if ($retrieveUsr->estado    == 1):?>
                                        <span class="btn btn-success" style="border-radius: 0;">Activo</span>
                                    <?php elseif ($retrieveUsr->estado    == 2):?>
                                        <span class="btn btn-warning" style="border-radius: 0;">Em espera</span>
                                    <?php else:?>
                                        <span class="btn btn-danger" style="border-radius: 0;">Desativo</span>
                                    <?php endif?>
                                </td>
                                <?php if ($this->session->userdata('level') <= 2 ) :?>
                                    <td>
                                        <div class="row">
                                            <!--div class="col-sm-4">
                                                <a href="#">
                                                    <i class="fas fa-eye fa-2x" style="color: #21aba5;"></i>
                                                </a>
                                            </div-->
                                            <div class="col-sm-6">
                                                <?php
                                                    echo "<a name='delete'  href='deleteUsr?id_user=".$retrieveUsr->id_user."'><i class='fas fa-trash-alt fa-2x' style='color: #e33e5a;'></i></a>";
                                                ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="<?=base_url('Manager/viewUsr/'.$retrieveUsr->id_user)?>">
                                                    <i class="fas fa-pen-fancy fa-2x" style="color: #00204A;"></i>
                                                </a>
                                            </div>
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


    <!--div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <strong>Desative</strong> a conta para o user nao ter acesso ao sistema .
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
    </div-->

    
        





































<?php $this->load->view('_inc/dashFooter')?>
