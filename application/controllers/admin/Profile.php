<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();
        $id_user = $this->session->userdata('id');
        $get = $this->db->query("SELECT * FROM user WHERE id='$id_user'")->row_array();

        if($this->session->userdata('level') == NULL){
		    redirect('admin/auth'); 
		}
        
        $this->load->model('M_fasilitas');
    }

	function index(){
		$id_user = $this->session->userdata('id');
		$get = $this->db->query("SELECT * FROM user WHERE id='$id_user'")->row_array();
		$data = array(	'title' 	=> 'Profile',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/profile/index',
						'data'		=> $get);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	function ubah_visi_misi(){
        $data = array(	'title' 	=> 'Fasilitas AKPOL',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/profile/ubah_visi_misi');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	function tambah_data(){
		$cek = $this->db->query("SELECT * FROM profil WHERE jenis='visi' OR jenis='misi'")->num_rows();

		if($cek>=1){
			$this->db->query("DELETE FROM profil WHERE jenis='visi' OR jenis='misi'");
		}

		$data = [
			"isi" => $this->input->post('visi',TRUE),
			"jenis" => 'visi'
		];
		$this->db->insert('profil',$data);

		$data = [
			"isi" => $this->input->post('misi',TRUE),
			"jenis" => 'misi'
		];
		$this->db->insert('profil',$data);

		$this->session->set_flashdata('msg','Data berhasil ditambahkan!');
		redirect('admin/profile/ubah_visi_misi');
	}

	function in_hubungi_kami(){
		$data = array(	'title' 	=> 'Hubungi Kami',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/profile/hubungi_kami');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	function proses_hk(){
		$cek = $this->db->query("SELECT * FROM hubungi_kami")->num_rows();

		if($cek>=1){
			$this->db->query("DELETE FROM hubungi_kami");
		}

		$data = [
			"alamat" => $this->input->post('alamat',TRUE),
			"email" => $this->input->post('email',TRUE),
			'cp' 	=> $this->input->post('cp',TRUE)
		];
		$this->db->insert('hubungi_kami',$data);

		$this->session->set_flashdata('msg','Data berhasil ditambahkan!');
		redirect('admin/profile/in_hubungi_kami');
	}

	function edit_profile(){
		$data = [
            "email" => $this->input->post('email',TRUE)
        ];
        $this->db->where('id', $this->input->post('id'));
		$this->db->update('user',$data);

		$this->session->set_flashdata('msg','Data berhasil diubah!');
		redirect('admin/profile');
	}

	function ganti_password(){
		date_default_timezone_set("Asia/Jakarta");

        $password1 = $this->input->post('password1',TRUE);
        $password2 = $this->input->post('password2',TRUE);

        if($password1!=$password2){
            $this->session->set_flashdata('msg2','Password gagal diubah! Password Baru dan Konfirmasi Password Baru tidak sama!');
        }
        else{
            $data = [
                "password" => password_hash($this->input->post('password1',TRUE), PASSWORD_DEFAULT),
            ];
            $this->db->where('id',$this->input->post('id',TRUE));
            $this->db->update('user',$data);

            $this->session->set_flashdata('msg','Password berhasil diubah!');
			redirect('admin/profile');
        }
		redirect('admin/profile');
	}

}

/* End of file profil.php */
/* Location: ./application/controllers/admin/profil.php */