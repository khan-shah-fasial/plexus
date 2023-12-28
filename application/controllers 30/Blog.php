<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('website/header');
        $this->load->view('website/blog');
        $this->load->view('website/footer');

	}
    public function details()
	{
		$this->load->view('website/header');
        $this->load->view('website/blog_details');
        $this->load->view('website/footer');

	}
}
