<?php
    class Crud extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('crud_model');
        }


        public function displaydata(){
            $result['data']=$this->crud_model->display_records();
            $this_load->view('display_records',$result);
        }
    }
?>