<?php
class SeekerController extends CI_Controller
{
    private $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SeekerModel');
        $this->load->library('session');
    }

    public function registration()
    {
        
        $this->load->view('registrationform.php');
    }




    public function index()
    {
        $this->load->view('loginform.php');
    }

    public function otpregister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $response = $this->SeekerModel->otp();
            echo "<script>window.location.href = 'dash';</script>";
        }

        $this->load->view('seekerOtp.php');
    }

    public function seekerLogin()
    {
        $postData = $this->input->post(null, true);
        $login = $this->SeekerModel->seekerLogin();
        if (isset($login[0]['id'])) {
            $userLoggedIn = array(
                'seekerId' => $login[0]['id'],
                'seekerName' => $login[0]['name'],
                'seekerPhoneNumber' => $login[0]['phonenumber']
            );
            $this->session->set_userdata($userLoggedIn);
            $this->data['method'] = "dash";
            $this->dash();
        } else {

            $this->load->view('loginform.php', $this->data);
        }
    }

    public function seekerRegistration()
    {
        $postData = $this->input->post(null, true);
        $register = $this->SeekerModel->register();
        $this->load->view('loginform.php');
    }


    public function dash()
    {
        $data['method'] = "dash";
        $this->load->view('seekerView.php', $data);
    }

   


    public function basicDetails()
    {
        $this->load->model('SeekerModel');
        $basicDetails = $this->SeekerModel->getBasicDetails();
        $this->data['basicDetails'] = $basicDetails;
        $this->data['method'] = 'basicdetails';
        $this->load->view('seekerView.php', $this->data);
    }

    public function updateBasicDetails()
    {
        $postData = $this->input->post(null, true);
        $updateBasicDetails = $this->SeekerModel->updateBasicDetails();

        $this->basicDetails();
    }



            // education

            public function educationTable()
                {
                    $this->data['method'] = "educationTable";
                    $educationTable = $this->SeekerModel->educationTable();
                    $this->data['educationTable'] = $educationTable;

                    $this->load->view('seekerView.php', $this->data);
                }

            public function addEducationForm()
            {
                $this->data['method'] = "addEducationForm";
                $this->load->view('seekerView.php', $this->data);
            }

            public function insertEducationForm()
            {
                $insertEducationForm = $this->SeekerModel->insertEducationForm();
               
                $this->educationTable();
            }
            public function updateEducation()
            {
                $educationId = $this->uri->segment(3);
                $this->data['method'] = "updateEducation";
                $updateEducation = $this->SeekerModel->updateEducation($educationId);
                $this->data['updateEducation'] = $updateEducation;
                $this->load->view('seekerView.php', $this->data);
            }
            public function updateInsertEducation()
            {
                $post = $this->input->post(null, true);
                $updateInsertEducation = $this->SeekerModel->updateInsertEducation();
                $this->educationTable();
            }

        
            public function deleteEducation()
            {
                $deleteEducationId = $this->uri->segment(3);
                $delete = $this->SeekerModel->deleteEducation($deleteEducationId);
                if ($delete == null) {
                    $this->educationTable();
                } else {
                    echo "Error deleting record";
                }
             }

            
            
            
            
            // experience
            
            
             public function experienceTable()
             {
                 $this->data['method'] = "experienceTable";
                 $experienceTable = $this->SeekerModel->experienceTable();
                 $this->data['experienceTable'] = $experienceTable;

                 $this->load->view('seekerView.php', $this->data);
             }
             public function addExperirenceForm()
             {
                 $this->data['method'] = "addExperirenceForm";
                 $this->load->view('seekerView.php', $this->data);
             }
             public function insertExperienceForm()
             {
                 $insertExperienceForm = $this->SeekerModel->insertExperienceForm();
                
                 $this->experienceTable();
             }
             public function updateExperience()
             {
                 $experienceId = $this->uri->segment(3);
                 $this->data['method'] = "updateExperience";
                 $updateExperience = $this->SeekerModel->updateExperience($experienceId);
                 $this->data['updateExperience'] = $updateExperience;
                 $this->load->view('seekerView.php', $this->data);
             }

             public function updateInsertExperience()
             {
                 $post = $this->input->post(null, true);
                 $updateInsertExperience = $this->SeekerModel->updateInsertExperience();
                 $this->experienceTable();
             }

             public function deleteExperience()
            {
                $deleteExperienceId = $this->uri->segment(3);
                $delete = $this->SeekerModel->deleteExperience($deleteExperienceId);
                if ($delete == null) {
                    $this->experienceTable();
                } else {
                    echo "Error deleting record";
                }
             }


    //    project

                    public function projectTable()
                    {
                        $this->data['method'] = "projectTable";
                        $projectTable = $this->SeekerModel->projectTable();
                        $this->data['projectTable'] = $projectTable;

                        $this->load->view('seekerView.php', $this->data);
                    }

                    public function addProjectForm()
                    {
                        $this->data['method'] = "addProjectForm";
                        $this->load->view('seekerView.php', $this->data);
                    }

                    public function insertProjectForm()
                    {
                        $insertProjectForm = $this->SeekerModel->insertProjectForm();
                    
                        $this->projectTable();
                    }

                    public function updateProject()
                    {
                        $projectId = $this->uri->segment(3);
                        $this->data['method'] = "updateProject";
                        $updateProject = $this->SeekerModel->updateProject($projectId);
                        $this->data['updateProject'] = $updateProject;
                        $this->load->view('seekerView.php', $this->data);
                    }

                    public function updateInsertProject()
                    {
                        $post = $this->input->post(null, true);
                        $updateInsertProject = $this->SeekerModel->updateInsertProject();
                        $this->projectTable();
                    }

                    public function deleteProject()
                    {
                        $deleteProjectId = $this->uri->segment(3);
                        $delete = $this->SeekerModel->deleteProject($deleteProjectId);
                        if ($delete == null) {
                            $this->projectTable();
                        } else {
                            echo "Error deleting record";
                        }
                    }


            // area of intrest

            public function areaOfIntrestTable()
                    {
                        $this->data['method'] = "areaOfIntrestTable";
                        $areaOfIntrestTable = $this->SeekerModel->areaOfIntrestTable();
                        $this->data['areaOfIntrestTable'] = $areaOfIntrestTable;

                        $this->load->view('seekerView.php', $this->data);
                    }

                    public function addAreaOfIntrestForm()
                    {
                        $this->data['method'] = "addAreaOfIntrestForm";
                        $this->load->view('seekerView.php', $this->data);
                    }

                    public function insertAreaOfIntrest()
                    {
                        $insertAreaOfIntrest = $this->SeekerModel->insertAreaOfIntrest();
                    
                        $this->areaOfIntrestTable();
                    }

                    public function updateAreaOfIntrest()
                    {
                        $updateAreaOfIntrestId = $this->uri->segment(3);
                        $this->data['method'] = "updateAreaOfIntrest";
                        $updateAreaOfIntrest = $this->SeekerModel->updateAreaOfIntrest($updateAreaOfIntrestId);
                        $this->data['updateAreaOfIntrest'] = $updateAreaOfIntrest;
                        $this->load->view('seekerView.php', $this->data);
                    }

                    
                    public function updateInsertAreaOfIntrest()
                    {
                        $post = $this->input->post(null, true);
                        $updateInsertAreaOfIntrest = $this->SeekerModel->updateInsertAreaOfIntrest();
                        $this->areaOfIntrestTable();
                    }

                    public function deleteAreaOfIntrest()
                    {
                        $deleteAreaOfIntrestId = $this->uri->segment(3);
                        $delete = $this->SeekerModel->deleteAreaOfIntrest($deleteAreaOfIntrestId);
                        if ($delete == null) {
                            $this->areaOfIntrestTable();
                        } else {
                            echo "Error deleting record";
                        }
                    }
                    
                    // skills


                    public function skillTable()
                    {
                        $this->data['method'] = "skillTable";
                        $skillTable = $this->SeekerModel->skillTable();
                        $this->data['skillTable'] = $skillTable;

                        $this->load->view('seekerView.php', $this->data);
                    }

                    
                    public function addSkillForm()
                    {
                        $this->data['method'] = "addSkillForm";
                        $this->load->view('seekerView.php', $this->data);
                    }

                    public function insertSkillForm()
                    {
                        $insertSkillForm = $this->SeekerModel->insertSkillForm();
                    
                        $this->skillTable();
                    }

                    public function updateSkill()
                    {
                        $updateSkillId = $this->uri->segment(3);
                        $this->data['method'] = "updateSkill";
                        $updateSkill = $this->SeekerModel->updateSkill($updateSkillId);
                        $this->data['updateSkill'] = $updateSkill;
                        $this->load->view('seekerView.php', $this->data);
                    }

                    public function updateInsertSkill()
                    {
                        $post = $this->input->post(null, true);
                        $updateInsertSkill = $this->SeekerModel->updateInsertSkill();
                        $this->skillTable();
                    }

                    public function deleteSkill()
                    {
                        $deleteSkillId = $this->uri->segment(3);
                        $delete = $this->SeekerModel->deleteSkill($deleteSkillId);
                        if ($delete == null) {
                            $this->skillTable();
                        } else {
                            echo "Error deleting record";
                        }
                    }

            

            
                    
       



























































































































    // public function insertEducation(){
    //     $this->data['method'] = "educationalDetails";
    //     $addJob = $this->RegistrationModel->insertEducation();
    //     $this->load->view('seekerView.php', $this->data);
    //     echo "Record added seccessfuly";
    // }
    // public function educationalDetails()
    // {
        
    //     $this->load->model('SeekerModel');
    //     $educationalDetails = $this->SeekerModel->getEducationalDetails();
    //     $this->data['educationalDetails'] = $educationalDetails;
    //     $this->data['method'] = 'educationalDetails';
    //     $this->load->view('seekerView.php', $this->data);
    // }
    // public function updateEducationDetails()
    // {
        
    //     $postData = $this->input->post(null, true);
    //     $updateEducationDetails = $this->SeekerModel->updateEducationDetails();

    //     $this->educationalDetails();
    // }
    // public function experienceTable()
    // {
        
    //     $this->data['method'] = 'experienceTable';
    //     $experienceTable=$this->SeekerModel->getExperienceDetails();
    //     $this->data['experienceTable']=$experienceTable;
    //     $this->load->view('seekerView.php', $this->data);
    // }
    // public function addExperienceForm()
    // {
    //     $this->data['method'] = 'addExperienceForm';
    //     $this->load->view('seekerView.php', $this->data);
    // }
    
    // public function insertExperience()
    // {
    //     $this->data['method'] = "jobs";
    //     $insertExperience = $this->SeekerModel->insertExperience();
        
    //     $this->load->view('seekerView.php', $this->data);
    //     echo "Record added seccessfuly";
    //     $this->experienceTable();
    // }

    //  public function experienceDetails()
    // {
    //     $this->load->model('SeekerModel');
    //     $experienceDetails = $this->SeekerModel->getExperienceDetails();
    //     $this->data['experienceDetails'] = $experienceDetails;
    //     $this->data['method'] = 'experienceDetails';
    //     $this->load->view('seekerView.php', $this->data);
        
    // }

    // public function updateExperienceDetails(){
    //     $id = $this->uri->segment(3);
    //     $this->data['method'] = "updateExperienceDetails";
    //     // $postData = $this->input->post(null, true);
    //     $updateExperienceDetails = $this->SeekerModel->updateExperienceDetails($id);
    //     $this->data['updateExperienceDetails'] = $updateExperienceDetails;
    //     $this->load->view('seekerView.php', $this->data);

    //     $this->experienceDetails();
       
    // }

    // public function projectDetails(){
          
        
    //         $this->load->model('SeekerModel');
    //         $provider = $this->SeekerModel->getProjectDetails(); 
    //         $this->data['projectDetails'] = $provider;
    //         $this->data['method'] = "project";
    //         $this->load->view('seekerView.php', $this->data);
           
          
            
    // }


    // public function updateProjectDetails()
    // {
        
    //     $postData = $this->input->post(null, true);
    //     $updateProjectDetails = $this->SeekerModel->updateProjectDetails();

    //     $this->projectDetails();
    // }

    // public function areaofinterest(){
       
    //     $this->data['method'] = "areaofinterest";
    //     $provider = $this->SeekerModel->getAreaOfInterest();
    //     $this->data['areaofinterest'] = $provider;
    //     $this->load->view('seekerView.php', $this->data);
    // }


    // public function updateAreaOfInterest()
    // {
        
    //     $postData = $this->input->post(null, true);
    //     $updateAreaOfInterest = $this->SeekerModel->updateAreaOfInterest();

    //     $this->areaofinterest();
    // }


    // public function skills()
    // {
       
    //     $this->data['method'] = "skills";
    //     $provider = $this->SeekerModel->getSkills();
    //     $this->data['skills'] = $provider;
    //     $this->load->view('seekerView.php', $this->data);
    // }

    // public function updateskills(){
    //     $postData = $this->input->post(null, true);
    //     $updateskills = $this->SeekerModel->updateskills();

    //     $this->skills();
    // }

    public function resume(){

          $this->data['method'] = "resume";

        $resume=$this->SeekerModel->do_upload();
        $this->data['resume'] = $resume;
         $this->load->view('seekerView.php',$this->data);
        }
   
}

?>