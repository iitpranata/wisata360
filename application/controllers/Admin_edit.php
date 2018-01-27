<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit extends CI_Controller {

    public function __construct ()
	{
    	parent:: __construct();
   		$this->load->model('Admin_edit_model');

  	}

    public function objek_wisata()
    {
        $config['upload_path']          = './assets/depan/gambar/';
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
                'keterangan__objek_wisata__post' => $this->input->post('keterangan_wisata'),
                'foto_virtual_reality__objek_wisata__post' => $fotovier['raw_name'].$fotovier['file_ext']
            );

            $id_objekwisata = $this->input->post('id_objekwisata');
            $this->Admin_edit_model->objek_wisata($id_objekwisata, $objek_wisata);
            redirect('index.php/belakang/tambah_objek_wisata');
        }
    }

    public function ulasan(){
        $ulasan = array(
            'ulasan_objek_wisata__ulasan' => $this->input->post('ulasan')
        );

        $id_ulasan = $this->input->post('id_ulasan');
        $this->Admin_edit_model->ulasan($id_ulasan, $ulasan);
        redirect('admin/sentiment_analysis');
    }
}