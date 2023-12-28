<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career_details extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function index()
    {
       $adminSession = $this->session->userdata('userid');
                if(empty($adminSession) || $this->session->userdata('adminStatus')=='2')
                {
                        redirect(base_url().'admin');
                }
                else
                {
                    $data['career'] = $this->admin_model->select_career();
                    $this->load->view('admin/header');
                    $this->load->view('admin/sidebar');
                    $this->load->view('career/career_detail',$data);
                    $this->load->view('admin/footer');

                }
    }
}