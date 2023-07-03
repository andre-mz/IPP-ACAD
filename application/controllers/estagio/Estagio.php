<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session $session
 * @property DataEtg $DataEtg
 * @property Form_validation $form_validation
 * @property Input $input
 * @property DB $db
 * @property load $load
 */


 class Estagio extends CI_Controller{


    function __construct(){
        parent::__construct();
        if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/erro');
        }
    }


    function view(){
        $table_estagio = 'table_estagio';
        if($this->db->table_exists($table_estagio)){
            $retrieveEtg['retrieveEtg'] = $this->DataEtg->retrieveEtg();
            $this->load->view('estagio/view', $retrieveEtg);
        }else{
            $this->db->query(
                ' CREATE TABLE if not Exists `sig-acad`.`table_estagio` 
                    (`id_estagio` INT(11) NOT NULL AUTO_INCREMENT, 
                    `nome`       VARCHAR(50) NOT NULL , 
                    `curso`      VARCHAR(30) NOT NULL ,
                    `estagio`    VARCHAR(20) NOT NULL , 
                    `contato`    VARCHAR(10) NOT NULL , 
                    `ano`        VARCHAR(10) NOT NULL , 
                    `valor_pago` VARCHAR(10) NOT NULL ,
                    `turma`      VARCHAR(10) NOT NULL ,
                    `levar`      TEXT NOT NULL , 
                    `adicionado` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id_estagio`)) ENGINE = InnoDB;
                '
             );
             echo "<script>window.location='".site_url('estagio/Estagio/view')."';</script>";
        }
    }

    function add(){
        $this->load->view('estagio/addEtg');
    }
    function addEtg(){
        
        static $levar = 0;
        $this->form_validation->set_rules('nome', 'Nome do curso', 'trim|required',
            array(
                'requirede' => 'O campo %s nao pode ficar vazio',
                //'is_unique' => 'O curso ja existe no sistema'
            )
        );
        $this->form_validation->set_rules('curso', 'curso', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );
        $this->form_validation->set_rules('estagio', 'estagio', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );
        $this->form_validation->set_rules('turma', 'estagio', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );
        $this->form_validation->set_rules('contato', 'contato', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );
        $this->form_validation->set_rules('valor_pago', 'valor', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );
        $this->form_validation->set_rules('ano', 'ano', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );

        if($this->form_validation->run()){
            $data = array(
                'nome'       => strip_tags($this->input->post('nome')),
                'curso'      => strip_tags($this->input->post('curso')),
                'estagio'    => strip_tags($this->input->post('estagio')),
                'turma'      => strip_tags($this->input->post('turma')),
                'contato'    => strip_tags($this->input->post('contato')),
                'ano'        => strip_tags($this->input->post('ano')),
                'valor_pago' => strip_tags($this->input->post('valor_pago')),
                'levar'      => $levar
            );
            $this->DataEtg->addEtg($data);
            echo "<script>alert('ADICIONADO COM SUCESSO');</script>";
			echo "<script>window.location='".site_url('estagio/Estagio/add')."';</script>";
        }else{
			//echo "<script>window.location='".site_url('estagio/Estagio/add')."';</script>";
            $this->load->view('estagio/addEtg');
                //$erros = array('mensagens' => validation_errors());
                //echo "<script>alert('FALHA ALGO DEU ERRADO');</script>";
                
           
	    }
    }
}