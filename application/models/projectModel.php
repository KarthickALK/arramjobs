<?php
class projectModel extends CI_Model
{ 
public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $phonenumber = $this->input->post('phonenumber');

            $insert = array(
                'phonenumber' => $phonenumber
            );

            $this->db->insert('login_form', $insert);
    }

    public function otp()
    {
        $otp = $this->input->post('otp');

        $insert = array(
            'otp' => $otp
        
        );

        $this->db->insert('otp', $insert);
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

    public function profregister()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phonenumber = $this->input->post('phonenumber');
        $dateofbirth=$this->input->post('dob');
        $address=$this->input->post('address');
        $district=$this->input->post('district');
        
        $insert = array(
            'name'=>$name,
            'email'=>$email,
            'phonenumber'=>$phonenumber,
            'dateofbirth'=>$dateofbirth,
            'address'=>$address,
            'district'=>$district
        );

        $this->db->insert('registration_form', $insert);
    }
    public function eduregister()
    {
        $educational_qualification = $this->input->post('educational_qualification');
        $department = $this->input->post('department');
        $skills = $this->input->post('skills');
        $experience=$this->input->post('experience');
        $areaofinterest=$this->input->post('interest');
        $resume=$this->input->post('resume');
        
        $insert = array(
            'educational_qualification'=>$educational_qualification,
            'department'=>$department,
            'skills'=>$skills,
            'experience'=>$experience,
            'areaofinterest'=>$areaofinterest,
            'resume'=>$resume
        );

        $this->db->insert('educational_details', $insert);
    }
    public function idenregister()
    {
        $aadharfrontphoto = $this->input->post('aadharfrontphoto');
        $aadharbackphoto = $this->input->post('aadharbackphoto');
        $photo = $this->input->post('photo');
        
        $insert = array(
            'aadharfrontphoto' => $aadharfrontphoto,
            'aadharbackphoto' => $aadharbackphoto,
            'photo' => $photo
        );

        $this->db->insert('identification', $insert);
    }
}
    ?>

