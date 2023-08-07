<?php
class educationalModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register()
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
}
?>
