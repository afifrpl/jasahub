<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_register extends CI_Controller {
	public function index()
	{
		$this->load->view('form_register');
	}
	public function daftar_akun()
	{
		$foto = $_FILES['foto']['name'];
		$sumber = $_FILES['foto']['tmp_name'];
		$folder = "./assets/foto_admin/";
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->Login->daftar_akun($foto,$sumber,$folder,$nama,$username,$password);
	}
}
