<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merek extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {               
        $merek = new Merek();
        $merek->nama = 'jajal ban';
        $merek->save();

        // $barang = new Barang();
        // $barang->barcode = '098777748838';
        // $barang->nama = 'test';
        // $barang->deskripsi = '';
        // $barang->merek_id = 6;
        // $barang->save();

        
        // echo '<pre>'.print_r($barang->where('id', 1),1).'</pre>';
        //SoedjarwoAli: load barang view 
        $data['content'] = $this->load->view('pages/merk', '', true);
        $this->load->view('master_page', $data);
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */