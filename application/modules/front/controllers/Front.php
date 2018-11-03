<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil/profil_model','profil');
		$this->load->model('artikel/artikel_model','artikel');
		$this->load->model('galeri/galeri_model','galeri');
		$this->load->model('kategori_regulasi/kategori_regulasi_model','kategori_regulasi');
		$this->load->model('regulasi/regulasi_model','regulasi');
		$this->load->model('kegiatan/kegiatan_model','kegiatan');
		$this->load->model('realisasi/realisasi_model','realisasi');
		$this->load->model('bidang/bidang_model','bidang');
		$this->load->model('aparat/aparat_model','aparat');
		$this->load->model('pengumuman/pengumuman_model','pengumuman');


		$this->load->helper('send');


	}

	public function index()
	{
		$data['profil'] = $this->profil->get_all();
		$data['artikel'] = $this->artikel->get_all();
		$data['galeri'] = $this->galeri->get_all();
		$data['kegiatan'] = $this->kegiatan->get_all_by_fix();
		$this->template->load('front/layouts','beranda',$data);
	}


	public function laporan()
	{
		$this->template->load('front/layouts','laporan');
	}

	public function laporan_kegiatan()
	{
		$data['get'] = $this->kegiatan->get_all();
		$data['bidang'] = $this->bidang->get_all();
		$this->template->load('front/layouts','laporan_kegiatan',$data);
	}

	public function laporan_realisasi()
	{
			$data['get'] = $this->realisasi->get_all_laporan();
		$this->template->load('front/layouts','laporan_realisasi',$data);
	}



	//MENU PROFIL

	public function sambutan()
	{
		$data['profil'] = $this->profil->get_all();
		$this->template->load('front/layouts','sambutan',$data);
	}

	public function visimisi()
	{
		$data['profil'] = $this->profil->get_all();
		$this->template->load('front/layouts','visimisi',$data);
	}

	public function struktur()
	{
		$data['profil'] = $this->profil->get_all();
		$this->template->load('front/layouts','struktur',$data);
	}

	public function tupoksi()
	{
		$data['profil'] = $this->profil->get_all();
		$this->template->load('front/layouts','tupoksi',$data);
	}


	public function berita()
	{
		$data['title'] = "Judul";
		$data['artikel'] = $this->artikel->get_all();
		$this->template->load('front/layouts','berita',$data);
	}

	public function detailberita()
	{
		$id = $this->uri->segment(3);
		$data['artikel'] = $this->artikel->get_by_id($id);
		$this->template->load('front/layouts','detailberita',$data);
	}


	public function kegiatan()
	{
		$data['get'] = $this->kegiatan->get_all_by_fix();
		$data['bidang'] = $this->bidang->get_all();
		$this->template->load('front/layouts','kegiatan',$data);
	}

	public function realisasi()
	{
		$data['kegiatan'] = $this->kegiatan->get_all_by_fix();
		$this->template->load('front/layouts','realisasi',$data);
	}

	public function detail_realisasi()
	{
		$id=$this->uri->segment(3);
		$data['kegiatan'] = $this->kegiatan->get_all_by_id($id);
		$data['re'] = $this->realisasi->get_all_by_kegiatan_last($id);
		$data['realisasi'] = $this->realisasi->get_all_by_kegiatan($id);
		$data['dana'] = $this->realisasi->total_dana_digunakan($id);
		$this->template->load('front/layouts','detail_realisasi',$data);
	}



	public function regulasi()
	{
		$data['kat_reg'] = $this->kategori_regulasi->get_all();
		$this->template->load('front/layouts','regulasi',$data);
	}

	public function detailregulasi()
	{
		$id = $this->uri->segment(3);
		$data['kat'] = $this->kategori_regulasi->get_by_id($id);
		$data['reg'] = $this->regulasi->get_all_by_id($id);
		$this->template->load('front/layouts','detailregulasi',$data);
	}


	public function pengumuman()
	{
		$data['pengumuman'] = $this->pengumuman->get_all();
		$this->template->load('front/layouts','pengumuman',$data);
	}

	public function galeri()
	{
		$data['galeri'] = $this->galeri->get_all();
		$this->template->load('front/layouts','galeri',$data);
	}


	public function aparat()
	{
		$data['aparat'] = $this->aparat->get_all();
		$this->template->load('front/layouts','aparat',$data);
	}



		public function perencanaan()
		{
			$data['get'] = $this->kegiatan->get_all();
			$data['bidang'] = $this->bidang->get_all();
			$this->template->load('front/layouts','perencanaan',$data);
		}























}
