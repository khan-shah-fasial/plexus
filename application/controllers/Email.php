<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	 public function __construct(){
        parent::__construct();

        $this->load->model('email_model');
        $config['protocol'] = 'imap';
        $config['smtp_host'] = 'outlook.office365.com';
        $config['smtp_crypto'] = 'ssl';
        $config['smtp_port'] = '993';
        $config['smtp_user'] = 'info@plexusaviation.in';
        $config['smtp_pass'] = 'Mup37234';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $this->email->initialize($config);
        $config['validation'] = TRUE; // bool whet
        $this->email->set_newline("\r\n");
    	
    }
    public function contact_email(){
        if($this->input->post('isAjax')==1)
            {
                $this->form_validation->set_rules('name','Conatct name', 'required');
                $this->form_validation->set_rules('email','Contact Email', 'required');
                $this->form_validation->set_rules('subject','Contact Email', 'required');
                $this->form_validation->set_rules('message','Contact message','required');
            }
            if ($this->form_validation->run() == FALSE)
                    {
                        echo json_encode($this->form_validation->error_array());
                        exit;
                    }
            else{
                $mail['email'] = $this->input->post('email');
                $mail['name'] = $this->input->post('name');
                $mail['subject'] = $this->input->post('subject');
                $mail['phone'] = $this->input->post('phone');
                $mail['message'] = $this->input->post('message');
               
                $this->email->from($this->input->post('email'), 'Plexus Contact Form Inquiry');
                $this->email->to('info@plexusaviation.in');
                $this->email->subject($mail['subject']);
                $this->email->message('Name:'.$mail['name'].      '     Email:'.$mail['email'].'       phone:'.$mail['phone'].'        Message:  '.$mail['message']);
            
               if($this->email->send())
               {
                    echo 1;
                    exit;
               }
               else{
                echo 123;
                exit;
               }
            }
    }
  
   

    public function service_email(){
        if($this->input->post('isAjax')==1)
            {
                $this->form_validation->set_rules('name','Conatct name', 'required');
                $this->form_validation->set_rules('email','Contact Email', 'required');
                $this->form_validation->set_rules('phone','Contact Phone','required');
                $this->form_validation->set_rules('departure','departure','required');
                $this->form_validation->set_rules('destination','Contact destination','required');
                $this->form_validation->set_rules('timed','ETD (UTC) Departure Time','required');
                $this->form_validation->set_rules('timea','ETA (UTC) Arrival Time' ,'required');
                $this->form_validation->set_rules('flight_purpose','Flight Purpose','required');
                $this->form_validation->set_rules('flight_category','Flight Category','required');
                $this->form_validation->set_rules('remark','Contact remark','required');
            }
          
            if ($this->form_validation->run() == FALSE)
                    {
                        echo json_encode($this->form_validation->error_array());
                        exit;
                    }
            else{
                $mail['email'] = $this->input->post('email');
                $mail['name'] = $this->input->post('name');
                $mail['phone'] = $this->input->post('phone');
                $mail['departure'] = $this->input->post('message');
                $mail['destination'] = $this->input->post('email');
                $mail['timed'] = $this->input->post('name');
                $mail['timea'] = $this->input->post('phone');
                $mail['flight_purpose'] = $this->input->post('message');
                $mail['flight_category'] = $this->input->post('email');
                $mail['remark'] = $this->input->post('name');
               
               
                $this->email->from($this->input->post('email'), 'Plexus Contact Inquiry');
                $this->email->to('info@plexusaviation.in');
                $this->email->subject('Plexus Contact Form Inquiry');
                $this->email->message(
                 'Name:'.$mail['name'].'     
                  Email:'.$mail['email'].'
                  phone:'.$mail['phone'].'
                  departure:'.$mail['departure'].'
                  destination:'.$mail['destination'].'
                  timed:'.$mail['timed'].'
                  timea:'.$mail['timea'].' 
                  flight_purpose:'.$mail['flight_purpose'].'     

                  remark:  '.$mail['remark'
                ]);
               
               if($this->email->send())
               {
                    echo 1;
                    exit;
               }
            }
 
    }
    
 


 
    

}