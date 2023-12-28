<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('website/header');
        $this->load->view('website/blog');
        $this->load->view('website/footer');

	}
    public function spotlight_on_india_the_fastest_growing_aviation_market()
	{
		$this->load->view('website/header');
        $this->load->view('website/spotlight_on_india_the_fastest_growing_aviation_market');
        $this->load->view('website/footer');

	}
	public function india_will_witness_a_growth_of_200_new_airports_in_the_next_few_years()
	{
		$this->load->view('website/header');
        $this->load->view('website/india_will_witness_a_growth_of_200_new_airports_in_the_next_few_years');
        $this->load->view('website/footer');

	}
	public function the_competitive_indian_civil_aviation_market()
	{
		$this->load->view('website/header');
        $this->load->view('website/the_competitive_indian_civil_aviation_market');
        $this->load->view('website/footer');

	}
}
