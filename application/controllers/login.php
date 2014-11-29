<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('member_model', 'member');
    }

    public function index()
    {   
            $dataToShow = array();
            
            //SoedjarwoAli: load the view login 
            $this->load->view('login', $dataToShow);
    }

    public function logout()
    {
        //SoedjarwoAli: remove user data
        $user_data = array(
                'member_id' => ''
            );

        $this->session->unset_userdata($user_data);

        //SoedjarwoAli: redirect to home
        redirect(base_url(),'refresh');
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */