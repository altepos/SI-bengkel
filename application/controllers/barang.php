<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

    var $barang = null;

    public function __construct()
    {
        parent::__construct();
        $this->barang = new Barang_model();
    }

    public function index()
    {               
        //SoedjarwoAli: load barang view 
        $data['content'] = $this->load->view('pages/barang', '', true);
        $this->load->view('master_page', $data);
    }
    public function delete()
    {
        $id         = $this->input->post('id');
        $this->barang->get_by_id($id);

        $merek = new Merek_model();
    
        $variable = $this->barang->where_related( $merek)->get();

        foreach ($variable as $key => $value) {
            echo "<pre>";
            print_r($value);
            echo "</pre>";
        }

        // $success    = $this->barang->delete();

        // if ($success)
        //     echo json_encode(array('status' => $success, 'message' => 'Delete data success...'));
        // else
        //     echo json_encode(array('status' => $success, 'message' => 'Delete data failed...'));
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */