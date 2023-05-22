<?php $this->load->view('_inc/dashHead')?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabelas</h1>
        <a href="" data-target="#newCurso" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm shadow-sm">
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
    






    <div class="modal fade" id="newCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="width: 640px;">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #00204A;">
                    <h6 class="m-0 font-weight-bold text-primary" style="color:#fff!important">Adcionar novo curso</h6>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color:#fff!important">
                        <span aria-hidden="true"><i class="fas fa-window-close"></i></span>
                    </button>
                </div>
                    <div class="modal-body">
                        <form id="formAlun" action="<?=base_url()?>Forms/addCurso" method="post" class="form user mt-5">
                            <?php echo validation_errors(); ?>
                            <div class="row mt-2 form-group">
                                <div class="form-field col-sm-6 mb-sm-0 mb-5">
                                    <input value="" type="text" name="nome_curso" id="nome_curso" class="form-control form-control-user" placeholder="Nome do curso">
                                    <div class="erro-small"><small></small></div>
                                </div>
                                <div class="form-field col-sm-6 mb-sm-0 mb-4">
                                    <input value="" type="text" name="duracao" id="duracao" class="form-control form-control-user" placeholder="Dura&ccedil;&atilde;o  EX: 2 anos e 5 meses">
                                    <div class="erro-small"><small></small></div>
                                </div>
                            </div>
                            <div class="row mt-5 form-group">
                                <div class="form-field col-sm-6 mb-sm-0 mb-4">
                                    <select name="disponibilidade" id="disponibilidade" class="form-control form-control-user">
                                        <option class="text-center" value="">**DISPONIBILIDADE**</option>
                                        <option value="1">Disponivel</option>
                                        <option value="2">Indisponivel</option>
                                    </select>
                                    <div class="erro-small"><small></small></div>
                                </div>
                                <div class="form-field col-sm-6 mb-sm-0 mb-4">
                                    <input value="" type="text" name="taxa_mensal" id="taxa_mensal" class="form-control form-control-user" placeholder="Taxa de pagamentos EX: 2.500">
                                    <div class="erro-small"><small></small></div>
                                </div>
                            </div>
                            <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        






































<?php $this->load->view('_inc/dashFooter')?>