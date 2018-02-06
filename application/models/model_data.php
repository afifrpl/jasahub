<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 class model_data extends CI_Model {

     public function data_mahasiswa()
     {
     	$data = $this->db->get_where('mahasiswa', array('id_user' => $this->session->id));
     	return $data->result_array();
     }

     public function keluar()
     {
     	$this->session->sess_destroy();
     	header('location: '.base_url());
     }
 }