<?php
class seekerController extends CI_Controller
{
    private $data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model('seekerModel');
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
                $userExists = $this->seekerModel->checkUserExistence($phonenumber);

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
            //     $userExists = $this->seekerModel->checkUserExistence($phonenumber);

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
            $response = $this->seekerModel->otp();
            echo "<script>window.location.href = 'dash';</script>";
        }

        $this->load->view('seekerOtp.php');
    }

    public function seekerLogin()
    {
        $postData = $this->input->post(null, true);
        $login = $this->seekerModel->seekerLogin();
        if (isset($login[0]['id'])) {
            $userLoggedIn = array(
                'id' => $login[0]['id'],
                'userName' => $login[0]['name'],
                'phonenumber' => $login[0]['phonenumber']
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
        $this->load->model('seekerModel');
        $basicDetails = $this->seekerModel->basicDetails();
        $this->data['basicDetails'] = $basicDetails;
        $this->data['method'] = 'basicdetails';
        $this->load->view('seekerView.php', $this->data);
    }

    public function updateBasicDetails()
    {
        $postData = $this->input->post(null, true);
        $updateBasicDetails = $this->seekerModel->updateBasicDetails();
    }




    public function educationalDetails()
    {
        $this->load->model('seekerModel');
        $this->data['method'] = "education";

        $seekerId = $this->session->userdata('logged_in_phonenumber');

        if ($this->input->post()) {
            $formData = $this->input->post(null, true);
            $this->seekerModel->educationalDetails($seekerId, $formData);
        }

        // Retrieve educational details for the logged-in user


        $this->data['seekerId'] = $seekerId; // Assuming $seekerId holds the correct value
        $this->load->view('seekerView', $this->data);
    }




    public function experienceDetails()
    {
        $this->load->model('seekerModel');
        $this->data['method'] = "experience";
        $seekerDetail = $this->seekerModel->update();
        $seekerId = $this->session->userdata('logged_in_phonenumber'); // Get the seekerId from the session or wherever it's stored

        if ($this->input->post()) {
            $formData = $this->input->post(null, true);
            $this->seekerModel->experienceDetails($seekerId, $formData);
        }

        $seekerDetail = $this->seekerModel->update();
        $this->data['seekerDetail'] = $seekerDetail;

        $this->data['seekerId'] = $seekerId;
        $this->load->view('seekerView', $this->data);
    }


    public function projectDetails()
    {
        $this->load->model('seekerModel');
        $this->data['method'] = "project";
        $seekerDetail = $this->seekerModel->update();
        $seekerId = $this->session->userdata('logged_in_phonenumber'); // Get the seekerId from the session or wherever it's stored

        if ($this->input->post()) {
            $formData = $this->input->post(null, true);
            $this->seekerModel->projectDetails($seekerId, $formData);
        }

        $data['seekerDetail'] = $seekerDetail;
        $this->data['seekerId'] = $seekerId; // Pass the seekerId to the view

        $this->load->view('seekerView', $this->data);
    }


    public function areaOfInterest()
    {
        $this->load->model('seekerModel');
        $this->data['method'] = "areaofinterest";
        $seekerId = $this->session->userdata('logged_in_phonenumber');

        if ($this->input->post()) {
            $formData = $this->input->post(null, true);

            $this->seekerModel->areaOfInterest($seekerId, $formData);
        }

        $seekerDetail = $this->seekerModel->update();

        $data = array(
            'seekerDetail' => $seekerDetail,
            'seekerId' => $seekerId
        );

        $this->load->view('seekerView', $data);
    }


    public function skills()
    {
        $this->data['method'] = "skills";
        $seekerId = $this->session->userdata('logged_in_phonenumber');

        if ($this->input->post()) {
            $formData = $this->input->post(null, true);
            $this->seekerModel->skill($seekerId, $formData);
        }

        // Retrieve updated seekerDetail after insertion/update
        $seekerDetail = $this->seekerModel->getSkills($seekerId);

        $data = array(
            'seekerDetail' => $seekerDetail,
            'seekerId' => $seekerId,
            'method' => $this->data['method']
        );

        $this->load->view('seekerView', $this->data);
    }





    public function resume()
    {
        $this->data['method'] = "resume";
        $seekerId = $this->session->userdata('logged_in_phonenumber');

        if ($this->input->post()) {
            $formData = $this->input->post(null, true);

            $this->seekerModel->resume($seekerId, $formData);
        }

        $seekerDetail = $this->seekerModel->update();
        $data = array(
            'seekerDetail' => $seekerDetail,
            'seekerId' => $seekerId
        );

        $this->load->view('seekerView', $this->data);
    }
}
