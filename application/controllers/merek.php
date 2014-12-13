<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merek extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('merek_model' => 'merek_model'));
    }

    public function index()
    {               
        $contentData['data_list']   = $this->merek_model->getAll()->result();

        $data['content']            = $this->load->view('pages/merek', $contentData, true);

        $this->load->view('master_page', $data);
    }

    public function insert()
    {
        $nama       = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');

        $inserData  = array(
                'nama'          => $nama,
                // 'keterangan'    => $keterangan
            );

        $result = $this->merek_model->save($inserData);

        echo $result;
    }

    public function edit()
    {
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');

        $updateData  = array(
                'nama'  => $nama,
                // 'keterangan'    => $keterangan
            );

        $result = $this->merek_model->update($id, $updateData);

        echo $result;
    }

    public function delete()
    {
        $id         = $this->input->post('id');

        $result    = $this->merek_model->delete($id);
        
        echo $result;
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */