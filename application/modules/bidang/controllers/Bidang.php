<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model('bidang_model','bidang');
	}

	public function index()
	{
		cek_session_admin();
		$data['get'] = $this->bidang->get_all();
		$this->template->load('home/home','bidang_view',$data);
	}

	public function add()
	{
		
		$data = array(
						'nama_bidang' 	=> $this->input->post('nama_bidang')
						
					);

		$this->bidang->save($data);
		redirect(base_url('bidang'));
	}

	public function update()
	{
		$id_bidang =  $this->input->post('id',TRUE);
		
		$data = array(
						'nama_bidang' 	=> $this->input->post('nama_bidang')
					
					);
		
		$this->bidang->update($id_bidang,$data);
		redirect(base_url('bidang'));	
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$kabupaten = $this->uri->segment(4);
		$this->bidang->delete_by_id($id);
		redirect(base_url('bidang'));	
	}

}