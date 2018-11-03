<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Realisasi extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model('realisasi_model','realisasi');
		$this->load->model('kegiatan/kegiatan_model','kegiatan');
	}

	public function index()
	{
		cek_session_admin();
		// $data['get'] = $this->realisasi->get_all_by_kegiatan();
		$data['kegiatan'] = $this->kegiatan->get_all_by_fix();

		$this->template->load('home/home','realisasi_view',$data);
	}

	public function detail()
	{
		cek_session_admin();
		$id=$this->uri->segment(3);
		$data['kegiatan'] = $this->kegiatan->get_all_by_id($id);
		$data['re'] = $this->realisasi->get_all_by_kegiatan_last($id);
		$data['realisasi'] = $this->realisasi->get_all_by_kegiatan($id);
		$data['dana'] = $this->realisasi->total_dana_digunakan($id);
		$this->template->load('home/home','detail_realisasi_view',$data);
	}

	public function add()
	{

		cek_session_admin();
		$id = $this->input->post('id_kegiatan');
		$config['upload_path'] = 'assets/image/realisasi/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

			$this->upload->do_upload('gambar');
			$image = $this->upload->data();

			$data = array(
				'id_kegiatan' 	=> $this->input->post('id_kegiatan'),
				'judul' 	=> $this->input->post('judul'),
				'tanggal' => $this->input->post('tanggal'),
				'dana_digunakan' => $this->input->post('dana_digunakan'),
				'persentase' => $this->input->post('persentase'),
				'gambar' => $image['file_name']
			);

		$this->realisasi->save($data);
		$this->session->set_flashdata('notifikasi','success');

		redirect(base_url('realisasi/detail/'.$id.' '));

	}

	public function update()
	{
		$id_realisasi =  $this->input->post('id',TRUE);
		$config['upload_path'] = 'assets/image/realisasi/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (empty($_FILES['gambar']['tmp_name'])) {


			$data = array(
				'judul' 	=> $this->input->post('judul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'tanggal' => $this->input->post('tanggal')
			);

		}else{
			$this->upload->do_upload('gambar');
			$image = $this->upload->data();

			$data = array(
				'judul' 	=> $this->input->post('judul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'tanggal' => $this->input->post('tanggal'),
				'gambar' => $image['file_name']
			);
		}

		$this->realisasi->update($id_realisasi,$data);
		redirect(base_url('realisasi'));
	}


	public function delete()
	{
		$id = $this->uri->segment(3);
		$k = $this->uri->segment(4);
		$this->realisasi->delete_by_id($id);
		$this->session->set_flashdata('notifikasi','deleted');
		redirect(base_url('realisasi/detail/'.$k.''));
	}

}
