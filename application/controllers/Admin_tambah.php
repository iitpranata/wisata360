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
        if(isset($_FILES["fotovr"]))  
        {  
             $config['upload_path'] = './assets/pengguna/gambar/';  
             $config['allowed_types'] = 'jpg|jpeg|png|gif';  
             $this->load->library('upload', $config);  
             if(!$this->upload->do_upload('fotovr'))  
             {  
                  echo $this->upload->display_errors();  
             }  
             else  
             {  
                  $data = $this->upload->data();  
                  $config['image_library'] = 'gd2';  
                  $config['source_image'] = './assets/pengguna/gambar/'.$data["file_name"];  
                  $config['create_thumb'] = FALSE;  
                  $config['maintain_ratio'] = FALSE;  
                  $config['quality'] = '60%';  
                  $config['width'] = 4096;  
                  $config['height'] = 2048;  
                  $config['new_image'] = './assets/pengguna/gambar/'.$data["file_name"];  
                  $this->load->library('image_lib', $config);  
                  $this->image_lib->resize();  

                $this->upload->do_upload('thumbnail');
                $thumbnail = $this->upload->data();
    
                $objek_wisata = array(
                    'nama__objek_wisata__post' => $this->input->post('nama_wisata'),
                    'alamat__objek_wisata__post' => $this->input->post('alamat_wisata'),
                    'kategori__objek_wisata__post' => $this->input->post('kategori_wisata'),
                    'tanggal__objek_wisata__post' => date('d-m-y'),
                    'keterangan__objek_wisata__post' => $this->input->post('keterangan_wisata'),
                    'lat_map__objek_wisata__post' => $this->input->post('lat_wisata'),
                    'lng_map__objek_wisata__post' => $this->input->post('lng_wisata'),
                    'thumbnail__objek_wisata__post' => $thumbnail['raw_name'].$thumbnail['file_ext'],
                    'foto_virtual_reality__objek_wisata__post' => $data["file_name"]
                );
    
                $id_objekwisata = $this->Admin_tambah_model->objek_wisata($objek_wisata);
    
                $objek_wisata__rating = array(
                    'objek_wisata__post_id__objek_wisata__post' => $id_objekwisata
                );
                $this->Admin_tambah_model->objek_wisata__rating($objek_wisata__rating);
    
                redirect('/Admin/postingan_objek_wisata');
             }  
        } 
            
    }
}