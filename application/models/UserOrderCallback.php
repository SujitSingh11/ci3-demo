<?php defined('BASEPATH') or exit('No direct script access allowed');

class UserOrderCallback extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getSource()
	{
	}

	public function getStatus()
	{
	}

	public function getOrderCallbackData($limit, $start, $request)
	{
		$this->db->limit($limit, $start);
		$this->db->select("*");
		$this->db->from('userordercallback');

		if (isset($request['startdate']) && $request['startdate'] != '') {
			$this->db->where('created >=', $request['startdate']);
		}
		if (isset($request['enddate']) && $request['enddate'] != '') {
			$this->db->where('created <=', $request['enddate']);
		}
		if (isset($request['status']) && $request['status'] != '') {
			$this->db->where('status', $request['status']);
		}
		if (isset($request['phone']) && $request['phone'] != '') {
			$this->db->where('phone', $request['phone']);
		}
		if (isset($request['email']) && $request['email'] != '') {
			$this->db->where('email', $request['email']);
		}
		if (isset($request['source']) && $request['source'] != '') {
			$this->db->where('source', $request['source']);
		}

		$query = $this->db->get();
		return $query->result_array();
	}

	public function getRows($request)
	{
		$this->db->select("*");
		$this->db->from('userordercallback');

		if (isset($request['startdate']) && $request['startdate'] != '') {
			$this->db->where('created >=', $request['startdate']);
		}
		if (isset($request['enddate']) && $request['enddate'] != '') {
			$this->db->where('created <=', $request['enddate']);
		}
		if (isset($request['status']) && $request['status'] != '') {
			$this->db->where('status', $request['status']);
		}
		if (isset($request['phone']) && $request['phone'] != '') {
			$this->db->where('phone', $request['phone']);
		}
		if (isset($request['email']) && $request['email'] != '') {
			$this->db->where('email', $request['email']);
		}
		if (isset($request['source']) && $request['source'] != '') {
			$this->db->where('source', $request['source']);
		}

		$query = $this->db->get();
		return $query->num_rows();
	}
}
