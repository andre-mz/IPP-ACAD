<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function validate($loginId, $userPass){
        $this->db->where('loginid',  $loginId);
        $this->db->where('password', $userPass);
        $result = $this->db->get('table_user', 1);
        return $result;
    }

}