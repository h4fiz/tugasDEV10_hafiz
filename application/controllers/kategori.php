<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori','kategori');
	}

	public function index()
	{
		$data['dataKategori'] = $this->kategori->getAll();
		$this->load->view('kategori/view', $data);
	}

	public function add()
	{
		$this->load->view('kategori/form');
	}
	
	public function edit($id_kategori)
	{
		$data['dataKategori'] = $this->kategori->get_by_id($id_kategori)->row_array();
		$this->load->view('kategori/form',$data);
	}

	public function proses()
	{
		$id_kategori = $this->input->post('id_kategori');
		$data['nama_kategori'] =$this->input->post('nama_kategori');
		if(empty($id_kategori)){
			$result = $this->kategori->insert($data);
		} else {
			$result = $this->kategori->update($id_kategori, $data);
		}
		
		if ($result) {
			redirect('kategori');
		}else {
			echo "Gagal menyimpan data ";
		}
	}
	public function delete($id_kategori)
	{
		$result = $this->kategori->delete($id_kategori);
		if ($result) {
			redirect('kategori');
		}else {
			echo "Gagal menghapus data ";
		}	
	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */