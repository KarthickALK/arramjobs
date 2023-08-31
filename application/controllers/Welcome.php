<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	
		//   $this->load->view('dashboard_page.php');
		//    $this->load->view('provider_login.php');
		//    $this->load->model('RegistrationModel');
		//   $this->load->view('welcome');
		// $this->load->view('provider_update_registration.php');
		function _construct(){
			parent::_construct();
		}
	public function index()
	{
		$this->load->view('providerLogin.php');
		// $this->load->view('dashboard_page.php');
		// $this->load->model('RegistrationModel');
		// $provider=$this->RegistrationModel->provider_detail(); 
		// $this->data['providerDetail'] = $provider;
		// $this->load->view('provider_update_registration.php',$this->data);
		// $this->load->view('exampleDashboard.php');
		// $this->load->view('viewCandidates.php');
	}

     


    // public function index() {
    //     $this->load->helper('url');
    //     $this->load->view('registrationform.php');
    // }
}

