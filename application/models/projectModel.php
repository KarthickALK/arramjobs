<?php
class projectModel extends CI_Model
{ 
public function __construct()
    {
        parent::__construct();
    }

    // public function login()
    // {
    //     $phonenumber=$this->input->post('phonenumber');

    //     $insert = array(
    //         "phonenumber" => $phonenumber
    //     );
    //     $this->db->insert('seeker_profile_form', $insert);
    // }
 
    public function checkUserExistence($phonenumber)
{
    $this->db->where('phonenumber', $phonenumber);
    $query = $this->db->get('seeker_profile_form');
    return $query->num_rows() > 0;
}

    public function otp()
    {
        $otp = $this->input->post('otp');

        $insert = array(
            'otp' => $otp
        
        );

        $this->db->insert('seeker_otp', $insert);
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

        $this->db->insert('seeker_profile_form', $insert);
        
        $seekerId = $this->db->insert_id();

        $educationData = array(
            'seekerId' => $seekerId, 
        );
        $this->db->insert('seeker_educational_details', $educationData);

    }
    public function getUserData($phonenumber)
    {
        $this->db->where('phonenumber', $phonenumber);
        $query = $this->db->get('seeker_profile_form');
        $userData = $query->row_array();
        
        // Debug statement
        print_r($userData);
        
        return $userData; // Return a single row as an associative array
    }
    


public function basicdetails($phonenumber)
{
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $dateofbirth = $this->input->post('dob');
    $gender = $this->input->post('gender');
    $doorno = $this->input->post('doorno');
    $streetaddress = $this->input->post('streetaddress');
    $landmark = $this->input->post('landmark');
    $pincode = $this->input->post('pincode');
    $maritalstatus = $this->input->post('maritalstatus');
    $aadharFrontPhoto = $this->input->post('aadharfrontphoto');
    $aadharBackPhoto = $this->input->post('aadharbackphoto');
    $Photo = $this->input->post('photo');
    

    // Update query to modify the existing user's data
    $updateData = array(
        'name' => $name,
        'email' => $email,
        'dateofbirth' => $dateofbirth,
        'gender' => $gender,
        'doorno' => $doorno,
        'address' => $streetaddress,
        'landmark' => $landmark,
        'pincode' => $pincode,
        'maritalstatus' => $maritalstatus,
        'aadhar_front' => $aadharFrontPhoto,
        'aadhar_back' => $aadharBackPhoto,
        'photo' => $Photo
    );

    // Update the existing user's data based on their phone number
    $this->db->where('phonenumber', $phonenumber);
    $this->db->update('seeker_profile_form', $updateData);
}

    public function education(){
        $qualification=$this->input->post('qualification');
        $department=$this->input->post('department');
        $schoolname=$this->input->post('school');
        $percentage=$this->input->post('percentage');
        $yearpassed=$this->input->post('year_passed');

        $insert = array(
            'educational_qualification'=>$qualification,
            'department'=>$department,
            'school_college_name'=>$schoolname,
            'percentage'=>$percentage,
            'yearOfPassing'=>$yearpassed
        );
        
        $this->db->insert('seeker_educational_details', $insert);
    }
    public function experience(){
        $category=$this->input->post('category');
        $subcategory=$this->input->post('subcategory');
        $othercategory=$this->input->post('othercategory');
        $othersubcategory=$this->input->post('othersubcategory');
        $experience=$this->input->post('experience');
        $companyname=$this->input->post('companyname');
        $role=$this->input->post('role');
        $nameoftheemployer=$this->input->post('nameofemployer');
        $phonenumber=$this->input->post('number');
        $email=$this->input->post('emailid');

        $insert = array(
            'job_category_id'=>$category,
            'job_sub_category_id'=>$subcategory,
            'other_category'=>$othercategory,
            'other_sub_category'=>$othersubcategory,
            'experience'=>$experience,
            'company_name'=>$companyname,
            'job_role'=>$role,
            'previous_employer_name'=>$nameoftheemployer,
            'previous_employer_mobile'=>$phonenumber,
            'previous_employer_email'=>$email,

        );
        $this->db->insert('seeker_experience', $insert);
        
    }

    public function project(){
        $projectname=$this->input->post('projectname');
        $durationofproject=$this->input->post('durationofproject');
        $roleinproject=$this->input->post('roleofproject');
        $responsibility=$this->input->post('responsibility');
        $skillsused=$this->input->post('skillsused');

        $insert=array(
            'projectName'=>$projectname,
            'projectDuration'=>$durationofproject,
            'roleInProject'=>$roleinproject,
            'projectDes'=>$responsibility,
            'skillsUsedInProject'=>$skillsused
        );
        $this->db->insert('seeker_projects',$insert);

    }

    public function area()
    {
        $categoryArray = $this->input->post('category');
        $subcategoryArray = $this->input->post('subcategory');
        $othercategoryArray = $this->input->post('customCategoryInput');
        $othersubcategoryArray = $this->input->post('customSubcategoryInput');
        $locationArray = $this->input->post('preferred-location');
        $experienceArray = $this->input->post('experience');
        $descriptionArray = $this->input->post('description');
        $parttimeArray = $this->input->post('part-time');
        $fulltimeArray = $this->input->post('full-time');
        $expected_salaryArray = $this->input->post('expected-salary');
        
        // Process and insert data for each set of inputs
        foreach ($categoryArray as $index => $category) {
            $subcategory = $subcategoryArray[$index];
            $othercategory = $othercategoryArray[$index];
            $othersubcategory = $othersubcategoryArray[$index];
            $location = $locationArray[$index];
            $experience = $experienceArray[$index];
            $description = $descriptionArray[$index];
            $parttime = isset($parttimeArray[$index]) ? 1 : 0;
            $fulltime = isset($fulltimeArray[$index]) ? 1 : 0;
            $expected_salary = $expected_salaryArray[$index];
    
            // Create a JSON-encoded array for job type
            $jobType = json_encode(array(
                'part_time' => $parttime,
                'full_time' => $fulltime
            ));
    
            // Insert data into the database for each set of inputs
            $insertData = array(
                'interst_category_id' => $category,
                'interst_sub_category_id' => $subcategory,
                'other_interst_category' => $othercategory,
                'other_sub_interst_category' => $othersubcategory,
                'prefered_location' => $location,
                'experience' => $experience,
                'description' => $description,
                'job_type' => $jobType,
                'expected_salary' => $expected_salary
            );
    
            $this->db->insert ('seeker_area_of_interst', $insertData);
        }
    }
    
    
    public function skill(){
        $skillname=$this->input->post('skillName');
        $experience=$this->input->post('experience');
        $skilllevel=$this->input->post('skilllevel');

        $insert=array(
            'skill'=>$skillname,
            'experience'=>$experience,
            'skill_level'=>$skilllevel
        );
        $this->db->insert('seeker_skill', $insert);
    }
    public function resume(){
        $resume=$this->input->post('resumeFile');

        $insert=array(
            'resume'=>$resume
        );
        $this->db->insert('seeker_skill',$insert);
    }
    
}
    ?>

