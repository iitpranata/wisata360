<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_tambah extends CI_Controller {

    public function __construct ()
	{
    	parent:: __construct();
           $this->load->model('Pengguna_tambah_model');
           $this->load->model('Pengguna_filter_text_model');
           $this->load->model('K_nearest_neighbor_model');

  	}

    public function objek_wisata()
    {
        $id_objekwisata = $this->input->post('id_objekwisata_post');
        $ulasan_wisata__auto = array(
            'ulasan_objek_wisata__ulasan' => $this->input->post('ulasan_wisata__auto')
        );
        $this->Pengguna_tambah_model->ulasan_wisata__auto($id_objekwisata, $ulasan_wisata__auto);

        $objek_wisata_rating_ulasan = array(
            'objek_wisata__pengguna_oauth_uid' => $this->input->post('id_objekwisata_pengguna'),
            'objek_wisata__post_id__objek_wisata__post' => $this->input->post('id_objekwisata_post'),
            'rating__objek_wisata__rating_ulasan' => $this->input->post('hasil_rating'),
            'ulasan__objek_wisata__rating_ulasan' => $this->input->post('hasil_ulasan'),
            'tanggal__objek_wisata__rating_ulasan' => date('d-m-y h:i:s'),
        );
        $this->Pengguna_tambah_model->objek_wisata__rating_ulasan($objek_wisata_rating_ulasan);
        
        $id_objekwisata = $this->input->post('id_objekwisata_post');
        $objek_wisata__ulasan = $this->input->post('hasil_ulasan');
        $this->Pengguna_filter_text_model->objek_wisata_ulasan($id_objekwisata, $objek_wisata__ulasan);
            
        $id_objekwisata = $this->input->post('id_objekwisata_post');
        $objek_wisata__auto = array(
            'average__objek_wisata__rating' => $this->Pengguna_tambah_model->ratarata_rating($id_objekwisata),
            'floor__objek_wisata__rating' => floor($this->Pengguna_tambah_model->ratarata_rating($id_objekwisata)),
            'ulasan__objek_wisata__rating' => $this->input->post('nilai_ulasan_wisata__auto')
        );
        $this->Pengguna_tambah_model->objek_wisata__auto($objek_wisata__auto, $id_objekwisata);

        redirect('/pengguna/objek_wisata/'.$this->input->post('id_objekwisata_post'));
    }
    
}