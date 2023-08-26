 <?php
    class Registration extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('RegistrationModel');
            $this->load->library('session');
            
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



        //  public function load_login()
        // {
        //      $postData=$this->input->post(null,true);
        //      $response=$this->RegistrationModel->database_login();
        //      if(isset($response[0]['id']))
        //     {
        //         $this->data['method']="dashboard";
        //         $this->load->view('exampleDashboard.php',$this->data);
        //     }
        //     else{

        //         $this->load->view('provider_login.php');
        //     }
        // }


        // ,$this[data]

         public function view_dashboard()
        {
            $postData=$this->input->post(null,true);
             $response=$this->RegistrationModel->database_login();
             if(isset($response[0]['id']))
            {
                $userLoggedIn = array(
                    'userId' => $response[0]['jobProviderId'],
                    'userName' => $response[0]['user_id'],
                    'mobile' => $response[0]['password']
                );
                $this->session->set_userdata($userLoggedIn);
                $this->data['method']="dashboard";
                $this->load->view('exampleDashboard.php',$this->data);
            }
            else{

                $this->load->view('provider_login.php');
            }
        }

        public function dashboard(){
            $this->data['method']="dashboard";
                $this->load->view('exampleDashboard.php',$this->data);
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
        echo "Record added seccessfuly";
         }

       public function updateAddNew()
       {
        $id=$this->uri->segment(3);
        $this->data['method']="updateaddnew";
           $addjob=$this->RegistrationModel->updatejob($id); 
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
        $deleteId = $this->uri->segment(3);
        $delete=$this->RegistrationModel->deleteAddJob($deleteId);
        if ($delete==null) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record";
            }
        
        $this->job_view_table();
    }
    

    // if ($deleteResult) {
        //     echo "Record deleted successfully";
        // } else {
        //     echo "Error deleting record";
        // }
        
    // $this->RegistrationModel->segment('id');
        // $deleteAdd=$this->RegistrationModel->deleteAddJob();
        // echo "Record delete Successfully";
        // $this->job_view_table();





            

       



    //    public function add_provider_job()
    //    {
    //        $tab=$this->RegistrationModel->addTab();
    //        $this->data['providerJobs']=$tab;
    //        $this->load->view('jobs.php',$this->data);
    //    }

      

       



   
      

































   




      
        
       

   


//         $data = array(
//             'name' => $this->input->post('name'),
//             'phno' => $this->input->post('phno'),
//             'email' => $this->input->post('email'),
//             'addr' => $this->input->post('addr'),
//             'landmark1' => $this->input->post('landmark1'),
//             'city1' => $this->input->post('city1'),
//             'district1' => $this->input->post('district1'),
//             'state1' => $this->input->post('state1'),
//             'pincode1' => $this->input->post('pincode1'),
//             'file' => $this->input->post('file'),
//             'role' => $this->input->post('role'),
//             'phno1' => $this->input->post('phno1'),
//             'mail1' => $this->input->post('mail1'),
//          );

//         $user_ids = $this->input->post('user_ids'); 

//         foreach ($user_ids as $user_id) {
//             $this->RegistrationModel->update_user($user_id, $data);
//         }

//         redirect('Registration/indexs');
//     }
// }




//    public function displatdata(){
    //     $result['data']=$this->RegistrationModel->display_records();
    //     $this->load->view('provider_update_registration',$result);
    //    }

    //    public function updatedata()
    //    {
    //     $id=$this->input->get('id');
    //     $result['data']=$this->RegitrationModel->displayrecordsById($id);
    //     $this->load->view('update_records',$result);
    //     if($this->input->post('update'))
    //     {
    //         $name=$this->input->post('name');
    //         $phno=$this->input->post('phno');
    //         $email=$this->input->post('email');
    //         $addr=$this->input->post('addr');
    //         $landmark1=$this->input->post('landmark1');
    //         $city1=$this->input->post('city1');
    //         $district1=$this->input->post('district1');
    //         $state1=$this->input->post('state1');
    //         $pincode1=$this->input->post('pincode1');
    //         $file=$this->input->post('file');
    //         $name1=$this->input->post('name1');
    //         $role=$this->input->post('role');
    //         $phno1=$this->input->post('phno1');
    //         $mail1=$this->input->post('mail1');
    //         $this->RegistrationModel->update_records($name, $phno,$email, $addr, $landmark1,$city1,$district1, $state1
    //                                                 , $pincode1, $file,$name1,$role,$phno1,$mail1,$id);
    //         echo "Data Update successfully";

    //     }
    //    }
       

       













































































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
    // }
    


       

       


        











        
  
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