<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function dashboard($nama,$gender){
		$data['nama lengkap']=$nama;
		$data['jengkel']=$gender;
		$this->load->view('beranda');
	}
}
