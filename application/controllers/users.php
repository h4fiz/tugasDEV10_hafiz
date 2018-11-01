<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user','users');
	}

	public function index()
	{
		$data['dataUsers'] = $this->users->getAll();
		$this->load->view('users/view', $data);
	}

	public function add()
	{
		$this->load->view('users/form');
	}
	
	public function edit($id_user)
	{
		$data['dataUsers'] = $this->users->get_by_id($id_user)->row_array();
		$this->load->view('users/form',$data);
	}

	public function proses()
	{
		$id_user = $this->input->post('id_user');
		$data['username'] =$this->input->post('username');
		$data['password'] =md5($this->input->post('password'));
		$data['nama_user'] =$this->input->post('nama_user');
		$data['akses'] =$this->input->post('akses');
		if(empty($id_user)){
			$result = $this->users->insert($data);
		} else {
			$result = $this->users->update($id_user, $data);
		}
		
		if ($result) {
			redirect('users');
		}else {
			echo "Gagal menyimpan data ";
		}
	}
	public function delete($id_user)
	{
		$result = $this->users->delete($id_user);
		if ($result) {
			redirect('users');
		}else {
			echo "Gagal menghapus data ";
		}	
	}

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */