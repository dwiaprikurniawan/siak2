<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    function __construct(){
		parent::__construct();

        if($this->session->userdata('level') == NULL){
		    redirect('admin/auth'); 
		}
                
        $this->load->model('M_berita');
    }

    function in_daftar_berita(){
        $data = array(	'title' 	=> 'Daftar Berita',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/berita/in_daftar_berita',
                        "data"      => $this->M_berita->tampilData());
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function in_edit_berita($id){
        $data = array(	'title' 	=> 'Daftar Berita',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/berita/in_edit_berita',
                        'data'      => $this->db->query("SELECT * FROM berita WHERE id='$id'")->row_array());
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function tambah_berita(){
        $data = array(	'title' 	=> 'Tambah Berita',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/berita/tambah_berita');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function tambah_data(){
            $upload_image = $_FILES['image']['name'];

            if($upload_image){
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']    = 2000;
                $config['upload_path'] = './assets/backend/upload/';
        
                $this->load->library('upload', $config);
        
                if($this->upload->do_upload('image')){
                    date_default_timezone_set("Asia/Jakarta");
                    $new_image = $this->upload->data('file_name');
                    $data_ = [
                        "judul" => $this->input->post('judul',TRUE),
                        "isi" => $this->input->post('isi',TRUE),
                        "img_cover" => $new_image,
                        "created_at" => date("Y-m-d H:i:s", time()),
                    ];
                    $this->db->insert('berita',$data_);

                    $this->session->set_flashdata('msg','Data berhasil ditambahkan!');
                    redirect('admin/berita/in_daftar_berita');
                }
                else{
                    $this->session->set_flashdata('msg2','Gagal ditambahkan! Foto tidak sesuai ketentuan');
                    redirect('admin/berita/tambah_berita');
                }
            }
    }

    function hapus_data(){
        $id = $this->input->post('id',TRUE);
        $this->M_berita->hapus_data($id);

        $this->session->set_flashdata('msg','Data berhasil dihapus!');
		redirect('admin/berita/in_daftar_berita');
    }

    function edit_data(){
        $id = $this->input->post('id',TRUE);
        $get_gambar = $this->db->query("SELECT * FROM berita WHERE id='$id'")->row_array();
        $nama_gambar = $get_gambar['img_cover'];

        if($_FILES AND $_FILES['image']['name']){
                $config['upload_path']='./assets/backend/upload/';
                $config['allowed_types']='jpeg|png|jpg';
                $config['max_size']=2000;

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('image')){
                    $this->session->set_flashdata('msg2','Data gagal diubah! Foto tidak sesuai ketentuan');
                    redirect('admin/berita/in_edit_berita/'.$id);
                }
                else{
                    unlink('assets/backend/upload/'.$nama_gambar);
                    $file=$this->upload->data();

                    $this->M_berita->edit_berita($file['file_name']);
                }
        }
        else{
            $this->M_berita->edit_berita(1);
        }

        $this->session->set_flashdata('msg','Data berhasil diubah!');
        redirect('admin/berita/in_daftar_berita');

        }
}



/* End of file Home.php */
/* Location: ./application/controllers/Home.php */