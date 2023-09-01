 <?php
    class seekerModel extends CI_Model
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


        public function basicDetails()
        {
            $provider = "SELECT * FROM `seeker_profile_form` WHERE `id` = 1";
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
                'address' => $postData['streetaddress'],
                'landmark' => $postData['landmark'],
                'pincode' => $postData['pincode'],
                'maritalstatus' => $postData['maritalstatus'],
                'aadhar_front' => $postData['aadharfrontphoto'],
                'aadhar_back' => $postData['aadharbackphoto'],
                'photo' => $postData['photo']
            );
            $this->db->where('id', $postData['id']);
            $result = $this->db->update('seeker_profile_form', $updateData);
        }



        public function educationalDetails()
        {
            $formData = $this->input->post(null, true);
            $seekerId = '107'; // You should get this from the user session or input

            // Retrieve existing educational details for the user
             $existingEducationalDetails = $this->getEducationalDetails($seekerId);

            foreach ($formData['school'] as $index => $school) {
                $educationalQualification = isset($formData['qualification'][$index])
                    ? $formData['qualification'][$index]
                    : $existingEducationalDetails[$index]['educational_qualification'];

                $department = isset($formData['department'][$index])
                    ? $formData['department'][$index]
                    : $existingEducationalDetails[$index]['department'];

                $insertData = array(
                    'seekerId' => $seekerId,
                    'educational_qualification' => $educationalQualification,
                    'department' => $department,
                    'school_college_name' => $school,
                    'percentage' => $formData['percentage'][$index],
                    'yearOfPassing' => $formData['year_passed'][$index]
                );

                // Update or insert educational entry
                if (isset($existingEducationalDetails[$index])) {
                    $this->db->where('id', $existingEducationalDetails[$index]['id']);
                    $this->db->update('seeker_educational_details', $insertData);
                } else {
                    $this->db->insert('seeker_educational_details', $insertData);
                }
            }
        }

        public function getEducationalDetails($seekerId)
        {
            $this->db->where('seekerId', $seekerId);
            $query = $this->db->get('seeker_educational_details');
            return $query->result_array();
        }



        public function experienceDetails($seekerId, $formData)
        {
            $seekerId = '107';
            $existingExperienceDetails = $this->getExperienceDetails($seekerId);

            // Clean the data
            $insertData = array(
                'seekerId' => $seekerId,
                'job_category_id' => $formData['category'],
                'job_sub_category_id' => $formData['subcategory'],
                'other_category' => $formData['othercategory'],
                'other_sub_category' => $formData['othersubcategory'],
                'experience' => $formData['experience'],
                'company_name' => $formData['companyname'],
                'job_role' => $formData['role'],
                'previous_employer_name' => $formData['nameofemployer'],
                'previous_employer_mobile' => $formData['number'],
                'previous_employer_email' => $formData['emailid'],
            );

            if (!empty($existingExperienceDetails)) {
                // Update only the non-empty fields
                foreach ($insertData as $key => $value) {
                    if (!empty($value)) {
                        $this->db->set($key, $value);
                    }
                }
                $this->db->where('seekerId', $seekerId);
                $this->db->update('seeker_experience');
            } else {
                // Insert new experience entry
                $this->db->insert('seeker_experience', $insertData);
            }
        }

        public function getExperienceDetails($seekerId)
        {
            $this->db->where('seekerId', $seekerId);
            $query = $this->db->get('seeker_experience');
            return $query->row_array();
        }





        public function projectDetails($seekerId, $formData)
        {
            $formData = $this->input->post(null, true);
            $seekerId = '107';
            foreach ($formData['projectname'] as $index => $projectname) {
                $insertData = array(
                    'seekerId' => $seekerId,
                    'projectName' => $projectname,
                    'projectDuration' => $formData['durationofproject'][$index],
                    'roleInProject' => $formData['roleofproject'][$index],
                    'projectDes' => $formData['responsibility'][$index],
                    'skillsUsedInProject' => $formData['skillsused'][$index],
                );
                $this->db->where('seekerId', $formData['seekerId']);
                $this->db->insert('seeker_projects', $insertData);
            }
        }





        public function areaOfInterest($seekerId, $formData)
        {
            $formData = $this->input->post(null, true);
            $seekerId = '107';
            foreach ($formData['category'] as $index => $category) {
                // Check if part-time and full-time checkboxes are set, otherwise default to 0
                $jobType = 0; // Default job type value

                if (isset($formData['jobtype'][$index])) {
                    if ($formData['jobtype'][$index] === 'fulltime') {
                        $jobType = 0; // Set to full-time value
                    } elseif ($formData['jobtype'][$index] === 'parttime') {
                        $jobType = 1; // Set to part-time value
                    } elseif ($formData['jobtype'][$index] === 'both') {
                        $jobType = 2;
                    }
                }

                $insertData = array(
                    'seekerId' => $seekerId,
                    'interst_category_id' => $category,
                    'interst_sub_category_id' => $formData['subcategory'][$index],
                    'other_interst_category' => $formData['customCategoryInput'][$index],
                    'other_sub_interst_category' => $formData['customSubcategoryInput'][$index],
                    'prefered_location' => $formData['preferred-location'][$index],
                    'experience' => $formData['experience'][$index],
                    'description' => $formData['description'][$index],
                    'job_type' => $jobType, // Use $jobType instead of $formData['jobType']
                    'expected_salary' => $formData['expected-salary'][$index],
                );
                $this->db->where('seekerId', $formData['seekerId']);
                $this->db->insert('seeker_area_of_interst', $insertData);
            }
        }

        public function skill()
        {
            $formData = $this->input->post(null, true);
            $seekerId = '107'; // You should get this from the user session or input

            // Retrieve existing skill entries for the user
            $existingSkills = $this->getSkills($seekerId);

            foreach ($formData['skillname'] as $index => $skillname) {
                $experience = $formData['experience'][$index];
                $skillLevel = $formData['skilllevel'][$index];

                $insertData = array(
                    'seekerId' => $seekerId,
                    'skill' => $skillname,
                    'experience' => $experience,
                    'skill_level' => $skillLevel
                );

                // Check if a skill entry already exists for the user
                $existingSkill = isset($existingSkills[$index]) ? $existingSkills[$index] : null;

                if ($existingSkill) {
                    $this->updateSkill($existingSkill['id'], $insertData);
                } else {
                    // Insert new skill entry
                    $this->insertSkill($insertData);
                }
            }
        }

        public function getSkills($seekerId)
        {
            $this->db->where('seekerId', $seekerId);
            $query = $this->db->get('seeker_skill');
            return $query->result_array();
        }

        public function insertSkill($insertData)
        {
            $this->db->insert('seeker_skill', $insertData);
        }

        public function updateSkill($skillId, $updateData)
        {
            $this->db->where('id', $skillId);
            $this->db->update('seeker_skill', $updateData);
        }


        public function resume($seekerId, $formData)
        {
            $seekerId = '107';
            $insert = array(
                'resume' => $formData['resumeFile']
            );
            $this->db->where('seekerId', $seekerId);
            $this->db->update('seeker_skill', $insert);
        }
    }
    ?>
 
