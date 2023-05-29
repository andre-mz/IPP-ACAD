<?php $this->load->view('_inc/dashHead')?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabelas</h1>
        <a href="<?=base_url()?>Url/addCrs"class="d-none d-sm-inline-block btn btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Adicioncar novo curso
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
                            <th>Nome do curso</th>
                            <th>Duracao do curso</th>
                            <th>Pre&ccedil;o do curso</th>
                            <th>Disponibilidade</th>
                            <?php if ($this->session->userdata('level') <= 2):?>
                                <th>Ac&ccedil;&atilde;o</th>
                            <?php endif?>   
                        </tr>
                    </thead>
                       
                    <tbody>
                        <?php 
                            $n=1; 
                            foreach($retrieveCrs->result() as $key=>$retrieveCrs):?>
                            <tr>
                                <td><?=$n++?></td>
                                <td><?=$retrieveCrs->nome_curso?></td>
                                <td><?=$retrieveCrs->duracao?></td>
                                <td><?=$retrieveCrs->taxa_mensal?></td>
                                <td>
                                    <?php if ($retrieveCrs->disponibilidade    == 1):?>
                                        <span class="btn btn-success">disponivel</span>
                                    <?php else:?>
                                        <span class="btn btn-danger">Indisponivel</span>
                                    <?php endif?>
                                </td>
                                <?php if ($this->session->userdata('level') <= 2 ) :?>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-6 text-center">
                                                <?php
                                                    echo "<a name='delete'  href='deleteCrs?id_curso=".$retrieveCrs->id_curso."'>
                                                    <i class='fas fa-trash-alt fa-2x' style='color: #e33e5a;'></i></a>";
                                                ?>
                                            </div>
                                            <div class="col-sm-6 text-center"><a href="<?=base_url('Manager/viewCrs/'.$retrieveCrs->id_curso)?>"><i class="fas fa-pen fa-2x" style="color: #00204A;"></i></a></div>
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