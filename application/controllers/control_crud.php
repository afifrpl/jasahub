<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_crud extends CI_Controller {
	public function index()
	{
		$this->load->model('model_data');
    	$data['tabelnya'] = $this->model_data->data_mahasiswa();
		$this->load->view('mahasiswa', $data);
	}
	function data()
	{
		$this->load->model("control_model");
		$data['tabelnya'] = $this->control_model->tampil();
		$this->load->view('mahasiswa',$data);
	}
	function delete($id){
		$this->load->model("control_model");
		$hapus = $this->control_model->hapus('mahasiswa',$id);
		if ($hapus > 0) {
		}
	}
	function edit_data()
	{
		$this->load->model("control_model");
		$id = $this->input->post('id');
		$jeneng=$this->input->post('jeneng');
		$tgl=$this->input->post('tgl');
		$jur=$this->input->post('jur');
		$al=$this->input->post('al');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		
	 $data = array(
	 'nama' => $jeneng,
	 'tanggal_lahir' => $tgl,
	 'jurusan' => $jur,
	 'alamat' => $al,
	 'jenis_kelamin' => $jenis_kelamin,
	 'id_user' => $this->session->id,
	 );
	 
	 $this->control_model->edit_data('mahasiswa',$data,$id);
	 header('location: '.base_url('index.php/control_dashboard/?halaman=mahasiswa'));
	}
	function tambah_data()
	{
		$this->load->model("control_model");
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$jurusan=$this->input->post('jurusan');
		$alamat=$this->input->post('alamat');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		
	 $data = array(
	 'nim' => $nim,
	 'nama' => $nama,
	 'tanggal_lahir' => $tanggal_lahir,
	 'jurusan' => $jurusan,
	 'alamat' => $alamat,
	 'jenis_kelamin' => $jenis_kelamin,
	 'id_user' => $this->session->id,
	 );
	 
	 $this->control_model->tambah_data('mahasiswa',$data);
	 header('location: '.base_url('index.php/control_dashboard/?halaman=mahasiswa'));
	}
}
