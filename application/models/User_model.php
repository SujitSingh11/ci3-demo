<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getUsersByParam($slug, $param = "user.id")
	{
		$this->db->select('user.id, user.fname, user.lname, user.email, user.phone, user.os, user.appversion, userinformation.yob, userinformation.gender, userinformation.height,userinformation.weight, userinformation.bmi, userinformation.bmr');
		$this->db->from('user');
		$this->db->join('userinformation', 'user.id = userinformation.userid', 'left');
		$this->db->where($param, $slug);
		$query = $this->db->get();
		return $query->result_array();
	}

	// public function getUsersByOrderId($order_id)
	// {
	// 	$this->db->select('userid');
	// 	$this->db->from('btl_user_order');
	// 	$this->db->where('order_id', $order_id);
	// 	$query = $this->db->get();
	// 	if ($query->num_rows() > 0) {
	// 		$row = $query->row();
	// 		$user_id = $row->userid;
	// 		return $this->getUsersByParam($user_id);
	// 	} else {
	// 		throw new Exception("Order does not exist");
	// 	}
	// }

	// public function getCount($query)
	// {
	// 	return $query->num_rows();
	// }
}
