<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('M_fasilitas');
        $this->load->model('M_berita');
    }


	public function index()
	{
		$data = array(	'title'		=> 'Berita',
						'active'	=> 'Berita',
						'isi'		=> 'user/berita/list',
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas(),
						'jum'		=> $this->M_berita->jum(),
						'data'		=> $this->M_berita->tampilData());
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function detail($id)
	{
		$data = array(	'title'		=> 'Berita',
						'active'	=> 'Berita',
						'isi'		=> 'user/berita/detail',
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas(),
						'data'		=> $this->M_berita->detail($id));
		$this->load->view('user/layout/wrapper', $data, FALSE);
		
	}

	 
}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */