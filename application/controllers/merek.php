<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merek extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('merek_model' => 'merek_model'));

    }

    public function showList()
    {    
        $limit  = 10;

        $offset = $this->input->get('per_page', TRUE);

        $merek_list = $this->merek_model;

        $contentData['data_list']   = $merek_list->getAll(null, $limit, $offset)->result();

        $contentData['pagination']     = $this->init_pagination($merek_list->getAll(), "merek/showList?", $limit, $offset);

        $data['content']        = $this->load->view('pages/merek', $contentData, true);

        $this->load->view('master_page', $data);
    }

    public function findByName()
    {
        $search_term = $this->input->get('search_term', TRUE);
        
        $offset = $this->input->get('per_page', TRUE);

        $limit  = 10;

        $offset = $offset ? $offset : 0;

        $contentData['data_list']   = $this->merek_model->getByName($search_term, $limit, $offset)->result();
        
        $uri = "merek/findByName?search_term=" . $search_term; 

        $contentData['pagination']  = $this->init_pagination($this->merek_model->getByName($search_term), $uri, $limit, $offset);

        $data['content']        = $this->load->view('pages/merek', $contentData, true);

        $this->load->view('master_page', $data);
    }

    public function ajaxFindByName()
    {
        $search_term = $this->input->get('term', TRUE);
        
        $data = $this->merek_model->ajaxGetByName($search_term, 10, 0)->result_array();

        echo json_encode($data);
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

    public function init_pagination($data, $uri, $limit = 5, $offset = 0)
    {
        $this->load->library('pagination');

        $config['base_url']         = site_url() . $uri;
        $config['total_rows']       = $data->num_rows();
        $config['per_page']         = $limit; 

        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="#"><strong>';
        $config['cur_tag_close']    = '</strong></a></li>';
        $config['next_link']        = '&gt;';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_link']        = '&lt;';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['last_link']        = 'Last';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['page_query_string'] = TRUE;

        $this->pagination->initialize( $config ); 

        return "<ul class='pagination pagination-sm no-margin pull-right'>" . $this->pagination->create_links() . "</ul>";
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */
