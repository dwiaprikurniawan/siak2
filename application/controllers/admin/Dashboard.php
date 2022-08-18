<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
			$data = array(	'title' 	=> 'SIAK | Admin',
							'active'	=> 'Dashboard',
							'isi'		=> 'admin/dasboard/list');
			$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */