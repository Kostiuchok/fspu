<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novyny_ogljad_zmi extends Public_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{	
		$data['news'] = $this->news_model->get_news_by_type('smi');
		foreach ($data['news'] as $key => $item) {
			
			$data['news'][$key]->date = $this->date_ukr->format($item->date);
			$source_arr = explode("-",$item->source);
			$source = $source_arr[0];
			$source_id = $source_arr[1];
			if($source == 'federation'){
				
				$data['news'][$key]->source = $this->federation_model->get_federation($source_id);
				$data['news'][$key]->source_type = 'federation';
			}
			elseif($source == 'smi'){
				
				$data['news'][$key]->source = $this->smi_model->get_smi($source_id);
				$data['news'][$key]->source_type = 'smi';
			}
			else{
				die();
			}

			
		}
		unset($key,$item);
		$this->load->view('novyny_ogljad_zmi',$data);
	}


}
