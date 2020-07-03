<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pro_federaciju_umovy_chlenstva extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pro_federaciju_umovy_chlenstva');
	}


}
