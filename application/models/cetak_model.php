<?php

class cetak_model extends CI_Model{

    public function view(){
        $this->db->select('is_booking,id_auth,id_package');
        return $this->db->get('booking')->result();
    }
}