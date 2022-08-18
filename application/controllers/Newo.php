<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newo extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'SIAK AKPOL',
						'active'	=> 'Beranda',
						'isi'		=> 'user/home/list' );
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */