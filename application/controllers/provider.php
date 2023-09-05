<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provider extends CI_Controller
{

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
	 * 
	 */
	function __construct()
	{
		parent::__construct();
		// if ($this->Utilities->checkUserLogged()) {
		//     $userLoggedIn = $this->session->get_userdata('vendorLoggedIn');
		//     $this->data['vendorLoggedIn'] = $userLoggedIn['vendorLoggedIn'];
		// }
	}

	public function index()
	{
		$this->load->view('login.php');
	}

	public function login()
	{
		$this->load->view('providerLogin.php');
	}

	public function registration()
	{
		$this->load->view('providerRegistration.php');
	}
}
