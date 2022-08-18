<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'SIAK AKPOL',
						'active'	=> 'Login',
						'isi'		=> 'user/login' );
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */