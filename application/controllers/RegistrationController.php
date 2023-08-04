<?php
class RegistrationController extends CI_Controller {

public function register() {
$this->load->view('profileform');
}

$response = $this->Registration_model->insert_registration_data($data);
 if ($response == true) {
     echo "Registration successful";
    } else {
        echo "Failed";
     }

public function insert_registration_data($data) {
    $this->db->insert('registration_form', $data);
    return true;
}
}
?> 


