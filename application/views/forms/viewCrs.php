<?php $this->load->view('_inc/dashHead')?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">  
        <a href="<?=site_url('Manager/tabCrs')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>    
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 text-primary text-center" style="font-size: 30px;text-transform: uppercase;font-weight: 200">DADOS CURSO <i class="fas fa-list"></i></h6>
        </div>
        <div class="card-body">
             
            <form id="formAlun" action="<?=base_url()?>Manager/updateCrs" method="post" class="form user mt-5">
                <?php echo validation_errors(); ?>
                <div class="row mt-2 form-group">
                    <input type="text" value="<?=$retrieveCrs->id_curso?>" name="id_curso" hidden>
                    <div class="form-field col-sm-6 mb-sm-0 mb-5">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Nome do curso</label>
                        <input value="<?= $retrieveCrs->nome_curso?>" type="text" name="nome_curso" id="nome_curso" class="form-control form-control-user" placeholder="Nome do curso">
                        <div class="erro-small"><small></small></div>
                    </div>
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Duracao do curso</label>
                        <input value="<?= $retrieveCrs->duracao?>" type="text" name="duracao" id="duracao" class="form-control form-control-user" placeholder="Dura&ccedil;&atilde;o  EX: 2 anos e 5 meses">
                        <div class="erro-small"><small></small></div>
                    </div>
                </div>
                <div class="row mt-5 form-group">
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Disponibilidade</label>
                        <?php $disponibilidade = $this->input->post('disponibilidade') ? $this->input->post('disponibilidade') : $retrieveCrs->disponibilidade?>
                        <select name="disponibilidade" id="disponibilidade" class="form-control form-control-user">
                            <option value="1" <?= $disponibilidade == 1 ? 'selected' : null?>>Disponivel</option>
                            <option value="2" <?= $disponibilidade == 2 ? 'selected' : null?>>Indisponivel</option>
                        </select>
                        <div class="erro-small"><small></small></div>
                    </div>
                    <div class="form-field col-sm-6 mb-sm-0 mb-4">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Taxa mensal</label> 
                        <input value="<?= $retrieveCrs->taxa_mensal?>"" type="number" name="taxa_mensal" id="taxa_mensal" class="form-control form-control-user" placeholder="Taxa de pagamentos EX: 2.500">
                        <div class="erro-small"><small></small></div>
                    </div>
                </div>
                <button type="submit" name="update" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 13px;">
                    Update record
                </button>
            </form>
        </div>
    </div>























































<?php $this->load->view('_inc/dashFooter')?>

