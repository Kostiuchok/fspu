<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zakonodavstvo_proekty_zakoniv extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('zakonodavstvo_proekty_zakoniv');
	}


}