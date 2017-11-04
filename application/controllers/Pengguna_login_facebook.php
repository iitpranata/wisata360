<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pengguna_login_facebook extends CI_Controller
{
    function __construct() {
		parent::__construct();
		
		// Load facebook library
		$this->load->library('facebook');
		
		//Load user model
		$this->load->model('Pengguna_login_model');
    }

    public function index()
	{
		$userData = array();
		
		// Check if user is logged in
		if($this->facebook->is_authenticated()){
			// Get user facebook profile details
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
			
            // Insert or update user data
            $userID = $this->Pengguna_login_model->checkUser($userData);
			
			// Check user data insert or update status
            if(!empty($userID)){
				$tengah_pengguna['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
            } else {
			   $tengah_pengguna['userData'] = array();
            }
			
			// Get logout URL
			$tengah_pengguna['logoutUrl'] = $this->facebook->logout_url();
		}else{
            $fbuser = '';
			
			// Get login URL
			$tengah_pengguna['authUrl'] = $this->facebook->login_url();
			//redirect('pengguna/');
        }

		$atas_pengguna = array(
			'judul' => 'Masuk/Daftar - Wisata360 | Cari Objek Wisata Panorama Virtual Reality?',
			'keterangan' => 'Sistem Rekomedasi Pariwisata Kota Bengkulu Berdasarkan Sentiment Analysis Dan Rating Dengan Pemodelan Vitrual Reality 360',
			'meta_utama' => 'pengguna/1-atas-pengguna/meta-utama-atas-pengguna',
			'css_utama' => 'pengguna/1-atas-pengguna/css-utama-atas-pengguna'
		);

		$tengah_pengguna = array(
			'menu_utama' => 'pengguna/2-tengah-pengguna/menu-utama-tengah-pengguna',
			'utama_tengah' => 'pengguna/2-tengah-pengguna/login-tengah-pengguna',
			'authUrl' => $this->facebook->login_url()
		);

		$bawah_pengguna = array(
			'footer' => 'pengguna/3-bawah-pengguna/footer-bawah-pengguna',
			'javascript_utama' => 'pengguna/3-bawah-pengguna/javascript-utama-bawah-pengguna'
		);

		$this->load->view('pengguna/1-atas-pengguna', $atas_pengguna);
		$this->load->view('pengguna/2-tengah-pengguna', $tengah_pengguna);
		$this->load->view('pengguna/3-bawah-pengguna', $bawah_pengguna);
	}

	public function logout() {
		// Remove local Facebook session
		$this->facebook->destroy_session();
		// Remove user data from session
		$this->session->unset_userdata('userData');
		// Redirect to login page
        redirect(base_url());
    }
}
