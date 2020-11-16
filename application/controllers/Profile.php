<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index($id)
	{
		$data['profil'] = $this->admin_model->getProfil($id)->row();
		$a = $this->session->userdata('user_login');
		$id = $a['id'];
		
		$data['us'] = $this->db->query("SELECT * FROM `auth` where id_auth = $id")->row();

		$this->load->view('template/header-ad',$data);
		$this->load->view('admin/profil',$data);
		$this->load->view('template/footer-ad');		
	}

	public function Update()
	{
		$pas = $this->input->post('pass',true);
		$pass = ($pas);
		$dataUpdate = array(
	        'username' => $this->input->post('username',true),
	        'email' => $this->input->post('email',true),
	        'password' => $pass,
	        'address' => $this->input->post('address',true),
	        'about_me' => $this->input->post('about',true),
	        'level' => $this->input->post('level',true),
        );
       
		$where = array('id_auth' => $this->input->post('id'));
		$this->admin_model->ubahData('auth',$dataUpdate,$where);
	    $this->session->set_flashdata('flash-data', 'Profile anda berhasil diUpdate');
	    redirect('Admin','refresh');
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */