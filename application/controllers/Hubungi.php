<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_fasilitas');               
		$this->load->model('M_hub');               
        $this->load->model('M_berita');
    }

	public function index()
	{
		$data = array(	'title'		=> 'Hubungi',
						'active'	=> 'hubungi',
						'isi'		=> 'user/hubungi/isi',
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas(),
						'hub' 		=> $this->M_hub->hubungi_kami());
		$this->load->view('user/layout/wrapper', $data, FALSE);
	
	}

}

/* End of file Hubungi.php */
/* Location: ./application/controllers/Hubungi.php */