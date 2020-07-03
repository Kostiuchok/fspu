<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novyna extends Public_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index($id)
	{	
		
		$data = $this->news_model->get_news($id);
		$this->load->view('novyna',$data);

	}


}
