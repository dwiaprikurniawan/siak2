<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('M_fasilitas');
        $this->load->model('M_profil');
        $this->load->model('M_berita');
    }

	public function index()
	{
		$data = array(	'title'		=> 'Profil',
						'active'	=> 'profil',
						'isi'		=> 'user/profil/visi',
						'vismis'	=> $this->M_profil->profil(),
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas());
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function sejarah()
	{
		$data = array(	'title'		=> 'Profil',
						'active'	=> 'profil',
						'isi'		=> 'user/profil/sejarah',
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas());
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function akreditasi()
	{
		$data = array(	'title'		=> 'Profil',
						'active'	=> 'profil',
						'isi'		=> 'user/profil/akreditasi',
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas());
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */

