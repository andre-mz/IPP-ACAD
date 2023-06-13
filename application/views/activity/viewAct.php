<?php $this->load->view('_inc/dashHead')?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
       
       <a href="<?=site_url('Url/activity')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
       <i class="fas fa-backward fa-sm text-white-50"></i> 
           Voltar
       </a>
</div>
      
    <div class="card shadow mb-4">
        <div class="card-header py-3 dataTable-top" style="height: 80px;">
            <h6 class="m-0 text-primary text-center mt-3" style="font-size: 30px;text-transform: uppercase;font-weight: 200"">ACTIVIDADES</h6>
        </div>
        <div class="card-body">
             
            <form id="formAlun" enctype="multipart/form-data" action="<?=base_url('Activity/updateActivity/'.$retrieveAct->id_activity)?>" method="post" class="form user mt-5">
          
                <div class="row form-group">
                    <div class="col-sm-8 form-field">
                        <div class="row form-group">
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span> Titulo</label>
                                <input style="border-radius: 0!important;" value="<?= set_value('titulo')?><?=$retrieveAct->titulo?>" type="text" name='titulo' class="form-control form-control-user" placeholder="Titulo">
                                <div class="erro-small"><small><?php echo form_error('titulo')?></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                            <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Categoria</label>
                                <?php $categoria = $this->input->post('categotia') ? $this->input->post('categoria') : $retrieveAct->categoria?>
                                <select style="border-radius: 0!important;" name="categoria" id="" class="form-control form-control-user">
                                    <option value="">**CATEGORIA**</option>
                                    <option value="evento"  <?=$categoria === 'evento'  ? 'selected' : null ?>>Evento</option>
                                    <option value="noticia" <?=$categoria === 'noticia' ? 'selected' : null ?>>Noticia</option>
                                </select>
                                <div class="erro-small"><small><?php echo form_error('categoria')?></small></div>
                            </div>
                            <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                <label for="mes_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Capa "Imagem"</label>
                                <input type="hidden" name='old_activ_image' hidden value="<?=$retrieveAct->activ_image?>">
                                <input style="border-radius: 0!important;" type="file" name='activ_image' class="form-control form-control-user">
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
                                    <?php $data_acont = $this->input->post('data_acont') ? $this->input->post('data_acont') : $retrieveAct->data_acont?>
                                    <select style="border-radius: 0!important;" name="data_acont" id="" class="form-control form-control-user">
                                        <option value="">**DIA**</option>
                                        <option value="01" <?=$data_acont === '01' ? 'selected' : null?>>01</option>
                                        <option value="02" <?=$data_acont === '02' ? 'selected' : null?>>02</option>
                                        <option value="03" <?=$data_acont === '03' ? 'selected' : null?>>03</option>
                                        <option value="04" <?=$data_acont === '04' ? 'selected' : null?>>04</option>
                                        <option value="05" <?=$data_acont === '05' ? 'selected' : null?>>05</option>
                                        <option value="06" <?=$data_acont === '06' ? 'selected' : null?>>06</option>
                                        <option value="07" <?=$data_acont === '07' ? 'selected' : null?>>07</option>
                                        <option value="08" <?=$data_acont === '08' ? 'selected' : null?>>08</option>
                                        <option value="09" <?=$data_acont === '09' ? 'selected' : null?>>09</option>
                                        <option value="10" <?=$data_acont === '10' ? 'selected' : null?>>10</option>
                                        <option value="11" <?=$data_acont === '11' ? 'selected' : null?>>11</option>
                                        <option value="12" <?=$data_acont === '12' ? 'selected' : null?>>12</option>
                                        <option value="13" <?=$data_acont === '13' ? 'selected' : null?>>13</option>
                                        <option value="14" <?=$data_acont === '14' ? 'selected' : null?>>14</option>
                                        <option value="15" <?=$data_acont === '15' ? 'selected' : null?>>15</option>
                                        <option value="16" <?=$data_acont === '16' ? 'selected' : null?>>16</option>
                                        <option value="17" <?=$data_acont === '17' ? 'selected' : null?>>17</option>
                                        <option value="18" <?=$data_acont === '18' ? 'selected' : null?>>18</option>
                                        <option value="19" <?=$data_acont === '19' ? 'selected' : null?>>19</option>
                                        <option value="20" <?=$data_acont === '20' ? 'selected' : null?>>20</option>
                                        <option value="21" <?=$data_acont === '21' ? 'selected' : null?>>21</option>
                                        <option value="22" <?=$data_acont === '22' ? 'selected' : null?>>22</option>
                                        <option value="23" <?=$data_acont === '23' ? 'selected' : null?>>23</option>
                                        <option value="24" <?=$data_acont === '24' ? 'selected' : null?>>24</option>
                                        <option value="25" <?=$data_acont === '25' ? 'selected' : null?>>25</option>
                                        <option value="26" <?=$data_acont === '26' ? 'selected' : null?>>26</option>
                                        <option value="27" <?=$data_acont === '27' ? 'selected' : null?>>27</option>
                                        <option value="28" <?=$data_acont === '28' ? 'selected' : null?>>28</option>
                                        <option value="29" <?=$data_acont === '29' ? 'selected' : null?>>29</option>
                                        <option value="30" <?=$data_acont === '30' ? 'selected' : null?>>30</option>
                                        <option value="31" <?=$data_acont === '31' ? 'selected' : null?>>31</option>
                                    </select>
                                </div>
                                <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                    <label for="mes_acont" style="color: #00204A;font-weight: bold;">M&ecirc;s do evento</label>
                                    <?php $mes_acont = $this->input->post('mes_acont') ? $this->input->post('mes_acont') : $retrieveAct->mes_acont?>
                                    <select style="border-radius: 0!important;" name="mes_acont" id="" class="form-control form-control-user">
                                        <option value="">**M&Ecirc;S**</option>
                                        <option value="Janeiro"      <?=$mes_acont === 'Janeiro'      ? 'selected' : null ?>>Janeiro</option>
                                        <option value="Fevereiro"    <?=$mes_acont === 'Fevereiro'    ? 'selected' : null ?>>Fevereiro</option>
                                        <option value="Mar&ccedil;o" <?=$mes_acont === 'Mar&ccedil;o' ? 'selected' : null ?>>Mar&ccedil;o</option>
                                        <option value="Abril"        <?=$mes_acont === 'Abril'        ? 'selected' : null ?>>Abril</option>
                                        <option value="Maio"         <?=$mes_acont === 'Maio'         ? 'selected' : null ?>>Maio</option>
                                        <option value="Junho"        <?=$mes_acont === 'Junho'        ? 'selected' : null ?>>Junho</option>
                                        <option value="Julho"        <?=$mes_acont === 'Julho'        ? 'selected' : null ?>>Julho</option>
                                        <option value="Agosto"       <?=$mes_acont === 'Agosto'       ? 'selected' : null ?>>Agosto</option>
                                        <option value="Setembro"     <?=$mes_acont === 'Setembro'     ? 'selected' : null ?>>Setembro</option>
                                        <option value="Outubro"      <?=$mes_acont === 'Outubro'      ? 'selected' : null ?>>Outubro</option>
                                        <option value="Novembro"     <?=$mes_acont === 'Novembro'     ? 'selected' : null ?>>Novembro</option>
                                        <option value="Dezembro"     <?=$mes_acont === 'Dezembro'     ? 'selected' : null ?>>Dezembro</option>
                                    </select>
                                </div>

                                <div class="form-field col-sm-2 mb-sm-0 mb-5">
                                    <label for="mes_acont" style="color: #00204A;font-weight: bold;">Ano</label>
                                    <input style="border-radius: 0!important;" type="number" name='ano_acont' value="<?=$retrieveAct->ano_acont?>" class="form-control form-control-user">
                                </div>

                                <div class="form-field col-sm-4 mb-sm-0 mb-5">
                                    <label for="local_acont" style="color: #00204A;font-weight: bold;">Local de realizacao do evento</label>
                                    <input style="border-radius: 0!important;" type="text" name='local_acont' value="<?=$retrieveAct->local_acont?>" class="form-control form-control-user">
                                </div>
                            </div>
                        </div>

                        

                        <div class="row mt-2 form-group">
                            <div class="form-field col-sm-12 mb-sm-0 mb-5">
                                <label for="local_acont" style="color: #00204A;font-weight: bold;"><span style="color: red;">*</span>Conteudo</label>
                                <textarea style="border-radius: 0!important; height: 300px;" name="content" id="content"  class="form-control form-control-user">
                                <?=$retrieveAct->content?>
                                </textarea>
                                <small><?php echo form_error('content')?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 form-field">
                        <img  src="<?= base_url('upload/'.$retrieveAct->activ_image)?>" alt="" class="img-responsive" style="width: 100%;">
                    </div>
                </div>
                
                <button type="submit" value="Save" class="mt-5 mb-5 btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:bold; border-radius: 0;font-size: 13px;">Update record</button>
            </form>
        </div>
    </div>

















<?php $this->load->view('_inc/dashFooter')?>

