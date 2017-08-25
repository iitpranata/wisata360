<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {

	public function __construct ()
	{
    	parent:: __construct();
   		$this->load->model('Depan_model');

  	}

	public function index()
	{	
		$atas_depan = array(
			'judul' => 'Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'depan/1-atas-depan/meta-utama-atas-depan',
			'css_utama' => 'depan/1-atas-depan/css-utama-atas-depan'
		);
		
		$tengah_depan = array(
			'menu_utama' => 'depan/2-tengah-depan/menu-utama-tengah-depan',
			'utama_tengah' => 'depan/2-tengah-depan/utama-tengah-depan',
			'populer' => 'depan/2-tengah-depan/populer-tengah-depan',
			'rating' => 'depan/2-tengah-depan/rating-tengah-depan',
			'ulasan' => 'depan/2-tengah-depan/ulasan-tengah-depan',

			'populer_data' => $this->Depan_model->populer(),
			'rating_data' => $this->Depan_model->rating(),
		);

		$bawah_depan = array(
			'footer' => 'depan/3-bawah-depan/footer-bawah-depan',
			'javascript_utama' => 'depan/3-bawah-depan/javascript-utama-bawah-depan'
		);

		$this->load->view('depan/1-atas-depan', $atas_depan);
		$this->load->view('depan/2-tengah-depan', $tengah_depan);
		$this->load->view('depan/3-bawah-depan', $bawah_depan);
	}

	public function login()
	{
		$atas_depan = array(
			'judul' => 'Masuk/Daftar - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'depan/1-atas-depan/meta-utama-atas-depan',
			'css_utama' => 'depan/1-atas-depan/css-utama-atas-depan'
		);

		$tengah_depan = array(
			'menu_utama' => 'depan/2-tengah-depan/menu-utama-tengah-depan',
			'utama_tengah' => 'depan/2-tengah-depan/login-tengah-depan'
		);

		$bawah_depan = array(
			'footer' => 'depan/3-bawah-depan/footer-bawah-depan',
			'javascript_utama' => 'depan/3-bawah-depan/javascript-utama-bawah-depan'
		);

		$this->load->view('depan/1-atas-depan', $atas_depan);
		$this->load->view('depan/2-tengah-depan', $tengah_depan);
		$this->load->view('depan/3-bawah-depan', $bawah_depan);
	}

	public function profil()
	{
		$atas_depan = array(
			'judul' => 'Profil - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'depan/1-atas-depan/meta-utama-atas-depan',
			'css_utama' => 'depan/1-atas-depan/css-utama-atas-depan',
			'css_profil' => 'depan/1-atas-depan/css-profil-atas-depan'
		);

		$tengah_depan = array(
			'menu_utama' => 'depan/2-tengah-depan/menu-utama-tengah-depan',
			'utama_tengah' => 'depan/2-tengah-depan/profil-tengah-depan'
		);

		$bawah_depan = array(
			'footer' => 'depan/3-bawah-depan/footer-bawah-depan',
			'javascript_utama' => 'depan/3-bawah-depan/javascript-utama-bawah-depan'
		);

		$this->load->view('depan/1-atas-depan', $atas_depan);
		$this->load->view('depan/2-tengah-depan', $tengah_depan);
		$this->load->view('depan/3-bawah-depan', $bawah_depan);
	}

	public function pencarian()
	{
		$atas_depan = array(
			'judul' => 'Pencarian - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'depan/1-atas-depan/meta-utama-atas-depan',
			'css_utama' => 'depan/1-atas-depan/css-utama-atas-depan',
			'css_profil' => 'depan/1-atas-depan/css-profil-atas-depan'
		);

		$tengah_depan = array(
			'menu_utama' => 'depan/2-tengah-depan/menu-utama-tengah-depan',
			'utama_tengah' => 'depan/2-tengah-depan/pencarian-tengah-depan'
		);

		$bawah_depan = array(
			'footer' => 'depan/3-bawah-depan/footer-bawah-depan',
			'javascript_utama' => 'depan/3-bawah-depan/javascript-utama-bawah-depan'
		);

		$this->load->view('depan/1-atas-depan', $atas_depan);
		$this->load->view('depan/2-tengah-depan', $tengah_depan);
		$this->load->view('depan/3-bawah-depan', $bawah_depan);
	}

	public function populer()
	{
		$atas_depan = array(
			'judul' => 'Populer - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'depan/1-atas-depan/meta-utama-atas-depan',
			'css_utama' => 'depan/1-atas-depan/css-utama-atas-depan',
			'css_profil' => 'depan/1-atas-depan/css-profil-atas-depan'
		);

		$tengah_depan = array(
			'menu_utama' => 'depan/2-tengah-depan/menu-utama-tengah-depan',
			'utama_tengah' => 'depan/2-tengah-depan/populer-semua-tengah-depan'
		);

		$bawah_depan = array(
			'footer' => 'depan/3-bawah-depan/footer-bawah-depan',
			'javascript_utama' => 'depan/3-bawah-depan/javascript-utama-bawah-depan'
		);

		$this->load->view('depan/1-atas-depan', $atas_depan);
		$this->load->view('depan/2-tengah-depan', $tengah_depan);
		$this->load->view('depan/3-bawah-depan', $bawah_depan);
	}

	public function rating()
	{
		$atas_depan = array(
			'judul' => 'Rating - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'depan/1-atas-depan/meta-utama-atas-depan',
			'css_utama' => 'depan/1-atas-depan/css-utama-atas-depan',
			'css_profil' => 'depan/1-atas-depan/css-profil-atas-depan'
		);

		$tengah_depan = array(
			'menu_utama' => 'depan/2-tengah-depan/menu-utama-tengah-depan',
			'utama_tengah' => 'depan/2-tengah-depan/rating-semua-tengah-depan'
		);

		$bawah_depan = array(
			'footer' => 'depan/3-bawah-depan/footer-bawah-depan',
			'javascript_utama' => 'depan/3-bawah-depan/javascript-utama-bawah-depan'
		);

		$this->load->view('depan/1-atas-depan', $atas_depan);
		$this->load->view('depan/2-tengah-depan', $tengah_depan);
		$this->load->view('depan/3-bawah-depan', $bawah_depan);
	}

	public function ulasan()
	{
		$atas_depan = array(
			'judul' => 'Ulasan - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'depan/1-atas-depan/meta-utama-atas-depan',
			'css_utama' => 'depan/1-atas-depan/css-utama-atas-depan',
			'css_profil' => 'depan/1-atas-depan/css-profil-atas-depan'
		);

		$tengah_depan = array(
			'menu_utama' => 'depan/2-tengah-depan/menu-utama-tengah-depan',
			'utama_tengah' => 'depan/2-tengah-depan/ulasan-semua-tengah-depan'
		);

		$bawah_depan = array(
			'footer' => 'depan/3-bawah-depan/footer-bawah-depan',
			'javascript_utama' => 'depan/3-bawah-depan/javascript-utama-bawah-depan'
		);

		$this->load->view('depan/1-atas-depan', $atas_depan);
		$this->load->view('depan/2-tengah-depan', $tengah_depan);
		$this->load->view('depan/3-bawah-depan', $bawah_depan);
	}

	public function objek_wisata()
	{
		$page_error = $this->uri->segment(3);
		if($page_error == null){
			redirect('index.php/depan/');
		}else{
			$atas_depan = array(
				'judul' => ' - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
				'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
				'meta_utama' => 'depan/1-atas-depan/meta-utama-atas-depan',
				'css_utama' => 'depan/1-atas-depan/css-utama-atas-depan',
				'css_profil' => 'depan/1-atas-depan/css-profil-atas-depan',
				'css_foto' => 'depan/1-atas-depan/css-foto-atas-depan',
				'javascript_foto' => 'depan/1-atas-depan/javascript-foto-atas-depan',

				'objek_wisata'  => $this->Depan_model->objek_wisata($this->uri->segment(3))
			);

			$id_wisata = $this->uri->segment(3);
			$tengah_depan = array(
				'menu_utama' => 'depan/2-tengah-depan/menu-utama-tengah-depan',
				'utama_tengah' => 'depan/2-tengah-depan/objek-wisata-tengah-depan',

				'objek_wisata'  => $this->Depan_model->objek_wisata($id_wisata),
				'ratarata_rating' => floor($this->Depan_model->ratarata_rating($id_wisata)),
				'ulasanrating' => $this->Depan_model->ulasanrating($id_wisata),
				'jumlah_ulasan' => $this->Depan_model->jumlah_ulasan($id_wisata)
			);

			$bawah_depan = array(
				'footer' => 'depan/3-bawah-depan/footer-bawah-depan',
				'javascript_utama' => 'depan/3-bawah-depan/javascript-utama-bawah-depan',
				'javascript_map' => 'depan/3-bawah-depan/map-javascript-bawah-depan'
			);

			$this->load->view('depan/1-atas-depan', $atas_depan);
			$this->load->view('depan/2-tengah-depan', $tengah_depan);
			$this->load->view('depan/3-bawah-depan', $bawah_depan);
		}
	}
}
