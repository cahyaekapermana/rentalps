<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getBooking()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->limit(3);
		$this->db->join('auth', 'booking.id_auth = auth.id_auth');
		$this->db->join('packages_travel', 'booking.id_package = packages_travel.id_package');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query;
	}

	public function getAllBooking()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->join('auth', 'booking.id_auth = auth.id_auth');
		$this->db->join('packages_travel', 'booking.id_package = packages_travel.id_package');
		$query = $this->db->get();
		return $query;
	}

	public function getPackage()
	{
		$this->db->limit(3);
		return $this->db->get('packages_travel');
	}

	public function getAllPackage()
	{
		return $this->db->get('packages_travel');
	}

	public function getAuth()
	{
		$this->db->limit(3);
		$this->db->where('level !=', 2);
		return $this->db->get('auth');
	}

	public function getAllAuth()
	{
		$this->db->where('level !=', 2);
		return $this->db->get('auth');
	}

	public function sPackage()
	{
		$a = $this->input->post('keyword' );
		$this->db->like('name', $a);
		$this->db->or_like('price', $a);
		$this->db->or_like('days', $a);
		$this->db->or_like('decs', $a);
		return $this->db->get('packages_travel');

	}

	public function sAuth()
	{
		$a = $this->input->post('keyword' );

		$this->db->like('username', $a);
		$this->db->or_like('email', $a);
		$this->db->or_like('address', $a);
		$this->db->where('level != ', 2);
		return $this->db->get('auth');
	}

	public function sBooking()
	{
		$a = $this->input->post('keyword' );
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->join('auth', 'booking.id_auth = auth.id_auth');
		$this->db->join('packages_travel', 'booking.id_package = packages_travel.id_package');
		$this->db->like('packages_travel.name', $a);
		$this->db->or_like('packages_travel.price', $a);
		$this->db->or_like('auth.username', $a);
		$query = $this->db->get();
		return $query;
	}

	public function cAuth()
	{
		return $this->db->query("SELECT COUNT(id_auth) as a FROM auth");
	}

	public function sPrice()
	{
		return $this->db->query('SELECT SUM(packages_travel.price) as total, COUNT(booking.id_booking) as totalB FROM `booking`
			JOIN auth ON auth.id_auth = booking.id_auth
			JOIN packages_travel on packages_travel.id_package = booking.id_package');
	}

	public function cPackage()
	{
		return $this->db->query("SELECT COUNT(id_package) as total FROM packages_travel");
	}

	public function hapusData($col, $where, $tabel)
	{
		$this->db->where($col, $where);
		$this->db->delete($tabel);
	}

	public function getProfil($id)
	{
		$this->db->where('id_auth', $id);
		return $this->db->get('auth');
	}

	public function ubahData($tabel, $update, $where)
	{
		$this->db->update($tabel, $update, $where);
	}

	public function add($tabel,$object)
	{
		$this->db->insert($tabel, $object);
	}
}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */