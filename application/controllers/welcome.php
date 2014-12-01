<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($namaHalaman = '')
	{
		$halaman['home'] = $this->load->view('pages/home', '', true);
		$halaman['belanja'] = $this->load->view('pages/belanja', '', true);
		$halaman['barang'] = $this->load->view('pages/barang', '', true);
		$halaman['kategori'] = $this->load->view('pages/kategori', '', true);
		$halaman['merek'] = $this->load->view('pages/merek', '', true);
		$halaman['setting'] = $this->load->view('pages/setting', '', true);
		$data['content'] = $halaman[$namaHalaman];
		$this->load->view('master_page', $data);
	}

	public function contoh()
	{
		$this->load->view('index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */