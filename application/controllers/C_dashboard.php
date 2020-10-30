<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

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
		$this->load->view('v_home/V_dashboard_user');
	}
	
	public function page_tentang()
	{
		$this->load->view('v_home/V_tentang');
	}

	public function page_paketgame()
	{
		$this->load->view('v_home/V_paketgame');
	}

	public function page_testimonal()
	{
		$this->load->view('v_home/V_testimonal');
	}
}
