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
		// $config['upload_path'] = 'assets/image/tes/';
		// $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|PNG|jpeg';
		// $config['encrypt_name'] = TRUE;
		// $this->load->library('upload', $config);



			$data = array(
				'id_kegiatan' 	=> $this->input->post('id_kegiatan'),
				'judul' 	=> $this->input->post('judul'),
				'tanggal' => $this->input->post('tanggal'),
				'pj' => $this->input->post('pj'),
				'dana_digunakan' => $this->input->post('dana_digunakan'),
				'persentase' => $this->input->post('persentase'),
				'kode' => $this->input->post('kode')

			);

		$this->realisasi->save($data);

		$jml_gambar = count($_FILES['gambar']['name']);
		// echo $jml_gambar;
		$data = array();

        if(!empty($_FILES['gambar']['name'])){

            $filesCount = count($_FILES['gambar']['name']);

            for($i = 0; $i < $filesCount; $i++){
							 $_FILES['upload_File']['name'] = $_FILES['gambar']['name'][$i];
							 $_FILES['upload_File']['type'] = $_FILES['gambar']['type'][$i];
							 $_FILES['upload_File']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
							 $_FILES['upload_File']['error'] = $_FILES['gambar']['error'][$i];
							 $_FILES['upload_File']['size'] = $_FILES['gambar']['size'][$i];
							 $uploadPath = 'assets/image/tes/';
							 $config['upload_path'] = $uploadPath;
							 $config['allowed_types'] = 'gif|jpg|png';
							 $this->load->library('upload', $config);

                $this->upload->initialize($config);
                if($this->upload->do_upload('upload_File')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];

										$datax = array('kode_realisasi' => $this->input->post('kode') , 'gambar' => $uploadData[$i]['file_name']  );

										$this->realisasi->save_dok($datax);


                }
            }

        }

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
