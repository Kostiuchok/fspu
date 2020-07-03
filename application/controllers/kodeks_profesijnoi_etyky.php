<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kodeks_profesijnoi_etyky extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('kodeks_profesijnoi_etyky');
	}


}
