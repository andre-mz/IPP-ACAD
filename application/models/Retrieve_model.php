<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retrieve_model extends CI_Model{

    //DB TABLES
    private $table_estudante   = 'table_estudante';
    private $table_curso       = 'table_curso';
    private $table_funcionario = 'table_funcionario';
    private $table_user        = 'table_user';

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
    }

    //MANAGE CURSOS
    function retrieveCrs($id_curso = null){
        $this->db->from($this->table_curso);
        if ($id_curso != null) {
            $this->db->where('id_curso', $id_curso);
        } 
        $query = $this->db->get();
        return $query;
    }


    //MANAGE DOCENT
    function retrieveFnc($id_funcionario=null){
        $this->db->from($this->table_funcionario);
        if($id_funcionario != null){
            $this->db->where('id_funcionario', $id_funcionario);
        }
        $query = $this->db->get();
        return $query;

    }
          

    //MANGE USER
    function retrieveUsr($id_user =null){
        $this->db->from($this->table_user);
        if($id_user != null){
            $this->db->where('id_user', $id_user);
        }
        return $this->db->get();
    }

    
    //COUNTS
    function count_iten(){
        return $this->db->count_all($this->table_estudante);
    } 

    function count_user(){
        return $this->db->count_all($this->table_user);
    }

    function count_func(){
        return $this->db->count_all($this->table_funcionario);
    }

    function count_doc(){
        return  $this->db->where(['cargo'=>'Docente'])->from($this->table_funcionario)->count_all_results();
    }
    function count_agent(){
        return  $this->db->where(['departament'=>'Agente de servico'])->from($this->table_funcionario)->count_all_results();
    }
    
}