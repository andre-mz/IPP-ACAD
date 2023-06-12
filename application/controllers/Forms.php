<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property form_validation $form_validation
 * @property Session $session
 * @property form_model $Form_model
 * @property input $input
 * @property database $db
 * @property Retrieve $Retrieve
 * @property Upload $upload
 */

class Forms extends CI_Controller{


    function __construct(){
        parent::__construct();
        if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/login');
        }
    }


    //ADD 
    function add(){
        $bytes        = random_bytes(3);
        $normal_num   = bin2hex($bytes);
        $number       = hexdec($normal_num) % 1000000;
        $nr_estudante = date('Y'.$number);
        static $estado_estudante = 1;

        $this->form_validation->set_rules('fullname', 'Nome completo', 'trim|required',
            array(
                'required'  => 'O %s nao deve estar vazio',
            )
        );
        $this->form_validation->set_rules('genero', 'Genero', 'trim|required',
            array(
                'required'  => 'Selecione o %s',
            )
        );
        $this->form_validation->set_rules('nome_pai', 'Nome do encarregado', 'trim|required',
            array('required' => '%s nao deve estar vazio')
        );
        $this->form_validation->set_rules('idade', 'data de nascimento','trim|required',
            array('required' =>'%s nao deve estar vazio')
        );
        $this->form_validation->set_rules('nacionalidade', 'Nacionalidade', 'trim|required',
            array('required' =>'%s nao deve estar vazio')
        );
        $this->form_validation->set_rules('naturalidade', 'Naturalidade', 'trim|required',
            array('required' =>'O campo %s nao deve estar vazio')
        );
        $this->form_validation->set_rules('morada', 'Morada', 'trim|required',
            array('required' =>'O campo %s nao deve estar vazio')
        );
        $this->form_validation->set_rules('tipo_documento', 'documento', 'trim|required',
            array('required' =>'O campo %s nao deve estar vazio')
        );
        $this->form_validation->set_rules('nr_documento', 'numero de documento', 'trim|required|is_unique[table_estudante.nr_documento]',
            array(
                'is_unique' => 'O %s ja esta cadastrado no sistema',
                'required'  => 'O  %s nao deve estar vazio'
            ),
        );
        $this->form_validation->set_rules('curso', 'Curso', 'trim|required',
            array('required' =>'O campo %s nao deve estar vazio')
        );
        $this->form_validation->set_rules('ano_frequentar','ano', 'trim|required|max_length[1]|is_numeric',
            array(
                'is_numeric' => '%s deve conter somente caracter numerico',
                'max_length' => '%s deve conter 1 caracter numerico',
                'required'   => '%s nao deve estar vazio')
        );
        $this->form_validation->set_rules('contato_pessoal', 'Contacto pessoal', 'trim|required|is_numeric|max_length[9]|min_length[9]',
            array(
                'max_length' => '%s deve conter somente 9 caracteres numericos',
                'min_length' => '%s deve conter somente 9 caracteres numericos',
                'is_numeric' => '%s deve conter somente caracter numerico',
                'required'   => '%s nao deve estar vazio'
            )
        );
        $this->form_validation->set_rules('contato_emergencia', 'Contacto de emergencia', 'trim|required|is_numeric|max_length[9]|min_length[9]',
            array(
                'max_length' => '%s deve conter somente 9 caracteres numericos',
                'min_length' => '%s deve conter somente 9 caracteres numericos',
                'is_numeric' => '%s deve conter somente caracter numerico',
                'required'   => '%s nao deve estar vazio'
            )
        );
        $this->form_validation->set_rules('periodo', 'Periodo', 'trim|required',
            array(
                'required'   => 'O campo %s nao deve estar vazio'
            )
        );
        $this->form_validation->set_rules('turma', 'turma', 'trim|required',
            array(
                //'is_numeric' => 'O campo %s deve conter 1 caracter numerico',
                'required'   => 'O campo nao deve estar vazio'
            )
        );

        if($this->form_validation->run()){
            $data = [
                'fullname'           =>strip_tags($this->input->post('fullname')),
                'nome_pai'           =>strip_tags($this->input->post('nome_pai')),
                'idade'              =>strip_tags($this->input->post('idade')),
                'genero'             =>strip_tags($this->input->post('genero')),
                'nacionalidade'      =>strip_tags($this->input->post('nacionalidade')),
                'naturalidade'       =>strip_tags($this->input->post('naturalidade')),
                'morada'             =>strip_tags($this->input->post('morada')),
                'tipo_documento'     =>strip_tags($this->input->post('tipo_documento')),
                'nr_documento'       =>strip_tags($this->input->post('nr_documento')),
                'curso'              =>strip_tags($this->input->post('curso')),
                'ano_frequentar'     =>strip_tags($this->input->post('ano_frequentar')),
                'contato_pessoal'    =>strip_tags($this->input->post('contato_pessoal')),
                'contato_emergencia' =>strip_tags($this->input->post('contato_emergencia')),
                'turma'              =>strip_tags($this->input->post('turma')),
                'periodo'            =>strip_tags($this->input->post('periodo')),
                'nr_estudante'       =>strip_tags($nr_estudante),
                'estado_estudante'   =>strip_tags($estado_estudante),
            ];
            $this->Form_model->add($data);
            echo "<script>alert('DADOS AADICIONADO COM SUCESSO');</script>";
			echo "<script>window.location='".site_url('Manager/tabStd')."';</script>";
        }else{
            //$erros = array('mensagens' => validation_errors());
            $this->load->view('manager/addStd');
        }
         
    }

    function addCurso(){
		$this->form_validation->set_rules('nome_curso', 'Nome do curso', 'trim|required',
            array(
                'requirede' => 'O campo %s nao pode ficar vazio',
                //'is_unique' => 'O curso ja existe no sistema'
            )
        );
        $this->form_validation->set_rules('duracao', 'Duracao do curso', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );
        $this->form_validation->set_rules('disponibilidade', 'disponibilidade', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );
        $this->form_validation->set_rules('taxa_mensal', 'taxa mensal', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio'
            )
        );

        if($this->form_validation->run()){
            $data = array(
                'nome_curso'      => strip_tags($this->input->post('nome_curso')),
                'duracao'         => strip_tags($this->input->post('duracao')),
                'disponibilidade' => strip_tags($this->input->post('disponibilidade')),
                'taxa_mensal'     => strip_tags($this->input->post('taxa_mensal')),
            );
            $this->Form_model->addCurso($data);
            echo "<script>alert('ADICIONADO COM SUCESSO');</script>";
			echo "<script>window.location='".site_url('Manager/tabCrs')."';</script>";
        }else{
            echo "<script>alert('Algo deu errado');</script>";
			echo "<script>window.location='".site_url('Url/addCrs')."';</script>";
	    }


    }

    function addUser(){
        $retrieveFnc['retrieveFnc'] = $this->Retrieve->retrieveFnc();
		$retrieveStd['retrieveStd'] = $this->Retrieve->retrieveStd();
        $bytes         = random_bytes(3);
        $normal_num    = bin2hex($bytes);
        $number        = hexdec($normal_num) % 1000000;
        $loginid       = date('Y'.$number);


        $this->form_validation->set_rules('name', 'Nome do usuario', 'trim|required|is_unique[table_user.name]',
            array(
                array(
                    'requirede' => 'O campo %s nao pode ficar vazio',
                    'is_unique' => 'O %s ja existe no sistema'
                )
            )
        );
        $this->form_validation->set_rules('level', 'Nivel de acesso', 'trim|required',
            array(
                array(
                    'requirede' => 'O campo %s nao pode ficar vazio'
                )
            )
        );
        $this->form_validation->set_rules('estado', 'Estado da conta', 'trim|required',
            array(
                array(
                    'requirede' => 'O campo %s nao pode ficar vazio'
                )
            )
        );

        if($this->form_validation->run()){
            $data = array (
                'name'    => strip_tags($this->input->post('name')),
                'level'   => strip_tags($this->input->post('level')),
                'estado'  => strip_tags($this->input->post('estado')),
                'loginid' => $loginid
            );

            $this->Form_model->addUser($data);
            echo "<script>alert('DADOS AADICIONADO COM SUCESSO');</script>";
			echo "<script>window.location='".site_url('Manager/tabUsr')."';</script>";
        }else{
            $erros = array('mensagens' => validation_errors());
            $this->load->view('manager/addUser', $erros+$retrieveFnc+$retrieveStd);
        }
    }

    function addActivity(){
        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio',
                //'is_unique' => 'O %s ja esta em uso no sistema',
            )
        );
        $this->form_validation->set_rules('content', 'Conteudo', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio',
            )
        );
        $this->form_validation->set_rules('categoria', 'trim');
        $this->form_validation->set_rules('data_acont', 'trim');
        $this->form_validation->set_rules('mes_acont', 'trim');
        $this->form_validation->set_rules('ano_acont', 'trim');
        $this->form_validation->set_rules('local_acont', 'trim');

        if ($this->form_validation->run()) {

            $orig_filename = $_FILES['activ_image']['name'];
            $new_name      = time()."".str_replace(' ','-',$orig_filename);
            $config = [
                'upload_path'   => './upload/',
                'allowed_types' => 'gif|jpg|png|jpeg|web',
                'file_name'     => $new_name
            ];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('activ_image')){
                
                $imageError = array('imageError' => $this->upload->display_errors());
                $this->load->view('activity/addActi', $imageError);
            }
            else{
                $acti_name= $this->upload->data('file_name');
                $data = [
                    'titulo'      => $this->input->post('titulo'),
                    'content'     => $this->input->post('content'),
                    'data_acont'  => $this->input->post('data_acont'),
                    'mes_acont'   => $this->input->post('mes_acont'),
                    'ano_acont'   => $this->input->post('ano_acont'),
                    'local_acont' => $this->input->post('local_acont'),
                    'categoria'   => $this->input->post('categoria'),
                    'activ_image' => $acti_name,
                ];

                $this->Form_model->addActivity($data);
                echo "<script>alert('DADOS AADICIONADO COM SUCESSO');</script>";
			    echo "<script>window.location='".site_url('Url/addActi')."';</script>";
                //redirect(base_url('addActi'));
            }
        }
        
    }
}


