<?php


    class RegistrationModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();

        }
        
        
        public function register()
       {
           $postData=$this->input->post(null,true);
           
           $insert=array('company_name' => $postData['name'], 'company_mobile_number' =>$postData['mobile'],
                           'company_email' =>$postData['email'], 'street_address' =>$postData['address'],
                           'Landmark' =>$postData['landmark'],'City' =>$postData['city'], 'district' =>$postData['district'],
                           'state' =>$postData['state'], 'pincode' =>$postData['pincode'],
                           'company_logo' =>$postData['logo'], 'name' =>$postData['name1'], 
                           'role' =>$postData['role'],
                           'mobile_number' =>$postData['mobile1'], 'email' =>$postData['email1'],
                       );

           $this->db->insert('provider_registration_form',$insert);
        }




        
       public function database_login()
        {
            $postData=$this->input->post(null,true);
            $user_id= $postData['userID'];
            $password= $postData['password'];
            $query="SELECT * FROM provider_login WHERE user_id='$user_id' AND password='$password'";
            $count=$this->db->query($query);
            return $count->result_array();
        }

        


        public function provider_detail()
        {
            $provider="SELECT * FROM `provider_registration_form` Where `id`= 131";
            $select=$this->db->query($provider);
            return $select->result_array();
           
        }


       


        public function update_data() {
        $postData=$this->input->post(null,true);
        $id=$postData['id'];
         $data = array('company_name' => $postData['name'], 'company_mobile_number' =>$postData['phno'],
                        'company_email' =>$postData['email'], 'street_address' =>$postData['addr'],
                        'Landmark' =>$postData['landmark1'],'City' =>$postData['city1'], 'district' =>$postData['district1'],
                        'state' =>$postData['state1'], 'pincode' =>$postData['pincode1'],
                        'company_logo' =>$postData['file'], 'name' =>$postData['name1'], 
                        'role' =>$postData['role'],
                        'mobile_number' =>$postData['phno1'], 'email' =>$postData['mail1'],

            );
            $this->db->where('id', $id);
            $this->db->update('provider_registration_form', $data);
            }


       



            public function addNew()
        {
            $post=$this->input->post(null,true);

            $add = array('company_name' => $post['company_name'], 
                    'job_category_id' =>  $post['category'],
                            'job_sub_category_id' => $post['subcategory'], 'location' => $post['preferred_location'],
                            'job_type' => $post['jobtype'], 'salary' => $post['expected_salary'], 
                            'experience' => $post['experience'], 'number_of_openings' => $post['no_of_openings'],
                            'description' => $post['description']);

            $this->db->insert('provider_job',$add);
        }


        public function addTab()
        {
            $providerAdd="SELECT * FROM `provider_job`";
            $addtab=$this->db->query($providerAdd);
            return $addtab->result_array();
        }



        public function updatejob($id)
        {
            $update="SELECT * FROM `provider_job` Where `id`=$id";
            $add=$this->db->query($update);
            return $add->result_array();
        }

        public function update_job()
        {
            $post=$this->input->post(null,true);
            $id=$post['id'];
            $addjob = array('company_name' => $post['company_name'], 
                    'job_category_id' =>  $post['category'],
                    'job_sub_category_id' => $post['subcategory'], 'location' => $post['preferred_location'],
                    'job_type' => $post['jobtype'], 'salary' => $post['expected_salary'], 
                    'experience' => $post['experience'], 'number_of_openings' => $post['no_of_openings'],
                    'description' => $post['description']);
            $this->db->where('id', $id);
            $this->db->update('provider_job', $addjob);
        }
        
       
    public function deleteAddJob($deleteId)
    {
        
        $delete="DELETE FROM `provider_job` WHERE `id`=$deleteId";
        $del=$this->db->query($delete);
        // $this->db->where('id', $deleteId);
      
       
        
        
    }

























































        // public function get_users()
        // {
        //     $query = $this->db->get('provider_registration_form');
        //     return $query->result();
        // }

        
    }
        
        

         // public function database_login()
        // {
        //     $connect=mysqli_connect("localhost","root","","arramjobs") or die("connection failed");
        //     if(!empty($_POST['save']))
        // {
        //     $user_id=$_POST['un'];
        //     $password=$_POST['pw'];
        //     $query="SELECT * FROM provider_login where user_id='$user_id' and password='password'";
            
        //     $count=mysqli_num_rows($result);
        //     if($count>0)
        //     {
        //         $this->load->view('dashboard_page.php');
        //     }
        //     else{
        //         $this->load->view('provider_login.php');
        //     }
            
        // }

        

        

            
        // defined('BASEPATH') OR exit('No direct script access allowed');

       
            // public function checkLogin($user_id, $password) {
                
            //     $this->db->where('user_id', $user_id);
            //     $this->db->where('password', $password);
            //     $query = $this->db->get('provider_login');

            //     return $query->num_rows() > 0;
            // }
        


        //  public function user_login(){
        //     // $login="SELECT * FROM  provider_login WHERE id=1 AND user_id='sowmiyadevi378@gmail.com' AND  password='Sowmi@2001';
        //      if(user_id == userID && password == password)
        //     {
        //         $this->load->view('dashboard_page.php');
        //     }
        //     else{
        //         $this->load->view('provider_login.php');
        //     }

        // }

        // public function user_login() {
        //     $user_id = $this->input->post('userID'); 
        //     $password = $this->input->post('password');
        
        
        //     if($user_id == 'sowmiyadevi378@gmail.com' && $password == 'Sowmi@2001') {
        //         $this->load->view('dashboard_page.php'); 
        //     } else {
        //         $this->load->view('provider_login.php'); 
        //     }
        // }


        

    //     DECLARE user_id varchar(100) = 'sowmiyadevi378@gmail.com';
    //     DECLARE password varchar(100) = 'Sowmi@2001';

    //     SELECT
    // CASE
    //     WHEN EXISTS (
    //         SELECT 1
    //         FROM provider_login
    //         WHERE user_id = user_id AND password = password
    //     )
    //     THEN 'Login successful'
    //     ELSE 'Invalid username or password'
    // END AS login_status;


       
       
      
    // public function checkLogin($username, $password) {
    //     $query = $this->db->get_where('provider_login', array('username' => $username, 'password' => $password));
    //     return $query->row();
    // }






       












        

//     public function get_users() {
//         return $this->db->get('users')->result();
//     }

//     public function update_user($user_id, $data) {
//         $this->db->where('id', $user_id);
//         return $this->db->update('users', $data);
//     }
// }

//     public function login()
    //     { 
    //         $postData=$this->input->post(null,true);

    //        $insert=array('user_id' => $postData['userID'], 'password' => $postData['password']);

    //        $this->db->insert('provider_login',$insert);
    //    }





        // public function display_records()
        // {
        //     $query=$this->db->get('provider_registration_form');
        //     return $query=result();
        // }
        // function displayrecordsByID($id)
        // {
        //     $query = $this->db->query("select * from  provider_registration_form where id = '".$id."'");
        //     return $query=result();
        // }
        // public function update_records($name, $phno,$email, $addr, $landmark1,$city1,$district1, $state1
        // , $pincode1, $file,$name1,$role,$phno1,$mail1,$id)
        // {
        //     $this->db->query("update provider_registration_form SET name='$name', phno='$phno', email='$email'
        //                     , addr= '$addr', landmark1='$landmark1',city1= '$city1',district1='$district1',
        //                     state1=' $state1',pincode1='$pincode1',file='$file',name1='$name1',role='$role',
        //                     phno1='$phno1',mail1='$mail1' where id='".$id."'");
        // }




























       
            // public function update_profile_data($data) {
            //     $this->db->where('user_id', $user_id); // Assuming you have a field 'user_id'
            //     $this->db->update('users', $data);
            // }
        
        







     


        
      

        
       

     
    // }
    