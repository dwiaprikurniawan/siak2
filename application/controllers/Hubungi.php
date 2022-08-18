<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {

	public function index()
	{
		$data = array(	'title'		=> 'Hubungi',
						'active'	=> 'hubungi',
						'isi'		=> 'user/hubungi/isi');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	
	}

}

/* End of file Hubungi.php */
/* Location: ./application/controllers/Hubungi.php */