<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Collaborative_filter');
        
    }
    
    public function index()
    {
        $tengah_admin = array(
            'nama_halaman' => 'Dashboard',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin.php',
            'halaman_utama' => 'admin/2-tengah-admin/dashboard-utama-tengah-admin',
            'jumlah_postingan' => $this->Admin_model->jumlah_postingan(),
            'jumlah_ulasan' => $this->Admin_model->jumlah_ulasan(),
            'jumlah_pengguna' => $this->Admin_model->jumlah_pengguna(),
            'populer' => $this->Admin_model->populer(),
            'tidak_populer' => $this->Admin_model->tidak_populer(),
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function postingan_objek_wisata()
    {
        $tengah_admin = array(
            'nama_halaman' => 'Semua Postingan',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin.php',
            'halaman_utama' => 'admin/2-tengah-admin/postingan-objek-wisata-tengah-admin',
            
            'postingan_data' => $this->Admin_model->semua_postingan()
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function tambah_objek_wisata()
    {
        $tengah_admin = array(
            'nama_halaman' => 'Tambah Objek Wisata',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin',
            'halaman_utama' => 'admin/2-tengah-admin/tambah-objekwisata-tengah-admin'
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function edit_objek_wisata()
    {
        $id_objekwisata = $this->uri->segment(3);
        $tengah_admin   = array(
            'nama_halaman' => 'Ubah Objek Wisata',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin',
            'halaman_utama' => 'admin/2-tengah-admin/edit-objekwisata-tengah-admin',
            
            'objek_wisata' => $this->Admin_model->objek_wisata($id_objekwisata)
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function ulasan()
    {
        $tengah_admin = array(
            'nama_halaman' => 'Semua Ulasan',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin',
            'halaman_utama' => 'admin/2-tengah-admin/ulasan-tengah-admin',
            
            'ulasan_data' => $this->Admin_model->semua_ulasan()
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function ulasan_objek_wisata()
    {
        $id_objekwisata = $this->uri->segment(3);
        $tengah_admin   = array(
            'nama_halaman' => 'Ulasan ',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin',
            'halaman_utama' => 'admin/2-tengah-admin/ulasan-objek-wisata-tengah-admin',
            
            'ulasan_objek_wisata' => $this->Admin_model->ulasan_objek_wisata($id_objekwisata),
            'nama_objek_wisata' => $this->Admin_model->objek_wisata($id_objekwisata)
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function pengguna()
    {
        $tengah_admin = array(
            'nama_halaman' => 'Semua Pengguna',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin',
            'halaman_utama' => 'admin/2-tengah-admin/pengguna-tengah-admin',
            
            'pengguna_data' => $this->Admin_model->semua_pengguna()
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function rating()
    {
        $a = $this->Admin_model->cf();
		if($this->input->get('nama_pengguna') == ""){ 
			$b = "Aldi Sasri"; 
		}else{
            $b = $this->input->get('nama_pengguna');
            //echo $this->input->post('nama_pengguna');
		}
        $tengah_admin = array(
            'nama_halaman' => 'Rating (Collaborative Filter)',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin.php',
            'halaman_utama' => 'admin/2-tengah-admin/rating-tengah-admin',
            
            'rating_data' => $this->Admin_model->rating(),
            'cf_asli' => $this->Admin_model->cf(),
            //'cf_dd' => $this->Collaborative_filter->transformPreferences($a),
            'cf_sama' => $this->Collaborative_filter->matchItems($a, $b),
			'cf' => $this->Collaborative_filter->getRecommendations($a, $b)
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function rating_objek_wisata()
    {
        $id_objekwisata = $this->uri->segment(3);
        $tengah_admin   = array(
            'nama_halaman' => 'Rating ',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin',
            'halaman_utama' => 'admin/2-tengah-admin/rating-objek-wisata-tengah-admin',
            
            'rating_objek_wisata' => $this->Admin_model->rating_objek_wisata($id_objekwisata),
            'nama_objek_wisata' => $this->Admin_model->objek_wisata($id_objekwisata)
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function sentiment_analysis()
    {
        $tengah_admin = array(
            'nama_halaman' => 'Sentiment Analysis',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin',
            'halaman_utama' => 'admin/2-tengah-admin/sentiment-analysis-tengah-admin',
            
            'sentiment_analysis' => $this->Admin_model->sentiment_analysis()
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
    
    public function sentiment_analysis_objek_wisata()
    {
        $id_objekwisata = $this->uri->segment(3);
        $tengah_admin   = array(
            'nama_halaman' => 'Sentiment Analysis ',
            'header_utama' => 'admin/2-tengah-admin/header-utama-tengah-admin',
            'header_menu' => 'admin/2-tengah-admin/header-menu-tengah-admin',
            'nav_utama' => 'admin/2-tengah-admin/nav-menu-tengah-admin',
            'halaman_utama' => 'admin/2-tengah-admin/sentiment-analysis-objek-wisata-tengah-admin',
            
            'sentiment_analysis' => $this->Admin_model->sentiment_analysis_objek_wisata($id_objekwisata),
            'nama_objek_wisata' => $this->Admin_model->objek_wisata($id_objekwisata)
        );
        
        $this->load->view('admin/1-atas-admin', $tengah_admin);
        $this->load->view('admin/2-tengah-admin', $tengah_admin);
        $this->load->view('admin/3-bawah-admin');
    }
}