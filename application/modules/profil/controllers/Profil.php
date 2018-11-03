<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
		$this->load->model('profil_model','profil');
		$this->load->helper('send');
	}

	public function index()
	{

		cek_session_admin();
		$data['get'] = $this->profil->get_all();
		$this->template->load('home/home','profil_view',$data);

	}



	function update()
	{
		cek_session_admin();
		$config['upload_path'] = 'assets/image/foto/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (empty($_FILES['foto']['tmp_name'])) {

				$this->upload->do_upload('foto');
				$image = $this->upload->data();

				$data = array( 'nama' => $this->input->post('nama',TRUE) );

		}else{

				$this->upload->do_upload('foto');
				$image = $this->upload->data();

				$data = array('foto' => $image['file_name'],
									    'nama' => $this->input->post('nama',TRUE)
										 );
		}

				$this->profil->update($data);

				echo "<script> alert('Data Berhasil Disimpan'); window.location.href='profil';</script>";

	}

	function update_sambutan()
	{
		cek_session_admin();

				$data = array('sambutan' => $this->input->post('sambutan',TRUE)  );

				$this->profil->update($data);

				echo "<script> alert('Data Berhasil Disimpan'); window.location.href='profil';</script>";

	}


	function update_visimisi()
	{
		cek_session_admin();

				$data = array('visimisi' => $this->input->post('visi',TRUE), 'misi' => $this->input->post('misi',TRUE)  );

				$this->profil->update($data);

				echo "<script> alert('Data Berhasil Disimpan'); window.location.href='profil';</script>";

	}


	function update_struktur()
	{
		cek_session_admin();
		$config['upload_path'] = 'assets/image/foto/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);


				$this->upload->do_upload('struktur');
				$image = $this->upload->data();

				$data = array('struktur' => $image['file_name']  );


				$this->profil->update($data);

				echo "<script> alert('Data Berhasil Disimpan'); window.location.href='profil';</script>";

	}


	function update_tupoksi()
	{
		cek_session_admin();

				$data = array('tupoksi' => $this->input->post('tupoksi',TRUE)  );

				$this->profil->update($data);

				echo "<script> alert('Data Berhasil Disimpan'); window.location.href='profil';</script>";

	}







}
