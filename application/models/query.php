<?php
class query extends CI_Model{
    public function getPost(){
        $qy = $this->db->get('video');
        if ($qy->num_rows()>0){
            return $qy->result();
        }
    }

    public function addPost($data){
        return $this->db->insert('video', $data);
    }
}