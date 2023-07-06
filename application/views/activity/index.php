<?php $this->load->view('_inc/dashHead')?>


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Activities
        </h1>   
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" id="id-active"> 
            <a class="nav-link active" id="id-active" data-toggle="tab" href="#usuario" role="tab" aria-controls="home" aria-selected="true">
                Pagina de apresenta&ccedil;&atilde;o
            </a>
        </li>
        <li class="nav-item" id="id-active"> 
            <!--data-toggle="tab"---> 
            <a class="nav-link" data-toggle="tab" id="id-active" href="#curso" role="tab" aria-controls="home" aria-selected="true">
                Cursos
            </a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="usuario" role="tabpanel" aria-labelledby="home-tab">
            <a class="btn btn-acti" href="<?=base_url()?>Url/addActi" style="background-color: #00204A!important; color:#fff">
                <span>Nova actividade</span>
            </a>
        </div>
    </div> 
    
   
    <div class="row pb-5 pt-5" style="padding: .6rem;">
        <?php foreach($retrieveAct->result() as $key=>$retrieveAct):?>
            <div class="card col-sm-3" style="padding: .6rem;margin-left: .2 px;margin-bottom: 1rem;">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="<?= base_url('upload/'.$retrieveAct->activ_image)?>"
                    alt="Card image cap">
                    <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title" style="font-size: 17px;"><?= $retrieveAct->titulo?></h4>
                    <p class="card-text"><?= print word_limiter($retrieveAct->content, 15)?></p>
                </div>
                <div class="card-footer">
                <div class="row">
                    <div class="col-sm-6">
                    <a href="<?=base_url('activity/Activity/editAct/'.$retrieveAct->id_activity)?>" class="btn btn-primary col-sm-12">Ver/Actualizar</a>
                    </div>
                    <div class="col-sm-6">
                    <a href="<?=base_url('activity/Activity/deleteActi/'.$retrieveAct->id_activity)?>" class="btn btn-danger col-sm-12">Apagar</a>
                    </div>
                </div>
                </div>

            </div>
        <?php endforeach?>
    </div>
  
    


<?php $this->load->view('_inc/dashFooter')?>