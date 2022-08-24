<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
		parent::__construct();
        $id_user = $this->session->userdata('id');
        $get = $this->db->query("SELECT * FROM user WHERE id='$id_user'")->row_array();

        if($get["level"] != 1){
		    redirect('admin/auth'); 
		}
        
        $this->load->model('M_fasilitas');
    }

    public function index(){
            $data = array(	'title' 	=> 'Daftar User',
            'active'	=> 'fasilitas',
            'isi'		=> 'admin/user/daftar_user',
            'data'      => $this->db->query("SELECT * FROM user ORDER BY id DESC ")->result_array(),
            'lvl'       => ['1','2']);
            $this->load->view('admin/layout/wrapper', $data, FALSE);
	}

    function tambah_user(){
        $data = [
            "username" => $this->input->post('username',TRUE),
            "password" => password_hash($this->input->post('password',TRUE), PASSWORD_DEFAULT),
            "email" => $this->input->post('email',TRUE),
            "level" => $this->input->post('level',TRUE),
        ];
        $this->db->insert('user',$data);
        $this->session->set_flashdata('msg','Data berhasil ditambahkan!');
        redirect('admin/user');
    }

    function hapusData(){
        $id = $this->input->post('id',TRUE);
   
        $this->db->delete('user',['id' => $id]);
        $this->session->set_flashdata('msg','Data berhasil dihapus!');
        redirect('admin/user');
    }

    function ubah_data(){
        $pass = $this->input->post('password',TRUE);
        if($pass){
            $data = [
                "password" => password_hash($this->input->post('password',TRUE), PASSWORD_DEFAULT),
                "email" => $this->input->post('email',TRUE),
                "level" => $this->input->post('level',TRUE),
            ];
            $this->db->where('id',$this->input->post('id',TRUE));
            $this->db->update('user',$data);
        }
        else{
            $data = [
                "email" => $this->input->post('email',TRUE),
                "level" => $this->input->post('level',TRUE),
            ];
            $this->db->where('id',$this->input->post('id',TRUE));
            $this->db->update('user',$data);
        }
        $this->session->set_flashdata('msg','Data berhasil diubah!');
        redirect('admin/user');

    }


}
