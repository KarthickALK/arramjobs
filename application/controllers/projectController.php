<?php
class projectController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projectModel');
        $this->load->library('session');
        
    }

    // public function registration()
    // {
    //     $this->load->view('registrationform.php');
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $this->load->library('form_validation');
            
    //         // Define validation rules for registration form fields
    //         $this->form_validation->set_rules('name', 'Name', 'required');
    //         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //         $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');
            
    //         if ($this->form_validation->run() == true) {
    //             // Check if the phone number already exists in the database
    //             $phonenumber = $this->input->post('phonenumber');
    //             $userExists = $this->projectModel->checkUserExistence($phonenumber);
                
    //             if ($userExists) {
    //                 // User already exists, show an error message
    //                 echo "<script>alert('The user already exist login to continue.');</script>";
    //                 echo "<script>window.location.href = 'index';</script>";
    //                 $this->index();
    //             } else {
                    
    //                 $this->projectModel->register();
    //                 $this->session->set_userdata('logged_in_phonenumber', $phonenumber);
    //                 echo "<script>alert('successfully registered login to continue.');</script>";
    //                 echo "<script>window.location.href = 'index';</script>";
                    
    //             }
    //         }
    //     }
    // }
    
    public function registration()
    {
        $this->load->library('form_validation');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');
            
            if ($this->form_validation->run() == true) {
                $phonenumber = $this->input->post('phonenumber');
                $userExists = $this->projectModel->checkUserExistence($phonenumber);
                
                if ($userExists) {
                    redirect('index');
                } else {
                    $this->projectModel->register();
                    $this->session->set_userdata('logged_in_phonenumber', $phonenumber);
                    redirect('index');
                }
            }
        } else {
            $this->load->view('registrationform.php');
        }
    }
    
    
    public function index()
    {
        $this->load->view('loginform.php');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->library('form_validation');
            
            // Define validation rules for login form fields
            $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');
            
            if ($this->form_validation->run() == true) {
                // Check if the phone number exists in the database
                $phonenumber = $this->input->post('phonenumber');
                $userExists = $this->projectModel->checkUserExistence($phonenumber);
                
                if ($userExists) {
                    echo "<script>window.location.href = 'otpregister';</script>";
                    $this->load->view('otp.php');
                }
                else {
                    // User doesn't exist, show an error message
                    echo "<script>alert('This phone number is not registered. Please register first.');</script>";
                    echo "<script>window.location.href = 'registration';</script>";
                    $this->load->view('loginform.php');
                }
            } 
        }
    }

    public function otpregister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $response = $this->projectModel->otp();
            echo "<script>window.location.href = 'dash';</script>";
        }
        
        $this->load->view('otp.php');
    }
    

    public function dash()
    {
        
        $this->load->view('dash.php');
    }


    public function profile()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $phonenumber = $this->session->userdata('logged_in_phonenumber');
            $this->projectModel->basicdetails($phonenumber); // Pass the phone number as an argument
            
        }
    
        $this->load->view('basicDetails.php'); 
    }
    
    
public function edu()
{
    $seekerId = $this->session->userdata('logged_in_phonenumber');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $response = $this->projectModel->education();
        
    }
    $this->load->view('education.php');
}

public function exp()
{
    $seekerId = $this->session->userdata('logged_in_phonenumber');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $response = $this->projectModel->experience();
       
    }
    $this->load->view('experienceDetails.php');
}

public function pro()
{
    $seekerId = $this->session->userdata('logged_in_phonenumber');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $response = $this->projectModel->project();
    }
    $this->load->view('projectDetails.php');
}

public function area()
{
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $response = $this->projectModel->area();
    }
    $this->load->view('areaofInterest.php');
}

public function skills()
{
    $seekerId = $this->session->userdata('logged_in_phonenumber');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $response = $this->projectModel->skill();
    }
    $this->load->view('skillsDetails.php');
}

public function resume()
{
    $seekerId = $this->session->userdata('logged_in_phonenumber');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $response = $this->projectModel->resume();
       
    }
    $this->load->view('uploadResume.php');
}
 }
 ?>
