<?php $this->load->view('_inc/dashHead')?>



    <div class="d-sm-flex align-items-center justify-content-between mb-4">  
        <a href="<?=base_url()?>Url/activity" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
        <i class="fas fa-backward fa-sm text-white-50"></i> 
            Voltar
        </a>    
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top" style="height: 80px;">
            <h6 class="m-0 font-weight-bold text-primary text-center mt-3" style="font-size: 35px;">ACTIVIDADES</h6>
        </div>
        <div class="card-body">
             
            <form id="formAlun" enctype="multipart/form-data" action="<?=base_url()?>Forms/addActivity" method="post" class="form user mt-5">
          
                <div class="row form-group">
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Titulo</label>
                        <input value="<?= set_value('titulo')?>" type="text" name='titulo' class="form-control form-control-user" placeholder="Titulo">
                        <div class="erro-small"><small><?php echo form_error('titulo')?></small></div>
                    </div>
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                    <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Categoria</label>
                        <select name="categoria" id="" class="form-control form-control-user">
                            <option>***CATEGORIA***</option>
                            <option value="evento">Evento</option>
                            <option value="noticia">Noticia</option>
                        </select>
                        <div class="erro-small"><small><?php echo form_error('categoria')?></small></div>
                    </div>
                    <div class="form-field col-sm-4 mb-sm-0 mb-5">
                        <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Capa "Imagem"</label>
                        <input type="file" name='activ_image' class="form-control form-control-user">
                        <small><?php if(isset($imageError)){echo $imageError;}?></small>
                    </div>
                </div>

                <div class="row form-group" style="background-color: #e9ecf2;border-radius: .5rem;">
                    <div  style="text-align: center!important">
                       <h6 class="m-0  text-center mt-3 ml-3"><strong style="color: #00204A;">NB:</strong> PREENCHA EM CASO DE EVENTOS</h6>
                    </div>
                    <div class="row form-group col-sm-12 pt-3 pb-4" >
                        
                        <div class="form-field col-sm-2 mb-sm-0 mb-5">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;">Data do evento</label>
                            <select name="data_acont" id="" class="form-control form-control-user">
                                <option>***DATA***</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="form-field col-sm-4 mb-sm-0 mb-5">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;">M&ecirc;s do evento</label>
                            <select name="mes_acont" id="" class="form-control form-control-user">
                                <option>***M&Ecirc;S***</option>
                                <option value="Janeiro">Janeiro</option>
                                <option value="Fevereiro">Fevereiro</option>
                                <option value="Mar&ccedil;o">Mar&ccedil;o</option>
                                <option value="Abril">Abril</option>
                                <option value="Maio">Maio</option>
                                <option value="Junho">Junho</option>
                                <option value="Julho">Julho</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Setembro">Setembro</option>
                                <option value="Outubro">Outubro</option>
                                <option value="Novembro">Novembro</option>
                                <option value="Dezembro">Dezembro</option>
                            </select>
                        </div>

                        <div class="form-field col-sm-2 mb-sm-0 mb-5">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;">Ano</label>
                            <input type="number" name='ano_acont' class="form-control form-control-user">
                        </div>

                        <div class="form-field col-sm-4 mb-sm-0 mb-5">
                            <label for="local_acont" style="color: #00204A;font-weight: bold;">Local de realizacao do evento</label>
                            <input type="text" name='local_acont' class="form-control form-control-user">
                        </div>
                    </div>
                </div>

                

                <div class="row mt-2 form-group">
                    <div class="form-field col-sm-12 mb-sm-0 mb-5">
                        <label for="local_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Conteudo</label>
                        <textarea name="content" id="content"  class="form-control form-control-user" style="height: 300px;"></textarea>
                        <small><?php echo form_error('content')?></small>
                    </div>
                </div>
                
                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">save record</button>
            </form>
        </div>
    </div>











































<?php $this->load->view('_inc/dashFooter')?>