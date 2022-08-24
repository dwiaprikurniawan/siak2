<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('M_fasilitas');
        $this->load->model('M_berita');
    }

	public function index()
	{
		
	}

}

/* End of file Struktur.php */
/* Location: ./application/controllers/Struktur.php */