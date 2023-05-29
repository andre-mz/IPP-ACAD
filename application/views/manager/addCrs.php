<?php $this->load->view('_inc/dashHead')?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">  
        <a href="<?=site_url('Manager/tabCrs')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>    
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 font-weight-bold text-primary">Curso</h6>
        </div>
        <div class="card-body">
             
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


















<?php $this->load->view('_inc/dashFooter')?>