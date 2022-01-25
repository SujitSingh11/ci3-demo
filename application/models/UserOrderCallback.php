<?php defined('BASEPATH') or exit('No direct script access allowed');

class UserOrderCallback extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getOrderCallbackData($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get('userordercallback');
		return $query->result_array();
	}

	public function getRows()
	{
		$query = $this->db->get('userordercallback');
		return $query->num_rows();
	}
}
