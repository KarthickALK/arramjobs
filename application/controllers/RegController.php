<?php
    class RegController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Reg');
        }

        public function registration()
        {
            $postData=$this->input->post();
            $response=$this->Reg->register();
            $this->load->view('registrationform.php');
        }
    }
?>