<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Form_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    private $table_estudante = 'table_estudante';
    private $table_curso     = 'table_curso';
    private $table_user      = 'table_user';
    private $table_activity  = 'table_activity';

    function add($data){
        $this->db->insert($this->table_estudante, $data);  
    }

    function addCurso($data){
        $this->db->insert($this->table_curso, $data);
    }

    function addUser($data){
        $this->db->insert($this->table_user, $data);
    }

    function addActivity($data){
        $this->db->insert($this->table_activity, $data);
    }

}