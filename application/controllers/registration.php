 <?php
    class Registration extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('RegistrationModel');
        }
        public function index()
        {
            $postData=$this->input->post(null,true);
            $responses=$this->RegistrationModel->register();
            $this->load->view('provider_login.php');
          
        }
        public function provider_registration()
        {
            $this->load->view('provider_registration.php');
        }

         public function load_login()
        {
            $this->load->view('provider_login.php');
           
        }

         public function view_dashboard()
        {
            $this->load->view('dashboard_page.php');
        }
       
        public function provider_update_registration()
        {
            $this->load->view('provider_update_registration.php');
        }
       


       

       


        











        
  
        // public function index()
        // {
            //  $postData=$this->input->post(null,true);
            //  $response=$this->RegistrationModel->register();
             //$this->load->view('provider_registration.php');
        // }

       
        // public function provider_update_registration()
        // {
            // $postData1=$this->input->post(null,true);
            // $responses=$this->RegistrationModel->login();
        //      $this->load->view('provider_update_registration.php');
        // }

        // public function login()
        // {
        //     // $postData1=$this->input->post(null,true);
        //     // $responses=$this->RegistrationModel->login();
        //      $this->load->view('provider_update_registration.php');
        // }

        // public function provider_addnew_jobs()
        // {
        //     $this->load->view('addnew_jobs.php');
        // }




       
        // public function displaydata()
        // {
        //     $result['data']=$this->RegistrationModel->provider_registration();
        //     $this->load->view('provider_registration',$result);
        // }

        // public function updatedata()
        // {
        //     $id=$this->input->get('id');
        //     $result['data'] = $this->RegistrationModel->displayrecordsById($id);
        //     $this->load->view('update_records',$result);
        // }










        

 
    
        
       
  
        // public function index()
        // {
        //     $postData=$this->input->post(null,true);
        //     $response=$this->RegistrationModel->register();
        //     $this->load->view('provider_login.php');
        // }



        // public function login()
        // {
        //     $postData1=$this->input->post(null,true);
        //     $responses=$this->RegistrationModel->login();
        //     $this->load->view('provider_update_registration.php');
        // }

     


       

        
             
    




       

        
             
    }
?>