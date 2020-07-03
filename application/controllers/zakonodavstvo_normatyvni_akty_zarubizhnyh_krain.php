<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zakonodavstvo_normatyvni_akty_zarubizhnyh_krain extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('zakonodavstvo_normatyvni_akty_zarubizhnyh_krain');
	}


}
