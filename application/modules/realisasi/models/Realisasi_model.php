<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realisasi_model extends CI_Model {

	var $table = 'tbl_realisasi';
	var $order = array('id_realisasi' => 'desc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	function get_all()
	{
		$query = $this->db->query("SELECT * FROM tbl_realisasi ORDER BY id_realisasi DESC");
		return $query->result();
	}

	function get_all_laporan()
	{
		$query = $this->db->query("SELECT a.* , b.* FROM tbl_realisasi a INNER JOIN tbl_kegiatan b ON a.id_kegiatan = b.id_kegiatan  ORDER BY a.id_realisasi DESC");
		return $query->result();
	}

	function get_all_by_kegiatan($id)
	{
		$query = $this->db->query("SELECT * FROM tbl_realisasi WHERE id_kegiatan = '$id' ORDER BY id_realisasi DESC");
		return $query->result();
	}

	function get_all_by_kegiatan_last($id)
	{
		$query = $this->db->query("SELECT * FROM tbl_realisasi WHERE id_kegiatan = '$id' ORDER BY id_realisasi DESC LIMIT 1");
		return $query->row_array();
	}

	function total_dana_digunakan($id)
	{
		$query = $this->db->query("SELECT SUM(dana_digunakan) AS total FROM tbl_realisasi WHERE id_kegiatan = '$id' ");
		return $query->row_array();
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
		$this->db->where('id_realisasi',$id);
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
		$this->db->where('id_realisasi', $id);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_realisasi', $id);
		$this->db->delete($this->table);
	}



}
