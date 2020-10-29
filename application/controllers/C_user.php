<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	// Load model lewat construct
	public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_user');
    }

	public function index()
	{
		$this->load->view('user/V_login.php');
	}

	public function load_register()
	{
		$this->load->view('user/V_register');
	}

	// Login Sistem
	public function c_aksi_login()
	{
		$c_username = $this->input->post('f_username', TRUE);
		$c_password = $this->input->post('f_password', TRUE);
		// Load Model
		$cek = $this->M_user->m_aksi_login($c_username, $c_password);
		
		// Cek Session dan Isi table
		if ($cek->num_rows() > 0) {
			//cek isi kolom table
			$data = $cek->row_array();
			// Inisialisasi variable
			// variable nama kolom di table
			$name  = $data['username'];
			$level = $data['level'];

			// session
			$sesdata = array(
				's_username'	=> $name,
				's_level'		=> $level,
				'logged_in'		=> TRUE
			);
			// set session
			$this->session->set_userdata($sesdata);
			
			// SESI LOGIN USER ATAU ADMIN
			
			//Sesi login user pengguna atau admin
			if ($level == "User") {

				redirect('C_dashboard');
			
			} 

			// print_r ($data);
		
		// Jika Gagal Login
		} else {

			echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
            Username atau password salah!
            </div>');
			redirect('C_user');
		}
			
	}

}	


