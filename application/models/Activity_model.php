<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Activity_model extends CI_Model{

    private $table_activity = 'table_activity';


    function retrieveAct($id_activity=null){
        $this->db->from($this->table_activity);
        if($id_activity != null){
            $this->db->where('id_activity', $id_activity);
        }
        $query = $this->db->get();
        return $query;
    }

    function viewAct($id_activity){
        $query = $this->db->get_where($this->table_activity, ['id_activity'=> $id_activity]);
        if($query->num_rows() > 0){
            return $query->row();
        } 
    }
    function updateActi($data, $id_activity){
        return $this->db->update($this->table_activity, $data,['id_activity'=>$id_activity]);
    }

    function checkFile($id_activity){
        $query = $this->db->get_where($this->table_activity, ['id_activity' => $id_activity]);
        return $query->row();
    }

    function deleteActi($id_activity){
        return $this->db->delete($this->table_activity ,['id_activity'=>$id_activity]);
    }
}






