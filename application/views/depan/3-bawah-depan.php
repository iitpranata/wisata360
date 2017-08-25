    <?php $this->load->view($footer); ?>

      </div>
    </div>
    <?php $this->load->view($javascript_utama) ?>
    <?php 
      if($this->uri->segment(2) == "objek_wisata")
      {
        $this->load->view($javascript_map);
      }
    ?>
  </body>
</html>