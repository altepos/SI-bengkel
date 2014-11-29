<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('member_model', 'member');
    }

    public function index()
    {               
        //SoedjarwoAli: load user view 
        $data['content'] = $this->load->view('pages/user', '', true);
        $this->load->view('master_page', $data);
    }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */