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
                'aadhar_front' => $postData['aadharfrontphoto'],
                'aadhar_back' => $postData['aadharbackphoto'],
                'photo' => $postData['photo']
            );
            $this->db->where('id', $postData['id']);

            $config['upload_path']="./uploads/";
            $config['allowed_types']="jpg|png|pdf";
            $config['max_size']=1024;

            $this->load->library('upload',$config);
           
            if(!$this->upload->do_upload('aadharfrontphoto'))
            {
                $data = $this->upload->data();
               
            }
            if($this->upload->do_upload('aadharbackphoto'))
            {
                $data = $this->upload->data();
            }
            if($this->upload->do_upload('photo'))
            {
                $data = $this->upload->data();
            }
            else{
                $error = $this->upload->display_errors();
            
            }

            $result = $this->db->update('seeker_profile_form', $updateData);
        }


            public function educationTable()
            {
                $seekerId=$_SESSION['seekerId'];
                $seekerId = "SELECT * FROM `seeker_educational_details` Where `seekerId`= $seekerId";
                $addtab = $this->db->query($seekerId);
                return $addtab->result_array();

            }

            public function insertEducationForm()
            {
                $seekerId=$_SESSION['seekerId'];
                $post = $this->input->post(null, true);

                $add = array(
                'seekerId' =>  $seekerId, 'educational_qualification' => $post['qualification'], 'department' =>  $post['department'],
                'school_college_name' => $post['school'], 'percentage' => $post['percentage'],
                'yearOfPassing' => $post['year_passed']
                );

                $this->db->insert('seeker_educational_details', $add);
                 }

                            
                public function updateEducation($educationId)
                {
                    $update = "SELECT * FROM `seeker_educational_details` Where `id`=$educationId";
                    $add = $this->db->query($update);
                    return $add->result_array();
                }
                            
                public function updateInsertEducation()
                {
                    $post = $this->input->post(null, true);
                    $educationId = $post['id'];
                    $updateInsertEducation = array(
                    'educational_qualification' => $post['qualification'], 'department' =>  $post['department'],
                    'school_college_name' => $post['school'], 'percentage' => $post['percentage'],
                    'yearOfPassing' => $post['year_passed']
                    );
                    $this->db->where('id', $educationId);
                    $this->db->update('seeker_educational_details', $updateInsertEducation);
                }

                public function deleteEducation($deleteEducationId)
                {

                    $delete = "DELETE FROM `seeker_educational_details` WHERE `id`=$deleteEducationId";
                    $del = $this->db->query($delete);
                }



                
            public function experienceTable()
            {
                $seekerId=$_SESSION['seekerId'];
                $seekerId = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
                $addtab = $this->db->query($seekerId);
                return $addtab->result_array();

            }
            public function insertExperienceForm()
            {
                $seekerId=$_SESSION['seekerId'];
                $post = $this->input->post(null, true);

                $add = array(
                'seekerId' =>  $seekerId, 'experience' => $post['experience'], 'other_category' =>  $post['category'],
                'other_sub_category' => $post['subcategory'], 'company_name' => $post['companyname'],
                'job_role' => $post['role'], 'previous_employer_name' => $post['nameofemployer'],
                'previous_employer_mobile' => $post['number'],'previous_employer_email' => $post['emailid'],
                );

                $this->db->insert('seeker_experience', $add);
                 }


                 public function updateExperience($experienceId)
                {
                    $update = "SELECT * FROM `seeker_experience` Where `id`=$experienceId";
                    $add = $this->db->query($update);
                    return $add->result_array();
                }


                public function updateInsertExperience()
                {
                    $post = $this->input->post(null, true);
                    $experienceId = $post['id'];
                    $updateInsertExperience = array(
                         'experience' => $post['experience'], 'other_category' =>  $post['category'],
                        'other_sub_category' => $post['subcategory'], 'company_name' => $post['companyname'],
                        'job_role' => $post['role'], 'previous_employer_name' => $post['nameofemployer'],
                        'previous_employer_mobile' => $post['number'],'previous_employer_email' => $post['emailid'],
                        );
                    
                    $this->db->where('id', $experienceId);
                    $this->db->update('seeker_experience', $updateInsertExperience);
                }

                public function deleteExperience($deleteExperienceId)
                {

                    $delete = "DELETE FROM `seeker_experience` WHERE `id`=$deleteExperienceId";
                    $del = $this->db->query($delete);
                }


                // project


                public function projectTable()
                {
                    $seekerId=$_SESSION['seekerId'];
                    $seekerId = "SELECT * FROM `seeker_projects` Where `seekerId`= $seekerId";
                    $addtab = $this->db->query($seekerId);
                    return $addtab->result_array();
                }


                public function insertProjectForm()
                {
                    $seekerId=$_SESSION['seekerId'];
                    $post = $this->input->post(null, true);
    
                    $add = array(
                    'seekerId' =>  $seekerId, 'projectName' => $post['projectname'], 'projectDuration' =>  $post['durationofproject'],
                    'roleInProject' => $post['roleofproject'], 'startingDate' => $post['startdate'],
                    'endingDate' => $post['enddate'], 'responsibilityInProject' => $post['responsibility'],
                    'skillsUsedInProject' => $post['skillsused'],
                    );
    
                    $this->db->insert('seeker_projects', $add);
                     }


                
                     public function updateProject($projectId)
                     {
                         $update = "SELECT * FROM `seeker_projects` Where `id`= $projectId";
                         $add = $this->db->query($update);
                         return $add->result_array();
                     }

                     public function updateInsertProject()
                     {
                         $post = $this->input->post(null, true);
                         $projectId = $post['id'];
                         $updateInsertProject = array(
                              'projectName' => $post['projectname'], 'projectDuration' =>  $post['durationofproject'],
                             'roleInProject' => $post['roleofproject'], 'startingDate' => $post['startdate'],
                             'endingDate' => $post['enddate'], 'responsibilityInProject' => $post['responsibility'],
                             'skillsUsedInProject' => $post['skillsused']
                             );
                         
                         $this->db->where('id', $projectId);
                         $this->db->update('seeker_projects', $updateInsertProject);
                     }

                     public function deleteProject($deleteProjectId)
                     {
     
                         $delete = "DELETE FROM `seeker_projects` WHERE `id`=$deleteProjectId";
                         $del = $this->db->query($delete);
                     }

                

                    //  areaOfIntrest

                    public function areaOfIntrestTable()
                    {
                        $seekerId=$_SESSION['seekerId'];
                        $seekerId = "SELECT * FROM `seeker_area_of_interst` Where `seekerId`= $seekerId";
                        $addtab = $this->db->query($seekerId);
                        return $addtab->result_array();
                    }

                    public function insertAreaOfIntrest()
                    {
                        $seekerId=$_SESSION['seekerId'];
                        $post = $this->input->post(null, true);
        
                        $add = array(
                        'seekerId' =>  $seekerId, 'other_interst_category' => $post['category'], 'other_sub_interst_category' =>  $post['subcategory'],
                        'prefered_location' => $post['preferred-location'], 'experience' => $post['experience'],
                        'job_type' => $post['jobtype'], 'description' => $post['description'],
                        'expected_salary' => $post['expected-salary'],
                        );
        
                        $this->db->insert('seeker_area_of_interst', $add);
                         }

                         public function updateAreaOfIntrest($updateAreaOfIntrestId)
                         {
                             $update = "SELECT * FROM `seeker_area_of_interst` Where `id`= $updateAreaOfIntrestId";
                             $add = $this->db->query($update);
                             return $add->result_array();
                         }
                         
                         public function updateInsertAreaOfIntrest()
                         {
                             $post = $this->input->post(null, true);
                             $areaOfIntrest = $post['id'];
                             $updateInsertAreaOfIntrest = array(
                             'other_interst_category' => $post['category'], 'other_sub_interst_category' =>  $post['subcategory'],
                                'prefered_location' => $post['preferred-location'], 'experience' => $post['experience'],
                                'job_type' => $post['jobtype'], 'description' => $post['description'],
                                'expected_salary' => $post['expected-salary']
                                 );
                             
                             $this->db->where('id', $areaOfIntrest);
                             $this->db->update('seeker_area_of_interst', $updateInsertAreaOfIntrest);
                         }

                         public function deleteAreaOfIntrest($deleteAreaOfIntrestId)
                         {
         
                             $delete = "DELETE FROM `seeker_area_of_interst` WHERE `id`=$deleteAreaOfIntrestId";
                             $del = $this->db->query($delete);
                         }



                        //  skill,

                        public function skillTable()
                        {
                            $seekerId=$_SESSION['seekerId'];
                            $seekerId = "SELECT * FROM `seeker_skill` Where `seekerId`= $seekerId";
                            $addtab = $this->db->query($seekerId);
                            return $addtab->result_array();
                        }

                        public function insertSkillForm()
                        {
                            $seekerId=$_SESSION['seekerId'];
                            $post = $this->input->post(null, true);
            
                            $add = array(
                            'seekerId' =>  $seekerId, 'skill' => $post['skillname'], 'experience' =>  $post['experience'],
                            'skill_level' => $post['skilllevel']
                            );
            
                            $this->db->insert('seeker_skill', $add);
                             }

                             public function updateSkill($updateSkillId)
                             {
                                 $update = "SELECT * FROM `seeker_skill` Where `id`= $updateSkillId";
                                 $add = $this->db->query($update);
                                 return $add->result_array();
                             }


                              
                         public function updateInsertSkill()
                         {
                             $post = $this->input->post(null, true);
                             $areaOfIntrest = $post['id'];
                             $updateInsertSkill = array(
                                'skill' => $post['skillname'], 'experience' =>  $post['experience'],
                                'skill_level' => $post['skilllevel']
                                 );
                             
                             $this->db->where('id', $areaOfIntrest);
                             $this->db->update('seeker_skill', $updateInsertSkill);
                         }
    
                         public function deleteSkill($deleteSkillId)
                         {
         
                             $delete = "DELETE FROM `seeker_skill` WHERE `id`=$deleteSkillId";
                             $del = $this->db->query($delete);
                         }
    
    























































       
    //     public function insertEducation()
    //     {
    //       $postData = $this->input->post(null, true);
      
    //       $insert = array(
    //         'educational_qualification' => $postData['qualification'], 'department' => $postData['department'],
    //         'school_college_name' => $postData['school'], 'percentage' => $postData['percentage'],
    //         'yearOfPassing' => $postData['year_passed']
    //       );
      
    //       $this->db->insert('seeker_educational_details', $insert);
    //     }

    //     public function getEducationalDetails()
    //     {
    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_educational_details` WHERE `seekerId` = $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();

    //     public function updateEducationDetails(){
            
    //         $postData = $this->input->post(null, true);
            
    //         $updateData = array(
    //             'educational_qualification' => $postData['qualification'],
    //             'department' => $postData['department'],
    //             'school_college_name' => $postData['school'],
    //             'percentage' => $postData['percentage'],
    //             'yearOfPassing' => $postData['year_passed'],
    //         );
    //         $this->db->where('id', $postData['id']);
    //         $result = $this->db->update(' seeker_educational_details', $updateData);
    //     }

    //     public function experienceTable()
    //     {
    //       $seekerId=$_SESSION['seekerId'];
    //       $provider = "SELECT * FROM `seeker_experience` Where `seekerId`= $seekerId";
    //       $addtab = $this->db->query($provider);
    //       return $addtab->result_array();
      
    //     }
    //     public function insertExperience()
    //     {
       
    //       $post = $this->input->post(null, true);
      
    //       $addExperience = array(
    //          'seekerId' =>  $seekerId, 'experience' => $post['experience'], 'other_category' =>  $post['category'],
    //         'other_sub_category' => $post['subcategory'], 'company_name' => $post['companyname'],
    //         'job_role' => $post['role'], 'previous_employer_name' => $post['nameofemployer'],
    //         'previous_employer_mobile' => $post['number'], 'previous_employer_email' => $post['emailid'],
    //       );
      
    //       $this->db->insert('seeker_experience', $addExperience);
    //     }
      


    //     public function getExperienceDetails(){

    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_experience` Where `id`= $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();
    //      }

    //     public function updateExperienceDetails()
    //     {
    //         $postData = $this->input->post(null, true);
            
    //         $updateData = array(
                
    //             'other_category' => $postData['category'],
    //             'other_sub_category' => $postData['subcategory'],
    //             'experience' => $postData['experience'],
    //             'company_name' => $postData['companyname'],
    //             'job_role' => $postData['role'],
    //             'previous_employer_name' => $postData['nameofemployer'],
    //             'previous_employer_mobile' => $postData['number'],
    //             'previous_employer_email' => $postData['emailid'],
    //         );
    //         $this->db->where('id', $postData['id']);
    //         $result = $this->db->update('seeker_experience', $updateData);
           











           
    //     }
    //     public function getProjectDetails(){
    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_projects` Where `seekerId` = $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();

           
    //     }


    //     public function updateProjectDetails()
    //     {
           
    //         $postData = $this->input->post(null, true);
            
    //         $updateData = array(
               
    //             'projectName' => $postData['projectname'],
    //             'projectDuration' => $postData['durationofproject'],
    //             'roleInProject' => $postData['roleofproject'],
    //             'startingDate' => $postData['startdate'],
    //             'endingDate' => $postData['enddate'],
    //             'responsibilityInProject' => $postData['responsibility'],
    //             'skillsUsedInProject' => $postData['skillsused'],
    //         );
    //         $this->db->where('seekerId', $postData['seekerId']);
    //         $result = $this->db->update('seeker_projects', $updateData);
    //     }




    //     public function getAreaOfInterest(){
            
    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_area_of_interst` Where `seekerId` = $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();

    //     }


    //     public function updateAreaOfInterest()
    //     {
          
    //         $postData = $this->input->post(null, true);
                
    //             $updateData = array(
    //             'other_interst_category' => $postData['category'],
    //             'other_sub_interst_category' => $postData['subcategory'],
    //             'prefered_location' => $postData['preferred-location'],
    //             'experience' => $postData['experience'],
    //             'job_type' => $postData['jobtype'],
    //             'description' => $postData['description'],
    //             'expected_salary' => $postData['expected-salary']
    //         );
    //         $this->db->where('seekerId', $postData['seekerId']);
    //         $this->db->update('seeker_area_of_interst', $updateData);

            

    //     }

    //     public function getSkills()
    //     {
            
    //         $seekerId=$_SESSION['seekerId'];
    //         $provider = "SELECT * FROM `seeker_skill` Where `seekerId` = $seekerId";
    //         $select = $this->db->query($provider);
    //         return $select->result_array();

    //     }

    //     public function updateskills()
    //     {
       
    //     $postData = $this->input->post(null, true);
        
    //     $updateData = array(
    //     'skill' => $postData['skillname'],
    //     'experience' => $postData['experience'],
    //     'skill_level' => $postData['skilllevel'],
    // );
    // $this->db->where('seekerId', $postData['seekerId']);
    // $this->db->update('seeker_skill', $updateData);
    //     }

       
    //     public function do_upload()
    //     {
            
    //         $config['upload_path']="./uploads/";
    //         $config['allowed_types']="jpg|png|pdf";
    //         $config['max_size']=1024;

    //         $this->load->library('upload',$config);
           
    //         if($this->upload->do_upload('file'))
    //         {
    //             $data = $this->upload->data();
               
    //         }
    //         else{
    //             $error = $this->upload->display_errors();
            
    //         }

           
    //     }
    }

    ?>
 
