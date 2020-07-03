<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chlen_fspu extends Public_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index($id)
	{
		$data = $this->federation_model->get_federation($id);		
		$this->load->view('chlen_fspu',$data);

	}


}
