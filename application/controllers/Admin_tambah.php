<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_tambah extends CI_Controller {

    public function __construct ()
	{
    	parent:: __construct();
   		$this->load->model('Admin_tambah_model');

  	}

    public function objek_wisata()
    {
        $config['upload_path']          = './assets/pengguna/gambar/';
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 6000;
        $config['max_width']            = 6000;
        $config['max_height']           = 6000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('fotovr')){
            echo $this->upload->display_errors();
        }else{
            $fotovier = $this->upload->data();

            $objek_wisata = array(
                'nama__objek_wisata__post' => $this->input->post('nama_wisata'),
                'alamat__objek_wisata__post' => $this->input->post('alamat_wisata'),
                'kategori__objek_wisata__post' => $this->input->post('kategori_wisata'),
                'tanggal__objek_wisata__post' => date('d-m-y'),
                'keterangan__objek_wisata__post' => $this->input->post('keterangan_wisata'),
                'lat_map__objek_wisata__post' => $this->input->post('lat_wisata'),
                'lng_map__objek_wisata__post' => $this->input->post('lng_wisata'),
                'foto_virtual_reality__objek_wisata__post' => $fotovier['raw_name'].$fotovier['file_ext']
            );

            $id_objekwisata = $this->Admin_tambah_model->objek_wisata($objek_wisata);

            $objek_wisata__rating = array(
                'objek_wisata__post_id__objek_wisata__post' => $id_objekwisata
            );
            $this->Admin_tambah_model->objek_wisata__rating($objek_wisata__rating);

            redirect('/Admin/tambah_objek_wisata');
        }
    }
}