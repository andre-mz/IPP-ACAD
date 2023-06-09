<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session  $session
 * @property Retrieve $Retrieve
 * @property Input 	  $input
 * @property Activity $Activity
 * CONTROLLERS FOR URLS
 */
class Url extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/login');
        }	
	}


	function activity(){
		$activity = new Activity_model();
		$retrieveAct['retrieveAct']   = $activity->retrieveAct();
		$this->load->view('activity/index', $retrieveAct);
	}
	
	function payment(){
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
        $this->load->view('payment/index', $retrieveStd);
	}

	function addUser(){
		$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
		$this->load->view('forms/addUser', $retrieveFnc+$retrieveStd);
	}

	function addCrs(){
		$this->load->view('forms/addCrs');
	}
	function addStd(){
		$retrieveCrs['retrieveCrs']	= $this->Retrieve->retrieveCrs();
		$this->load->view('forms/addStd',$retrieveCrs);
	}
	function addActi(){
		$this->load->view('activity/addActi');
	}
	function addFnc(){
		$this->load->view('forms/addFnc');
	}

	function gestao(){
		$this->load->view('gestao/index');
	}

	function curso(){
		$this->load->view('activity/curso');
	}

}