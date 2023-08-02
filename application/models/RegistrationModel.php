<?php
// class RegistrationModel extends  CI_Model  {

//     public function __construct() {
//         parent::__construct();
   
//         $this->load->view('provider-registration');
//          $this->load->model('RegistrationModel');
//     }   

//     public function register() {
//         $data = array(
//             'company_name' => $this->input->post('name'),
//             'company_mobile_number' => $this->input->post('phno'),
//             'company_email' => $this->input->post('email'),
//             'company_address' => $this->input->post('addr'),
//             'company_logo' =>$this->input->post('file'),
//             'name'=>$this->input->post('name1'),
//             'mobile_number' =>$this->input->post('phno1'),
//             'email' =>$this->input->post('mail1'),
//             'role' =>$this->input->post('role')
//         );

//         $inserted_id = $this->RegistrationModel->insert_data($data);

//         if ($inserted_id) {
//             echo "Data inserted with ID: " . $inserted_id;
//         } else {
//             echo "Failed to insert data.";
//         }
//     }

//}

    // class RegistrationModel extends CI_Model
    // {
    //     function saverecords($data)
    //     {
    //         $this->db->insert('provider_registration_form',$data);
    //         return true;
    //     }

        
        
    // }


    class RegistrationModel extends CI_Model
    {
        
         public function insert_data()
        {
            $data = array('company_name'=>$this->input->post('name'),
                          'company_mobile_number'=>$this->input->post('phno'),
                          'company_email'=>$this->input->post('email'),
                          'company_address'=>$this->input->post('addr'),
                          'company_logo'=>$this->input->post('file'),
                          'name'=>$this->input->post('name1'),
                          'mobile_number'=>$this->input->post('phno1'),
                          'email'=>$this->input->post('mail1'),
                          'role'=>$this->input->post('role') );     
        }
            // $this->db->insert('register',$data)
            
        
        
    }
?>