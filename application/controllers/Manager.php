<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session  $session
 * @property Retrieve $Retrieve
 * @property Input 	  $input
 * @property db	      $db
 * @property Search   $Search
 * @property form_validation $form_validation
 * CONTROLLERS FOR URLS
 */

class Manager extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/login');
        }	
	}

	function tabStd(){
		$retrieveCrs['retrieveCrs']	= $this->Retrieve->retrieveCrs();
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
        $this->load->view('table/index', $retrieveStd + $retrieveCrs);
	}function deleteStd(){
		$id_estudante = $this->input->get('id_estudante');
		$delete		  = $this->Retrieve->deleteStd($id_estudante);
		if($delete == TRUE){
			echo "<script>alert('ESTUDANTE ELIMINADO COM SUCESSO');</script>";
			echo "<script>window.location='".site_url('Manager/tabStd')."';</script>";
		}else{
			echo "<script>alert('FALHA, TENTE NOVAMENTE');</script>";
			echo "<script>window.location='".site_url('Manager/tabStd')."';</script>";
		}
	}function viewStd($id_estudante){
		$retrieveStd['retrieveStd'] = $this->Retrieve->viewStd($id_estudante);
		$this->load->view('manager/viewStd', $retrieveStd);

		$post = $this->input->post(null, TRUE);
		if($this->input->post('update')){
			$data = [
				'fullname' 			 => strip_tags($this->input->post('fullname')),
				'nome_pai'  		 => strip_tags($this->input->post('nome_pai')),
				'idade' 			 => strip_tags($this->input->post('idade')),
				//'genero' 			 => strip_tags($this->input->post('genero')),
				'nacionalidade' 	 => strip_tags($this->input->post('nacionalidade')),
				'naturalidade' 	     => strip_tags($this->input->post('naturalidade')),
				'tipo_documento' 	 => strip_tags($this->input->post('tipo_documento')),
				'nr_documento' 	     => strip_tags($this->input->post('nr_documento')),
				'curso' 			 => strip_tags($this->input->post('curso')),
				'ano_frequentar'     => strip_tags($this->input->post('ano_frequentar')),
				'turma' 	 		 => strip_tags($this->input->post('turma')),
				'periodo'            => strip_tags($this->input->post('periodo')),
				'contato_pessoal'    => strip_tags($this->input->post('contato_pessoal')),
				'contato_emergencia' => strip_tags($this->input->post('contato_emergencia')),
				'estado_estudante'   => strip_tags($this->input->post('estado_estudante')),
				'morada' 			 => strip_tags($this->input->post('morada')),
			];

			$update = $this->Retrieve->updateStd($post);
			if($update == TRUE){
				echo "<script>alert('DADOS ACTUALIZADO COM SUCESSO COM SUCESSO');</script>";
				echo "<script>window.location='".site_url('Manager/tabStd')."';</script>";
			}else{
				echo "<script>alert('FALHA, TENTE NOVAMENTE');</script>";
				echo "<script>window.location='".site_url('Manager/tabStd')."';</script>";
			}
		}
	}function updateStd(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['update'])){
			$this->Retrieve->updateStd($post);
		}
		if($this->db->affected_rows() > 0){
			echo "<script>alert('DADOS ACTUALIZADO COM SUCESSO COM SUCESSO');</script>";
			echo "<script>window.location='".site_url('Manager/tabStd')."';</script>";
		}
	}
	
	
	function tabCrs(){
		$retrieveCrs['retrieveCrs'] = $this->Retrieve->retrieveCrs();
		$this->load->view('table/tabCrs', $retrieveCrs);
	}


	//PAYMENT
	function addPayment($id_estudante){
		$retrieveStd['retrieveStd'] = $this->Retrieve->viewStd($id_estudante);
		redirect('manager/tabStd', $retrieveStd);
	}


	//DOCENT
	//RETIFICAR TODAS TABLES DE FUNCIONARIOS DEVEM SER DO PROPRIO SITE HTML, USANDO NAV TABS BST 4 PARA EVITAR CARREGAR VARIAS PAGINAS
	/**
	 * ESSA LINHAS DE CODIGO SAI DO MODO ARCAICO,
	 * JA TENHO UMA IDEIA DE EVITAR ESSA REPETICAO DESNESSARIA DO CODIGOS
	 * PARA POR AGORA VAMOS DESSE JEITO PARA COMPRIMIR COM O CALENDARIA
	 * NB: USAR NAV TABS PARA FAZER DIRECIONAMENTO DE LIKS :)
	 */
	function tabFnc(){
		$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
		$this->load->view('table/tabFnc', $retrieveFnc);
	}

	/**
	 * function tabFncIT(){
		$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
		$this->load->view('table/tabFnc', $retrieveFnc);
		}
		function tabFncADM(){
			$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
			$this->load->view('table/tabFnc', $retrieveFnc);
		}
		function tabFncPDG(){
			$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
			$this->load->view('table/tabFnc', $retrieveFnc);
		}
		function tabFncACA(){
			$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
			$this->load->view('table/tabFnc', $retrieveFnc);
		}
	*/


	//SEARCH
	function searchStd(){
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
		if($this->input->post('searchStd')){
			$this->form_validation->set_rules('estudante', 'Nome do estudante', 'trim|required',
				array('required' =>'O campo %s nao deve estar vazio')
			);

			if($this->form_validation->run()){
				$searchStd = strip_tags($this->input->post('estudante'));
				$result    = $this->Search->SearchStd($searchStd);
				$this->load->view('payment/searchView', array('result'=> $result)+$retrieveStd);
			}else{
				echo "<script>alert('PREENCHA O CAMPO EM BRANCO E TENTE NOVAMENTE');</script>";
				echo "<script>window.location='".site_url('Url/payment')."';</script>";
			}
		
		}else{
			echo "<script>alert('FALHA PROFUNDA, CONTACTE O ADMIN DO SISTEMA');</script>";
			echo "<script>window.location='".site_url('Url/payment')."';</script>";
		}
	}

}