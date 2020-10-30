<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_user extends CI_Model {
        

        public function m_aksi_login ($c_username, $c_password)
        {
            $this->db->where('username',  $c_username);
            $this->db->where('password', $c_password);

            $result = $this->db->get('tb_user');
            return $result;
        }

        public function M_register()
        {
            $data = array(

                'username'      =>  $this->input->post('f_username'),
                'password'      =>  $this->input->post('f_password'),
                'email'         =>  $this->input->post('f_email'),
                'nama_lengkap'  =>  $this->input->post('f_naleng'),
                'alamat'        =>  $this->input->post('f_alamat'),
                'no_telp'       =>  $this->input->post('f_notelp'),
                'level'         =>  'User'
            );

            $this->db->insert('tb_user', $data);
        }
    }
    
    /* End of file M_user.php */
    