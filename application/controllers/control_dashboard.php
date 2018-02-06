<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_dashboard extends CI_Controller {
  public function index()
  {
    $this->load->model('model_data');
    $data['tabelnya'] = $this->model_data->data_mahasiswa();
    $this->load->view('dashboard',$data);
  }

  public function keluar()
  {
  	$this->load->model('model_data');
  	$this->model_data->keluar();
  }
}
