<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_regulasi extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model('kategori_regulasi_model','kategori_regulasi');
	}

	public function index()
	{
		cek_session_admin();
		$data['get'] = $this->kategori_regulasi->get_all();
		$this->template->load('home/home','kategori_regulasi_view',$data);
	}

	public function add()
	{
		
		$data = array(
						'nama_kategori_regulasi' 	=> $this->input->post('nama_kategori_regulasi')
						
					);

		$this->kategori_regulasi->save($data);
		redirect(base_url('kategori_regulasi'));
	}

	public function update()
	{
		$id_kategori_regulasi =  $this->input->post('id',TRUE);
		
		$data = array(
						'nama_kategori_regulasi' 	=> $this->input->post('nama_kategori_regulasi')
					
					);
		
		$this->kategori_regulasi->update($id_kategori_regulasi,$data);
		redirect(base_url('kategori_regulasi'));	
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$kabupaten = $this->uri->segment(4);
		$this->kategori_regulasi->delete_by_id($id);
		redirect(base_url('kategori_regulasi'));	
	}

}