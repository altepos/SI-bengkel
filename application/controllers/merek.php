<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merek extends CI_Controller {

    var $merek = null;

    public function __construct()
    {
        parent::__construct();
        $this->merek = new Merek_model();

    }

    public function index()
    {               
        $contentData['data_list']   = $this->merek->get();

        $data['content']            = $this->load->view('pages/merek', $contentData, true);

        $this->load->view('master_page', $data);
    }

    public function insert()
    {
        $nama       = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');

        $this->merek->nama          = $nama;
        // $this->merek->keterangan    = $keterangan;

        $success = $this->merek->save();

        if ($success)
            echo json_encode(array('status' => $success, 'message' => 'Input data success...'));
        else
            echo json_encode(array('status' => $success, 'message' => 'Input data failed...'));
    }

    public function edit()
    {
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');

        $this->merek->id    = $id;
        $this->merek->nama  = $nama;
        // $this->merek->keterangan    = $keterangan;

        $success = $this->merek->save();

        if ($success)
            echo json_encode(array('status' => $success, 'message' => 'Edit data success...'));
        else
            echo json_encode(array('status' => $success, 'message' => 'Edit data failed...'));
    }

    public function delete()
    {
        $id         = $this->input->post('id');
        $this->merek->where('id', $id)->get();

        $barang     = new Barang_model();
        $barang->where('merek_id', $id)->get();

        $success    = $this->merek->delete($barang->all);

        if ($success)
            echo json_encode(array('status' => $success, 'message' => 'Delete data success...'));
        else
            echo json_encode(array('status' => $success, 'message' => 'Delete data failed...'));
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */