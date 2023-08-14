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
        // $postData = $this->input->post();
        // $response = $this->projectModel->register(); 
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


    public function profile()
    {
        // $postData = $this->input->post(); 
        // $response = $this->projectModel->profregister(); 
        $this->load->view('basicDetails.php');
    }

    public function edu()
    {
        // $postData = $this->input->post();
        // $response = $this->projectModel->eduregister(); 
        $this->load->view('education.php');
    }

    public function exp()
    {
        // $postData = $this->input->post();
        // $response = $this->projectModel->idenregister(); 
        $this->load->view('experienceDetails.php');
    }
    public function pro(){
        $this->load->view('projectDetails.php');
    }
    public function area()
    {
        $this->load->view('areaofInterest.php');
    }
    public function skills(){
        $this->load->view('skillsDetails.php');
    }
    public function resume(){
        $this->load->view("uploadResume.php");
    }
}
?>
