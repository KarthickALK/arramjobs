<?php


    class RegistrationModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();

            
        }


         public function login()
        { 
            $postData=$this->input->post(null,true);

           $insert=array('user_id' => $postData['userID'], 'password' => $postData['password']);

           $this->db->insert('provider_login_form',$insert);
       }



       public function register()
       {
           $postData1=$this->input->post(null,true);
           
           $insert=array('company_name' => $postData1['name'], 'company_mobile_number' =>$postData1['mobile'],
                           'company_email' =>$postData1['email'], 'street_address' =>$postData1['address'],
                           'Landmark' =>$postData1['landmark'],'City' =>$postData1['city'], 'district' =>$postData1['district'],
                           'state' =>$postData1['state'], 'pincode' =>$postData1['pincode'],
                           'company_logo' =>$postData1['logo'], 'name' =>$postData1['name1'], 
                           'role' =>$postData1['role'],
                           'mobile_number' =>$postData1['mobile1'], 'email' =>$postData1['email1'],
                       );

           $this->db->insert('provider_registration_form',$insert);
        }

        
      

        
       

     
    }
?>