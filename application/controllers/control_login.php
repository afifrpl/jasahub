<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_login extends CI_Controller {
	public function index()
	{
		$this->load->view('form_login');
	}
	function login()
	{
		$this->load->model('control_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->control_model->login($username,$password);
	}
	function daftar()
	{
		$this->load->model('control_model');
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$foto = $_FILES['foto']['name'];
		$sumber = $_FILES['foto']['tmp_name'];
		$folder ="./hasil_resize/";
		$this->control_model->daftar($foto,$sumber,$folder,$fullname,$username,$password);
	}
}
