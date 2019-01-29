<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motorcycle extends CI_Controller {

	public function index()
	{
		$data['content'] = "v_motorcycle";
	$this->load->view('template', $data, FALSE);		
	
	}

}

/* End of file motorcycle.php */
/* Location: ./application/controllers/motorcycle.php */