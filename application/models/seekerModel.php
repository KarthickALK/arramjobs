 <?php
    class SeekerModel extends CI_Model
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

        public function seekerLogin()
        {
            $postData = $this->input->post(null, true);
            $username = $postData['username'];
            $phonenumber = $postData['phonenumber'];
            $query = "SELECT * FROM seeker_profile_form WHERE name='$username' AND phonenumber='$phonenumber'";
            $count = $this->db->query($query);
            return $count->result_array();
        }


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
        }

        public function getUserData($phonenumber)
        {
            $this->db->where('phonenumber', $phonenumber);
            $query = $this->db->get('seeker_profile_form');
            $userData = $query->row_array();


            print_r($userData);

            return $userData;
        }


        public function getBasicDetails()
        {
            $seekerId=$_SESSION['seekerId'];
            $provider = "SELECT * FROM `seeker_profile_form` WHERE `id` = $seekerId";
            $select = $this->db->query($provider);
            return $select->result_array();
        }



        public function updateBasicDetails()
        {
            $postData = $this->input->post(null, true);
            // var_dump($postData);

            // Update query to modify the existing user's data
            $updateData = array(
                'name' => $postData['name'],
                'email' => $postData['email'],
                'dateofbirth' => $postData['dateofbirth'],
                'gender' => $postData['gender'],
                'buildingName' => $postData['doorno'],
                'address' => $postData['streetaddress'],
                'landmark' => $postData['landmark'],
                'pincode' => $postData['pincode'],
                'maritalstatus' => $postData['maritalstatus'],
                // 'aadhar_front' => $postData['aadharfrontphoto'],
                // 'aadhar_back' => $postData['aadharbackphoto'],
                // 'photo' => $postData['photo']
            );
            $this->db->where('id', $postData['id']);

            $config['upload_path']="./uploads/";
            $config['allowed_types']="jpg|png|pdf";
            $config['max_size']=2048;
            $config['width']=1024;
            $config['height']=768;

            $this->load->library('upload',$config);
           
            if(!$this->upload->do_upload('aadharfrontphoto'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('seekerView.php',$error);
                // $data = $this->upload->data();
               
            }
            if(!$this->upload->do_upload('aadharbackphoto'))
           
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('seekerView.php',$error);
                // $data = $this->upload->data();
            }
            if(!$this->upload->do_upload('photo'))
            
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('seekerView.php',$error);
                // $data = $this->upload->data();
            }
            else{
                $data = array('data' => $this->upload->data());
                // $error = $this->upload->display_errors();
            }
            
            

            $result = $this->db->update('seeker_profile_form', $updateData);
        }

        public function uploadAAdhar(){
            
        }

        // public function updateEducationalDetails()
        // {
        //     $formData = $this->input->post(null, true);
        //     $seekerId = '107'; // You should get this from the user session or input

        //     // Retrieve existing educational details for the user
        //      $existingEducationalDetails = $this->getEducationalDetails($seekerId);

        //     foreach ($formData['school'] as $index => $school) {
        //         $educationalQualification = isset($formData['qualification'][$index])
        //             ? $formData['qualification'][$index]
        //             : $existingEducationalDetails[$index]['educational_qualification'];

        //         $department = isset($formData['department'][$index])
        //             ? $formData['department'][$index]
        //             : $existingEducationalDetails[$index]['department'];

        //         $insertData = array(
        //             'seekerId' => $seekerId,
        //             'educational_qualification' => $educationalQualification,
        //             'department' => $department,
        //             'school_college_name' => $school,
        //             'percentage' => $formData['percentage'][$index],
        //             'yearOfPassing' => $formData['year_passed'][$index]
        //         );

        //         // Update or insert educational entry
        //         if (isset($existingEducationalDetails[$index])) {
        //             $this->db->where('id', $existingEducationalDetails[$index]['id']);
        //             $this->db->update('seeker_educational_details', $insertData);
        //         } else {
        //             $this->db->insert('seeker_educational_details', $insertData);
        //         }
        //     }
        // }

        public function getEducationalDetails()
        {
            $seekerId=$_SESSION['seekerId'];
            $provider = "SELECT * FROM `seeker_educational_details` WHERE `seekerId` = $seekerId";
            $select = $this->db->query($provider);
            return $select->result_array();

           
            // $this->db->where('seekerId', $seekerId);
            // $query = $this->db->get('seeker_educational_details');
            // return $query->result_array();
        }
        // public function updateEducationDetails()
        // {
        //     $postData = $this->input->post(null, true);
        //     $updateEducation = array(
        //         'educational_qualification' =>  $postData['qualification[]'],
        //         'department' => $postData['department[]'],
        //         'school_college_name' => $postData['school[]'],
        //         'percentage' => $postData['percentage[]'],
        //         'yearOfPassing' => $postDatta['year_passed[]']
        //     );
        //     $this->db->where('id', $postData['id']);
        //     $result = $this->db->update('seeker_educational_details',$updateEducation);
        // }

        public function updateEducationDetails(){
            
            $postData = $this->input->post(null, true);
            
            $updateData = array(
                'educational_qualification' => $postData['qualification'],
                'department' => $postData['department'],
                'school_college_name' => $postData['school'],
                'percentage' => $postData['percentage'],
                'yearOfPassing' => $postData['year_passed'],
            );
            $this->db->where('id', $postData['id']);
            $result = $this->db->update(' seeker_educational_details', $updateData);
        }

       


        public function getExperienceDetails(){

            // $seekerId=$_SESSION['seekerId'];
            // $provider = "SELECT * FROM `seeker_experience` WHERE `seekerId` = 1";
            // $select = $this->db->query($provider);
            // return $select->result_array();
           
            $seekerId=$_SESSION['seekerId'];
            $provider = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
            $select = $this->db->query($provider);
            return $select->result_array();
         }

        public function updateExperienceDetails()
        {
            $postData = $this->input->post(null, true);
            
            $updateData = array(
                
                'other_category' => $postData['category'],
                'other_sub_category' => $postData['subcategory'],
                'experience' => $postData['experience'],
                'company_name' => $postData['companyname'],
                'job_role' => $postData['role'],
                'previous_employer_name' => $postData['nameofemployer'],
                'previous_employer_mobile' => $postData['number'],
                'previous_employer_email' => $postData['emailid'],
            );
            $this->db->where('id', $postData['id']);
            $result = $this->db->update(' seeker_experience', $updateData);
           
            // $postData = $this->input->post(null, true);
            // $id = $postData['id'];
            // $data = array(
            //   'experience' => $postData['experience'], 'other_category' => $postData['category'],
            //   'other_sub_category' => $postData['subcategory'], 'company_name' => $postData['companyname'],
            //   'job_role' => $postData['role'], 'previous_employer_name' => $postData['nameofemployer'], 'previous_employer_mobile' => $postData['number'],
            //   'previous_employer_email' => $postData['emailid']
        
            // );
            // $this->db->where('id', $id);
            // $this->db->update('seeker_experience', $data);

        }


        
        // public function updateExperienceDetails($formData)
        // {
        //     // $seekerId = '107';
        //     $seekerId=$_SESSION['seekerId'];
        //     // $existingExperienceDetails = $this->getExperienceDetails($seekerId);

        //     // Clean the data
        //     $insertData = array(
        //         'seekerId' => $seekerId,
        //         'job_category_id' => $formData['category'],
        //         'job_sub_category_id' => $formData['subcategory'],
        //         'other_category' => $formData['othercategory'],
        //         'other_sub_category' => $formData['othersubcategory'],
        //         'experience' => $formData['experience'],
        //         'company_name' => $formData['companyname'],
        //         'job_role' => $formData['role'],
        //         'previous_employer_name' => $formData['nameofemployer'],
        //         'previous_employer_mobile' => $formData['number'],
        //         'previous_employer_email' => $formData['emailid'],
        //     );

        //     if (!empty($existingExperienceDetails)) {
        //         // Update only the non-empty fields
        //         foreach ($insertData as $key => $value) {
        //             if (!empty($value)) {
        //                 $this->db->set($key, $value);
        //             }
        //         }
        //         $this->db->where('seekerId', $seekerId);
        //         $this->db->update('seeker_experience');
        //     } else {
        //         // Insert new experience entry
        //         $this->db->insert('seeker_experience', $insertData);
        //     }
        // }

        // public function getExperienceDetails($seekerId)
        // {
        //     $this->db->where('seekerId', $seekerId);
        //     $query = $this->db->get('seeker_experience');
        //     return $query->row_array();
        // }

        public function getProjectDetails(){
            $seekerId=$_SESSION['seekerId'];
            $provider = "SELECT * FROM `seeker_projects` Where `seekerId` = $seekerId";
            $select = $this->db->query($provider);
            return $select->result_array();

           
        }


        public function updateProjectDetails()
        {
            // $formData = $this->input->post(null, true);
            // $seekerId = '107';
            // foreach ($formData['projectname'] as $index => $projectname) {
            //     $insertData = array(
            //         'seekerId' => $seekerId,
            //         'projectName' => $projectname,
            //         'projectDuration' => $formData['durationofproject'][$index],
            //         'roleInProject' => $formData['roleofproject'][$index],
            //         'projectDes' => $formData['responsibility'][$index],
            //         'skillsUsedInProject' => $formData['skillsused'][$index],
            //     );
            //     $this->db->where('seekerId', $formData['seekerId']);
            //     $this->db->insert('seeker_projects', $insertData);
            // }
            $postData = $this->input->post(null, true);
            
            $updateData = array(
                // 'experience' => $postData['experience'],
                'projectName' => $postData['projectname'],
                'projectDuration' => $postData['durationofproject'],
                'roleInProject' => $postData['roleofproject'],
                'startingDate' => $postData['startdate'],
                'endingDate' => $postData['enddate'],
                'responsibilityInProject' => $postData['responsibility'],
                'skillsUsedInProject' => $postData['skillsused'],
            );
            $this->db->where('seekerId', $postData['seekerId']);
            $result = $this->db->update('seeker_projects', $updateData);
        }




        public function getAreaOfInterest(){
            // $seekerId=$_SESSION['seekerId'];
            // $provider = "SELECT * FROM `seeker_area_of_interst` WHERE `seekerId` = $seekerId";
            // $select = $this->db->query($provider);
            // return $select->result_array();
            $seekerId=$_SESSION['seekerId'];
            $provider = "SELECT * FROM `seeker_area_of_interst` Where `seekerId` = $seekerId";
            $select = $this->db->query($provider);
            return $select->result_array();

        }


        public function updateAreaOfInterest()
        {
            // $formData = $this->input->post(null, true);
            // $seekerId = '107';
            // foreach ($formData['category'] as $index => $category) {
            //     // Check if part-time and full-time checkboxes are set, otherwise default to 0
            //     $jobType = 0; // Default job type value

            //     if (isset($formData['jobtype'][$index])) {
            //         if ($formData['jobtype'][$index] === 'fulltime') {
            //             $jobType = 0; // Set to full-time value
            //         } elseif ($formData['jobtype'][$index] === 'parttime') {
            //             $jobType = 1; // Set to part-time value
            //         } elseif ($formData['jobtype'][$index] === 'both') {
            //             $jobType = 2;
            //         }
            //     }

            //     $insertData = array(
            //         'seekerId' => $seekerId,
            //         'interst_category_id' => $category,
            //         'interst_sub_category_id' => $formData['subcategory'][$index],
            //         'other_interst_category' => $formData['customCategoryInput'][$index],
            //         'other_sub_interst_category' => $formData['customSubcategoryInput'][$index],
            //         'prefered_location' => $formData['preferred-location'][$index],
            //         'experience' => $formData['experience'][$index],
            //         'description' => $formData['description'][$index],
            //         'job_type' => $jobType, // Use $jobType instead of $formData['jobType']
            //         'expected_salary' => $formData['expected-salary'][$index],
            //     );
            //     $this->db->where('seekerId', $formData['seekerId']);
            //     $this->db->insert('seeker_area_of_interst', $insertData);
            // }
            $postData = $this->input->post(null, true);
                // $id = $postData['id'];
                $updateData = array(
                'other_interst_category' => $postData['category'],
                'other_sub_interst_category' => $postData['subcategory'],
                'prefered_location' => $postData['preferred-location'],
                'experience' => $postData['experience'],
                'job_type' => $postData['jobtype'],
                'description' => $postData['description'],
                'expected_salary' => $postData['expected-salary']
            );
            $this->db->where('seekerId', $postData['seekerId']);
            $this->db->update('seeker_area_of_interst', $updateData);

            

    //         $postData = $this->input->post(null, true);
    //             $id = $postData['id'];
    //             $data = array(
    //             'company_name' => $postData['name'], 'company_mobile_number' => $postData['phno'],
    //             'company_email' => $postData['email'], 'street_address' => $postData['addr'],
    //             'Landmark' => $postData['landmark1'], 'City' => $postData['city1'], 'district' => $postData['district1'],
    //             'state' => $postData['state1'], 'pincode' => $postData['pincode1'],
    //             'company_logo' => $postData['file'], 'name' => $postData['name1'],
    //             'role' => $postData['role'],
    //             'mobile_number' => $postData['phno1'], 'email' => $postData['mail1'],

    // );
    // $this->db->where('id', $id);
    // $this->db->update('provider_registration_form', $data);
        }

        public function getSkills()
        {
            // $formData = $this->input->post(null, true);
            // $seekerId = '107'; // You should get this from the user session or input

            // // Retrieve existing skill entries for the user
            // $existingSkills = $this->getSkills($seekerId);

            // foreach ($formData['skillname'] as $index => $skillname) {
            //     $experience = $formData['experience'][$index];
            //     $skillLevel = $formData['skilllevel'][$index];

            //     $insertData = array(
            //         'seekerId' => $seekerId,
            //         'skill' => $skillname,
            //         'experience' => $experience,
            //         'skill_level' => $skillLevel
            //     );

            //     // Check if a skill entry already exists for the user
            //     $existingSkill = isset($existingSkills[$index]) ? $existingSkills[$index] : null;

            //     if ($existingSkill) {
            //         $this->updateSkill($existingSkill['id'], $insertData);
            //     } else {
            //         // Insert new skill entry
            //         $this->insertSkill($insertData);
            //     }
            // }
            $seekerId=$_SESSION['seekerId'];
            $provider = "SELECT * FROM `seeker_skill` Where `seekerId` = $seekerId";
            $select = $this->db->query($provider);
            return $select->result_array();

        }

        public function updateskills()
        {
        //     $postData = $this->input->post(null, true);
        //     $updateData = array(
        //     'skill' => $postData['skillname[]'],
        //     'experience' => $postData['experience'],
        //     'skill_level' => $postData['skilllevel'],
            
        // );
        // $this->db->where('id', $postData['id']);
        // $result = $this->db->update('seeker_skill', $updateData);
        // }

        // public function insertSkill($insertData)
        // {
        //     $this->db->insert('seeker_skill', $insertData);
        $postData = $this->input->post(null, true);
        // $id = $postData['id'];
        $updateData = array(
        'skill' => $postData['skillname'],
        'experience' => $postData['experience'],
        'skill_level' => $postData['skilllevel'],
    );
    $this->db->where('seekerId', $postData['seekerId']);
    $this->db->update('seeker_skill', $updateData);
        }

        // public function updateSkill($skillId, $updateData)
        // {
        //     $this->db->where('id', $skillId);
        //     $this->db->update('seeker_skill', $updateData);
        // }


        // public function resume($seekerId, $formData)
        // {
        //     $seekerId = '107';
        //     $insert = array(
        //         'resume' => $formData['resumeFile']
        //     );
        //     $this->db->where('seekerId', $seekerId);
        //     $this->db->update('seeker_skill', $insert);
        // }


        // public function insert_file($data) {
        //     $this->db->insert('files', $data); // Insert data into the 'files' table
        // }

        public function do_upload()
        {
            // $seekerId = $_SESSION['seekerId'];

            $config['upload_path']="./uploads/";
            $config['allowed_types']="jpg|png|pdf";
            $config['max_size']=1024;

            $this->load->library('upload',$config);
           
            if($this->upload->do_upload('file'))
            {
                $data = $this->upload->data();
               
            }
            else{
                $error = $this->upload->display_errors();
            
            }

            // $this->load->view('seekerView',array('data'=>$data,'error'=>$error));
        }
    }
    ?>
 
