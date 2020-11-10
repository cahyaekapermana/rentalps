<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_admin extends CI_Controller {
    
        public function index()
        {
            $this->load->view('template/admin/header');
            $this->load->view('admin/V_dashboard');
            $this->load->view('template/admin/footer');
        }
    
    }
    
    /* End of file C_admin.php */
    