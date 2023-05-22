<?php $this->load->view('_inc/dashHead')?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="h4 mb-0 text-gray-800">Pagamentos</h6>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <div class="tab-pane fade show active" id="usuario" role="tabpanel" aria-labelledby="home-tab">
            <a class="btn btn-acti" href="#" data-toggle="modal" data-target="#confirmPayment" style="background-color: #00204A!important; color:#fff">
                <span class="justify-content-start">Confirmar pagamento</span>
            </a>
        </div>
    </div> 
    

    <div class="tab-content" id="myTabContent">    
        
        <div class="card shadow mb-4">
            <div class="card-header py-3 dataTable-top">
                <h6 class="m-0 font-weight-bold text-primary">Registrar pagamento</h6>
            </div>
            <div class="card-body p-4">
                <form action="<?=base_url()?>Manager/searchStd" method="post">
                    <div class="row">
                        <div class="col-sm-8">
                            <select name="estudante" class="form-control form-control-user selectpicker" data-width="70%" title='***SELECION O ESTUDANTE***' data-live-search="true">
                                <?php foreach($retrieveStd->result() as $key=>$retrieveStd):?>
                                    <option value="<?=$retrieveStd->fullname?>">
                                        <?=$retrieveStd->fullname?>            
                                    </option>   
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="col-sm-4" id="usuario">
                            <input class="btn btn-block p-2" type="submit" name="searchStd" value="Procurar" style="background-color: #00204A!important; color:#fff; font-weight: 600;">   
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
                











    <script>
        $(function() {
            $('span.hided').hide();
        });
    </script>
<?php $this->load->view('_inc/dashFooter')?>