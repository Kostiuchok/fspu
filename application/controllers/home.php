<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{	
		$data['news_block'] = $this->news_model->get_news_order_limit(4,0);

		foreach ($data['news_block'] as $key => $item) {
			
			$data['news_all'][$key]->date = $this->date_ukr->format($item->date);
			$source_arr = explode("-",$item->source);
			$source = $source_arr[0];
			$source_id = $source_arr[1];
			if($source == 'federation'){
				
				$data['news_block'][$key]->source = $this->federation_model->get_federation($source_id);
				$data['news_block'][$key]->source_type = 'federation';
			}
			elseif($source == 'smi'){
				
				$data['news_block'][$key]->source = $this->smi_model->get_smi($source_id);
				$data['news_block'][$key]->source_type = 'smi';
			}
			else{
				die();
			}

			
		}
		unset($key,$item);

		$data['fed'] = $this->federation_model->get_federation_limit(4);
		$data['fed_all'] = $this->federation_model->get_federation_all(4);
		$this->load->view('home',$data);
	}


}
