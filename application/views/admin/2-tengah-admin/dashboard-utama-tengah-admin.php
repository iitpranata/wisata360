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
<div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
  
</div>
<div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
  <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
    <div class="mdl-card__title mdl-card--expand mdl-color--teal-300" style="
    position: relative;
    height: auto;
    width: auto;
    background-image: url(
      <?php 
          echo base_url() .'assets/pengguna/gambar/Thumbnail_-_Pantai_Panjang.jpg';//. $row->thumbnail__objek_wisata__post;
        ?>
    );
    background-size: cover;">
        <h2 class="mdl-card__title-text"><i class="material-icons" style="font-size: 50px; color:#00ff00;">arrow_upward</i></h2>
    </div>
    <div class="mdl-card__supporting-text mdl-color-text--grey-600">
        Non dolore elit adipisicing ea reprehenderit consectetur culpa.
    </div>
    <div class="mdl-card__actions mdl-card--border">
        <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Selengkapnya
          <i class="material-icons">chevron_right</i></a>
    </div>
  </div>
  <div class="demo-separator mdl-cell--1-col"></div>
  <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
      <div class="mdl-card__title mdl-card--expand mdl-color--teal-300" style="
    position: relative;
    height: auto;
    width: auto;
    background-image: url(
      <?php 
          echo base_url() .'assets/pengguna/gambar/Thumbnail_-_Benteng_Marlborough.jpg';//. $row->thumbnail__objek_wisata__post;
        ?>
    );
    background-size: cover;">
          <h2 class="mdl-card__title-text"><i class="material-icons" style="font-size: 50px; color:red;">arrow_downward</i></h2>
      </div>
      <div class="mdl-card__supporting-text mdl-color-text--grey-600">
          Non dolore elit adipisicing ea reprehenderit consectetur culpa.
      </div>
      <div class="mdl-card__actions mdl-card--border">
          <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Selengkapnya
          <i class="material-icons">chevron_right</i></a>
      </div>
    </div>
</div>