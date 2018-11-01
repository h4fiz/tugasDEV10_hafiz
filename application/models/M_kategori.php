<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

	private $table = 'kategori';

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}
	public function getAll()
	{
		return $this->db->get($this->table)->result_array();
	}
	public function get_by_id($id_kategori)
		{
			return $this->db->get_where($this->table, array('id_kategori' => $id_kategori));

		}

	public function insert($data)
		{
			$this->db->insert($this->table , $data);

			if ($this->db->affected_rows()>0) {
				return true;
			}else {
				return false;
			}
		}
	public function update($id_kategori, $data)
		{
			$this->db->where('id_kategori', $id_kategori);
			$this->db->update($this->table, $data);
			if ($this->db->affected_rows()>0) {
				return true;
			}else {
				return false;
			}
		}
	public function delete($id_kategori)
		{
			$this->db->where('id_kategori', $id_kategori);
			$this->db->delete($this->table);
			if ($this->db->affected_rows()>0) {
				return true;
			}else {
				return false;
			}
		}

	

}

/* End of file M_kategori.php */
/* Location: ./application/models/M_kategori.php */