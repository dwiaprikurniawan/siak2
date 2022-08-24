<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct(){
		parent::__construct();
        $id_user = $this->session->userdata('id');
        $get = $this->db->query("SELECT * FROM user WHERE id='$id_user'")->row_array();

        if($get["level"] != 1){
		    redirect('admin/auth'); 
		}
        
        $this->load->model('M_fasilitas');
    }

	public function in_fasilitas(){
		$data = array(	'title' 	=> 'Fasilitas AKPOL',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/fasilitas/daftar_fasilitas',
					 	'data' 		=> $this->M_fasilitas->tampil_fasilitas());
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

    function in_daftar_fasilitas(){
        $this->form_validation->set_rules('id','Gambar','required');
        
        if($this->form_validation->run() == FALSE){
            $data = array(	'title' 	=> 'Daftar Fasilitas AKPOL',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/fasilitas/dt_daftar_fasilitas',
					 	'data' 		=> $this->M_fasilitas->tampil_fasilitas2(),
                        'data2'     => $this->M_fasilitas->tampil_fasilitas());
		    $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
        else{
                //  Cek jika ada gambar yang ingin di upload
		        $upload_image = $_FILES['image']['name'];

                if($upload_image){
                        $config['allowed_types'] = 'jpeg|jpg|png';
                        $config['max_size']    = 2000;
                        $config['upload_path'] = './assets/backend/upload/';

                        $this->load->library('upload', $config);

                        if($this->upload->do_upload('image')){
                                $new_image = $this->upload->data('file_name');
                                //$this->M_User->tambah_data($new_image);
                                $data_ = [
                                    "nama_gambar" => $new_image,
                                    "id_fasilitas" => $this->input->post('fasilitas',TRUE)
                                ];
                                $this->db->insert('daftar_fasilitas',$data_);

                                $this->session->set_flashdata('msg','Data berhasil ditambahkan!');
                        }
                        else{
                                $this->session->set_flashdata('msg2','Gagal ditambahkan! foto tidak sesuai ketentuan');
                        }
                }
                else{
                        $this->session->set_flashdata('msg2','Gagal ditambahkan, foto tidak sesuai ketentuan');
                }
                redirect('admin/fasilitas/in_daftar_fasilitas');
            }
    }


	function tambah_fasilitas(){
        $data = [
            "nama_fasilitas" => $this->input->post('nama',TRUE)
        ];
        $this->db->insert('fasilitas',$data);

        $this->session->set_flashdata('msg','Data berhasil ditambahkan!');
        redirect('admin/fasilitas/in_fasilitas');
    }

    function hapus_fasilitas(){
        $this->db->delete('fasilitas',array('id' => $this->input->post('id',TRUE)));
        $this->session->set_flashdata('msg','Data berhasil dihapus!');
        redirect('admin/fasilitas/in_fasilitas');
    }

    function hapus_daftar_fasilitas(){
        $id = $this->input->post('id',TRUE);
        $get = $this->db->query("SELECT * FROM daftar_fasilitas WHERE id='$id'")->row_array();
        $get_img = $get['nama_gambar'];
        
        unlink("./assets/backend/upload/$get_img"); 
   
        $this->db->delete('daftar_fasilitas', array('id' => $id));

        $this->session->set_flashdata('msg','Data berhasil dihapus!');
		redirect('admin/fasilitas/in_daftar_fasilitas');
    }

    function ubah_fasilitas(){
        $data = [
            "nama_fasilitas" => $this->input->post('nama',TRUE)
        ];
        $this->db->where('id', $this->input->post('id'));
		$this->db->update('fasilitas',$data);
        $this->session->set_flashdata('msg','Data berhasil diubah!');
        redirect('admin/fasilitas/in_fasilitas');
    }

    function ubah_dtfasilitas(){
        $id = $this->input->post('id',TRUE);
        $get_gambar = $this->db->query("SELECT * FROM daftar_fasilitas WHERE id='$id'")->row_array();
        $nama_gambar = $get_gambar['nama_gambar'];

        if($_FILES AND $_FILES['image']['name']){
            $config['upload_path']='./assets/backend/upload/';
			$config['allowed_types']='jpeg|png|jpg';
			$config['max_size']=2000;

			$this->load->library('upload',$config);

            if(!$this->upload->do_upload('image')){
				$this->session->set_flashdata('msg2','Data gagal diubah! Foto tidak sesuai ketentuan');
				redirect('admin/fasilitas/in_daftar_fasilitas');
			}
            else{
                unlink('assets/backend/upload/'.$nama_gambar);
                $file=$this->upload->data();
                $data_ = [
                    "nama_gambar" => $file['file_name'],
                    "id_fasilitas" => $this->input->post('fasilitas',TRUE)
                ];
                $this->db->where('id',$this->input->post('id',TRUE));
                $this->db->update('daftar_fasilitas',$data_);

                $this->session->set_flashdata('msg','Data berhasil diubah!');
                redirect('admin/fasilitas/in_daftar_fasilitas');
            }
        }
        else{
            $data_ = [
                "id_fasilitas" => $this->input->post('fasilitas',TRUE)
            ];
            $this->db->where('id',$this->input->post('id',TRUE));
            $this->db->update('daftar_fasilitas',$data_);

            $this->session->set_flashdata('msg','Data berhasil diubah!');
            redirect('admin/fasilitas/in_daftar_fasilitas');
        }
    }
}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/admin/Fasilitas.php */