<?php $this->load->view('_inc/dashHead')?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">  
        <a href="<?=site_url('Manager/tabCrs')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>    
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 text-primary text-center" style="font-size: 30px;text-transform: uppercase;font-weight: 200">Curso <i class="fas fa-list"></i></h6>
        </div>
        <div class="card-body">
             
            <form id="formAlun" action="<?=base_url()?>Forms/addCurso" method="post" class="form user mt-5">
                <?php echo validation_errors(); ?>
                <div class="row mt-2 form-group">
                    <div class="form-field col-sm-6 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome do curso</label>
                        <input value="" type="text" name="nome_curso" id="nome_curso" class="form-control form-control-user" placeholder="Nome do curso">
                        <div class="erro-small"><small></small></div>
                    </div>
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Duracao do curso</label>
                        <input value="" type="text" name="duracao" id="duracao" class="form-control form-control-user" placeholder="Dura&ccedil;&atilde;o  EX: 2 anos e 5 meses">
                        <div class="erro-small"><small></small></div>
                    </div>
                </div>
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Disponibilidade</label>
                        <select name="disponibilidade" id="disponibilidade" class="form-control form-control-user">
                            <option class="text-center" value="">**DISPONIBILIDADE**</option>
                            <option value="1">Disponivel</option>
                            <option value="2">Indisponivel</option>
                        </select>
                        <div class="erro-small"><small></small></div>
                    </div>
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Taxa mensal</label>
                        <input value="" type="text" name="taxa_mensal" id="taxa_mensal" class="form-control form-control-user" placeholder="Taxa de pagamentos EX: 2.500">
                        <div class="erro-small"><small></small></div>
                    </div>
                </div>
                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 13px;">
                    Save record
                </button>
            </form>
        </div>
    </div>


















<?php $this->load->view('_inc/dashFooter')?>