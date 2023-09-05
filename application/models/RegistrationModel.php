<?php


class RegistrationModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }


  public function register()
  {
    $postData = $this->input->post(null, true);

    $insert = array(
      'company_name' => $postData['name'], 'company_mobile_number' => $postData['mobile'],
      'company_email' => $postData['email'], 'street_address' => $postData['address'],
      'Landmark' => $postData['landmark'], 'City' => $postData['city'], 'district' => $postData['district'],
      'state' => $postData['state'], 'pincode' => $postData['pincode'],
      'company_logo' => $postData['logo'], 'name' => $postData['name1'],
      'role' => $postData['role'],
      'mobile_number' => $postData['mobile1'], 'email' => $postData['email1'],
    );

    $this->db->insert('provider_registration_form', $insert);
  }





  public function database_login()
  {
    $postData = $this->input->post(null, true);
    $user_id = $postData['userID'];
    $password = $postData['password'];
    $query = "SELECT * FROM provider_login WHERE user_id='$user_id' AND password='$password'";
    $count = $this->db->query($query);
    return $count->result_array();
  }




  public function provider_detail()
  {
    $jobProviderId=$_SESSION['jobProviderId'];
    $provider = "SELECT * FROM `provider_registration_form` Where `id`= $jobProviderId";
    $select = $this->db->query($provider);
    return $select->result_array();

    // $seekerId=$_SESSION['seekerId'];
    // $provider = "SELECT * FROM `seeker_profile_form` WHERE `id` = $seekerId";
    // $select = $this->db->query($provider);
    // return $select->result_array();
  }





  public function update_data()
  {
    $postData = $this->input->post(null, true);
    $id = $postData['id'];
    $data = array(
      'company_name' => $postData['name'], 'company_mobile_number' => $postData['phno'],
      'company_email' => $postData['email'], 'street_address' => $postData['addr'],
      'Landmark' => $postData['landmark1'], 'City' => $postData['city1'], 'district' => $postData['district1'],
      'state' => $postData['state1'], 'pincode' => $postData['pincode1'],
      'company_logo' => $postData['file'], 'name' => $postData['name1'],
      'role' => $postData['role'],
      'mobile_number' => $postData['phno1'], 'email' => $postData['mail1'],

    );
    $this->db->where('id', $id);
    $this->db->update('provider_registration_form', $data);
  }






  public function addNew()
  {
    $post = $this->input->post(null, true);

    $add = array(
      'company_name' => $post['company_name'], 'job_category_id' =>  $post['category'],
      'jobCategory' => $post['category'], 'jobSubCategory' => $post['subcategory'],
      'job_sub_category_id' => $post['subcategory'], 'location' => $post['preferred_location'],
      'job_type' => $post['jobtype'], 'salary' => $post['expected_salary'],
      'experience' => $post['experience'], 'number_of_openings' => $post['no_of_openings'],
      'description' => $post['description']
    );

    $this->db->insert('provider_job', $add);
  }


  public function addTab()
  {
    $jobProviderId=$_SESSION['jobProviderId'];
    $providerAdd = "SELECT * FROM `provider_job` Where `jobProviderId`= $jobProviderId";
    $addtab = $this->db->query($providerAdd);
    return $addtab->result_array();


    // $jobProviderId=$_SESSION['jobProviderId'];
    // $provider = "SELECT * FROM `provider_registration_form` Where `id`= $jobProviderId";
    // $select = $this->db->query($provider);
    // return $select->result_array();
  }



  public function updatejob($id)
  {
    $update = "SELECT * FROM `provider_job` Where `id`=$id";
    $add = $this->db->query($update);
    return $add->result_array();

    
  }

  public function update_job()
  {
    $post = $this->input->post(null, true);
    $id = $post['id'];
    $addjob = array(
      'company_name' => $post['company_name'], 'job_category_id' =>  $post['category'],
      'jobCategory' => $post['category'], 'jobSubCategory' => $post['subcategory'],
      'job_sub_category_id' => $post['subcategory'], 'location' => $post['preferred_location'],
      'job_type' => $post['jobtype'], 'salary' => $post['expected_salary'],
      'experience' => $post['experience'], 'number_of_openings' => $post['no_of_openings'],
      'description' => $post['description']
    );
    $this->db->where('id', $id);
    $this->db->update('provider_job', $addjob);
  }


  public function deleteAddJob($deleteId)
  {

    $delete = "DELETE FROM `provider_job` WHERE `id`=$deleteId";
    $del = $this->db->query($delete);
    // $this->db->where('id', $deleteId);
  }




  //   public function joinTables($jobCategory)
  //   {
  //       $query = "SELECT spf.id as id, spf.name as name, sed.educational_qualification as eq, sed.percentage as per, sk.experience as exp, sk.skill as skill,
  //                 saoi.id as id, saoi.other_interst_category as oic FROM seeker_profile_form spf INNER JOIN seeker_educational_details sed ON sed.id = spf.id INNER JOIN seeker_skill sk ON sk.id = spf.id INNER JOIN seeker_area_of_interst saoi ON saoi.id=spf.id WHERE  saoi.other_interst_category = '".$jobCategory."'";
  //       $result = $this->db->query($query);
  //       return $result->result();
  //   }

  public function candidates($jobCategory)
  {
    $query = "SELECT spf.id as id, spf.name as name, sed.educational_qualification as eq, sed.percentage as per, sk.experience as exp, sk.skill as skill,
        saoi.id as id, saoi.other_interst_category as oic FROM seeker_profile_form spf INNER JOIN seeker_educational_details sed ON sed.id = spf.id INNER JOIN seeker_skill sk ON sk.id = spf.id INNER JOIN seeker_area_of_interst saoi ON saoi.id=spf.id WHERE  saoi.other_interst_category = '" . $jobCategory . "'";
    $result = $this->db->query($query);
    return $result->result_array();
  }


  public function allTableJoin()
  {
    $allTableJoins = "SELECT 
                spf.id as id, 
                spf.name as name, 
                sed.educational_qualification as eq, 
                sed.department as dep ,
                sed.school_college_name as scn, 
                sed.percentage as per,
                sed.yearOfPassing as yop, 
                sk.skill as skill, 
                sk.experience as exp, 
                sk.skill_level as skl, 
                sp.projectName as PN, 
                sp.projectDuration as PD, 
                sp.roleInProject as rip, 
                sp.projectDes as PDDescription, 
                sp.skillsUsedInProject as skillsUsedInProject, 
                saoi.other_interst_category as oic, 
                saoi.other_sub_interst_category as osic, 
                saoi.prefered_location as pl, 
                saoi.experience as expe, 
                saoi.job_type as jt, 
                saoi.description as des, 
                saoi.expected_salary as es, 
                exde.other_category as oc, 
                exde.other_sub_category as osc, 
                exde.company_name as cn, 
                exde.job_role as jr, 
                exde.previous_employer_name as pen, 
                exde.previous_employer_mobile as pem, 
                exde.previous_employer_email as pee
            FROM seeker_profile_form spf
            INNER JOIN seeker_educational_details sed ON sed.id = spf.id 
            INNER JOIN seeker_skill sk ON sk.id = spf.id
            INNER JOIN seeker_projects sp ON sp.id = spf.id
            INNER JOIN seeker_area_of_interst saoi ON saoi.id = spf.id
            INNER JOIN seeker_experience exde ON exde.id = spf.id
            WHERE spf.id = $id";
    $results = $this->db->query($allTableJoins, array($id));
    return $result->result();
  }



  public function educationalDetails($id)
  {
    $education = "SELECT * FROM seeker_educational_details WHERE `seekerId`=$id";
    $seekerEducation = $this->db->query($education);
    return $seekerEducation->result_array();
  }

  public function skills($id)
  {
    $skills = "SELECT * FROM seeker_skill WHERE  `seekerId`=$id";
    $seekerSkill = $this->db->query($skills);
    return $seekerSkill->result_array();
  }

  public function projectDetails($id)
  {
    $projectDetails = "SELECT * FROM seeker_projects WHERE  `seekerId`=$id";
    $project = $this->db->query($projectDetails);
    return $project->result_array();
  }

  public function areaOfInterest($id)
  {
    $areaOfInterest = "SELECT * FROM seeker_area_of_interst WHERE  `seekerId`=$id";
    $areaOfInterest = $this->db->query($areaOfInterest);
    return $areaOfInterest->result_array();
  }

  public function experienceDetails($id)
  {
    $experienceDetails = "SELECT * FROM seeker_experience WHERE  `seekerId`=$id";
    $experienceDetails = $this->db->query($experienceDetails);
    return $experienceDetails->result_array();
  }

  public function candidate($id)
  {
    $seekerName = "SELECT * FROM seeker_profile_form WHERE  `id`=$id";
    $seekerName = $this->db->query($seekerName);
    return $seekerName->result_array();
  }


  public function matchedAllCandidate()
  {
    $allTableJoins = "SELECT spf.id as id, spf.name as name, sed.educational_qualification as eq, sed.percentage as per, sk.experience as exp, sk.skill as skill,
        saoi.id as id, saoi.other_interst_category as oic FROM seeker_profile_form spf INNER JOIN seeker_educational_details sed ON sed.id = spf.id INNER JOIN seeker_skill sk ON sk.id = spf.id INNER JOIN seeker_area_of_interst saoi ON saoi.id=spf.id";
    $result = $this->db->query($allTableJoins);
    return $result->result_array();
  }

  public function filterCandidate($jobCategory, $jobSubCategory)
  {
    $query = "SELECT spf.id as id, spf.name as name, sed.educational_qualification as eq, sed.percentage as per, sk.experience as exp, sk.skill as skill,
        saoi.id as id, saoi.other_interst_category as oic, saoi.other_sub_interst_category as osic  FROM seeker_profile_form spf INNER JOIN seeker_educational_details sed ON sed.id = spf.id INNER JOIN seeker_skill sk ON sk.id = spf.id INNER JOIN seeker_area_of_interst saoi ON saoi.id=spf.id WHERE  saoi.other_interst_category = '" . $jobCategory . "' AND  saoi.other_sub_interst_category = '" . $jobSubCategory . "'";
    $result = $this->db->query($query);
    return $result->result_array();
  }





















  // public function getFilteredRecords($category, $subcategory) {
  //         $this->db->select('*');
  //         $this->db->from('seeker_area_of_interst'); 

  //         if (!empty($category)) {
  //             $this->db->where('category', $category);
  //         }

  //         if (!empty($subcategory)) {
  //             $this->db->where('subcategory', $subcategory);
  //         }

  //         $query = $this->db->get();
  //         return $query->result();
  //     }











}
