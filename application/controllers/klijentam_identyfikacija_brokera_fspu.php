<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Klijentam_identyfikacija_brokera_fspu extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('klijentam_identyfikacija_brokera_fspu');
	}


}
