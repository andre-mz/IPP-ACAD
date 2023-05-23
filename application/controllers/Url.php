<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session  $session
 * @property Retrieve $Retrieve
 * @property Input 	  $input
 * CONTROLLERS FOR URLS
 */
class Url extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/login');
        }	
	}


	function activities(){
		$company_name['company_name'] = 'IPP CHIMOIO';
		$this->load->view('manager/activities', $company_name);
	}
	
	function payment(){
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
        $this->load->view('payment/index', $retrieveStd);
	}

	function addUser(){
		$retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
		$this->load->view('manager/addUser', $retrieveFnc+$retrieveStd);
	}

}