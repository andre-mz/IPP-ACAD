<?php $this->load->view('_inc/dashHead')?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
       
       <a href="<?=site_url('Manager/tabUsr')?>" class="d-none d-sm-inline-block btn btn-sm shadow-sm p-1" style="background-color: #005792;color:white;">
       <i class="fas fa-backward fa-sm text-white-50"></i> 
           Voltar
       </a>
   </div>
   
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
       <div class="card-header py-3 dataTable-top">
           <h6 class="m-0 font-weight-bold text-primary">Dados do estudante</h6>
       </div>
       <div class="card-body">
           <div class="">
               <div class="">
                   <form action="<?= base_url()?>Manager/updateUsr" method="POST" enctype="multipart/form-data">
                       <div class="row mt-2 form-group">
                           <input name="id_user" value="<?=$retrieveUsr->id_user?>" hidden>
                           <div class="form-field col-sm-4 mb-sm-0 mb-5">
                               <label for="fullname">Nome completo</label>
                               <input value="<?=$retrieveUsr->name?>" type="text" name="name" id="fullname" class="form-control form-control-user" placeholder="Nome completo">
                               <div class="erro-small"><small></small></div>
                           </div>
                           <div class="form-field col-sm-2 mb-sm-0 mb-4">
                               <label for="Genero">Nivel de acesso</label>
                               <?php $level = $this->input->post('level') ? $this->input->post('level') : $retrieveUsr->level;?>
                               <select class="form-control form-control-user" name="level" id="genero">
                                   <option value="1" <?=$level == 1 ? 'selected' : null?>>
                                       Super user
                                   </option>
                                   <option value="2" <?=$level == 2 ? 'selected' : null?>>
                                       Admin
                                   </option>
                                   <option value="3" <?=$level == 3 ? 'selected' : null?>>
                                       Docente
                                   </option>
                                   <option value="4" <?=$level == 4 ? 'selected' : null?>>
                                       Estudante
                                   </option>
                               </select>
                               <div class="erro-small"><small></small></div>
                           </div>

                           <div class="form-field col-sm-2 mb-sm-0 mb-4">
                               <label for="Genero">Estado da conta</label>
                               <?php $estado = $this->input->post('estado') ? $this->input->post('estado') : $retrieveUsr->estado;?>
                               <select class="form-control form-control-user" name="estado" id="genero">
                                   <option value="1" <?=$estado == 1 ? 'selected' : null?>>
                                      Ativo
                                   </option>
                                   <option value="2" <?=$estado == 2 ? 'selected' : null?>>
                                       Em espera
                                   </option>
                                   <option value="3" <?=$estado == 0 ? 'selected' : null?>>
                                       Desativada
                                   </option>
                               </select>
                               <div class="erro-small"><small></small></div>
                           </div>
                           <div class="form-field col-sm-4 mb-sm-0 mt-4" style="margin-top: 2rem!important;">
                           <button type="submit" name="update" class="btn-acti btn btn-user btn-block" style="background-color: #00204A;color:white;font-weight:700;">
                                Actualizar
                            </button>
                           </div>
                       </div>
                        
                   </form>
               </div>
            </div>
       </div>
   </div>













<?php $this->load->view('_inc/dashFooter')?>