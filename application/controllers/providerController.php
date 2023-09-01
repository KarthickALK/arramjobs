 <?php
    class providerController extends CI_Controller
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
            $this->load->view('providerLogin.php');
        }


        public function providerRegistration()
        {
            $responses = $this->RegistrationModel->register();
            $this->load->view('providerLogin.php');
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

        public function viewDashboard()
        {
            $postData = $this->input->post(null, true);
            $response = $this->RegistrationModel->database_login();
            if (isset($response[0]['id'])) {
                $userLoggedIn = array(
                    'jobProviderId' => $response[0]['jobProviderId'],
                    'jobProviderUserId' => $response[0]['user_id'],
                    'jobProviderPassword' => $response[0]['password']
                );
                $this->session->set_userdata($userLoggedIn);
                $this->data['method'] = "dashboard";
                $this->load->view('exampleDashboard.php', $this->data);
            } else {

                $this->load->view('providerLogin.php');
            }
        }

        public function dashboard()
        {
            $this->data['method'] = "dashboard";
            $this->load->view('exampleDashboard.php', $this->data);
        }



        public function providerUpdateRegistration()
        {
            $this->data['method'] = "updateJob";
            $provider = $this->RegistrationModel->provider_detail();
            $this->data['providerDetail'] = $provider;
            $this->load->view('exampleDashboard.php', $this->data);
        }


        public function jobViewTable()
        {
            $this->data['method'] = "jobview";
            $tab = $this->RegistrationModel->addTab();
            $this->data['providerJobs'] = $tab;

            $this->load->view('exampleDashboard.php', $this->data);
        }


        public function jobMatchedTable()
        {
            $jobCategory = $this->uri->segment(3);
            $response = $this->RegistrationModel->candidates($jobCategory);
            $this->data['method'] = "match";
            $this->data['response'] = $response;
            $this->load->view('exampleDashboard.php', $this->data);
        }

        public function matchedCandidate()
        {

            $allcandidates = $this->RegistrationModel->matchedAllCandidate();
            $this->data['method'] = "allCandidate";

            $this->data['candidateView'] = $allcandidates;
            $this->load->view('exampleDashboard.php', $this->data);
        }



        public function jobWishlistCandidates()
        {
            $this->data['method'] = "wishlist";
            // $this->load->view('job_wishlist_candidates.php');
            $this->load->view('exampleDashboard.php', $this->data);
        }



        public function update_record()
        {
            $postData = $this->input->post(null, true);
            $var = $this->RegistrationModel->update_data();

            echo "Record updated successfully";
            $this->providerUpdateRegistration();
        }



        public function providerAddJob()
        {

            $this->data['method'] = "addnew";
            // $this->load->view('addnew_jobs.php');
            $this->load->view('exampleDashboard.php', $this->data);
        }



        public function insertJob()
        {
            $this->data['method'] = "jobs";
            $addJob = $this->RegistrationModel->addNew();

            // $this->load->view('jobs.php');
            $this->load->view('exampleDashboard.php', $this->data);
            echo "Record added seccessfuly";
        }

        public function updateAddNew()
        {
            $id = $this->uri->segment(3);
            $this->data['method'] = "updateaddnew";
            $addjob = $this->RegistrationModel->updatejob($id);
            $this->data['updateAddNew'] = $addjob;
            //$this->load->view('update_addnew_jobs.php',$this->data);
            $this->load->view('exampleDashboard.php', $this->data);
        }
        public function updateInsert()
        {
            $postData = $this->input->post(null, true);
            $add = $this->RegistrationModel->update_job();

            echo "Record updated Successfully";
            $this->jobViewTable();
        }
        public function deleteAddJob()
        {
            $deleteId = $this->uri->segment(3);
            $delete = $this->RegistrationModel->deleteAddJob($deleteId);
            if ($delete == null) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record";
            }

            $this->jobViewTable();
        }

        public function resumeCard()
        {
            $id = $this->uri->segment(3);
            $this->data['method'] = "resume";

            $education = $this->RegistrationModel->educationalDetails($id);
            $this->data['education'] = $education;

            $skills = $this->RegistrationModel->skills($id);
            $this->data['skills'] = $skills;

            $projectDetails = $this->RegistrationModel->projectDetails($id);
            $this->data['projectDetails'] = $projectDetails;

            $areaOfInterest = $this->RegistrationModel->areaOfInterest($id);
            $this->data['areaOfInterest'] = $areaOfInterest;

            $experienceDetails = $this->RegistrationModel->experienceDetails($id);
            $this->data['experienceDetails'] = $experienceDetails;

            $seekerName = $this->RegistrationModel->candidate($id);
            $this->data['seekerName'] = $seekerName;


            $this->load->view('exampleDashboard.php', $this->data);
        }


        public function filterAllCandidate()
        {
            $postData = $this->input->post(null, true);
            $category = $postData['category'];
            $subcategory = $postData['subcategory'];
            $filter = $this->RegistrationModel->filterCandidate($category, $subcategory);
            $this->data['filtercandidate'] = $filter;
            $this->data['method'] = "filltercandidate";
            $this->load->view('exampleDashboard.php', $this->data);
        }














        //     public function filter() {
        //         $this->data['method']="match";
        //         $category = $this->input->post('category'); 
        //         $subcategory = $this->input->post('subcategory'); 



        //         $filtered_records = $this->RegistrationModel->getFilteredRecords($category, $subcategory);

        //         $data['filtered_records'] = $filtered_records;
        //         $this->load->view('exampleDashboard.php', $data); 

        // }



        // public function innerjoin()
        // {
        //     $id=$this->uri->segment(3);
        //     $this->load->RegistrationModel->joinTables($id);
        // }
































    }






    ?>