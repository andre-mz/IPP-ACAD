
<?php

class Search_model extends CI_Model{

    private $table_estudante = 'table_estudante';

    function __construct(){
        parent::__construct();
    }




    function SearchStd($searchStd){
        $this->db->like('fullname', $searchStd);
        $this->db->or_like('nr_estudante', $searchStd);
        $query = $this->db->get($this->table_estudante);
        return $query->result();
    }
}