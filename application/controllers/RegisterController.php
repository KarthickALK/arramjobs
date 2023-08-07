<?php
    class RegisterController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Registermodel');
        }

        public function registration()
        {
            $postData=$this->input->post();
            $response=$this->Registermodel->register($postData);
            $this->load->view('profileform.php');
        }
    }
?>