<?php
    // class registration extends CI_Controller
    // {
    //     public function __construct()
    //     {
    //         parent::__construct();
    //         $this->load->database();
    //         $this->load->model('registrationmodel');
    //         $this->load->helper('url');
    //     }
    //     public function savedata()
    //     {
    //         $this->load->view('provider-registration');
    //         if($this->input->post('save'))
    //         {
    //             $data['company_name']=$this->input->post('name');
    //             $data['company_mobile_number']=$this->input->post('phno');
    //             $data['company_email']=$this->input->post('email');
    //             $data['company_address']=$this->input->post('addr');
    //             $data['company_logo']=$this->input->post('file');
    //             $data['name']=$this->input->post('name1');
    //             $data['mobile_number']=$this->input->post('phno1');
    //             $data['email']=$this->input->post('mail1');
    //             $data['role']=$this->input->post('role');
    //             $response=$this->RegistrationModel->saverecords($data);
    //             if( $response==true)
    //             {
    //                 echo "Inserted successfully";
    //             }
    //             else{
    //                 echo "Insert Failed";
    //             }
    //          }
    //     }
    // }
    class registration extends CI_Controller
    {
        public function provider_registration()
        {
            $this->load->view('provider-registration');
        }
        public function register()
        {
            $this->load->model('RegistrationModel');
            $this->RegistrationModel->insert_data();
             $this->provider_registration();
            //  $this->register();
            
        }
        
       
        
    }



?>