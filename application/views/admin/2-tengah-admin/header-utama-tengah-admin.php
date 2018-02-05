<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">
          <?php
          if($this->uri->segment(2) == "ulasan_objek_wisata")
          {
            foreach ($nama_objek_wisata as $row) {
              echo $nama_halaman."- ".$row->nama__objek_wisata__post;
            }
          }elseif($this->uri->segment(2) == "rating_objek_wisata") {
            foreach ($nama_objek_wisata as $row) {
              echo $nama_halaman."- ".$row->nama__objek_wisata__post;
            }
          }elseif($this->uri->segment(2) == "sentiment_analysis_objek_wisata") {
            foreach ($nama_objek_wisata as $row) {
              echo $nama_halaman."- ".$row->nama__objek_wisata__post;
            }
          }else{
            echo $nama_halaman; 
          }
          ?></span>
          <div class="mdl-layout-spacer"></div>
          <h6><?php echo date("Y-m-d H:i:s") ?></h6>
        </div>
      </header>