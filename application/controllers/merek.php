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

    
    function pagination()
    {
        $config['base_url']         = base_url() . "index.php/_design/category/index";
        $config['total_rows']       = $this->category->select()->num_rows();
        $config['per_page']         = 5; 
        $config["uri_segment"]      = 4;
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
        $this->pagination->initialize( $config ); 
        return $config;
    }

    // config data to show all 
    function default_data()
    {
        $config                             = $this->pagination();
        $page                               = ($this->uri->segment( $config["uri_segment"] )) ? $this->uri->segment( $config["uri_segment"] ) : 0;

        $data["data_table"]                 = $this->category->select_by_limit( $config['per_page'], $page )->result();
        $data["links"]                      = "<ul class='pagination'>" . $this->pagination->create_links() . "</ul>";
        $data["form_data"]                  = array();
        $data["content_template"]           = "/admin/category/category_view";

        return $data;
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */