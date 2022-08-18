<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$data = array(	'title'		=> 'Berita',
						'active'	=> 'Berita',
						'isi'		=> 'user/berita/list');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function detail()
	{
		$data = array(	'title'		=> 'Berita',
						'active'	=> 'Berita',
						'isi'		=> 'user/berita/detail');
		$this->load->view('user/layout/wrapper', $data, FALSE);
		
	}

	 
}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */