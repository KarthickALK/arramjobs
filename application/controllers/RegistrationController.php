<?php
class RegistrationController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('RegistrationModel');
    }

    public function register() {
        $data = array(
            'name' => $this->input->post('name'),
            'mobile_number' => $this->input->post('phno'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('addr'),
            'logo' =>$this->input->post('file'),
            'name1'=>$this->input->post('name1'),
            'mobile_number1' =>$this->input->post('phno1'),
            'mail1' =>$this->input->post('mail1'),
            'role' =>$this->input->post('role')
        );

        $inserted_id = $this->RegistrationModel->insert_data($data);

        if ($inserted_id) {
            // Data successfully inserted
            echo "Data inserted with ID: " . $inserted_id;
        } else {
            // Failed to insert data
            echo "Failed to insert data.";
        }
    }

}
