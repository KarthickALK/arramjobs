<?php
class Registermodel extends CI_Model
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
        $dateofbirth=$this->input->post('dob');
        $address=$this->input->post('address');
        $district=$this->input->post('district');
        
        $insert = array(
            'name' => $name,
            'email' => $email,
            'phonenumber' => $phonenumber,
            'dateofbirth'=>$dateofbirth,
            'address'=>$address, 
            'district'=>$district   
           );

        $this->db->insert('registration_form', $insert);
    }
}
?>
