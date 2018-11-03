<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct()
	{
    	parent::__construct();
		$this->load->model('kegiatan_model','kegiatan');
		$this->load->model('bidang/bidang_model','bidang');
		$this->load->model('aparat/aparat_model','aparat');
	}

	public function index()
	{
		cek_session_admin();
		$data['get'] = $this->kegiatan->get_all_by_fix();
		$data['bidang'] = $this->bidang->get_all();

		$this->template->load('home/home','kegiatan_view',$data);
	}

	public function perencanaan()
	{
		cek_session_admin();
		$data['get'] = $this->kegiatan->get_all();
		$data['bidang'] = $this->bidang->get_all();
			$data['aparat'] = $this->aparat->get_all();
		$this->template->load('home/home','perencanaan_view',$data);
	}


	public function add()
	{

		$data = array(
						'nama_kegiatan' 	=> $this->input->post('nama_kegiatan'),
						'id_bidang' 	=> $this->input->post('id_bidang'),
						'lokasi' 	=> $this->input->post('lokasi'),
						'jenis_kegiatan' 	=> $this->input->post('jenis_kegiatan'),
						'manfaat' 	=> $this->input->post('manfaat'),
						'sasaran' 	=> $this->input->post('sasaran'),
						'biaya' 	=> $this->input->post('biaya'),
						'sumber' 	=> $this->input->post('sumber'),
						'tahun' 	=> $this->input->post('tahun'),
						'tgl_ditetapkan' 	=> $this->input->post('tgl_ditetapkan'),
						'aparat' 	=> $this->input->post('aparat')

					);

		$this->kegiatan->save($data);
		$this->session->set_flashdata('notifikasi','success');
		redirect(base_url('kegiatan'));
	}

	public function update()
	{
		$id_kegiatan =  $this->input->post('id',TRUE);

		$data = array(
						'nama_kegiatan' 	=> $this->input->post('nama_kegiatan'),
						'id_bidang' 	=> $this->input->post('id_bidang'),
						'lokasi' 	=> $this->input->post('lokasi'),
						'jenis_kegiatan' 	=> $this->input->post('jenis_kegiatan'),
						'manfaat' 	=> $this->input->post('manfaat'),
						'sasaran' 	=> $this->input->post('sasaran'),
						'biaya' 	=> $this->input->post('biaya'),
						'sumber' 	=> $this->input->post('sumber'),
						'tahun' 	=> $this->input->post('tahun'),
						'tgl_ditetapkan' 	=> $this->input->post('tgl_ditetapkan'),
						'aparat' 	=> $this->input->post('aparat')

					);

		$this->kegiatan->update($id_kegiatan,$data);
		$this->session->set_flashdata('notifikasi','updated');
		redirect(base_url('kegiatan'));
	}


	public function update_perencanaan()
		{
			$id_kegiatan =  $this->input->post('id',TRUE);
			$status      =  "y";
			$data = array(
							'status' 	=> $status,
							'tgl_mulai_kegiatan' 	=> $this->input->post('tgl')
						);

			$this->kegiatan->update($id_kegiatan,$data);
			$this->session->set_flashdata('notifikasi','updated');
			redirect(base_url('kegiatan/perencanaan'));
		}


		public function cancel()
		{
			$id = $this->uri->segment(3);
			$this->db->query("UPDATE tbl_kegiatan SET status = 'n' WHERE id_kegiatan = '$id' ");
			$this->session->set_flashdata('notifikasi','updated');

			redirect(base_url('kegiatan/perencanaan'));
		}



	public function delete()
	{
		$id = $this->uri->segment(3);
		$kabupaten = $this->uri->segment(4);
		$this->kegiatan->delete_by_id($id);
		$this->session->set_flashdata('notifikasi','delete');
		redirect(base_url('kegiatan'));
	}

}
