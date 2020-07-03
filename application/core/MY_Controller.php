<?php if (!defined('BASEPATH')) exit('No direct access allowed.');

// Controllers only accessible to logged in users that are admins
class Admin_Controller extends CI_Controller 
{
	function __construct()
	{ 
		parent::__construct();
		$this->load->library('session');

		if ($this->session->userdata('logged_in') != 'yes') 
		{
			
			// The user is not logged in or his role is wrong, send them to login page
			redirect('/admin/login');
			
		}
	}
}

class Public_Controller extends CI_Controller 
{
	function __construct()
	{ 
		parent::__construct();
		
		if(uri_string() == 'admin/login' || uri_string() == 'admin/login/submit' || uri_string() == 'admin/login/logout') return;
		

		$this->load->model('news_model');
		$this->load->model('smi_model');
		$this->load->model('federation_model');
		$this->load->library('date_ukr');

		$news_menu = $this->news_model->get_news_menu_federation();
		
		foreach ($news_menu as $key => $item) {
			$source_arr = explode("-",$item->source);
			$source = $source_arr[0];
			$source_id = $source_arr[1];

			if($source == 'federation'){
				$news_menu[$key]->source = $this->federation_model->get_federation($source_id);
			}
			else{
				die();
			}
		}
		unset($key,$item);

		$news_right = $this->news_model->get_news_order_limit(4,1);

		foreach ($news_right as $key => $item) {
			
			$news_right[$key]->date = $this->date_ukr->format($item->date);
			$source_arr = explode("-",$item->source);
			$source = $source_arr[0];
			$source_id = $source_arr[1];
			if($source == 'federation'){
				
				$news_right[$key]->source = $this->federation_model->get_federation($source_id);
				$news_right[$key]->source_type = 'federation';
			}
			elseif($source == 'smi'){
				
				$news_right[$key]->source = $this->smi_model->get_smi($source_id);
				$news_right[$key]->source_type = 'smi';
			}
			else{
				die();
			}

			
		}
		unset($key,$item);

		$news_top = $this->news_model->get_news_order_limit(2,0);
		
		foreach ($news_top as $key => $item) {
			
			$news_top[$key]->date = $this->date_ukr->format($item->date);
			$source_arr = explode("-",$item->source);
			$source = $source_arr[0];
			$source_id = $source_arr[1];
			if($source == 'federation'){
				
				$news_top[$key]->source = $this->federation_model->get_federation($source_id);
				$news_top[$key]->source_type = 'federation';
			}
			elseif($source == 'smi'){
				
				$news_top[$key]->source = $this->smi_model->get_smi($source_id);
				$news_top[$key]->source_type = 'smi';
			}
			else{
				die();
			}

			
		}
		

		$this->load->vars(array(
              'news_menu_fed' => $news_menu,
              'news_right' => $news_right,
              'news_top' => $news_top
              ));

		
	}
}
?>