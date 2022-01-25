<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userorder extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('user_order_callback');
		$this->load->view('common/footer');
	}
}
