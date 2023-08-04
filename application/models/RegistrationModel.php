<?php


    class RegistrationModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();

            
        }

        public function register()
        {
            $postData=$this->input->post(null,true);
            
            $insert=array('company_name' => $postData['name'], 'company_mobile_number' =>$postData['mobile'],
                            'company_email' =>$postData['email'], 'company_address' =>$postData['address'],
                            'company_logo' =>$postData['logo'], 'name' =>$postData['name1'], 
                            'mobile_number' =>$postData['mobile1'], 'email' =>$postData['email1'],
                            'role' =>$postData['role']);

            $this->db->insert('provider_registration_form',$insert);

    
        }
    }
?>