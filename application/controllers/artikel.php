<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_artikel','artikel');
		$this->load->model('M_user','user');
		$this->load->model('M_kategori','kategori');
	}

	public function index()
	{
		$data['dataArtikel'] = $this->artikel->getAll();
		$this->load->view('artikel/view', $data);
	}

	public function add()
	{
		$data['dataUsers'] = $this->artikel->getAll();
		$data['dataKategori'] = $this->artikel->getAll();
		$this->load->view('artikel/form', $data);
	}
	
	public function edit($id_artikel)
	{
		$data['dataUsers'] = $this->user->getAll();
		$data['dataKategori'] = $this->kategori->getAll();
		$this->load->view('artikel/form', $data);
	}

	public function proses()
	{
		$id_artikel = $this->input->post('id_artikel');
		$data['judul_artikel'] =$this->input->post('judul_artikel');
		$data['isi_artikel'] =$this->input->post('isi_artikel');
		$data['id_user'] =$this->input->post('id_user');
		$data['id_kategori'] =$this->input->post('id_kategori');
		if(empty($id_artikel)){
			$result = $this->artikel->insert($data);
		} else {
			$result = $this->artikel->update($id_artikel, $data);
		}
		
		if ($result) {
			redirect('artikel');
		}else {
			echo "Gagal menyimpan data ";
		}
	}
	public function delete($id_artikel)
	{
		$result = $this->artikel->delete($id_artikel);
		if ($result) {
			redirect('artikel');
		}else {
			echo "Gagal menghapus data ";
		}	
	}

}

/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */