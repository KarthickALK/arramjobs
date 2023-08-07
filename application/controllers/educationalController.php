<?php
    class educationalController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('educationalModel');
        }

        public function registration()
        {
            $postData=$this->input->post();
            $response=$this->educationalModel->register();
            $this->load->view('eduDetails.php');
        }
    }
?>