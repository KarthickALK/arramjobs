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
                           'company_email' =>$postData['email'], 'street_address' =>$postData['address'],
                           'Landmark' =>$postData['landmark'],'City' =>$postData['city'], 'district' =>$postData['district'],
                           'state' =>$postData['state'], 'pincode' =>$postData['pincode'],
                           'company_logo' =>$postData['logo'], 'name' =>$postData['name1'], 
                           'role' =>$postData['role'],
                           'mobile_number' =>$postData['mobile1'], 'email' =>$postData['email1'],
                       );

           $this->db->insert('provider_registration_form',$insert);
        }



       
            public function update_profile_data($data) {
                $this->db->where('user_id', $user_id); // Assuming you have a field 'user_id'
                $this->db->update('users', $data);
            }
        
        







//      public function login()
    //     { 
    //         $postData=$this->input->post(null,true);

    //        $insert=array('user_id' => $postData['userID'], 'password' => $postData['password']);

    //        $this->db->insert('provider_login_form',$insert);
    //    }


        
      

        
       

     
    }
?>