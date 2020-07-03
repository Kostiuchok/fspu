<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chleny_fspu extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['fed'] = $this->federation_model->get_federation_all();
		$this->load->view('chleny_fspu',$data);
	}


}
