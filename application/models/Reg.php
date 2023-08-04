<?php
class Reg extends CI_Model {
//     private $reg;

// public function __construct() {
//     parent::__construct();
//     $this->load->model('Reg');
// }


  function registration_records($data) {
//     if (&this->input->post('Submit')) {
//         $name = $this->input->post('name');
//         $email = $this->input->post('email');
//         $phonenumber = $this->input->post('phonenumber');

//         $data = array(
//             'fullname' => $name,
//             'email' => $email,
//             'phonenumber' => $phonenumber,
//         );

        $response =$this->db->insert('registration_form', $data);

        if ($response) {
            echo 'registration_successful'; 
        } 
        else {
            echo "Failed: " . $this->db->error();
        }
    }
}
   
}
?>
