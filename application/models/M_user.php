<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	private $table = 'users';

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}
	public function getAll()
	{
		return $this->db->get($this->table)->result_array();
	}
	public function get_by_id($id_user)
		{
			return $this->db->get_where($this->table, array('id_user' => $id_user));

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
	public function update($id_user, $data)
		{
			$this->db->where('id_user', $id_user);
			$this->db->update($this->table, $data);
			if ($this->db->affected_rows()>0) {
				return true;
			}else {
				return false;
			}
		}
	public function delete($id_user)
		{
			$this->db->where('id_user', $id_user);
			$this->db->delete($this->table);
			if ($this->db->affected_rows()>0) {
				return true;
			}else {
				return false;
			}
		}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */