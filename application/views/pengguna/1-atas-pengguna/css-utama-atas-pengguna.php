<!-- Page styles -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pengguna/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pengguna/font-awesome/css/fontawesome-stars.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pengguna/css/styles.css">
<?php if($this->uri->segment(2) == "objek_wisata") { $this->load->view($css_foto); } ?>
<?php if($this->uri->segment(2) == "objek_wisata") { $this->load->view($javascript_foto); } ?>
<style>
	#view-source {
	      position: fixed;
	      display: block;
	      right: 0;
	      bottom: 0;
	      margin-right: 40px;
	      margin-bottom: 40px;
	      z-index: 900;
	    }
</style>