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

class Payment extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/login');
        }	
	}









}