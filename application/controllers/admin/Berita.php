<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'SIAK | Admin',
						'active'	=> 'Dashboard',
						'isi'		=> 'admin/dasboard/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/admin/Berita.php */