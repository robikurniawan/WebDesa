<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regulasi extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model('regulasi_model','regulasi');
		$this->load->model('kategori_regulasi/kategori_regulasi_model','kategori_regulasi');
	}

	public function index()
	{
		cek_session_admin();
		$data['get'] = $this->regulasi->get_all();
		$data['kategori'] = $this->kategori_regulasi->get_all();
		$this->template->load('home/home','regulasi_view',$data);
	}

	public function add()
	{

		cek_session_admin();
		$config['upload_path'] = 'assets/image/regulasi/';
		$config['allowed_types'] = 'pdf|PDF|gif|jpg|png|JPG|JPEG|PNG|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

			$this->upload->do_upload('gambar');
			$image = $this->upload->data();

			$data = array(
				'id_kategori_regulasi' 	=> $this->input->post('id_kategori_regulasi'),
				'nama_regulasi' => $this->input->post('nama_regulasi'),
				'gambar' => $image['file_name']
			);

		$this->regulasi->save($data);
		redirect(base_url('regulasi'));

	}

	public function update()
	{
		$id_regulasi =  $this->input->post('id',TRUE);
		$config['upload_path'] = 'assets/image/regulasi/';
		$config['allowed_types'] = 'PDF|pdf|gif|jpg|png|JPG|JPEG|PNG|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (empty($_FILES['gambar']['tmp_name'])) {


			$data = array(
				'id_kategori_regulasi' 	=> $this->input->post('id_kategori_regulasi'),
				'nama_regulasi' => $this->input->post('nama_regulasi')
			);

		}else{
			$this->upload->do_upload('gambar');
			$image = $this->upload->data();

			$data = array(
				'id_kategori_regulasi' 	=> $this->input->post('id_kategori_regulasi'),
				'nama_regulasi' => $this->input->post('nama_regulasi'),
				'gambar' => $image['file_name']
			);
		}

		$this->regulasi->update($id_regulasi,$data);
		redirect(base_url('regulasi'));
	}


	public function delete()
	{
		$id = $this->uri->segment(3);
		$kabupaten = $this->uri->segment(4);
		$this->regulasi->delete_by_id($id);
		redirect(base_url('regulasi'));
	}

}
