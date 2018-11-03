<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model('pengumuman_model','pengumuman');
	}

	public function index()
	{
		cek_session_admin();
		$data['get'] = $this->pengumuman->get_all();
		$this->template->load('home/home','pengumuman_view',$data);
	}

	public function add()
	{

		cek_session_admin();
		$config['upload_path'] = 'assets/image/pengumuman/';
		$config['allowed_types'] = 'PDF|pdf';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

			$this->upload->do_upload('gambar');
			$image = $this->upload->data();

			$data = array(
				'judul' 	=> $this->input->post('judul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'tanggal' => $this->input->post('tanggal'),
				'gambar' => $image['file_name']
			);

		$this->pengumuman->save($data);
		redirect(base_url('pengumuman'));

	}

	public function update()
	{
		$id_pengumuman =  $this->input->post('id',TRUE);
		$config['upload_path'] = 'assets/image/pengumuman/';
		$config['allowed_types'] = 'PDF|pdf|';
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

		$this->pengumuman->update($id_pengumuman,$data);
		redirect(base_url('pengumuman'));
	}


	public function delete()
	{
		$id = $this->uri->segment(3);
		$kabupaten = $this->uri->segment(4);
		$this->pengumuman->delete_by_id($id);
		redirect(base_url('pengumuman'));
	}

}
