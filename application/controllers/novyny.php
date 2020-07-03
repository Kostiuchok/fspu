<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novyny extends Public_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		
		$data['news_one'] = $this->news_model->get_news_order_limit(1);

		/*echo "<pre>";
		print_r($data['news_one']);
		echo "</pre>";
		die();*/

		$data['news_one'][0]->date = $this->date_ukr->format($data['news_one'][0]->date); 
		$source_arr = explode("-",$data['news_one'][0]->source);
		
		$source = $source_arr[0];
		$source_id = $source_arr[1];

		if($source == 'federation'){
			$data['source_type'] = 'federation';
			$data['source'] = $this->federation_model->get_federation($source_id);
		}
		elseif($source == 'smi'){
			$data['source_type'] = 'smi';
			$data['source'] = $this->smi_model->get_smi($source_id);
		}
		else{
			die();
		}

		$data['news_one'] = $data['news_one'][0];
		unset($source_arr,$source,$source_id);

		$data['news_all'] = $this->news_model->get_news_order_limit(10,1);

		foreach ($data['news_all'] as $key => $item) {
			
			$data['news_all'][$key]->date = $this->date_ukr->format($item->date);
			$source_arr = explode("-",$item->source);
			$source = $source_arr[0];
			$source_id = $source_arr[1];
			if($source == 'federation'){
				
				$data['news_all'][$key]->source = $this->federation_model->get_federation($source_id);
				$data['news_all'][$key]->source->type = 'federation';
			}
			elseif($source == 'smi'){
				
				$data['news_all'][$key]->source = $this->smi_model->get_smi($source_id);
				$data['news_all'][$key]->source->type = 'smi';
			}
			else{
				die();
			}

			$link = parse_url($data['news_all'][$key]->source->link);

			if(array_key_exists('host', $link)){

				$data['news_all'][$key]->source->link = $link['host'];
			}
			else{
				$data['news_all'][$key]->source->link = $link['path'];	
			}

			
		}


		
		$this->load->view('novyny',$data);

	}


}
