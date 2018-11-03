<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model('artikel_model','artikel');
	}

	public function index()
	{
		cek_session_admin();
		$data['get'] = $this->artikel->get_all();
		$this->template->load('home/home','artikel_view',$data);
	}

	public function add()
	{
		
		cek_session_admin();
		$config['upload_path'] = 'assets/image/artikel/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
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

		$this->artikel->save($data);
		redirect(base_url('artikel'));

	}

	public function update()
	{
		$id_artikel =  $this->input->post('id',TRUE);
		$config['upload_path'] = 'assets/image/artikel/';
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
		
		$this->artikel->update($id_artikel,$data);
		redirect(base_url('artikel'));	
	}


	public function delete()
	{
		$id = $this->uri->segment(3);
		$kabupaten = $this->uri->segment(4);
		$this->artikel->delete_by_id($id);
		redirect(base_url('artikel'));	
	}

}