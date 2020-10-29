<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('user/v_login.php');
	}

	public function load_register()
	{
		$this->load->view('user/v_register');
	}

	// Login Sistem
	public function c_aksi_login()
	{
		$c_username = $this->input->post('f_username', TRUE);
		$c_password = md5($this->input->post('f_password', TRUE));
		// Load Model
		$cek = $this->M_user->M_aksi_login($c_username, $c_password);
		
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
			// set userdata
			$this->session->set_userdata($sesdata);
			
			// SESI LOGIN
			
			//Sesi login user pengguna atau admin
			if ($level == "User") {

				redirect('c_dashboard');
			
			} 
		
		// Jika Gagal Login
		} else {
			redirect('c_user');
		}
			
	}

}	


