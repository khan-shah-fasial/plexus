<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

	public function index()
	{
		$this->load->view('website/header');
        $this->load->view('website/career');
        $this->load->view('website/footer');

	}
}
