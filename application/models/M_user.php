<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_user extends CI_Model {
    
        public function m_aksi_login ($c_username, $c_password)
        {
            $this->db->where('username',  $c_username);
            $this->db->where('password', $c_password);

            $result = $this->db->get('user');
            return $result;
        }
    
    }
    
    /* End of file M_user.php */
    