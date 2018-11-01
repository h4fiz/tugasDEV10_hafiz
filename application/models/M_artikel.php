<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model {

	private $table = 'artikel';

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('users', 'users.id_user = artikel.id_user', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left');
		return $this->db->get()->result_array();
	}
	public function get_by_id($id_artikel)
		{
			return $this->db->get_where($this->table, array('id_artikel' => $id_artikel));

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
	public function update($id_artikel, $data)
		{
			$this->db->where('id_artikel', $id_artikel);
			$this->db->update($this->table, $data);
			if ($this->db->affected_rows()>0) {
				return true;
			}else {
				return false;
			}
		}
	public function delete($id_artikel)
		{
			$this->db->where('id_artikel', $id_artikel);
			$this->db->delete($this->table);
			if ($this->db->affected_rows()>0) {
				return true;
			}else {
				return false;
			}
		}

}

/* End of file M_artikel.php */
/* Location: ./application/models/M_artikel.php */