<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retrieve_model extends CI_Model{

    //DB TABLES
    private $table_estudante   = 'table_estudante';
    private $table_curso       = 'table_curso';
    private $table_funcionario = 'table_funcionario';
    private $table_user        = 'table_user';
    private $table_payment     = 'table_payment';

    //MANAGE STUDENTS
    function retrieveStd($id_estudante = null){
        $this->db->from($this->table_estudante);
        if($id_estudante != null){
            $this->db->where('id_estudante', $id_estudante);
        }
        $query = $this->db->get();
        return $query;
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

    //MANGE USER
    function retrieveUsr($id_user =null){
        $this->db->from($this->table_user);
        if($id_user != null){
            $this->db->where('id_user', $id_user);
        }
        return $this->db->get();
    }function deleteUsr($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete($this->table_user);
        return true;
    }function viewUsr($id_user){
        $query = $this->db->get_where($this->table_user, ['id_user'=>$id_user]);
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }function updateUsr($post){
        $params = [
            'name'   =>$post['name'],
            'level'  =>$post['level'],
            'estado' =>$post['estado']
        ];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update($this->table_user, $params);
    }

    //MANAGE FUNC
    function retrieveFnc($id_funcionario=null){
        $this->db->from($this->table_funcionario);
        if($id_funcionario != null){
            $this->db->where('id_funcionario', $id_funcionario);
        }
        $query = $this->db->get();
        return $query;

    }
    function deleteFnc($id_funcionario){
        return $this->db->delete($this->table_funcionario ,['id_funcionario'=>$id_funcionario]);
    }


    function viewFnc($id_funcionario){
        $query = $this->db->get_where($this->table_funcionario, ['id_funcionario'=>$id_funcionario]);
        if($query->num_rows() > 0){
            return $query->row();
        }
    }function updateFnc($post,$id_funcionario){
        //$this->db->where('id_funcionario', $post['id_funcionario']);
        return $this->db->update($this->table_funcionario, $post,['id_funcionario'=>$id_funcionario]);
      
    }
    function checkFileFuncionario($id_funcionario){
        $query = $this->db->get_where($this->table_funcionario, ['id_funcionario' => $id_funcionario]);
        return $query->row();
    }


    //MANAGE CURSOS
    function retrieveCrs($id_curso = null){
        $this->db->from($this->table_curso);
        if ($id_curso != null) {
            $this->db->where('id_curso', $id_curso);
        } 
        $query = $this->db->get();
        return $query;
    }function deleteCrs($id_curso){
        $this->db->where('id_curso', $id_curso);
        $this->db->delete($this->table_curso);
        return true;
    }function viewCrs($id_curso){
        $query =  $this->db->get_where($this->table_curso, ['id_curso' => $id_curso]);
        if($query->num_rows() > 0){
            return $query->row();
        }
    }function updateCrs($post){
        $params =[
            'nome_curso' => $post['nome_curso'],
            'duracao'    => $post['duracao'],
            'disponibilidade' => $post['disponibilidade'],
            'taxa_mensal'     => $post['taxa_mensal']
        ];
        $this->db->where('id_curso', $post['id_curso']);
        $this->db->update($this->table_curso, $params);
    }


       

    

    
    //COUNTS
    function count_iten(){
        if($this->db->table_exists($this->table_estudante)){
            return $this->db->count_all($this->table_estudante);
        }else{
            $this->db->query(
                "CREATE TABLE IF NOT EXISTS `sig-acad`.`table_estudante`(
                    `id_estudante`       INT(11) NOT NULL AUTO_INCREMENT,
                    `nome`               VARCHAR(50) NOT NULL , 
                    `nr_estudante`       VARCHAR(12) NOT NULL ,
                    `fullname`           VARCHAR(50) NOT NULL , 
                    `nome_pai`           VARCHAR(50) NOT NULL , 
                    `idade`              VARCHAR(10) NOT NULL , 
                    `genero`             VARCHAR(50) NOT NULL ,
                    `nacionalidade`      VARCHAR(50) NOT NULL ,
                    `naturalidade`       VARCHAR(50) NOT NULL , 
                    `tipo_documento`     VARCHAR(30) NOT NULL ,
                    `nr_documento`       VARCHAR(10) NOT NULL ,
                    `curso`              VARCHAR(50) NOT NULL ,
                    `ano_frequentar`     VARCHAR(10) NOT NULL ,
                    `turma`              VARCHAR(20) NOT NULL ,
                    `periodo`            VARCHAR(15) NOT NULL ,
                    `contato_pessoal`    VARCHAR(10) NOT NULL ,
                    `contato_emergencia` VARCHAR(10) NOT NULL ,
                    `estado_estudante`   VARCHAR(10) NOT NULL ,
                    `morada`             VARCHAR(30) NOT NULL ,
                    `data_adicionado`    DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id_estudante`)) ENGINE = InnoDB;
                "
            );
        }
        
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
