<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
		parent::__construct();

        if($this->session->userdata('level') == NULL){
		    redirect('admin/auth'); 
		}
	}

	public function index()
	{
			$data = array(	'title' 	=> 'SIAK | Admin',
							'active'	=> 'Dashboard',
							'isi'		=> 'admin/dasboard/list');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	function setting_jumbotron(){
		$this->form_validation->set_rules('id','Gambar','required');

		if($this->form_validation->run() == FALSE){
            $data = array(	'title' 	=> 'Slider | Admin',
    						'active'	=> 'jumbotron',
    						'isi'		=> 'admin/dasboard/setting_jumbotron',
    					 	'data' 		=> $data['data'] = $this->db->query("SELECT * FROM slider")->result_array());
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
                                    "gambar" => $new_image
                                ];
                                $this->db->insert('slider',$data_);

                                $this->session->set_flashdata('msg','Data berhasil ditambahkan!');
                        }
                        else{
                                $this->session->set_flashdata('msg2','Gagal ditambahkan! foto tidak sesuai ketentuan');
                        }
                }
                else{
                        $this->session->set_flashdata('msg2','Gagal ditambahkan, foto tidak sesuai ketentuan');
                }
                redirect('admin/dashboard/setting_jumbotron');
            }
	}

	function hapusGambar(){
        $id = $this->input->post('id',TRUE);
        $get = $this->db->query("SELECT * FROM slider WHERE id='$id'")->row_array();
        $get_img = $get['gambar'];
        
        unlink("./assets/backend/upload/$get_img"); 
   
        $this->db->delete('slider', array('id' => $id));

        $this->session->set_flashdata('msg','Data berhasil dihapus!');
		redirect('admin/dashboard/setting_jumbotron');
    }

    function ubahGambar(){
        $id = $this->input->post('id',TRUE);
        $get_gambar = $this->db->query("SELECT * FROM slider WHERE id='$id'")->row_array();
        $nama_gambar = $get_gambar['gambar'];

        if($_FILES AND $_FILES['image']['name']){
            $config['upload_path']='./assets/backend/upload/';
			$config['allowed_types']='jpeg|png|jpg';
			$config['max_size']=1000;

			$this->load->library('upload',$config);

            if(!$this->upload->do_upload('image')){
				$this->session->set_flashdata('msg2','Data gagal diubah! Foto tidak sesuai ketentuan');
				redirect('admin/dashboard/setting_jumbotron');
			}
            else{
                unlink('assets/backend/upload/'.$nama_gambar);
                $file=$this->upload->data();
                $data_ = [
                    "gambar" => $file['file_name']
                ];
                $this->db->where('id',$this->input->post('id',TRUE));
                $this->db->update('slider',$data_);

                $this->session->set_flashdata('msg','Data berhasil diubah!');
                redirect('admin/dashboard/setting_jumbotron');
            }
        }
    }
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */