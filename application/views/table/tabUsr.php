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
            <h6 class="m-0 font-weight-bold text-primary">Dados</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Login ID</th>
                            <th>Nome do usuer</th>
                            <th>Nivel de acesso</th>
                            <th>Estado da conta</th>
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
                                        <span class="btn btn-success">Activo</span>
                                    <?php elseif ($retrieveUsr->estado    == 2):?>
                                        <span class="btn btn-warning">Em espera</span>
                                    <?php else:?>
                                        <span class="btn btn-danger">Desativo</span>
                                    <?php endif?>
                                </td>
                                <?php if ($this->session->userdata('level') <= 2 ) :?>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-4"><a href="#"><i class="fas fa-eye" style="color: #21aba5;"></i></a></div>
                                            <div class="col-sm-4"><a href="" data-target="#deleteModel" data-toggle='modal'><i class="fas fa-trash-alt" style="color: #e33e5a;"></i></a></div>
                                            <div class="col-sm-4"><a href=""><i class="fas fa-pen-fancy" style="color: #00204A;"></i></a></div>
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
