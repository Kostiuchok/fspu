<?php
class Login extends Public_Controller{
  
  public function __construct() 
  {
      parent::__construct();
      $this->user = 'Admin';
      $this->pass = 'fspu_sp_fspu';
   }

    //Loads the login form if the user isnt logged in - redirects to root folder elseif. 
    public function index() {

        //Checks to see if the user is logged in
        if ($this->session->userdata('logged_in') == false)
        {

            //$this->load->library('recaptcha');

            //Store the captcha HTML for correct MVC pattern use.
            //$data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
            $data['title'] = 'Admin Side';
            $this->load->view('admin/login',$data); 

        }
    }

    //Gets called by the submit-form
    public function submit() {

        //Load REcaptcha again.
        //$this->load->library('recaptcha');

        //Check if anything is submitted at all
        if ($this->input->post('username') !== FALSE && $this->input->post('password') !== FALSE) 
        {
            //Call to recaptcha to get the data validation set within the class. 
            //$this->recaptcha->recaptcha_check_answer();

            //Store the username and password for easier access
            $username = $this->input->post('username');
            $password = $this->input->post('password');



            if ($username == $this->user && $password == $this->pass /*&& $this->recaptcha->getIsValid()*/) {
                $this->session->set_userdata('logged_in','yes');
                $this->session->set_userdata('user_id','admin');

                redirect('/admin/news/');
              } else {
                  if(!$this->recaptcha->getIsValid()) {
                      $this->session->set_flashdata('error','Невірний перевірочний код');
                  } else {
                        $this->session->set_flashdata('error','Невірні авторизаційні данні');
                    }

                    redirect('/admin/login');
                }

        } else { redirect('/admin/login'); }
    }

    public function logout(){

      $this->session->sess_destroy();
      redirect('/');
    }

  
}
?>