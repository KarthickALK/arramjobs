<?php
    class idenController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('idenModel');
        }

        public function registration()
        {
            $postData=$this->input->post();
            $response=$this->idenModel->register();
            $this->load->view('idenDetails.php');
        }
    }
?>