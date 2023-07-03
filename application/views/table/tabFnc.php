<?php $this->load->view('_inc/dashHead')?>


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabelas</h1>
        <a href="<?=base_url()?>Url/addFnc" class="d-none d-sm-inline-block btn btn-sm shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> 
            Cadastrar funcion&aacute;rio
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 dep">
        <div class="row p-3">
            <ul class="nav" role="tablist">
                <span>
                    <a class="link-dep nav-link active" href="<?=base_url('')?>" id="pills-home-tab" data-toggle="pill" role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class="fa fa-users"></i>
                        T.FUNCIONARIOS
                    </a>
                </span>
                <span>
                    <a class="link-dep nav-link" id="pills-profile-tab" data-toggle="pill" href="#fncINFO" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <i class="fa fa-desktop"></i>
                        D.INFORM&Aacute;TICA
                    </a>
                </span>
                <span>
                    <a class="link-dep nav-link" href="">
                        <i class="fa fa-server"></i>
                        D.ADMINISTRATIVO
                    </a>
                </span>
                <span>
                    <a class="link-dep nav-link" href="">
                        <i class="fa fa-archive"></i>
                        S.PEDAG&Oacute;GICO
                    </a>
                </span>
                <span>
                    <a class="link-dep nav-link" href="">
                        <i class="fa fa-address-book"></i>
                        REG.ACAD&Eacute;MICO
                    </a>
                </span>
            </ul>
        </div>
        <div class="card-header py-3 dataTable-top">
            <h6 class="m-0 text-primary text-center" style="font-size: 30px;text-transform: uppercase;font-weight: 200">funcionarios IPP <i class="fas fa-users-cog"></i></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Func.</th>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>Departamento</th>
                            <th>Area de trabalho</th>
                            <th>Local</th>
                            <th>Contacto</th>
                            <?php if ($this->session->userdata('level') <= 2):?>
                                <th>Ac&ccedil;&atilde;o</th>
                            <?php endif?>   
                        </tr>
                    </thead>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="allFNC" role="tabpanel" aria-labelledby="pills-home-tab">
                            <tbody>
                                <?php foreach($retrieveFnc->result() as $key=>$retrieveFnc):?>   
                                    <tr>
                                        <td><?=$retrieveFnc->nr_funcionario?></td>
                                        <td><img src="<?=base_url('uploa/foto_func/'.$retrieveFnc->foto)?>" alt="foto"></td>
                                        <td><?=$retrieveFnc->nome?></td>
                                        <td><?=$retrieveFnc->departament?></td>
                                        <td><?=$retrieveFnc->cargo?></td>
                                        <td><?=$retrieveFnc->local?></td>
                                        <td>(+258) <?=$retrieveFnc->contato_pessoal?></td>
                                        <?php if ($this->session->userdata('level') <= 2 ) :?>
                                            <td>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <a href="<?=base_url('GeneratePdf/generatePdfFnc/'.$retrieveFnc->id_funcionario)?>">
                                                            <i class="fas fa-eye fa-2x" style="color: #ffb423; font-size: 15px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                    <a name='delete'  href='<?=base_url('Manager/deleteFnc/'.$retrieveFnc->id_funcionario)?>'><i class='fas fa-trash-alt fa-2x' style='color: #e33e5a;font-size: 15px;'></i></a>";
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="<?=base_url('Manager/viewFnc/'.$retrieveFnc->id_funcionario)?>">
                                                            <i class="fas fa-pen" style="color: #00204A; font-size: 15px;"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php endif?>    
                                    </tr>
                                <?php endforeach?>
                            </tbody>
                        </div>
                        <div class="tab-pane fade show active" id="allINFO" role="tabpanel" aria-labelledby="pills-home-tab">
                        </div>
                    </div>
                </table>
            </div>
        </div> 
    </div>

    


    sudo tcpdump -i eth0 -vn host 8.8.8.8 and port 53 &


<?php $this->load->view('_inc/dashFooter')?>