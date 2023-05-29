<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property Auth_model $Authentic
 * @property Session $session
 * @property Input $input
 */

class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
    }



    function logUser(){
        $company_name['company_name'] = 'IPP CHIMOIO';
        $loginid  = htmlspecialchars($this->input->post('loginid'));
        $userPass = htmlspecialchars(sha1($this->input->post('userPass')));
        $validate = $this->Authentic->validate($loginid, $userPass);

        if ($validate->num_rows() > 0) {
            $data     = $validate->row_array();
            $loginid  = $data['loginid'];
            $name     = $data['name'];
            $level    = $data['level'];
            $estado   = $data['estado'];

            $sessionData =array(
                'loginId'  => $loginid,
                'name'     => $name,
                'level'    => $level,
                'estado'   => $estado,
                'loggedIn' => TRUE,
            );
            $this->session->set_userdata($sessionData);
            redirect('Dashboard',$company_name);
            
        } else {
            //echo $this->session->set_flashdata('msg', 'Usuário ou senha errado');
			//redirect('IndexCont/login',$company_name);
            echo "<script>alert('Usuário ou Senha inválida');</script>";
			echo "<script>window.location='".site_url('IndexCont/login')."';</script>";
        }   
    }

    function logoutUser(){
        $params = array('loginid', 'id', 'level');
        $this->session->sess_destroy($params);
		redirect(base_url().'IndexCont/login');
    }
    
}