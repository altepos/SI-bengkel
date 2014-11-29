<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('member_model', 'member');
    }

    public function index()
    {               
        //SoedjarwoAli: load barang view 
        $data['content'] = $this->load->view('pages/merk', '', true);
        $this->load->view('master_page', $data);
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */