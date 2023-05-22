<?php $this->load->view('_inc/dashHead')?>



    <?php if(!empty($result)):?>
        <div class="tab-content mt-5" id="myTabContent">    
            <div class="row">
                <?php foreach ($result as $result): ?>
                    <div class="col-sm-7">
                        <div class="card shadow mb-4">
                            <div class="card-header dataTable-top">
                                <h6 class="m-0 font-weight-bold text-primary">Adicionar novo pagamento</h6>
                            </div>
                            <div class="card-body p-4">
                                <form class="form-user" action="">
                                    <div class="row mt-3">
                                        <div class="form-field col-sm-12 mb-sm-0 mb-5">
                                            <input readonly value="<?=$result->fullname?>" type="text" name="fullname" id="fullname" class="form-control form-control-user" placeholder="Nome completo">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-field col-sm-8 mb-sm-0 mb-5">
                                            <input readonly value="
                                            <?php 
                                                if($result->curso == 2){
                                                    echo ' F&Aacute;RMACIA';
                                                }else if($result->curso == 1){
                                                    echo ' TMG';
                                                }else if($result->curso == 3){
                                                    echo 'SMI';
                                                }else{
                                                    echo 'NUTRI&Ccedil;&Atilde;O';
                                                }
                                            ?>
                                            " type="text" name="fullname" id="fullname" class="form-control form-control-user text-center" placeholder="Nome completo">
                                        </div>
                                        <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                            <input readonly value="<?=$result->turma?>" type="text" name="fullname" id="fullname" class="form-control form-control-user text-center" placeholder="Nome completo">
                                        </div>
                                    </div>

                                    <div class="row p-2 mt-3">

                                        
                                        <div class="form-field col-sm-3 mb-sm-0 mb-5">
                                            <input readonly value="<?=$result->ano_frequentar?> Ano" type="text" name="fullname" id="fullname" class="form-control form-control-user text-center" placeholder="Nome completo">
                                        </div>
                                    

                                        <div class="form-field col-sm-5 mb-sm-0 mb-5">
                                            <input value="" type="text" name="entidade" id="entidade" class="form-control form-control-user text-center" placeholder="entidade">
                                        </div>
                                        <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                            <input value="" type="text" name="referencia" id="referencia" class="form-control form-control-user text-center" placeholder="referencia">
                                        </div>
                                    </div>
                                    <div class="row p-2 mt-3">
                                        <div class="form-field col-sm-8 mb-sm-0 mb-5">
                                            <select name="tipo_payment" title="TIPO DE PAGAMENTO" class="form-control form-control-user selectpicker text-center" data-live-search="true">
                                                <option value="
                                                    <?php if($result->curso == 1):?>
                                                        2500
                                                    <?php elseif($result->curso == 2):?>
                                                        3000
                                                    <?php elseif($result->curso == 3):?>
                                                        2000
                                                    <?php endif?>
                                                ">Mensalidade</option>
                                                <option value="3000">Matricula</option>
                                                <option value="600">Inscri&ccedil;&atilde;o para exame</option>
                                                <option value="400">Recorrencia</option>
                                            </select>
                                        </div>
                                        <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                            <input class="btn btn-block" type="submit" name="" value="Adicionar" style="background-color: #00204A!important; color:#fff; font-weight: 600;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card shadow mb-5">
                            <div class="card-body" style="background-color: #00204A!important;">
                                <form action="<?=base_url()?>Manager/searchStd" method="post" class="mt-2">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select name="estudante" class="form-control form-control-user selectpicker" data-width="100%" title='***SELECION O ESTUDANTE***' data-live-search="true">
                                                <?php foreach($retrieveStd->result() as $key=>$retrieveStd):?>
                                                    <option value="<?=$retrieveStd->fullname?>">
                                                        <?=$retrieveStd->fullname?>            
                                                    </option>   
                                                <?php endforeach?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-12 " id="usuario">
                                            <input class="btn btn-block p-2" type="submit" name="searchStd" value="Procurar" style="background-color: #2E7484!important; color:#fff; font-weight: 600;">   
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
        </div>
    <?php else:?>
        <p>NADA A MOSTRAR</p>
    <?php endif?>























<?php $this->load->view('_inc/dashFooter')?>