<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novyny_mizhnarodnyj_dosvid2 extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->view('novyny_mizhnarodnyj_dosvid2');
	}


}
