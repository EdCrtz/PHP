<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$dato['Mensaje'] ="El baldomero es puto ";
		$this->load->view('welcome_message',$dato);
	}
}
