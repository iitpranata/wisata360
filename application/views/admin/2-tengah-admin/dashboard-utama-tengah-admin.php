<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid"  style="text-align: center;">
  <div class="mdl-cell mdl-cell--4-col">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--6-col">
        <i class="material-icons" style="font-size: 150px">burst_mode</i>
      </div>
      <div class="mdl-cell mdl-cell--6-col">
        <h6 style="margin-bottom: 0px; margin-top: 34px;">POSTINGAN</h6>
        <h1 style="margin-top: 0px;"><?php echo $jumlah_postingan ?></h1>
      </div>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--4-col">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--6-col">
        <i class="material-icons" style="font-size: 140px; margin-top: 6px;">comment</i>
      </div>
      <div class="mdl-cell mdl-cell--6-col">
        <h6 style="margin-bottom: 0px; margin-top: 34px;">ULASAN</h6>
        <h1 style="margin-top: 0px;"><?php echo $jumlah_ulasan ?></h1>
      </div>
    </div>
  </div>
  <div class="mdl-cell mdl-cell--4-col">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--6-col">
        <i class="material-icons" style="font-size: 150px">people</i>
      </div>
      <div class="mdl-cell mdl-cell--6-col">
        <h6 style="margin-bottom: 0px; margin-top: 34px;">PENGGUNA</h6>
        <h1 style="margin-top: 0px;"><?php echo $jumlah_pengguna ?></h1>
      </div>
    </div>
  </div>
</div>
<div id="piechart" class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
</div>
<div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
  <?php foreach ($populer as $row) { ?>
  <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
    <div class="mdl-card__title mdl-card--expand mdl-color--teal-300" style="position: relative;height: auto;width: auto;background-image: url(
      <?php 
          if ($row->thumbnail__objek_wisata__post == null) {
            echo base_url() .'assets/pengguna/gambar/'. $row->foto_virtual_reality__objek_wisata__post;
           }else {
             echo base_url() .'assets/pengguna/gambar/'. $row->thumbnail__objek_wisata__post;
           }
      ?>
    );background-size: cover;">
        <h2 class="mdl-card__title-text"><i class="material-icons" style="font-size: 50px; color:#00ff00;">arrow_upward</i></h2>
    </div>
    <div class="mdl-card__supporting-text mdl-color-text--grey-600" style="padding-left: 21px;">
      <div style="padding-bottom: 10px;  padding-left: 7px;">
        <h4 class="mdl-card__title-text"><?php echo $row->nama__objek_wisata__post ?></h4>
      </div>
      <div style="padding-bottom: 10px; padding-left: 7px;">
        <?php
          if($row->floor__objek_wisata__rating == 5){
            for($i=1; $i <= 5; $i++){
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
            }
            }elseif ($row->floor__objek_wisata__rating == 4) {
            for($i=1; $i <= 4; $i++){
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
            }
            for($j=1; $j <= 1; $j++){ 
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
            }
            }elseif ($row->floor__objek_wisata__rating == 3) {
            for($i=1; $i <= 3; $i++){
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
            }
            for($j=1; $j <= 2; $j++){ 
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
            }
            }elseif ($row->floor__objek_wisata__rating == 2) {
            for($i=1; $i <= 2; $i++){
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
            }
            for($j=1; $j <= 3; $j++){ 
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
            }
            }else {
            for($i=1; $i <= 1; $i++){
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
            }
            for($j=1; $j <= 4; $j++){ 
              echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
            }
            }
          ?>
        </div>
        <h6 style="margin-top: 0px;margin-bottom: 0px;">
           <i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 
            <?php 
              $this->db->where('objek_wisata__post_id__objek_wisata__post',$row->id__objek_wisata__post);
              $this->db->from('objek_wisata__rating_ulasan');
              echo $this->db->count_all_results(); 
            ?> 
            Ulasan
          </h6>
    </div>
    <div class="mdl-card__actions mdl-card--border">
        <a href="<?php echo base_url()."pengguna/objek_wisata/".$row->id__objek_wisata__post ?>" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effect">Selengkapnya
          <i class="material-icons">chevron_right</i></a>
    </div>
  </div>
  <?php } ?>
  <div class="demo-separator mdl-cell--1-col"></div>
  <?php foreach ($tidak_populer as $row) { ?>
    <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
      <div class="mdl-card__title mdl-card--expand mdl-color--teal-300" style="position: relative;height: auto;width: auto;background-image: url(
        <?php 
            if ($row->thumbnail__objek_wisata__post == null) {
              echo base_url() .'assets/pengguna/gambar/'. $row->foto_virtual_reality__objek_wisata__post;
             }else {
               echo base_url() .'assets/pengguna/gambar/'. $row->thumbnail__objek_wisata__post;
             }
        ?>
      );background-size: cover;">
          <h2 class="mdl-card__title-text"><i class="material-icons" style="font-size: 50px; color:red;">arrow_downward</i></h2>
      </div>
      <div class="mdl-card__supporting-text mdl-color-text--grey-600" style="padding-left: 21px;">
        <div style="padding-bottom: 10px;  padding-left: 7px;">
          <h4 class="mdl-card__title-text"><?php echo $row->nama__objek_wisata__post ?></h4>
        </div>
        <div style="padding-bottom: 10px; padding-left: 7px;">
          <?php
            if($row->floor__objek_wisata__rating == 5){
              for($i=1; $i <= 5; $i++){
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
              }
              }elseif ($row->floor__objek_wisata__rating == 4) {
              for($i=1; $i <= 4; $i++){
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
              }
              for($j=1; $j <= 1; $j++){ 
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
              }
              }elseif ($row->floor__objek_wisata__rating == 3) {
              for($i=1; $i <= 3; $i++){
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
              }
              for($j=1; $j <= 2; $j++){ 
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
              }
              }elseif ($row->floor__objek_wisata__rating == 2) {
              for($i=1; $i <= 2; $i++){
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
              }
              for($j=1; $j <= 3; $j++){ 
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
              }
              }else {
              for($i=1; $i <= 1; $i++){
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
              }
              for($j=1; $j <= 4; $j++){ 
                echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
              }
              }
            ?>
          </div>
          <h6 style="margin-top: 0px;margin-bottom: 0px;">
             <i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 
              <?php 
                $this->db->where('objek_wisata__post_id__objek_wisata__post',$row->id__objek_wisata__post);
                $this->db->from('objek_wisata__rating_ulasan');
                echo $this->db->count_all_results(); 
              ?> 
              Ulasan
            </h6>
      </div>
      <div class="mdl-card__actions mdl-card--border">
          <a href="<?php echo base_url()."pengguna/objek_wisata/".$row->id__objek_wisata__post ?>" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effect">Selengkapnya
            <i class="material-icons">chevron_right</i></a>
      </div>
    </div>
    <?php } ?>
     
</div>