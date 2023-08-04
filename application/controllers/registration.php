 <?php
    class registration extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('RegistrationModel');
        }

        public function index()
        {
            $postData=$this->input->post(null,true);
            $response=$this->RegistrationModel->register();
            $this->load->view('provider_login.php');
        }

        


    }
?>