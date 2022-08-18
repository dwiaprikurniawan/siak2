<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'SIAK AKPOL',
						'active'	=> 'profil',
						'isi'		=> 'admin/profil/visimisi' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function sejarah()
	{
		$data = array(	'title' 	=> 'SIAK AKPOL',
						'active'	=> 'profil',
						'isi'		=> 'admin/profil/sejarah' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function akreditasi()
	{
		$data = array(	'title' 	=> 'SIAK AKPOL',
						'active'	=> 'profil',
						'isi'		=> 'admin/profil/akreditasi' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file profil.php */
/* Location: ./application/controllers/admin/profil.php */