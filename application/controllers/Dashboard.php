<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
		// $this->load->library('pagination');
	}

	public function index()
	{
		$tableData = $this->session->flashdata('tableData');
		// TODO: Split Components
		$this->load->view('common/header', $tableData);
		$this->load->view('dashboard_home', $tableData);
		$this->load->view('common/footer');
	}

	public function get_user_data()
	{
		$request = $this->input->get();
		if (
			$request['userid'] == '' && $request['phoneno'] == '' && $request['email'] == '' && $request['fname'] == '' && $request['lname'] == '' && $request['deviceid'] == '' && $request['orderid'] == ''
		) {
			$response['success'] = false;
			$response['message'] = "All fields are empty.";
		} else {
			try {

				if (
					$request['userid'] != '' && $request['phoneno'] == '' && $request['email'] == '' && $request['fname'] == '' && $request['lname'] == '' && $request['deviceid'] == '' && $request['orderid'] == ''
				) {
					$user_data = $this->user_model->getUsersByParam($request['userid']);
				} elseif (
					$request['userid'] == '' && $request['phoneno'] != '' && $request['email'] == '' && $request['fname'] == '' && $request['lname'] == '' && $request['deviceid'] == '' && $request['orderid'] == ''
				) {
					$user_data = $this->user_model->getUsersByParam($request['phoneno'], 'user.phone');
				} elseif (
					$request['userid'] == '' && $request['phoneno'] == '' && $request['email'] != '' && $request['fname'] == '' && $request['lname'] == '' && $request['deviceid'] == '' && $request['orderid'] == ''
				) {
					$user_data = $this->user_model->getUsersByParam($request['email'], 'user.email');
				} elseif (
					$request['userid'] == '' && $request['phoneno'] == '' && $request['email'] == '' && $request['fname'] != '' && $request['lname'] == '' && $request['deviceid'] == '' && $request['orderid'] == ''
				) {
					$user_data = $this->user_model->getUsersByParam($request['fname'], 'user.fname');
				} elseif (
					$request['userid'] == '' && $request['phoneno'] == '' && $request['email'] == '' && $request['fname'] == '' && $request['lname'] != '' && $request['deviceid'] == '' && $request['orderid'] == ''
				) {
					$user_data = $this->user_model->getUsersByParam($request['lname'], 'user.lname');
				} elseif (
					$request['userid'] == '' && $request['phoneno'] == '' && $request['email'] == '' && $request['fname'] == '' && $request['lname'] == '' && $request['deviceid'] != '' && $request['orderid'] == ''
				) {
					$user_data = $this->user_model->getUsersByParam($request['deviceid'], 'user.deviceid');
				}
				// } elseif (
				// 	$request['userid'] == '' && $request['phoneno'] == '' && $request['email'] == '' && $request['fname'] == '' && $request['lname'] == '' && $request['deviceid'] == '' && $request['orderid'] != ''
				// ) {
				// 	$user_data = $this->user_model->getUsersByOrderId($request['orderid']);
				// }

				// Convert YOB to age
				$current_year = date("Y");
				foreach ($user_data as $key => $user) {
					$user_data[$key]['age'] = $current_year - $user['yob'];
				}

				// Create Table Rows
				$table_rows = '<tbody id="tableRows">';
				foreach ($user_data as $user) {
					$table_rows .= '<tr><th scope="row">' . $user['id'] . '</th><td>' . $user['fname'] . '</td><td>' . $user['lname'] . '</td><td>' . $user['email'] . '</td><td>' . $user['age'] . '</td><td>' . $user['phone'] . '</td><td>' . $user['os'] . '</td><td>' . $user['appversion'] . '</td><td>' . $user['gender'] . '</td><td>' . $user['height'] . '</td><td>' . $user['weight'] . '</td><td>' . $user['bmi'] . '</td><td>' . $user['bmr'] . '</td></tr>';
				}
				$table_rows .= '</tbody>';

				// Response
				$response['success'] = true;
				$response['message'] = "";
				$response['data'] = $user_data;
				$response['table'] = $table_rows;
			} catch (Exception $e) {
				$response['success'] = false;
				$response['message'] = $e->getMessage();
			}
		}

		if ($request['isAJAX'] == "1") {
			echo json_encode($response);
		} else {
			$this->session->set_flashdata('tableData', $table_rows);
			redirect('/');
		}
	}
}
