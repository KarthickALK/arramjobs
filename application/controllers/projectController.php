<?php
class projectController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projectModel');
        
    }

    public function registration()
    {
        $postData = $this->input->post();
        $response = $this->projectModel->register(); 
        $this->load->view('registrationform.php');
    }
    
    public function index()
    {
        // $postData = $this->input->post(null,true);
        // $response=$this->projectModel->login(); 
        $this->load->view('loginform.php');
    }

    public function otpregister()
    {
        // $postData1 = $this->input->post(null,true);
        // $response = $this->projectModel->otp(); 
        $this->load->view('otp.php');
    }

    public function dash()
    {
        $this->load->view('dashBoard.php');
    }


    public function profile()
    {
        // $this->data['method'] = 'basic details';
        $this->load->view('basicDetails.php');
    }

    public function edu()
    {
        // $this->data['method'] = 'education';
        $this->load->view('education.php');
    }

    public function exp()
    {
        // $this->data['method'] = 'experience';
        $this->load->view('experienceDetails.php');
    }

    // public function pro(){
    //     $this->load->view('projectView.php');
    // }
    // public function area()
    // {
    //     $this->load->view('areaofInterest.php');
    // }
    // public function skills(){
    //     $this->load->view('skillsDetails.php');
    // }
    // public function resume(){
    //     $this->load->view("uploadResume.php");
    // }
 }
 ?>
