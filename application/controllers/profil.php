<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		
	$data['content'] = "v_profil";
	$this->load->view('template', $data, FALSE);		
	}

}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */