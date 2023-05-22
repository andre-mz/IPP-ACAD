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
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="usuario" role="tabpanel" aria-labelledby="home-tab">
            <a class="btn btn-acti" href="#" data-toggle="modal" data-target="#logoutActivitie" style="background-color: #00204A!important; color:#fff">
                <span>Nova actividade</span>
            </a>
        </div>
    </div> 
            




<?php $this->load->view('_inc/dashFooter')?>