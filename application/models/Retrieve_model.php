<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retrieve_model extends CI_Model{

    //TABLES
    private $table_estudante   = 'table_estudante';
    private $table_curso       = 'table_curso';
    private $table_funcionario = 'table_funcionario';

    //MANAGE STUDENTS
    function retrieveStd($id_estudante = null){
        $this->db->from($this->table_estudante);
        if($id_estudante != null){
            $this->db->where('id_estudante', $id_estudante);
        }
        $query = $this->db->get();
        return $query;
        /**
         * $query = $this->db->get($this->table_estudante);
            if($query->num_rows() > 0){
                return $query->result();
            }
            return NULL;
         */

    }function deleteStd($id_estudante){
        $this->db->where('id_estudante',$id_estudante);
        $this->db->delete($this->table_estudante);
        return true;

    }function viewStd($id_estudante){
        $query = $this->db->get_where($this->table_estudante, ['id_estudante'=> $id_estudante]);
        if($query->num_rows() > 0){
            return $query->row();
        }  
    }function updateStd($post){
        $params = [
            'fullname' 			 => $post['fullname'],
            'nome_pai ' 		 => $post['nome_pai'],
            'idade ' 			 => $post['idade'],
            'genero' 			 => $post['genero'],
            'nacionalidade ' 	 => $post['nacionalidade'],
            'naturalidade ' 	 => $post['naturalidade'],
            'tipo_documento' 	 => $post['tipo_documento'],
            'nr_documento' 	     => $post['nr_documento'],
            'curso' 			 => $post['curso'],
            'ano_frequentar'     => $post['ano_frequentar'],
            'turma' 	 		 => $post['turma'],
            'periodo'            => $post['periodo'],
            'contato_pessoal'    => $post['contato_pessoal'],
            'contato_emergencia' => $post['contato_emergencia'],
            'estado_estudante'   => $post['estado_estudante'],
            'morada' 			 => $post['morada'],
        ];
        $this->db->where('id_estudante', $post['id_estudante']);
        $this->db->update($this->table_estudante, $params);
    }function count_itens(){
        return $this->db->count_all($this->table_estudante);
    } 

    //RETRIEVE CURSOS
    function retrieveCrs($id_curso = null){
        $this->db->from($this->table_curso);
        if ($id_curso != null) {
            $this->db->where('id_curso', $id_curso);
        } 
        $query = $this->db->get();
        return $query;
    }


    //DOCENT
    function retrieveFnc($id_funcionario=null){
        $this->db->from($this->table_funcionario);
        if($id_funcionario != null){
            $this->db->where('id_funcionario', $id_funcionario);
        }
        $query = $this->db->get();
        return $query;

    }
          
    
}