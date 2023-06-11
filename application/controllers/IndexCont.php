<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Activity $Activity
 */

class IndexCont extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('text');
	}

	function erro(){
		$this->load->view('errors/erro');
	}
	function index(){
		$this->load->view('index');
	}
	function login(){
		$this->load->view('pages/login');
	}

	function curso(){
		$this->load->view('pages/curso');
	}
	function contato(){
		$this->load->view('pages/contato');
	}
	function news(){
		$activity = new Activity_model();
		$retrieveActi['retrieveActi'] = $activity->retrieveAct();
		$retrieveAct['retrieveAct'] = $activity->retrieveAct();
		$this->load->view('pages/news',$retrieveActi+$retrieveAct);
	}
	function view($id_activity){
		$activity = new Activity_model();
        $retrieveActi['retrieveActi'] = $activity->viewAct($id_activity);
		$retrieveAct['retrieveAct'] = $activity->retrieveAct();
		$retrieveActv['retrieveActv'] = $activity->retrieveAct();
        $this->load->view('pages/view', $retrieveActi + $retrieveAct+$retrieveActv);
	}

	function sobre(){
		$this->load->view('pages/sobre');
	}
	
}
