
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <?php $this->load->view($header_utama); ?>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <?php $this->load->view($header_menu); ?>
        <?php $this->load->view($nav_utama); ?>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <?php $this->load->view($halaman_utama); ?>
        </div>
      </main>
    </div>
      <?php
        if($this->uri->segment(2) == "index")
        {
          $this->load->view($svg_utama);
        } 
      ?>
    
