<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
		parent::__construct();
        
    }
    
    public function index()
	{
		$data['title'] = 'Halaman Login';

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/auth/login',$data);
		}else{
			// validasinya success
			$this->_login();
		}
    }
    
    public function _login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
            
            if($user){
                    if(password_verify($password, $user['password'])){
                        $data= [
                            'id' => $user['id'],
                            'username' => $user['username'],
                            'level' => $user['level']
                        ];

                        $this->session->set_userdata($data);
                        redirect('admin/user');
                    }	
                    else{
                        $this->session->set_flashdata('message','<div id="notifikasi" class="alert alert-warning" role="alert">Login gagal! Password salah.</div>');
                        redirect('admin/auth');
                    }
            }
            else{
                $this->session->set_flashdata('message','<div id="notifikasi" class="alert alert-warning" role="alert">Akun belum terdaftar!</div>');
                redirect('admin/auth');
            }
    }

    

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('id');

		$this->session->set_flashdata('message','<div id="notifikasi" class="alert alert-success" role="alert">
			  Anda berhasil logout</div>');
			redirect('admin/auth');
	}

}