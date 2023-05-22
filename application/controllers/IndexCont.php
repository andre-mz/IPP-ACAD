<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexCont extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function erro(){
		$company_name['company_name'] = 'IPP CHIMOIO';
		$this->load->view('errors/erro',$company_name);
	}
	public function index(){
		$company_name['company_name'] = 'IPP CHIMOIO';
		$this->load->view('index',$company_name);
	}
	public function login(){
		$company_name['company_name'] = 'IPP CHIMOIO';
		$this->load->view('login', $company_name);
	}

}
