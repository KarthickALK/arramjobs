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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->library('form_validation');

            // Define validation rules for registration form fields
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');

            if ($this->form_validation->run() == true) {
                // Check if the phone number already exists in the database
                $phonenumber = $this->input->post('phonenumber');
                $userExists = $this->SeekerModel->checkUserExistence($phonenumber);

                if ($userExists) {
                    // User already exists, show an error message
                    echo "<script>alert('The user already exist login to continue.');</script>";
                    echo "<script>window.location.href = 'index';</script>";
                    $this->index();
                } else {

                    $this->session->set_userdata('logged_in_phonenumber', $phonenumber);
                    echo "<script>alert('successfully registered login to continue.');</script>";
                    echo "<script>window.location.href = 'index';</script>";
                }
            }
        }
    }




    public function index()
    {
        $this->load->view('loginform.php');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->library('form_validation');

            // Define validation rules for login form fields
            $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');

            // if ($this->form_validation->run() == true) {
            //     // Check if the phone number exists in the database
            //     $phonenumber = $this->input->post('phonenumber');
            //     $userExists = $this->SeekerModel->checkUserExistence($phonenumber);

            //     if ($userExists) {
            //         echo "<script>window.location.href = 'otpregister';</script>";
            //         $this->load->view('seekerOtp.php');
            //     }
            //     else {
            //         // User doesn't exist, show an error message
            //         echo "<script>alert('This phone number is not registered. Please register first.');</script>";
            //         echo "<script>window.location.href = 'registration';</script>";
            //         $this->load->view('loginForm.php');
            //     }
            // } 
        }
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

    public function login()
    {
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

    public function educationalDetails()
    {
        
        $this->load->model('SeekerModel');
        $educationalDetails = $this->SeekerModel->getEducationalDetails();
        $this->data['educationalDetails'] = $educationalDetails;
        $this->data['method'] = 'educationalDetails';
        $this->load->view('seekerView.php', $this->data);
    }
        // $this->load->model('SeekerModel');
        // $this->data['method'] = "education";
        // $seekerId = $this->session->userdata('logged_in_phonenumber');
        // if ($this->input->post()) {
        //     $formData = $this->input->post(null, true);
        //     $educationDetails = $this->SeekerModel->educationalDetails($seekerId, $formData);
        //     $this->data['educationDetails'] = $educationDetails;
        // }
        // $this->data['seekerId'] = $seekerId; 
        // $this->load->view('seekerView', $this->data);
    // }

    public function updateEducationDetails()
    {
        
        $postData = $this->input->post(null, true);
        $updateEducationDetails = $this->SeekerModel->updateEducationDetails();

        $this->educationalDetails();
    }

     public function experienceDetails()
    {
        $this->load->model('SeekerModel');
        $experienceDetails = $this->SeekerModel->getExperienceDetails();
        $this->data['experienceDetails'] = $experienceDetails;
        $this->data['method'] = 'experienceDetails';
        $this->load->view('seekerView.php', $this->data);
        // $this->load->model('SeekerModel');
        // $experienceDetails=$this->SeekerModel->getExperienceDetails();
        // // $this->data['experienceDetails']=$experienceDetails;
        
        // $this->data['method'] = "experience";
        // $this->load->view('seekerView', $this->data);
    }

    public function updateExperienceDetails(){

        $postData = $this->input->post(null, true);
        $updateExperienceDetails = $this->SeekerModel->updateExperienceDetails();

        $this->experienceDetails();
        // $this->load->model('SeekerModel');
        // $this->data['method'] = "experience";

        // $formData = $this->input->post(null, true);
        // $this->SeekerModel-> updateExperienceDetails($formData);
       
        // // $this->data['seekerId'] = $seekerId;
        // // $this->load->view('seekerView', $this->data);
        // $this->experienceDetails();
    }

    public function projectDetails(){
        // $this->load->model('SeekerModel');
        // $projectDetails=$this->SeekerModel->getProjectDetails();
        // $this->data['projectDetails']=$projectDetails;
        // $this->data['method'] = "project";
        // $this->load->view('seekerView', $this->data);
          
        
            $this->load->model('SeekerModel');
            $provider = $this->SeekerModel->getProjectDetails(); 
            $this->data['projectDetails'] = $provider;
            $this->data['method'] = "project";
            $this->load->view('seekerView.php', $this->data);
           
          
            
    }


    public function updateProjectDetails()
    {
        // $this->load->model('SeekerModel');
        // $this->data['method'] = "project";
        // $seekerDetail = $this->SeekerModel->update();
        // $seekerId = $this->session->userdata('logged_in_phonenumber'); // Get the seekerId from the session or wherever it's stored

        // if ($this->input->post()) {
        //     $formData = $this->input->post(null, true);
        //     $this->seekerModel->projectDetails($seekerId, $formData);
        // }

        // $data['seekerDetail'] = $seekerDetail;
        // $this->data['seekerId'] = $seekerId; // Pass the seekerId to the view

        // $this->load->view('seekerView', $this->data);
        $postData = $this->input->post(null, true);
        $updateProjectDetails = $this->SeekerModel->updateProjectDetails();

        $this->projectDetails();
    }

    public function areaofinterest(){
        // $this->load->model('seekerModel');
        // $areaofinterest=$this->seekerModel->getAreaOfInterest();
        // $this->data['areaofinterest']=$areaofinterest;
        // $this->data['method'] = "areaofinterest";
        // $this->load->view('seekerView', $this->data);
        $this->data['method'] = "areaofinterest";
        $provider = $this->SeekerModel->getAreaOfInterest();
        $this->data['areaofinterest'] = $provider;
        $this->load->view('seekerView.php', $this->data);
    }


    public function updateAreaOfInterest()
    {
        // $this->load->model('seekerModel');
        // $this->data['method'] = "areaofinterest";
        // $seekerId = $this->session->userdata('logged_in_phonenumber');

        // if ($this->input->post()) {
        //     $formData = $this->input->post(null, true);

        //     $this->seekerModel->areaOfInterest($seekerId, $formData);
        // }

        // $seekerDetail = $this->seekerModel->update();

        // $data = array(
        //     'seekerDetail' => $seekerDetail,
        //     'seekerId' => $seekerId
        // );

        // $this->load->view('seekerView', $data);
        $postData = $this->input->post(null, true);
        $updateAreaOfInterest = $this->SeekerModel->updateAreaOfInterest();

        $this->areaofinterest();
    }


    public function skills()
    {
        // $this->data['method'] = "skills";
        // $seekerId = $this->session->userdata('logged_in_phonenumber');

        // if ($this->input->post()) {
        //     $formData = $this->input->post(null, true);
        //     $this->seekerModel->skill($seekerId, $formData);
        // }

        // // Retrieve updated seekerDetail after insertion/update
        // $seekerDetail = $this->seekerModel->getSkills($seekerId);

        // $data = array(
        //     'seekerDetail' => $seekerDetail,
        //     'seekerId' => $seekerId,
        //     'method' => $this->data['method']
        // );

        // $this->load->view('seekerView', $this->data);
        $this->data['method'] = "skills";
        $provider = $this->SeekerModel->getSkills();
        $this->data['skills'] = $provider;
        $this->load->view('seekerView.php', $this->data);
    }

    public function updateskills(){
        $postData = $this->input->post(null, true);
        $updateskills = $this->SeekerModel->updateskills();

        $this->skills();
    }

    public function resume(){
        $this->data['method'] = "resume";
        $this->load->view('seekerView', $this->data);


























        // $this->load->model('seekerModel');
        // // // $resume = $this->seekerModel->getResume();
        // // $this->data['resume']= $resume;

        // $config['upload_path'] = './uploads/';
        // $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
        // $config['encrypt_name'] = TRUE;


        // $this->load->library('upload', $config);

        // if (!$this->upload->do_upload('userfile')) {
        //     // File upload failed, handle errors
        //     $error = $this->upload->display_errors();
        //     echo $error;
        // } else {
        //     // File uploaded successfully
        //     $data = $this->upload->data();

        //     // Insert file details into the database
        //     $this->load->seekerModel('File_model'); // Load your model
        //     $insert_data = array(
        //         'file_name' => $data['file_name'],
        //         'file_path' => $data['full_path'],
        //     );

        //     $this->File_model->insert_file($insert_data); // Call your model method to insert data
            
        //     echo "File uploaded and data inserted successfully!";
        // }

       

       
            // $config['upload_path'] = './uploads/';
            // $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
            // $config['encrypt_name'] = TRUE;
    
            // $this->load->library('upload', $config);
    
            // if (!$this->upload->do_upload('userfile')) {
            //     // File upload failed, handle errors
            //     $error = $this->upload->display_errors();
            //     echo $error;
            // } else {
            //     // File uploaded successfully
            //     $data = $this->upload->data();
    
            //     // Insert file details into the database
            //     $this->load->model('File_model'); // Load your model
            //     $insert_data = array(
            //         'file_name' => $data['file_name'],
            //         'file_path' => $data['full_path'],
            //     );
    
            //     $this->File_model->insert_file($insert_data); // Call your model method to insert data
                
            //     echo "File uploaded and data inserted successfully!";
            // }


    }
    
}
