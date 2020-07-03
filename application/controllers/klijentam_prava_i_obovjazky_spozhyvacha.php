<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Klijentam_prava_i_obovjazky_spozhyvacha extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('klijentam_prava_i_obovjazky_spozhyvacha');
	}


}
