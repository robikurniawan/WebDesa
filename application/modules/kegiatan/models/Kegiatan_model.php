<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {

	var $table = 'tbl_kegiatan';
	var $order = array('id_kegiatan' => 'desc'); // default order

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_all()
	{
		$query = $this->db->query("SELECT a.* , b.*  , c.* FROM tbl_kegiatan a
															INNER JOIN tbl_bidang b ON a.id_bidang = b.id_bidang
															INNER JOIN tbl_aparat c ON a.aparat = c.id_aparat

															ORDER BY a.id_kegiatan DESC");
		return $query->result();
	}

	function get_all_by_fix()
	{
		$query = $this->db->query("SELECT a.* , b.* FROM tbl_kegiatan a INNER JOIN tbl_bidang b ON a.id_bidang = b.id_bidang WHERE a.status = 'y' ORDER BY a.id_kegiatan DESC");
		return $query->result();
	}



	function get_all_by_id($id)
	{
		$query = $this->db->query("SELECT a.* , b.* FROM tbl_kegiatan a INNER JOIN tbl_bidang b ON a.id_bidang = b.id_bidang WHERE a.id_kegiatan = '$id' ");
		return $query->row();
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
		$this->db->where('id_kegiatan',$id);
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
		$this->db->where('id_kegiatan', $id);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_kegiatan', $id);
		$this->db->delete($this->table);
	}



}
