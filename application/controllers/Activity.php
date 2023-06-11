<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session $session
 * @property Activity $Activity
 * @property form_validation $form_validation
 * @property input $input
 * @property upload $upload
 * @property Form_model $Form_model
 * 
 */
class Activity extends CI_Controller{


    function __construct(){
        parent::__construct();
        if($this->session->userdata('loggedIn') !== TRUE){
            redirect('IndexCont/login');
        }
    }


    function editAct($id_activity){
        $activity = new Activity_model();
        $retrieveAct['retrieveAct'] = $activity->viewAct($id_activity);
        $this->load->view('activity/viewAct', $retrieveAct);
    }

    function updateActivity($id_activity){
        $this->form_validation->set_rules('titulo', 'Titulo', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio',
                //'is_unique' => 'O %s ja esta em uso no sistema',
            )
        );

        $this->form_validation->set_rules('content', 'Conteudo', 'trim|required',
            array(
                'required' => 'O campo %s nao pode ficar vazio',
                //'is_unique' => 'O %s ja esta em uso no sistema',
            )
        );

        if ($this->form_validation->run()) {
            $old_filename = $this->input->post('old_activ_image');
            $new_filename = $_FILES['activ_image']['name'];

            if($new_filename == TRUE){
                $update_filename= time()."-".str_replace(' ', '-', $_FILES['activ_image']['name']);
                $config = [
                    'upload_path'   => './upload/',
                    'allowed_types' => 'gif|jpg|png|jpeg|web',
                    'file_name'     => $update_filename
                ];
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('activ_image')){            
                    if(file_exists("./upload/".$old_filename)){
                        unlink('./upload/'.$old_filename);
                    }
                }
            }else{
                $update_filename = $old_filename;
            }
            $data = [
                'titulo'       => $this->input->post('titulo'),
                'content'      => $this->input->post('content'),
                'activ_image'  => $update_filename,
            ];

            $Activity = new Activity_model();
            $Activity->updateActi($data, $id_activity);
            $this->session->set_flashdata('status', 'Actualizado');
            redirect(base_url('Activity/editAct/'.$id_activity));
            //echo "<script>window.location='".site_url('Activity/editActi/'.$id_activity)."';</script>";
        }else{
            return $this->editAct($id_activity);
        }
    }


    public function deleteActi($id_activity){
        $activity =  new Activity_model();
        if($activity->checkFile($id_activity)){
            $data = $activity->checkFile($id_activity);
            if(file_exists('./upload/'.$data->activ_image)){
                unlink('./upload/'.$data->activ_image);
            }
            $activity->deleteActi($id_activity);
            echo "<script>alert('ELIMINADO');</script>";
			echo "<script>window.location='".site_url('Url/activity')."';</script>";
        }
    }




}