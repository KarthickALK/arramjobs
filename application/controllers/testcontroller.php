<?php
class ProjectController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('projectModel');
    }

    public function index()
    {
        // Your index function code here
    }

    public function load_form($formname)
    {
       
       
    }

    public function dash()
    {
        $this->load->view('dashboard.php');
    }
}
