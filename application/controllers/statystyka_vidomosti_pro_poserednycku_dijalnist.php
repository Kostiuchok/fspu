<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statystyka_vidomosti_pro_poserednycku_dijalnist extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('statystyka_vidomosti_pro_poserednycku_dijalnist');
	}


}
