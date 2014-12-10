<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merek extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
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