<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belakang extends CI_Controller {

    public function __construct ()
    {
        parent:: __construct();
        $this->load->model('Belakang_model');

  	}

    public function index()
    {        
      $tengah_belakang = array(
        'nama_halaman' => 'Dashboard',
        'header_utama' => 'belakang/2-tengah-belakang/header-utama-tengah-belakang',
        'header_menu' => 'belakang/2-tengah-belakang/header-menu-tengah-belakang',
        'nav_utama' => 'belakang/2-tengah-belakang/nav-menu-tengah-belakang.php',
        'halaman_utama' => 'belakang/2-tengah-belakang/dashboard-utama-tengah-belakang',
        'svg_utama' => 'belakang/2-tengah-belakang/svg-utama-tengah-belakang.php'
      );

		  $this->load->view('belakang/1-atas-belakang');
		  $this->load->view('belakang/2-tengah-belakang', $tengah_belakang);
		  $this->load->view('belakang/3-bawah-belakang');
    }

    public function postingan_objek_wisata()
    {        
      $tengah_belakang = array(
        'nama_halaman' => 'Semua Postingan',
        'header_utama' => 'belakang/2-tengah-belakang/header-utama-tengah-belakang',
        'header_menu' => 'belakang/2-tengah-belakang/header-menu-tengah-belakang',
        'nav_utama' => 'belakang/2-tengah-belakang/nav-menu-tengah-belakang.php',
        'halaman_utama' => 'belakang/2-tengah-belakang/postingan-objek-wisata-tengah-belakang',

        'postingan_data' => $this->Belakang_model->semua_postingan()
      );

		  $this->load->view('belakang/1-atas-belakang');
		  $this->load->view('belakang/2-tengah-belakang', $tengah_belakang);
		  $this->load->view('belakang/3-bawah-belakang');
    }

    public function tambah_objek_wisata()
    {        
      $tengah_belakang = array(
        'nama_halaman' => 'Tambah Objek Wisata',
        'header_utama' => 'belakang/2-tengah-belakang/header-utama-tengah-belakang',
        'header_menu' => 'belakang/2-tengah-belakang/header-menu-tengah-belakang',
        'nav_utama' => 'belakang/2-tengah-belakang/nav-menu-tengah-belakang.php',
        'halaman_utama' => 'belakang/2-tengah-belakang/tambah-objekwisata-tengah-belakang'
      );

		  $this->load->view('belakang/1-atas-belakang');
		  $this->load->view('belakang/2-tengah-belakang', $tengah_belakang);
		  $this->load->view('belakang/3-bawah-belakang');
    }

    public function edit_objek_wisata()
    {        
      $id_objekwisata = $this->uri->segment(3);
      $tengah_belakang = array(
        'nama_halaman' => 'Ubah Objek Wisata',
        'header_utama' => 'belakang/2-tengah-belakang/header-utama-tengah-belakang',
        'header_menu' => 'belakang/2-tengah-belakang/header-menu-tengah-belakang',
        'nav_utama' => 'belakang/2-tengah-belakang/nav-menu-tengah-belakang.php',
        'halaman_utama' => 'belakang/2-tengah-belakang/edit-objekwisata-tengah-belakang',
        
        'objek_wisata' => $this->Belakang_model->objek_wisata($id_objekwisata)
      );

		  $this->load->view('belakang/1-atas-belakang');
		  $this->load->view('belakang/2-tengah-belakang', $tengah_belakang);
		  $this->load->view('belakang/3-bawah-belakang');
    }

    public function ulasan()
    {        
      $tengah_belakang = array(
        'nama_halaman' => 'Semua Ulasan',
        'header_utama' => 'belakang/2-tengah-belakang/header-utama-tengah-belakang',
        'header_menu' => 'belakang/2-tengah-belakang/header-menu-tengah-belakang',
        'nav_utama' => 'belakang/2-tengah-belakang/nav-menu-tengah-belakang.php',
        'halaman_utama' => 'belakang/2-tengah-belakang/ulasan-tengah-belakang',

        'ulasan_data' => $this->Belakang_model->semua_ulasan()
      );

		  $this->load->view('belakang/1-atas-belakang');
		  $this->load->view('belakang/2-tengah-belakang', $tengah_belakang);
		  $this->load->view('belakang/3-bawah-belakang');
    }

    public function ulasan_objek_wisata()
    {        
      $id_objekwisata = $this->uri->segment(3);
      $tengah_belakang = array(
        'nama_halaman' => 'Ulasan ',
        'header_utama' => 'belakang/2-tengah-belakang/header-utama-tengah-belakang',
        'header_menu' => 'belakang/2-tengah-belakang/header-menu-tengah-belakang',
        'nav_utama' => 'belakang/2-tengah-belakang/nav-menu-tengah-belakang.php',
        'halaman_utama' => 'belakang/2-tengah-belakang/ulasan-objek-wisata-tengah-belakang',
        
        'ulasan_objek_wisata' => $this->Belakang_model->ulasan_objek_wisata($id_objekwisata),
        'nama_objek_wisata' => $this->Belakang_model->objek_wisata($id_objekwisata)
      );

		  $this->load->view('belakang/1-atas-belakang');
		  $this->load->view('belakang/2-tengah-belakang', $tengah_belakang);
		  $this->load->view('belakang/3-bawah-belakang');
    }

    public function rating()
    {        
      $tengah_belakang = array(
        'nama_halaman' => 'Rating',
        'header_utama' => 'belakang/2-tengah-belakang/header-utama-tengah-belakang',
        'header_menu' => 'belakang/2-tengah-belakang/header-menu-tengah-belakang',
        'nav_utama' => 'belakang/2-tengah-belakang/nav-menu-tengah-belakang.php',
        'halaman_utama' => 'belakang/2-tengah-belakang/rating-tengah-belakang',

        'ulasan_data' => $this->Belakang_model->semua_ulasan()
      );

		  $this->load->view('belakang/1-atas-belakang');
		  $this->load->view('belakang/2-tengah-belakang', $tengah_belakang);
		  $this->load->view('belakang/3-bawah-belakang');
    }

    public function sentiment_analysis()
    {        
      $tengah_belakang = array(
        'nama_halaman' => 'Sentiment Analysis',
        'header_utama' => 'belakang/2-tengah-belakang/header-utama-tengah-belakang',
        'header_menu' => 'belakang/2-tengah-belakang/header-menu-tengah-belakang',
        'nav_utama' => 'belakang/2-tengah-belakang/nav-menu-tengah-belakang.php',
        'halaman_utama' => 'belakang/2-tengah-belakang/sentiment-analysis-tengah-belakang',

        //'ulasan_data' => $this->Belakang_model->semua_ulasan()
      );

		  $this->load->view('belakang/1-atas-belakang');
		  $this->load->view('belakang/2-tengah-belakang', $tengah_belakang);
		  $this->load->view('belakang/3-bawah-belakang');
    }
}