<?php
class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login'); 
    }

    public function index()
    {
        $postData = $this->input->post();
        $this->ProfileformModel->register($postData); 
        $this->load->view('loginform.php');
    }
    public function newuser()
    {
        redirect('logincontroller/registration');
    }

    public function registration()
    {
        $this->load->view('registrationform.php');
    }
    public function otp()
    {
        $this->load->view('otp.php');
    }
}
?>
