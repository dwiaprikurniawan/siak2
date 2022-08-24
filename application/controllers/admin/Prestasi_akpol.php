<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_akpol extends CI_Controller {

    function __construct(){
		parent::__construct();

        if($this->session->userdata('level') == NULL){
		    redirect('admin/auth'); 
		}
      
        $this->load->model('M_prestasi_akpol');
    }

    function in_daftar_prestasi(){
        $data = array(	'title' 	=> 'Daftar Prestasi',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/prestasi_akpol/in_daftar_prestasi',
                        "data"      => $this->M_prestasi_akpol->tampilData());
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function in_edit_prestasi($id){
        $data = array(	'title' 	=> 'Daftar Prestasi',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/prestasi_akpol/in_edit_prestasi',
                        'data'      => $this->db->query("SELECT * FROM prestasi_akpol WHERE id='$id'")->row_array());
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function tambah_prestasi_akpol(){
        $data = array(	'title' 	=> 'Tambah Prestasi',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/prestasi_akpol/tambah_prestasi_akpol');
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
                    $this->db->insert('prestasi_akpol',$data_);

                    $this->session->set_flashdata('msg','Data berhasil ditambahkan!');
                    redirect('admin/prestasi_akpol/in_daftar_prestasi');
                }
                else{
                    $this->session->set_flashdata('msg2','Gagal ditambahkan, foto tidak sesuai ketentuan');
                    redirect('admin/prestasi_akpol/in_daftar_prestasi');
                }
            }
    }

    function hapus_data(){
        $id = $this->input->post('id',TRUE);
        $this->M_prestasi_akpol->hapus_data($id);

        $this->session->set_flashdata('msg','Data berhasil dihapus!');
		redirect('admin/prestasi_akpol/in_daftar_prestasi');
    }

    function ubah_data(){
        $id = $this->input->post('id',TRUE);
        $get_gambar = $this->db->query("SELECT * FROM prestasi_akpol WHERE id='$id'")->row_array();
        $nama_gambar = $get_gambar['img_cover'];

        if($_FILES AND $_FILES['image']['name']){
                $config['upload_path']='./assets/backend/upload/';
                $config['allowed_types']='jpeg|png|jpg';
                $config['max_size']=2000;

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('image')){
                    $this->session->set_flashdata('msg2','Data gagal diubah! Foto tidak sesuai ketentuan');
                    redirect('prestasi_akpol');
                }
                else{
                    unlink('assets/backend/upload/'.$nama_gambar);
                    $file=$this->upload->data();

                    $this->M_prestasi_akpol->ubah_data($file['file_name']);
                }
        }
        else{
            $this->M_prestasi_akpol->ubah_data(1);
        }
            $this->session->set_flashdata('msg','Data berhasil diubah!');
            redirect('admin/prestasi_akpol/in_daftar_prestasi');
        }
}



/* End of file Home.php */
/* Location: ./application/controllers/Home.php */