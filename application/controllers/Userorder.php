<?php defined('BASEPATH') or exit('No direct script access allowed');

class Userorder extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
			redirect(base_url() . 'Auth/login');
		}

		$this->load->model('UserOrderCallback');
		$this->load->library('pagination');
		$this->load->library('session');


		$this->session->set_userdata('status', $this->UserOrderCallback->getStatus());
		$this->session->set_userdata('source', $this->UserOrderCallback->getSource());
	}

	public function index()
	{
		$data['status'] = $this->session->userdata('status');
		$data['source'] = $this->session->userdata('source');

		$this->load->view('common/header');
		$this->load->view('user_order_callback', $data);
		$this->load->view('common/footer', $data);
	}

	public function ordercallback()
	{
		// Inputs
		if ($this->input->post()) {
			$request = $this->input->post();
			$this->session->set_userdata('request', $request);
			$data['request'] = $request;
		} else {
			$request = $this->session->userdata('request');
			$data['request'] = $request;
		}

		// Pagination
		$config = array();
		$config['base_url'] = base_url() . 'userorder/ordercallback/';
		$config['total_rows'] = $this->UserOrderCallback->getRows($request);
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = true;
		$config['full_tag_open'] = '<ul id="paginationajax" class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><span>";
		$config['cur_tag_close'] = '</span></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['num_links'] = 5;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
		$start = ($page - 1) * $config['per_page'];
		$data["links"] = $this->pagination->create_links();

		$data["order_callback_data"] = $this->UserOrderCallback->getOrderCallbackData($config["per_page"], $start, $request);

		$data['status'] = $this->session->userdata('status');
		$data['source'] = $this->session->userdata('source');

		$table = "<tbody id='table'>";

		foreach ($data["order_callback_data"] as $row) {
			$table .= "<tr><td>" . $row['userid'] . "</td><td>" . date('d-m-Y H:i:s', strtotime('+5 hour +30 minutes', strtotime($row['created']))) . "</td><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] . "</td><td>" . $row['ordertype'] . "</td><td>" . $row['ticketid'] . "</td><td>" . $row['status'] . "</td><td>" . $row['source'] . "</td></tr>";
		}

		$table .= "</tbody>";

		$data['tableRows'] = $table;

		if ($_SERVER['REQUEST_METHOD'] == "GET") {
			$request['isAJAX'] = "0";
		}

		if ($request['isAJAX'] == "1") {
			echo json_encode($data);
		} else {
			$this->load->view('common/header');
			$this->load->view('user_order_callback', $data);
			$this->load->view('common/footer');
		}
	}
}
