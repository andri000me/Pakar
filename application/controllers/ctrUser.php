<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ctrUser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index(){
		$data=array(
            // "content"=>'Tampil_Modal',
            "all"=>$this->db->get('tb_user')->result(),
            // "judul"=>"Modal",
        );
		$this->load->view('template/index');
		$this->load->view('admin/viewUser', $data);
		$this->load->view('template/footerindex');	
	}

	public function tbhUser(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('ctrUser');
        }else{
            $data=array(
                "nama"=>$_POST['nama']
                "username"=>$_POST['username'],
                "password"=>md5($_POST['password']),
                "level"=>'2'
            );
            $this->db->insert('tb_user',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('ctrUser');
        }
	}

	public function edit(){	
		// $this->load->library('form_validation');
  //       $this->load->library('encrypt');
  //       $this->form_validation->set_rules('nama', 'nama', 'required');
  //       if($this->form_validation->run()==FALSE){
  //           $this->session->set_flashdata('error',"Data Gagal Di Edit");
  //           redirect('ctrUser');
  //       }else{
  //           $data=array(
  //               "nama"=>$_POST['nama'],
  //               // "tgl_lahir"=>$_POST['tgl_lahir'],
  //               // "alamat"=>$_POST['alamat'],
  //               // "no_telp"=>$_POST['no_telp'],
  //               "username"=>$_POST['username'],
  //               "password"=>md5($_POST['password'])
  //           );
  //           $this->db->where('id_user', $_POST['id_user']);
  //           $this->db->update('tb_user',$data);
  //           $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
  //           redirect('ctrUser');
  //       }
        $id_user = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($password == null || $password == '')
            {
                $this->db->query("UPDATE tb_user set nama= '$nama', username = '$username' where id_user = $id_user");
            } else {
                $this->db->query("UPDATE tb_user set nama= '$nama', username = '$username', password = md5('$password') where id_user = $id_user");

            }

            redirect('ctrUser');
	}
	public function delete($id){
		if($id==""){
            $this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
            redirect('ctrUser');
        }else{
            $this->db->where('id_user', $id);
            $this->db->delete('tb_user');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('ctrUser');
        }
	}
}