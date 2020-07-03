<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statystyka_ukrainskyj_strahovyj_rynok extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('statystyka_ukrainskyj_strahovyj_rynok');
	}


}
