<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengujung extends CI_Controller {

	public function __construct ()
	{
		parent:: __construct();
   		$this->load->model('Pengujung_model');

  	}

	public function index()
	{	
		$atas_pengujung = array(
			'judul' => 'Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengujung/1-atas-pengujung/meta-utama-atas-pengujung',
			'css_utama' => 'pengujung/1-atas-pengujung/css-utama-atas-pengujung'
		);
		
		$tengah_pengujung = array(
			'menu_utama' => 'pengujung/2-tengah-pengujung/menu-utama-tengah-pengujung',
			'utama_tengah' => 'pengujung/2-tengah-pengujung/utama-tengah-pengujung',
			'populer' => 'pengujung/2-tengah-pengujung/populer-tengah-pengujung',
			'rating' => 'pengujung/2-tengah-pengujung/rating-tengah-pengujung',
			'ulasan' => 'pengujung/2-tengah-pengujung/ulasan-tengah-pengujung',

			'populer_data' => $this->Pengujung_model->populer(),
			'rating_data' => $this->Pengujung_model->rating(),
		);

		$bawah_pengujung = array(
			'footer' => 'pengujung/3-bawah-pengujung/footer-bawah-pengujung',
			'javascript_utama' => 'pengujung/3-bawah-pengujung/javascript-utama-bawah-pengujung'
		);

		$this->load->view('pengujung/1-atas-pengujung', $atas_pengujung);
		$this->load->view('pengujung/2-tengah-pengujung', $tengah_pengujung);
		$this->load->view('pengujung/3-bawah-pengujung', $bawah_pengujung);
	}

	public function login()
	{
		$atas_pengujung = array(
			'judul' => 'Masuk/Daftar - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengujung/1-atas-pengujung/meta-utama-atas-pengujung',
			'css_utama' => 'pengujung/1-atas-pengujung/css-utama-atas-pengujung'
		);

		$tengah_pengujung = array(
			'menu_utama' => 'pengujung/2-tengah-pengujung/menu-utama-tengah-pengujung',
			'utama_tengah' => 'pengujung/2-tengah-pengujung/login-tengah-pengujung'
		);

		$bawah_pengujung = array(
			'footer' => 'pengujung/3-bawah-pengujung/footer-bawah-pengujung',
			'javascript_utama' => 'pengujung/3-bawah-pengujung/javascript-utama-bawah-pengujung'
		);

		$this->load->view('pengujung/1-atas-pengujung', $atas_pengujung);
		$this->load->view('pengujung/2-tengah-pengujung', $tengah_pengujung);
		$this->load->view('pengujung/3-bawah-pengujung', $bawah_pengujung);
	}

	public function profil()
	{
		$atas_pengujung = array(
			'judul' => 'Profil - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengujung/1-atas-pengujung/meta-utama-atas-pengujung',
			'css_utama' => 'pengujung/1-atas-pengujung/css-utama-atas-pengujung',
			'css_profil' => 'pengujung/1-atas-pengujung/css-profil-atas-pengujung'
		);

		$tengah_pengujung = array(
			'menu_utama' => 'pengujung/2-tengah-pengujung/menu-utama-tengah-pengujung',
			'utama_tengah' => 'pengujung/2-tengah-pengujung/profil-tengah-pengujung'
		);

		$bawah_pengujung = array(
			'footer' => 'pengujung/3-bawah-pengujung/footer-bawah-pengujung',
			'javascript_utama' => 'pengujung/3-bawah-pengujung/javascript-utama-bawah-pengujung'
		);

		$this->load->view('pengujung/1-atas-pengujung', $atas_pengujung);
		$this->load->view('pengujung/2-tengah-pengujung', $tengah_pengujung);
		$this->load->view('pengujung/3-bawah-pengujung', $bawah_pengujung);
	}

	public function pencarian()
	{
		$atas_pengujung = array(
			'judul' => 'Pencarian - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengujung/1-atas-pengujung/meta-utama-atas-pengujung',
			'css_utama' => 'pengujung/1-atas-pengujung/css-utama-atas-pengujung',
			'css_profil' => 'pengujung/1-atas-pengujung/css-profil-atas-pengujung'
		);

		$tengah_pengujung = array(
			'menu_utama' => 'pengujung/2-tengah-pengujung/menu-utama-tengah-pengujung',
			'utama_tengah' => 'pengujung/2-tengah-pengujung/pencarian-tengah-pengujung'
		);

		$bawah_pengujung = array(
			'footer' => 'pengujung/3-bawah-pengujung/footer-bawah-pengujung',
			'javascript_utama' => 'pengujung/3-bawah-pengujung/javascript-utama-bawah-pengujung'
		);

		$this->load->view('pengujung/1-atas-pengujung', $atas_pengujung);
		$this->load->view('pengujung/2-tengah-pengujung', $tengah_pengujung);
		$this->load->view('pengujung/3-bawah-pengujung', $bawah_pengujung);
	}

	public function populer()
	{
		$atas_pengujung = array(
			'judul' => 'Populer - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengujung/1-atas-pengujung/meta-utama-atas-pengujung',
			'css_utama' => 'pengujung/1-atas-pengujung/css-utama-atas-pengujung',
			'css_profil' => 'pengujung/1-atas-pengujung/css-profil-atas-pengujung'
		);

		$tengah_pengujung = array(
			'menu_utama' => 'pengujung/2-tengah-pengujung/menu-utama-tengah-pengujung',
			'utama_tengah' => 'pengujung/2-tengah-pengujung/populer-semua-tengah-pengujung'
		);

		$bawah_pengujung = array(
			'footer' => 'pengujung/3-bawah-pengujung/footer-bawah-pengujung',
			'javascript_utama' => 'pengujung/3-bawah-pengujung/javascript-utama-bawah-pengujung'
		);

		$this->load->view('pengujung/1-atas-pengujung', $atas_pengujung);
		$this->load->view('pengujung/2-tengah-pengujung', $tengah_pengujung);
		$this->load->view('pengujung/3-bawah-pengujung', $bawah_pengujung);
	}

	public function rating()
	{
		$atas_pengujung = array(
			'judul' => 'Rating - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengujung/1-atas-pengujung/meta-utama-atas-pengujung',
			'css_utama' => 'pengujung/1-atas-pengujung/css-utama-atas-pengujung',
			'css_profil' => 'pengujung/1-atas-pengujung/css-profil-atas-pengujung'
		);

		$tengah_pengujung = array(
			'menu_utama' => 'pengujung/2-tengah-pengujung/menu-utama-tengah-pengujung',
			'utama_tengah' => 'pengujung/2-tengah-pengujung/rating-semua-tengah-pengujung'
		);

		$bawah_pengujung = array(
			'footer' => 'pengujung/3-bawah-pengujung/footer-bawah-pengujung',
			'javascript_utama' => 'pengujung/3-bawah-pengujung/javascript-utama-bawah-pengujung'
		);

		$this->load->view('pengujung/1-atas-pengujung', $atas_pengujung);
		$this->load->view('pengujung/2-tengah-pengujung', $tengah_pengujung);
		$this->load->view('pengujung/3-bawah-pengujung', $bawah_pengujung);
	}

	public function ulasan()
	{
		$atas_pengujung = array(
			'judul' => 'Ulasan - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengujung/1-atas-pengujung/meta-utama-atas-pengujung',
			'css_utama' => 'pengujung/1-atas-pengujung/css-utama-atas-pengujung',
			'css_profil' => 'pengujung/1-atas-pengujung/css-profil-atas-pengujung'
		);

		$tengah_pengujung = array(
			'menu_utama' => 'pengujung/2-tengah-pengujung/menu-utama-tengah-pengujung',
			'utama_tengah' => 'pengujung/2-tengah-pengujung/ulasan-semua-tengah-pengujung'
		);

		$bawah_pengujung = array(
			'footer' => 'pengujung/3-bawah-pengujung/footer-bawah-pengujung',
			'javascript_utama' => 'pengujung/3-bawah-pengujung/javascript-utama-bawah-pengujung'
		);

		$this->load->view('pengujung/1-atas-pengujung', $atas_pengujung);
		$this->load->view('pengujung/2-tengah-pengujung', $tengah_pengujung);
		$this->load->view('pengujung/3-bawah-pengujung', $bawah_pengujung);
	}

	public function objek_wisata()
	{
		$page_error = $this->uri->segment(3);
		if($page_error == null){
			redirect('pengujung/');
		}else{
			$atas_pengujung = array(
				'judul' => ' - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
				'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
				'meta_utama' => 'pengujung/1-atas-pengujung/meta-utama-atas-pengujung',
				'css_utama' => 'pengujung/1-atas-pengujung/css-utama-atas-pengujung',
				'css_profil' => 'pengujung/1-atas-pengujung/css-profil-atas-pengujung',
				'css_foto' => 'pengujung/1-atas-pengujung/css-foto-atas-pengujung',
				'javascript_foto' => 'pengujung/1-atas-pengujung/javascript-foto-atas-pengujung',
				'javascript_select' => 'pengujung/3-bawah-pengujung/javascript-select-bawah-pengujung',

				'objek_wisata'  => $this->Pengujung_model->objek_wisata($this->uri->segment(3))
			);

			$id_wisata = $this->uri->segment(3);
			$tengah_pengujung = array(
				'menu_utama' => 'pengujung/2-tengah-pengujung/menu-utama-tengah-pengujung',
				'utama_tengah' => 'pengujung/2-tengah-pengujung/objek-wisata-tengah-pengujung',

				'objek_wisata'  => $this->Pengujung_model->objek_wisata($id_wisata),
				'ulasanrating' => $this->Pengujung_model->ulasanrating($id_wisata),
				'jumlah_ulasan' => $this->Pengujung_model->jumlah_ulasan($id_wisata)
			);

			$bawah_pengujung = array(
				'footer' => 'pengujung/3-bawah-pengujung/footer-bawah-pengujung',
				'javascript_utama' => 'pengujung/3-bawah-pengujung/javascript-utama-bawah-pengujung',
				'javascript_map' => 'pengujung/3-bawah-pengujung/map-javascript-bawah-pengujung'
			);

			$this->load->view('pengujung/1-atas-pengujung', $atas_pengujung);
			$this->load->view('pengujung/2-tengah-pengujung', $tengah_pengujung);
			$this->load->view('pengujung/3-bawah-pengujung', $bawah_pengujung);
		}
	}
}
