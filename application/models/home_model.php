<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function getPcg()
	{
		return $this->db->get('packages_rental', 6);
	}

	public function booking($ins)
	{
		$this->db->insert('booking', $ins);
	}
}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */