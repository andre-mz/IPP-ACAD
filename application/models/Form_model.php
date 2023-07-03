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
        
        $params = [
            'local_nascimento'     =>$post('local_nascimento'),
            'nome_pai'             =>$post('nome_pai'),
            'nome_mae'             =>$post('nome_mae'),
            'nome_conjugue'        =>$post('nome_conjugue'),
            'nivel_academico'      =>$post('nivel_academico'),
            'local_emissao'        =>$post('local_emissao'),
            'salario'              =>$post('salario'),
            'estado_academico'     =>$post('estado_academico'),
            'contato_emergencia_2' =>$post('contato_emergencia_2'),
            'nome'                 =>$post('nome'),
            'idade'                =>$post('idade'),
            'genero'               =>$post('genero'),
            'nacionalidade'        =>$post('nacionalidade'),
            'naturalidade'         =>$post('naturalidade'),
            'morada'               =>$post('morada'),
            'tipo_documento'       =>$post('tipo_documento'),
            'nr_documento'         =>$post('nr_documento'),
            'estado_civil'         =>$post('estado_civil'),
            'ano_entrada'          =>$post('ano_entrada'),
            'contato_pessoal'      =>$post('contato_pessoal'),
            'contato_emergencia'   =>$post('contato_emergencia'),
            'departament'          =>$post('departament'),
            'cargo'                =>$post('cargo'),
            'local'                =>$post('local'),
            'categoria'            =>$post('categoria'),
            'cidade_atual'         =>$post('cidade_atual'),
            'nr_funcionario'       =>$post($nr_funcionario),
            'foto'                 =>$foto_fncName
            //'estado'             =>strip_tags($estado),
        ];
        $this->db->insert('table_funcionario', $params);  
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