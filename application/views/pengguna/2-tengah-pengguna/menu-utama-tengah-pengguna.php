<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <a href="<?php echo base_url() ?>"><img class="android-logo-image" src="<?php echo base_url() ?>assets/pengguna/gambar/android-logo-.png"></a>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer">
            
          </div>
          <?php if($this->session->userdata('userData')['oauth_uid'] > 0){ ?>
            <a class="mdl-layout--small-screen-only" style="color: black; text-decoration: none;" href="<?php echo base_url() ?>pengguna/profil"><img src="<?php echo $this->session->userdata('userData')['picture_url']; ?>" style="height: 30px;width: 30px;"></a>
            <?php } else { } ?>
          <!-- Navigation -->
          <div class="android-navigation-container">
          <?php if($this->session->userdata('userData')['oauth_uid'] > 0){ ?>
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url(); ?>">Destinasi</a>           
              <!-- <img src="<?php //echo $this->session->userdata('userData')['picture_url']; ?>" width="35px" height="30px"> -->
              <b style="color : #7e7777; padding-top: 6px;padding-left: 25px;" class="mdl-typography--text-uppercase"><?php echo $this->session->userdata('userData')['first_name']." ".$this->session->userdata('userData')['last_name']; ?></b>            
              <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon" style="margin-right: 20px;">
                <i class="material-icons" style="padding-top: 3px;">expand_more</i>
              </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                <li class="mdl-menu__item"><a style="color: black; text-decoration: none;" href="<?php echo base_url() ?>pengguna/profil">Profil</a></li>
                <li class="mdl-menu__item"><a style="color: black; text-decoration: none;" href="<?php echo base_url() ?>pengguna_login_facebook/logout">Keluar</a></li>
            </ul>
          </nav>
          <?php } else { ?> 
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url(); ?>">Destinasi</a>         
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url(); ?>masuk">Masuk / Daftar</a>
            </nav>
          <?php }?>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="<?php echo base_url() ?>assets/pengguna/gambar/android-logo-.png">
          </span>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer mdl-layout--small-screen-only">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="<?php echo base_url() ?>assets/pengguna/gambar/android-logo-white-.png">
        </span>
        <nav class="mdl-navigation">
        <?php echo form_open('pengguna/pencarian') ?>
          <div class="field" id="searchform" style="width: 217px; height: 30px;">
            <input style="width: 217px; height: 30px;" type="search" id="searchterm" name="keyword" placeholder="Cari destinasi tujuan anda?" />
          </div>
          <?php echo form_close() ?>
        <?php if($this->session->userdata('userData')['oauth_uid'] > 0){ ?>
          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>"><i class="material-icons">collections</i> DESTINASI</a>
          <a class="mdl-navigation__link" href="<?php echo base_url() ?>pengguna_login_facebook/logout"><i class="material-icons">exit_to_app</i> KELUAR</a>
          
        <?php }else{ ?>
          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>"><i class="material-icons">collections</i> DESTINASI</a>
          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>pengguna_login_facebook/"><i class="material-icons">exit_to_app</i> MASUK / DAFTAR</a>
        <?php } ?>
        </nav>
      </div>
      