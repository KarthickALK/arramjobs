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
            //$responses=$this->RegistrationModel->register();
            $this->load->view('provider_login.php');
          
        }


        public function providerRegistration()
        {
            $responses=$this->RegistrationModel->register();
            $this->load->view('provider_login.php');
        }



         public function load_login()
        {
             $postData=$this->input->post(null,true);
             $response=$this->RegistrationModel->database_login();
             if(isset($response[0]['id']))
            {
                $this->data['method']="dashboard";
                $this->load->view('exampleDashboard.php',$this->data);
            }
            else{

                $this->load->view('provider_login.php');
            }
        }


        // ,$this[data]

         public function view_dashboard()
        {
            $this->data['method']="view_dashboard";
            // $this->load->view('dashboard_page.php');
            $this->load->view('exampleDashboard.php');
        }


       
        public function provider_update_registration() 
        {
            $this->data['method']="updateJob";
            $provider=$this->RegistrationModel->provider_detail(); 
            $this->data['providerDetail'] = $provider;
            $this->load->view('exampleDashboard.php',$this->data);
            
        }

       
        public function job_view_table()
       {
             $this->data['method']="jobview";
            $tab=$this->RegistrationModel->addTab();
            $this->data['providerJobs']=$tab;
           
            $this->load->view('exampleDashboard.php',$this->data);
       }
       public function job_matched_table()
       {
        $this->data['method']="match";
            // $this->load->view('job_matched_table.php');
            $this->load->view('exampleDashboard.php',$this->data);
       }
       public function job_wishlist_candidates()
       {
        $this->data['method']="wishlist";
            // $this->load->view('job_wishlist_candidates.php');
            $this->load->view('exampleDashboard.php',$this->data);
       }



       public function update_record() {
        $postData=$this->input->post(null,true);
        $var=$this->RegistrationModel->update_data();

        echo "Record updated successfully";
        $this->provider_update_registration();
       }



       public function provider_addjob()
       {
        
        $this->data['method']="addnew";
        // $this->load->view('addnew_jobs.php');
        $this->load->view('exampleDashboard.php',$this->data);
       }  

       public function insertJob()
       {
        $this->data['method']="jobs";
        $addJob=$this->RegistrationModel->addNew(); 
        // $this->load->view('jobs.php');
        $this->load->view('exampleDashboard.php',$this->data);
        
       }

       public function updateAddNew()
       {
        $this->data['method']="updateaddnew";
           $addjob=$this->RegistrationModel->updatejob(); 
           $this->data['updateAddNew']=$addjob;
        //    $this->load->view('update_addnew_jobs.php',$this->data);
           $this->load->view('exampleDashboard.php',$this->data);
       }
       public function updateInsert()
       {
        $postData=$this->input->post(null,true);
        $add=$this->RegistrationModel->update_job();

        echo "Record updated Successfully";
        $this->job_view_table();
       }
  
   
       public function deleteAddJob()
       {
        $id = $this->uri->segment(3);
        $delete=$this->RegistrationModel->deleteAddJob($id);
        if ($delete) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record";
            }
        
        $this->job_view_table();
    }