<?php
class RegController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Reg");
    }
    public function register() {
        $this->load->view('registrationform');
    }
    function process_registration() {
        if (&this->input->post('Submit')) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phonenumber = $this->input->post('phonenumber');
    
            $data = array(
                'fullname' => $name,
                'email' => $email,
                'phonenumber' => $phonenumber,
                'dateofbirth'=>'',
                'address'=>'',
            );

            $result=$this->Reg->registration_records($data);

    // public function insert_registration_data($data) {
    
    //     $this->db->insert('registration_form', $data);
    //     return true;
// }
    }
}
}
?>
