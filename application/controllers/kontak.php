<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$data['content'] = "v_kontak";
	$this->load->view('template', $data, FALSE);		
	
	}

}

/* End of file kontak.php */
/* Location: ./application/controllers/kontak.php */