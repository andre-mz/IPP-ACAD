<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexCont extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('url');
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
		$this->load->view('pages/news');
	}
	function sobre(){
		$this->load->view('pages/sobre');
	}
	
}
