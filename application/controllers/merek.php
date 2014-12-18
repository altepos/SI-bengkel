<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merek extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('merek_model' => 'merek_model'));

        $this->load->library('pagination');
    }

    public function showList()
    {    
        $limit  = 1;           
        $offset = $this->uri->segment(3);

        $merek_list = $this->merek_model;
        
        $contentData['data_list']   = $merek_list->getAll(null, $limit, $offset)->result();

        $contentData['pagination']     = $this->init_pagination($merek_list->getAll(), $limit, $offset);

        $data['content']        = $this->load->view('pages/merek', $contentData, true);
        echo $contentData['pagination'];
        // $this->load->view('master_page', $data);
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

    public function init_pagination($data, $limit, $offset)
    {
        $this->load->library('pagination');
        
        $config['base_url'] = base_url() . '/merek/showList';
        $config['total_rows'] = /*$data->num_rows()*/122;
        $config['per_page'] = $limit;
        $config['uri_segment'] = $offset;

        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';

        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    } 
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */