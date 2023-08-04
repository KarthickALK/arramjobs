<?php 
class Registration_model extends CI_Model{

public function __construct() {
    parent::__construct();
    $this->load->model('Registration_model');
}

public function register() {
    $this->load->view('profileform');
}

public function process_registration() {
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phonenumber = $this->input->post('phonenumber');
    $dob = $this->input->post('dob');
    $address = $this->input->post('address');  
    $district = $this->input->post('district'); 

    $data = array(
        'fullname' => $name,
        'email' => $email,
        'phonenumber' => $phonenumber,
        'dateofbirth' => $dob,
        'address' => $address,
        'district' => $district 
    );
    

    $response = $this->Registration_model->insert_registration_data($data);
    if ($response == true) {
        echo "Registration successful";
    } else {
        echo "Failed";
     }
    }
}
 ?> 



