<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function index()
	{
		
	}

	public function gedung()
	{
		$data = array(	'title'		=> 'Fasilitas',
						'active'	=> 'fasilitas',
						'isi'		=> 'user/fasilitas/gedung');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function ibadah()
	{
		$data = array(	'title'		=> 'Fasilitas',
						'active'	=> 'fasilitas',
						'isi'		=> 'user/fasilitas/ibadah');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function perkantoran()
	{
		$data = array(	'title'		=> 'Fasilitas',
						'active'	=> 'fasilitas',
						'isi'		=> 'user/fasilitas/perkantoran');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function pengajaran()
	{
		$data = array(	'title'		=> 'Fasilitas',
						'active'	=> 'fasilitas',
						'isi'		=> 'user/fasilitas/pengajaran');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	public function olahraga()
	{
		$data = array(	'title'		=> 'Fasilitas',
						'active'	=> 'fasilitas',
						'isi'		=> 'user/fasilitas/olahraga');
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/Fasilitas.php */