<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property db $db
 */

class Form_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    private $table_estudante = 'table_estudante';
    private $table_curso     = 'table_curso';
    private $table_user      = 'table_user';
    private $table_activity  = 'table_activity';
    private $table_funcionario = 'table_funcionario';

    function add($data){
        $this->db->insert($this->table_estudante, $data);  
    }

    function addFnc($post){
     
        $this->db->insert($this->table_funcionario, $post);  
    }
    /**
    public function regist($post){

    	$params = [
			'user_name'		=>$post('user_name'),
            'apelido'		=>$post('apelido'),
            'nascimento'	=>$post('nascimento'),
            'naturalidade'	=>$post('naturalidade'),
            'nacionalidade'	=>$post('nacionalidade'),
            'distrito'		=>$post('distrito'),
            'ano'			=>$post('ano'),
            'curso'			=>$post('curso'),
            'user_level'	=>$post('user_email'),
            'user_password' =>$post('user_password'),
            'user_level'	=>$post('user_level'),
    	];
    	$this->db->isert('otherActivity',$params);
    }*/

    function addBook($post){
		$this->db->insert('table_books', $post);
		return TRUE;
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