<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regulasi_model extends CI_Model {

	var $table = 'tbl_regulasi';
	var $order = array('id_regulasi' => 'desc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}



	function get_all()
	{
		$query = $this->db->query("SELECT a.* , b.* FROM tbl_regulasi a INNER JOIN tbl_kategori_regulasi b ON a.id_kategori_regulasi = b.id_kategori_regulasi ORDER BY a.id_regulasi DESC");
		return $query->result();
	}

	function get_all_by_id($id)
	{
		$query = $this->db->query("SELECT a.* , b.* FROM tbl_regulasi a INNER JOIN tbl_kategori_regulasi b ON a.id_kategori_regulasi = b.id_kategori_regulasi WHERE a.id_kategori_regulasi = '$id' ORDER BY a.id_regulasi DESC");
		return $query->result();
	}



	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_regulasi',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($id,$data)
	{
		$this->db->where('id_regulasi', $id);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_regulasi', $id);
		$this->db->delete($this->table);
	}



}
