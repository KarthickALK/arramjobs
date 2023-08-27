<?php
class projectController extends CI_Controller
{
    private $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projectModel');
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
                $userExists = $this->projectModel->checkUserExistence($phonenumber);
                
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
        
        $this->load->view('projectView.php');
    }


    public function profile()
    {
        $this->load->model('projectModel');
        $this->data['method']="basic details";
       
        
        if ($this->input->post()) {
           
            $phonenumber = $this->session->userdata('logged_in_phonenumber');
            $formData = $this->input->post(null, true);
            $this->projectModel->basicdetails($phonenumber, $formData);
            
            
            }
        
        $providerDetail = $this->projectModel->update();
        $this->data ['providerDetail'] = $providerDetail; 
        // var_dump($providerDetail); 
       
        
        $this->load->view('projectView', $this->data);
    }
    

        
    public function educational_details()
{
    $this->load->model('projectModel');
    $this->data['method'] = "education";

    $seekerId = $this->session->userdata('logged_in_phonenumber');
    
    if ($this->input->post()) {
        $formData = $this->input->post(null, true);
        $this->projectModel->education($seekerId, $formData);
    }
    
    // Retrieve educational details for the logged-in user
    $this->data['providerDetail'] = $this->projectModel->getEducationalDetails($seekerId);

    $this->data['seekerId'] = $seekerId; // Assuming $seekerId holds the correct value
    $this->load->view('projectView', $this->data);
}

    
    
    
    public function experience_details()
    {
        $this->load->model('projectModel');
        $this->data['method']="experience";
        $providerDetail = $this->projectModel->update(); 
        $seekerId = $this->session->userdata('logged_in_phonenumber'); // Get the seekerId from the session or wherever it's stored
        
        if ($this->input->post()) {
            $formData = $this->input->post(null, true);
            $this->projectModel->experience($seekerId, $formData);
        }
        
        $providerDetail = $this->projectModel->update();
        $this->data ['providerDetail'] = $providerDetail;

        $this->data['seekerId'] = $seekerId;
        $this->load->view('projectView', $this->data); 
    }
        

public function project_details()
{
    $this->load->model('projectModel');
    $this->data['method']="project";
    $providerDetail = $this->projectModel->update(); 
    $seekerId = $this->session->userdata('logged_in_phonenumber'); // Get the seekerId from the session or wherever it's stored
    
    if ($this->input->post()) {
        $formData = $this->input->post(null, true);
        $this->projectModel->project($seekerId, $formData);
    }
    
    $data['providerDetail'] = $providerDetail; 
    $data['seekerId'] = $seekerId; // Pass the seekerId to the view
    
    $this->load->view('projectView', $this->data); 
    }
    

public function areaofInterest()
{
    $this->load->model('projectModel');
    $this->data['method']="areaofinterest";
    $seekerId = $this->session->userdata('logged_in_phonenumber');
    
    if ($this->input->post()) {
        $formData = $this->input->post(null, true);

        $this->projectModel->area($seekerId, $formData);
    }
    
    $providerDetail = $this->projectModel->update(); 
    
    $data = array(
        'providerDetail' => $providerDetail,
        'seekerId' => $seekerId
    );

    $this->load->view('projectView', $this->data);
}


public function skills()
{
    $this->data ['method'] = "skills";
    $seekerId = $this->session->userdata('logged_in_phonenumber');
    
    if ($this->input->post()) {
        $formData = $this->input->post(null, true);
        $this->projectModel->skill($seekerId, $formData);
    }
    
    // Retrieve updated providerDetail after insertion/update
    $providerDetail = $this->projectModel->getSkills($seekerId);
    
    $data = array(
        'providerDetail' => $providerDetail,
        'seekerId' => $seekerId,
        'method' => $this->data['method']
    );
    
    $this->load->view('projectView', $data);
}





public function resume()
{
    $this->data['method']="resume";
    $seekerId = $this->session->userdata('logged_in_phonenumber');
    
    if ($this->input->post()) {
        $formData = $this->input->post(null, true);

        $this->projectModel->resume($seekerId, $formData);
    }
    
    $providerDetail = $this->projectModel->update();
    $data = array(
        'providerDetail' => $providerDetail,
        'seekerId' => $seekerId
    ); 
 
    $this->load->view('projectView', $this->data);
}



}
 ?>
