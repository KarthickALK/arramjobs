<?php
class Reg extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phonenumber = $this->input->post('phonenumber');
        
        $insert = array(
            'name' => $name,
            'email' => $email,
            'phonenumber' => $phonenumber
        );

        $this->db->insert('registration_form', $insert);
    }
}
?>
