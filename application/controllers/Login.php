<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		$a = $this->session->userdata('user_login');
		if ($a != null) {
			if ($a['level'] == 1 or $a['level'] == 2) {
				redirect('Admin','refresh');
			}else if ($a['level'] == 0) {
				redirect('Home','refresh');
			}
		}else{
			$data['main'] = ('login/login');
			$this->load->view('login/index', $data);
		}
	}

	public function Regis()
	{
		$data['main'] = ('login/register');
		$this->load->view('login/index', $data);	
	}

	public function proses_regis()
	{
		$email=$this->input->post('email');
		$user=$this->input->post('username');
		$pass=$this->input->post('pass');

		$check = $this->auth_model->checkemail($email);
		if ($email != $check->row()->email) {
			
			$insert = array(
				'email' => $email,
				'username' => $user,
				'password' => ($pass),
			);

			$exc = $this->auth_model->regis($insert);

			if ($exc >= 1) {
				$this->session->set_flashdata('flash-data', 'Berhasil daftar');
				redirect('Login');
			} else {
				$this->session->set_flashdata('flash-data', 'Maaf Anda Kurang Beruntung, Please Try Again');
				redirect('Login/regis');
			}

		} else {
			$this->session->set_flashdata('flash-data', 'Email telah digunakan');
			redirect('Login/regis');
		}
	}

	public function Check()
	{
		
		$user 		= $this->input->post('username');
		$pass 		= $this->input->post('pass');
		$password  	= ($pass);
		$check 		= $this->auth_model->login($user, $password);

		if ($check->row() != null) {

			$userdata = array('username' => $check->row()->username, 'id' => $check->row()->id_auth, 'level' => $check->row()->level) ;
			$this->session->set_userdata('user_login', $userdata);
			$datauser = $this->session->userdata('user_login');
			
			if ($datauser['level'] == 0) {
				redirect('Home','refresh');
			}elseif ($datauser['level'] == 1) {
				redirect('Admin','refresh');
			}elseif ($datauser['level'] == 2) {
				redirect('Admin','refresh');
			}


		}else{
			$this->session->set_flashdata('flash-data', 'Username atau password salah');
			redirect('Login');
		}
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */