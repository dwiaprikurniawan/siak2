<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function index()
	{
		$data = array(	'title' 	=> 'Fasilitas AKPOL',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/fasilitas/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

	public function gedung()
	{
		$data = array(	'title' 	=> 'Fasilitas AKPOL',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/fasilitas/gedung/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

	public function ibadah()
	{
		$data = array(	'title' 	=> 'Fasilitas AKPOL',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/fasilitas/ibadah/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

	public function pengajaran()
	{
		$data = array(	'title' 	=> 'Fasilitas AKPOL',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/fasilitas/pengajaran/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}
	public function olahraga()
	{
		$data = array(	'title' 	=> 'Fasilitas AKPOL',
						'active'	=> 'fasilitas',
						'isi'		=> 'admin/fasilitas/olahraga/list' );
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}
}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/admin/Fasilitas.php */