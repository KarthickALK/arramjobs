<?php
class ProfileformModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        $educationalqualification = $postData['educational_qualification'];
        $department = $postData['department'];
        $skills = $postData['skills'];
        $experience = $postData['experience'];
        $areaofinterest = $postData['interest'];
        $resume = $postData['resume'];
        $aadharfrontphoto = $postData['aadharfrontphoto'];
        $aadharbackphoto = $postData['aadharbackphoto'];
        $photo = $postData['photo'];

        $insert = array(
            'educationalqualification' => $educationalqualification,
            'department' => $department,
            'skills' => $skills,
            'experience' => $experience,
            'areaofinterest' => $areaofinterest,
            'resume' => $resume,
            'aadharfrontphoto' => $aadharfrontphoto,
            'aadharbackphoto' => $aadharbackphoto,
            'photo' => $photo 
        );

        $this->db->insert('profile_form', $insert);
    }
}
?>
