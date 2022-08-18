<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'SIAK AKPOL',
						'active'	=> 'Beranda',
						'isi'		=> 'admin/fasilitas/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/admin/Fasilitas.php */