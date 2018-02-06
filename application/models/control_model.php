<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 class control_model extends CI_Model {

     public function login($username,$password)
     {
     	$cek = $this->db->get_where('user', array('username' => $username, 'password' => $password))->num_rows();
     	if($cek > 0){
     		$database = $this->db->get_where('user', array('username' => $username, 'password' => $password))->result_array();
     		foreach ($database as $key) {
                    $this->session->set_userdata(array('id' => $key['id']));
                    header('location: '.base_url('index.php/control_dashboard?halaman=mahasiswa'));
     		}
     	}
     	else{
               header('location: '.base_url('?gagal'));
     	}
     }
     public function daftar($foto,$sumber,$folder,$fullname,$username,$password)
     {
          $upload = move_uploaded_file($sumber, $folder.$foto);
     	$daftar = $this->db->insert('user', array('foto' => $foto  ,'full_name' => $fullname, 'username' => $username,'password' => $password));
     	if ($daftar) {
     		echo "<script>alert('Akun berhasil dibuat'); location='".base_url('index.php/control_login')."'</script>";
     	}
     }

     function tambah_data($tabelnya,$data){
               $this->db->insert($tabelnya,$data);
     }

     function tampil(){
          $tabelnya = $this->db->get_where('mahasiswa', array('id_user' => $this->session->id));
          return $tabelnya->result_array();
     }
     function edit_data($tabelnya,$data,$id){
          $this->db->where('id',$id);
          $edit = $this->db->update($tabelnya,$data);
          if($edit){
               header('location: '.base_url('index.php/control_dashboard?halaman=mahasiswa'));
          }
     }
     function hapus($tabelnya,$id){
          $this->db->where('id',$id);
          $this->db->delete($tabelnya);
          header('location: '.base_url('index.php/control_dashboard?halaman=mahasiswa'));
     }
}
          