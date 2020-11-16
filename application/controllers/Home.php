<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('home_model');
	}
	public function index()
	{
		$data['userdata'] = $this->session->userdata('user_login');
		$data['package'] = $this->home_model->getPcg()->result();
		$this->load->view('template/header',$data);
		$this->load->view('user/index',$data);
		$this->load->view('template/footer');
	}

	public function beli($id)
	{

		$userdata = $this->session->userdata('user_login');
		$auth = $userdata['id'];

		if ($userdata == null) {
			redirect('login','refresh');
		}else if ($userdata['level'] != 0) {
			redirect('login','refresh');
		}
		$ins = array(
			'id_auth' => $auth,
			'id_package' => $id,
		);
		$a = $this->home_model->booking($ins);
		$this->session->set_flashdata('flash-data', 'Terima Kasih Atas Transaksinya :)');
		redirect('Home','refresh');

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */