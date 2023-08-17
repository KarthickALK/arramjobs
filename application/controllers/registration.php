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
        // ,$this[data]

         public function view_dashboard()
        {
            $this->load->view('dashboard_page.php');
        }
       
        public function provider_update_registration() 
        {
            $this->load->view('provider_update_registration.php');
        }
       public function view_provider_addjob()
       {

             $this->load->view('addnew_jobs.php');
       }  
       public function job_view_table()
       {
            $this->load->view('job_view_table.php');
       }
       public function job_matched_table()
       {
            $this->load->view('job_matched_table.php');
       }
       public function job_wishlist_candidates()
       {
            $this->load->view('job_wishlist_candidates.php');
       }
       

      

    //    public function new()
    //    {
    //     $this->load->view('view_dashboard.php');
    //    }


    
    // public function view_forms()
    //    {
    //     if(forms == provider_update_registration)
    //     {
    //         $this->load->view('provider_update_registration.php');
    //     } 
    //     else if(forms1 == view_provider_addjob)
    //     {
    //         $this->load->view('addnew_jobs.php');
    //     }
    //    }






    
        // public function update_profile() {
        //     if ($this->input->post()) {
        //         $data = array(
        //             'name' => $this->input->post('name'),
        //             'phno' => $this->input->post('phno'),
        //             'email' => $this->input->post('email'),
        //             'addr' =>$this->input->post('addr'),
        //             'landmark1'=>$this->input->post('landmark1'),
        //             'city1' =>$this->input->post('city1'),
        //             'district1' =>$this->input->post('district1'),
        //             'state1' =>$this->input->post('state1'),
        //             'pincode1' =>$this->input->post('pincode1'),
        //             'file' =>$this->input->post('file'),
        //         );
    
                
        //         $this->RegistrationModel->update_profile_data($data);
    
                
        //     } else {
        //         // Handle form display
        //         $this->load->view('update_profile_form');
        //     }
        // }
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

     


       

        
             
    




       

        
             
    
?>