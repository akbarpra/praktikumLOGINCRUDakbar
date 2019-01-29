<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

	public function index()
	{
		$data['content'] = "v_car";
	$this->load->view('template', $data, FALSE);		
	
	}

}

/* End of file car.php */
/* Location: ./application/controllers/car.php */