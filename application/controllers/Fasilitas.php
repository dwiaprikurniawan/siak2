<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct(){
		parent::__construct();
        
        $this->load->model('M_fasilitas');
    }

	public function fasilitias($id)
	{
		$data = array(	'title'		=> 'Fasilitas',
						'active'	=> 'fasilitas',
						'isi'		=> 'user/fasilitas/gedung',
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas(),
						'fasi' 		=> $this->M_fasilitas->detail($id),
						'jum' 		=> $this->M_fasilitas->jum($id),
						'data' 		=> $this->M_fasilitas->image($id));
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}


	public function gedung($id)
	{
		$data = array(	'title'		=> 'Fasilitas',
						'active'	=> 'fasilitas',
						'isi'		=> 'user/fasilitas/gedung',
						'fas' 		=> $this->M_fasilitas->tampil_fasilitas(),
						'fasi' 		=> $this->M_fasilitas->detail($id),
						'jum' 		=> $this->M_fasilitas->jum($id),
						'data' 		=> $this->M_fasilitas->image($id));
		$this->load->view('user/layout/wrapper', $data, FALSE);
	}

	// public function ibadah()
	// {
	// 	$data = array(	'title'		=> 'Fasilitas',
	// 					'active'	=> 'fasilitas',
	// 					'isi'		=> 'user/fasilitas/ibadah',
	// 					'fas' 		=> $this->M_fasilitas->tampil_fasilitas());
	// 	$this->load->view('user/layout/wrapper', $data, FALSE);
	// }

	// public function perkantoran()
	// {
	// 	$data = array(	'title'		=> 'Fasilitas',
	// 					'active'	=> 'fasilitas',
	// 					'isi'		=> 'user/fasilitas/perkantoran',
	// 					'fas' 		=> $this->M_fasilitas->tampil_fasilitas());
	// 	$this->load->view('user/layout/wrapper', $data, FALSE);
	// }

	// public function pengajaran()
	// {
	// 	$data = array(	'title'		=> 'Fasilitas',
	// 					'active'	=> 'fasilitas',
	// 					'isi'		=> 'user/fasilitas/pengajaran',
	// 					'fas' 		=> $this->M_fasilitas->tampil_fasilitas());
	// 	$this->load->view('user/layout/wrapper', $data, FALSE);
	// }

	// public function olahraga()
	// {
	// 	$data = array(	'title'		=> 'Fasilitas',
	// 					'active'	=> 'fasilitas',
	// 					'isi'		=> 'user/fasilitas/olahraga',
	// 					'fas' 		=> $this->M_fasilitas->tampil_fasilitas());
	// 	$this->load->view('user/layout/wrapper', $data, FALSE);
	// }

}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/Fasilitas.php */