<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('cetak_model');
		$a = $this->session->userdata('user_login');
		$lvl = $a['level'];
		if ($lvl != 1 and $lvl != 2) {
			redirect('login','refresh');
		}

	}

	public function index()
	{
		$data['booking'] = $this->admin_model->getBooking()->result();
		$data['auth'] = $this->admin_model->getAuth()->result();
		$data['package'] = $this->admin_model->getPackage()->result();
		$a = $this->session->userdata('user_login');
		$id = $a['id'];

		$data['us'] = $this->db->query("SELECT * FROM `auth` where id_auth = $id")->row();
		$data['c'] = $this->admin_model->cAuth()->row();
		$data['s'] = $this->admin_model->sPrice()->row();
		$data['t'] = $this->admin_model->sPrice()->row();
		$data['p'] = $this->admin_model->cPackage()->row();


		if ($this->input->post('keyword')) {
            $data['booking'] = $this->admin_model->sBooking()->result();
            $data['auth'] = $this->admin_model->sAuth()->result();
            $data['package'] = $this->admin_model->sPackage()->result();
        }

		$this->load->view('template/header-ad',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template/footer-ad');		
	}

	public function hapus($id)
	{
		$this->admin_model->hapusdata('id_booking',$id,'booking');

        $this->session->set_flashdata('flash-data', 'Data telah dihapus');
        redirect('Admin','refresh');
	}

	public function hapus_user($id)
	{
		$this->admin_model->hapusdata('id_auth',$id,'auth');

        $this->session->set_flashdata('flash-data', 'Data telah dihapus ');
        redirect('Admin','refresh');
	}

	public function hapus_package($id)
	{
		$this->admin_model->hapusdata('id_package',$id,'packages_rental');

        $this->session->set_flashdata('flash-data', 'Data telah dihapus ');
        redirect('Admin','refresh');
	}

	public function booking()
	{
		$data['booking'] = $this->admin_model->getAllBooking()->result();
		$a = $this->session->userdata('user_login');
		$id = $a['id'];
		$data['us'] = $this->db->query("SELECT * FROM `auth` where id_auth = $id")->row();
		if ($this->input->post('keyword')) {
            $data['booking'] = $this->admin_model->sBooking()->result();
        }

		$this->load->view('template/header-ad',$data);
		$this->load->view('admin/booking',$data);
		$this->load->view('template/footer-ad');
	}

	public function user()
	{
		$data['auth'] = $this->admin_model->getAllAuth()->result();
		$a = $this->session->userdata('user_login');
		$id = $a['id'];
		
		$data['us'] = $this->db->query("SELECT * FROM `auth` where id_auth = $id")->row();
		if ($this->input->post('keyword')) {
            $data['auth'] = $this->admin_model->sAuth()->result();
        }

		$this->load->view('template/header-ad',$data);
		$this->load->view('admin/user',$data);
		$this->load->view('template/footer-ad');
	}

	public function package()
	{
		$data['package'] = $this->admin_model->getAllPackage()->result();
		$a = $this->session->userdata('user_login');
		$id = $a['id'];

		$data['us'] = $this->db->query("SELECT * FROM `auth` where id_auth = $id")->row();
		if ($this->input->post('keyword')) {
            $data['package'] = $this->admin_model->sPackage()->result();
        }

		$this->load->view('template/header-ad',$data);
		$this->load->view('admin/package',$data);
		$this->load->view('template/footer-ad');
	}

	public function edit_package()
	{
		$dataUpdate = array(
	        'name' => $this->input->post('name',true),
	        'price' => $this->input->post('price',true),
	        'days' => $this->input->post('days',true),
	        'decs' => $this->input->post('decs',true),
        );
        $where = array('id_package' => $this->input->post('id'));
	    $this->admin_model->ubahData('packages_rental',$dataUpdate,$where);
	    $this->session->set_flashdata('flash-data', 'Data berhasil di update');
	    redirect('Admin/package','refresh');
	}

	public function edit_auth()
	{
		$dataUpdate = array(
	        'username' => $this->input->post('username',true),
	        'email' => $this->input->post('email',true),
	        'address' => $this->input->post('address',true),
	        'about_me' => $this->input->post('about_me',true),
	        'level' => $this->input->post('level',true),
        );
        $where = array('id_auth' => $this->input->post('id'));
	    $this->admin_model->ubahData('auth',$dataUpdate,$where);
	    $this->session->set_flashdata('flash-data', 'Data berhasil di update');
	    redirect('Admin/user','refresh');
	}

	public function tambahP()
	{
		$a = $this->session->userdata('user_login');
		$id = $a['id'];

		$data['us'] = $this->db->query("SELECT * FROM `auth` where id_auth = $id")->row();

		$this->load->view('template/header-ad', $data);
		$this->load->view('admin/tambah');
		$this->load->view('template/footer-ad');
	}

	public function package_tambah()
	{
		$ins = array(
			'name' => $this->input->post('nama'),
			'price' => $this->input->post('days'),
			'days' => $this->input->post('price'),
			'decs' => $this->input->post('Decs'),
		);

		$this->admin_model->add('packages_rental',$ins);
		$this->session->set_flashdata('flash-data', 'Data baru telah ditambakan');
		redirect('Admin/package','refresh');
	}

	public function formUser()
	{
		$a = $this->session->userdata('user_login');
		$id = $a['id'];

		$data['us'] = $this->db->query("SELECT * FROM `auth` where id_auth = $id")->row();

		$this->load->view('template/header-ad', $data);
		$this->load->view('admin/add_acc');
		$this->load->view('template/footer-ad');
	}

	public function add_account()
	{
		$ins = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass'),z
			'address' => $this->input->post('address'),
			'about_me' => $this->input->post('about'),
			'level' => $this->input->post('level'),
		);
		$this->admin_model->add('auth',$ins);
		$this->session->set_flashdata('flash-data', 'Akun baru berhasil dibuat');
		redirect('Admin/user','refresh');
	}
	public function laporan_pdf(){
		$this->load->library('pdf');
		
		$data['booking'] = $this->cetak_model->view();

		$this->pdf->setPaper('A4', 'portrait');
		$this->pdf->filename="laporan-booking.pdf";
		$this->pdf->load_view('admin/laporan',$data);
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */