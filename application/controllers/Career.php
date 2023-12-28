<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('website_model');
    }

        public function index()

        {

                $this->load->view('website/header');
                $this->load->view('website/career');
                $this->load->view('website/footer');       
        }

        public function applyforjob()
        {
        
                        
                        $this->form_validation->set_rules('name', 'Name','required');
                        $this->form_validation->set_rules('email', 'Email','valid_email');
                        $this->form_validation->set_rules('phone', 'Phone','required');
                        $this->form_validation->set_rules('message', 'message','required');
                        if ($this->form_validation->run() == FALSE)
                        {
                                echo json_encode($this->form_validation->error_array());
                                exit;
                        }
                        else
                        {

                                $post = $this->input->post();
                                $insertStaff = array('cname' =>$post['name'],'cemail'=>$post['email'],'cphone'=>$post['phone'],'cmsg'=>$post['message'],'c_status'=>'1');
                               

                                if($_FILES['resume']['error']!='4')
                                {
                                        $config['upload_path']   = './upload/';
                                        $config['allowed_types'] = 'jpeg|jpg|png|JPEG|JPG|PNG|PDF|pdf|doc|Doc';
                                        $this->load->library('upload', $config);
                                
                                        $this->upload->initialize($config);
                                        $this->upload->overwrite = true;
                
                                        if ( ! $this->upload->do_upload('resume'))
                                                {

                                                $error = array('error' => $this->upload->display_errors());
                                                         echo json_encode($error);
                                                        exit;
                                                }
                                        else
                                        {
                                                $staffimg_data = array('upload_data' => $this->upload->data());
                                                $insertStaff['c_image'] = $staffimg_data['upload_data']['file_name'];
                                                                
                                        }
                                }
                                // print_r($insertStaff);
                                $res = $this->db->insert('career',$insertStaff);
                                if($res)
                                        {
                                         echo 1; exit;
                                        }
                                else
                                {
                                         echo 2; exit;
                                }

                        }
                


        }

}