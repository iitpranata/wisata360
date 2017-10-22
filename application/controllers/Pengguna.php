<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct ()
	{
		parent:: __construct();
   		$this->load->model('Pengguna_model');

  	}

	public function index()
	{	
		$atas_pengguna = array(
			'judul' => 'Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengguna/1-atas-pengguna/meta-utama-atas-pengguna',
			'css_utama' => 'pengguna/1-atas-pengguna/css-utama-atas-pengguna'
		);
		
		$tengah_pengguna = array(
			'menu_utama' => 'pengguna/2-tengah-pengguna/menu-utama-tengah-pengguna',
			'utama_tengah' => 'pengguna/2-tengah-pengguna/utama-tengah-pengguna',
			'populer' => 'pengguna/2-tengah-pengguna/populer-tengah-pengguna',
			'rating' => 'pengguna/2-tengah-pengguna/rating-tengah-pengguna',
			'ulasan' => 'pengguna/2-tengah-pengguna/ulasan-tengah-pengguna',

			'populer_data' => $this->Pengguna_model->populer(),
			'rating_data' => $this->Pengguna_model->rating(),
		);

		$bawah_pengguna = array(
			'footer' => 'pengguna/3-bawah-pengguna/footer-bawah-pengguna',
			'javascript_utama' => 'pengguna/3-bawah-pengguna/javascript-utama-bawah-pengguna'
		);

		$this->load->view('pengguna/1-atas-pengguna', $atas_pengguna);
		$this->load->view('pengguna/2-tengah-pengguna', $tengah_pengguna);
		$this->load->view('pengguna/3-bawah-pengguna', $bawah_pengguna);
	}

	public function profil()
	{
		$atas_pengguna = array(
			'judul' => 'Profil - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengguna/1-atas-pengguna/meta-utama-atas-pengguna',
			'css_utama' => 'pengguna/1-atas-pengguna/css-utama-atas-pengguna',
			'css_profil' => 'pengguna/1-atas-pengguna/css-profil-atas-pengguna'
		);

		$tengah_pengguna = array(
			'menu_utama' => 'pengguna/2-tengah-pengguna/menu-utama-tengah-pengguna',
			'utama_tengah' => 'pengguna/2-tengah-pengguna/profil-tengah-pengguna'
		);

		$bawah_pengguna = array(
			'footer' => 'pengguna/3-bawah-pengguna/footer-bawah-pengguna',
			'javascript_utama' => 'pengguna/3-bawah-pengguna/javascript-utama-bawah-pengguna'
		);

		$this->load->view('pengguna/1-atas-pengguna', $atas_pengguna);
		$this->load->view('pengguna/2-tengah-pengguna', $tengah_pengguna);
		$this->load->view('pengguna/3-bawah-pengguna', $bawah_pengguna);
	}

	public function pencarian()
	{
		$atas_pengguna = array(
			'judul' => 'Pencarian - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengguna/1-atas-pengguna/meta-utama-atas-pengguna',
			'css_utama' => 'pengguna/1-atas-pengguna/css-utama-atas-pengguna',
			'css_profil' => 'pengguna/1-atas-pengguna/css-profil-atas-pengguna'
		);

		$tengah_pengguna = array(
			'menu_utama' => 'pengguna/2-tengah-pengguna/menu-utama-tengah-pengguna',
			'utama_tengah' => 'pengguna/2-tengah-pengguna/pencarian-tengah-pengguna'
		);

		$bawah_pengguna = array(
			'footer' => 'pengguna/3-bawah-pengguna/footer-bawah-pengguna',
			'javascript_utama' => 'pengguna/3-bawah-pengguna/javascript-utama-bawah-pengguna'
		);

		$this->load->view('pengguna/1-atas-pengguna', $atas_pengguna);
		$this->load->view('pengguna/2-tengah-pengguna', $tengah_pengguna);
		$this->load->view('pengguna/3-bawah-pengguna', $bawah_pengguna);
	}

	public function populer()
	{
		$atas_pengguna = array(
			'judul' => 'Populer - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengguna/1-atas-pengguna/meta-utama-atas-pengguna',
			'css_utama' => 'pengguna/1-atas-pengguna/css-utama-atas-pengguna',
			'css_profil' => 'pengguna/1-atas-pengguna/css-profil-atas-pengguna'
		);

		$tengah_pengguna = array(
			'menu_utama' => 'pengguna/2-tengah-pengguna/menu-utama-tengah-pengguna',
			'utama_tengah' => 'pengguna/2-tengah-pengguna/populer-semua-tengah-pengguna'
		);

		$bawah_pengguna = array(
			'footer' => 'pengguna/3-bawah-pengguna/footer-bawah-pengguna',
			'javascript_utama' => 'pengguna/3-bawah-pengguna/javascript-utama-bawah-pengguna'
		);

		$this->load->view('pengguna/1-atas-pengguna', $atas_pengguna);
		$this->load->view('pengguna/2-tengah-pengguna', $tengah_pengguna);
		$this->load->view('pengguna/3-bawah-pengguna', $bawah_pengguna);
	}

	public function rating()
	{
		$atas_pengguna = array(
			'judul' => 'Rating - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengguna/1-atas-pengguna/meta-utama-atas-pengguna',
			'css_utama' => 'pengguna/1-atas-pengguna/css-utama-atas-pengguna',
			'css_profil' => 'pengguna/1-atas-pengguna/css-profil-atas-pengguna'
		);

		$tengah_pengguna = array(
			'menu_utama' => 'pengguna/2-tengah-pengguna/menu-utama-tengah-pengguna',
			'utama_tengah' => 'pengguna/2-tengah-pengguna/rating-semua-tengah-pengguna'
		);

		$bawah_pengguna = array(
			'footer' => 'pengguna/3-bawah-pengguna/footer-bawah-pengguna',
			'javascript_utama' => 'pengguna/3-bawah-pengguna/javascript-utama-bawah-pengguna'
		);

		$this->load->view('pengguna/1-atas-pengguna', $atas_pengguna);
		$this->load->view('pengguna/2-tengah-pengguna', $tengah_pengguna);
		$this->load->view('pengguna/3-bawah-pengguna', $bawah_pengguna);
	}

	public function ulasan()
	{
		$atas_pengguna = array(
			'judul' => 'Ulasan - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengguna/1-atas-pengguna/meta-utama-atas-pengguna',
			'css_utama' => 'pengguna/1-atas-pengguna/css-utama-atas-pengguna',
			'css_profil' => 'pengguna/1-atas-pengguna/css-profil-atas-pengguna'
		);

		$tengah_pengguna = array(
			'menu_utama' => 'pengguna/2-tengah-pengguna/menu-utama-tengah-pengguna',
			'utama_tengah' => 'pengguna/2-tengah-pengguna/ulasan-semua-tengah-pengguna'
		);

		$bawah_pengguna = array(
			'footer' => 'pengguna/3-bawah-pengguna/footer-bawah-pengguna',
			'javascript_utama' => 'pengguna/3-bawah-pengguna/javascript-utama-bawah-pengguna'
		);

		$this->load->view('pengguna/1-atas-pengguna', $atas_pengguna);
		$this->load->view('pengguna/2-tengah-pengguna', $tengah_pengguna);
		$this->load->view('pengguna/3-bawah-pengguna', $bawah_pengguna);
	}

	public function objek_wisata()
	{
		$page_error = $this->uri->segment(3);
		if($page_error == null){
			redirect('pengguna/');
		}else{
			$atas_pengguna = array(
				'judul' => ' - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
				'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
				'meta_utama' => 'pengguna/1-atas-pengguna/meta-utama-atas-pengguna',
				'css_utama' => 'pengguna/1-atas-pengguna/css-utama-atas-pengguna',
				'css_profil' => 'pengguna/1-atas-pengguna/css-profil-atas-pengguna',
				'css_foto' => 'pengguna/1-atas-pengguna/css-foto-atas-pengguna',
				'javascript_foto' => 'pengguna/1-atas-pengguna/javascript-foto-atas-pengguna',
				'javascript_select' => 'pengguna/3-bawah-pengguna/javascript-select-bawah-pengguna',

				'objek_wisata'  => $this->Pengguna_model->objek_wisata($this->uri->segment(3))
			);

			$id_wisata = $this->uri->segment(3);
			$tengah_pengguna = array(
				'menu_utama' => 'pengguna/2-tengah-pengguna/menu-utama-tengah-pengguna',
				'utama_tengah' => 'pengguna/2-tengah-pengguna/objek-wisata-tengah-pengguna',

				'objek_wisata'  => $this->Pengguna_model->objek_wisata($id_wisata),
				'ulasanrating' => $this->Pengguna_model->ulasanrating($id_wisata),
				'jumlah_ulasan' => $this->Pengguna_model->jumlah_ulasan($id_wisata)
			);

			$bawah_pengguna = array(
				'footer' => 'pengguna/3-bawah-pengguna/footer-bawah-pengguna',
				'javascript_utama' => 'pengguna/3-bawah-pengguna/javascript-utama-bawah-pengguna',
				'javascript_map' => 'pengguna/3-bawah-pengguna/map-javascript-bawah-pengguna'
			);

			$this->load->view('pengguna/1-atas-pengguna', $atas_pengguna);
			$this->load->view('pengguna/2-tengah-pengguna', $tengah_pengguna);
			$this->load->view('pengguna/3-bawah-pengguna', $bawah_pengguna);
		}
	}
}