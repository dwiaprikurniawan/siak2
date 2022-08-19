<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'Slider | Admin',
						'active'	=> 'Dashboard',
						'isi'		=> 'admin/slider/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);		
	}

}

/* End of file Header.php */
/* Location: ./application/controllers/admin/Header.php */