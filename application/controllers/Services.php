<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$this->load->view('website/header');
        $this->load->view('website/services');
        $this->load->view('website/footer');

	}
    public function trip_planning ()
	{
		$this->load->view('website/header');
        $this->load->view('website/trip_planning');
        $this->load->view('website/footer');

	}
    public function flight_support ()
	{
		$this->load->view('website/header');
        $this->load->view('website/flight_support');
        $this->load->view('website/footer');

	}
	public function flight_dispatch ()
	{
		$this->load->view('website/header');
        $this->load->view('website/flight_dispatch');
        $this->load->view('website/footer');

	}
	public function permits ()
	{
		$this->load->view('website/header');
        $this->load->view('website/permits');
        $this->load->view('website/footer');

	}
	public function fuel ()
	{
		$this->load->view('website/header');
        $this->load->view('website/fuel');
        $this->load->view('website/footer');

	}
	public function aircraft_scheduling_planning ()
	{
		$this->load->view('website/header');
        $this->load->view('website/aircraft_scheduling_planning');
        $this->load->view('website/footer');

	}
	public function crew_support ()
	{
		$this->load->view('website/header');
        $this->load->view('website/crew_support');
        $this->load->view('website/footer');

	}
	public function global_concierge ()
	{
		$this->load->view('website/header');
        $this->load->view('website/global_concierge');
        $this->load->view('website/footer');

	}
	public function business_jet ()
	{
		$this->load->view('website/header');
        $this->load->view('website/business_jet');
        $this->load->view('website/footer');

	}
	public function air_ambulance ()
	{
		$this->load->view('website/header');
        $this->load->view('website/air_ambulance');
        $this->load->view('website/footer');

	}
	public function commercial_charter ()
	{
		$this->load->view('website/header');
        $this->load->view('website/commercial_charter');
        $this->load->view('website/footer');

	}
	public function cargo_charter ()
	{
		$this->load->view('website/header');
        $this->load->view('website/cargo_charter');
        $this->load->view('website/footer');

	}
	public function training_services ()
	{
		$this->load->view('website/header');
        $this->load->view('website/training_services');
        $this->load->view('website/footer');

	}
	public function charter ()
	{
		$this->load->view('website/header');
        $this->load->view('website/charter');
        $this->load->view('website/footer');

	}
}
