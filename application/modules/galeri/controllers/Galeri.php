<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model('galeri_model','galeri');
	}

	public function index()
	{
		cek_session_admin();
		$data['get'] = $this->galeri->get_all();
		$this->template->load('home/home','galeri_view',$data);
	}

	public function add()
	{
		
		cek_session_admin();
		$config['upload_path'] = 'assets/image/galeri/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

			$this->upload->do_upload('gambar');
			$image = $this->upload->data();

			$data = array(
				'judul' 	=> $this->input->post('judul'),
				'tanggal' => $this->input->post('tanggal'),
				'gambar' => $image['file_name']
			);

		$this->galeri->save($data);
		redirect(base_url('galeri'));

	}

	public function update()
	{
		$id_galeri =  $this->input->post('id',TRUE);
		$config['upload_path'] = 'assets/image/galeri/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (empty($_FILES['gambar']['tmp_name'])) {
			

			$data = array(
				'judul' 	=> $this->input->post('judul'),
				'tanggal' => $this->input->post('tanggal')
			);

		}else{
			$this->upload->do_upload('gambar');
			$image = $this->upload->data();

			$data = array(
				'judul' 	=> $this->input->post('judul'),
				'tanggal' => $this->input->post('tanggal'),
				'gambar' => $image['file_name']
			);
		}
		
		$this->galeri->update($id_galeri,$data);
		redirect(base_url('galeri'));	
	}


	public function delete()
	{
		$id = $this->uri->segment(3);
		$kabupaten = $this->uri->segment(4);
		$this->galeri->delete_by_id($id);
		redirect(base_url('galeri'));	
	}

}