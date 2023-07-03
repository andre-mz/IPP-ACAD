<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model{

//DB TABLES
    private $table_estudante   = 'table_estudante';
    private $table_estagio     = 'table_estagio';


    function retrieveEtg($id_estagio = null){
        $this->db->from($this->table_estagio);
        if($id_estagio != null){
            $this->db->where('id_estagio', $id_estagio);
        }
        $query = $this->db->get();
        return $query;
    }

    function addEtg($data){
        $this->db->insert($this->table_estagio, $data);
    }



}