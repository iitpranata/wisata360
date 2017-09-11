<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan_tambah extends CI_Controller {

    public function __construct ()
	{
    	parent:: __construct();
           $this->load->model('Depan_tambah_model');

  	}

    public function objek_wisata()
    {
        $objek_wisata_rating_ulasan = array(
            'objek_wisata__pengguna_id__objek_wisata__pengguna' => $this->input->post('id_objekwisata_pengguna'),
            'objek_wisata__post_id__objek_wisata__post' => $this->input->post('id_objekwisata_post'),
            'rating__objek_wisata__rating_ulasan' => $this->input->post('hasil_rating'),
            'ulasan__objek_wisata__rating_ulasan' => $this->input->post('hasil_ulasan'),
            'tanggal__objek_wisata__rating_ulasan' => date('y/m/d'),
        );
        $this->Depan_tambah_model->objek_wisata__rating_ulasan($objek_wisata_rating_ulasan);
            
        $id_objekwisata = $this->input->post('id_objekwisata_post');
        $objek_wisata__auto = array(
            'average__objek_wisata__rating' => $this->Depan_tambah_model->ratarata_rating($id_objekwisata),
            'floor__objek_wisata__rating' => floor($this->Depan_tambah_model->ratarata_rating($id_objekwisata)),
        );

        $this->Depan_tambah_model->objek_wisata__auto($objek_wisata__auto, $id_objekwisata);

        redirect('index.php/depan/objek_wisata/'.$this->input->post('id_objekwisata_post'));
    }
}