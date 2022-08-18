<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$data = array(	'title'		=> 'Profil',
						'active'	=> 'profil',
						'isi'		=> 'user/profil/visi');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function sejarah()
	{
		$data = array(	'title'		=> 'Profil',
						'active'	=> 'profil',
						'isi'		=> 'user/profil/sejarah');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function akreditasi()
	{
		$data = array(	'title'		=> 'Profil',
						'active'	=> 'profil',
						'isi'		=> 'user/profil/akreditasi');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */

