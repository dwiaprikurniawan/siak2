<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
        
        $this->load->model('M_fasilitas');
        $this->load->model('M_berita');
    }


	public function index()
	{
		$data = array(	'title' 	=> 'SIAK AKPOL',
						'active'	=> 'Beranda',
						'isi'		=> 'user/home/list',
						'berita'	=> $this->M_berita->tampilData(),
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas());

		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */