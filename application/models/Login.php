<?php
// class Login extends CI_Model
// {
//     public function __construct()
//     {
//         parent::__construct();
//     }

//     public function register()
//     {
//         $phonenumber = $this->input->post('phonenumber');
        
//         $insert = array(
//             'phonenumber' => $phonenumber
//         );

//         $this->db->insert('login_form', $insert);
//     }
// }
class Login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        $phonenumber = $this->input->post('phonenumber');

        if (isset($phonenumber) && !empty($phonenumber)) {
            $insert = array(
                'phonenumber' => $phonenumber
            );

            $this->db->insert('login_form', $insert);
        } else {
           
        }
    }
}

?> 
