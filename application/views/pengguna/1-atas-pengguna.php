<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html lang="id">
  <head>
    <?php $this->load->view($meta_utama); ?>
    <title><?php
      if($this->uri->segment(2) == "objek_wisata")
      {
        foreach ($objek_wisata as $row) {
          echo $row->nama__objek_wisata__post.$judul;
        }
      }else{
        echo $judul;
      }
    ?></title>
    <?php $this->load->view($css_utama); ?>
    <?php 
      if($this->uri->segment(2) == "profil")
      {
        $this->load->view($css_profil);
      }
    ?>
  </head>