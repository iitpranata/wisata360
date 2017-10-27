<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <a href="<?php echo base_url() ?>"><img class="android-logo-image" src="<?php echo base_url() ?>assets/pengguna/gambar/android-logo-.png"></a>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer">
            
          </div>
          <button id="cari" class="mdl-button mdl-js-button mdl-layout--small-screen-only">
            <i class="material-icons">search</i>
          </button>
          <!-- Navigation -->
          <div class="android-navigation-container">
          <?php if($this->session->userdata('userData')['oauth_uid'] > 0){ ?>            
            <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon" style="margin-right: 20px;">
                <i class="material-icons">expand_more</i>
            </button>
            <b style="color : #7e7777;"><?php echo $this->session->userdata('userData')['first_name']." ".$this->session->userdata('userData')['last_name']; ?></b>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                <li class="mdl-menu__item">Profil</li>
                <li class="mdl-menu__item"><a style="color: black; text-decoration: none;" href="<?php base_url() ?>index.php/pengguna_login_facebook/logout">Keluar</a></li>
            </ul>
          <?php } else { ?> 
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url(); ?>index.php/pengguna_login_facebook/">Masuk / Daftar</a>
            </nav>
          <?php }?>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="<?php echo base_url() ?>assets/pengguna/gambar/android-logo-.png">
          </span>
        </div>
      </div>
      <div id="pencarian" class="android-header mdl-layout--small-screen-only">
        
      </div>

      <div class="android-drawer mdl-layout__drawer mdl-layout--small-screen-only">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="<?php echo base_url() ?>assets/pengguna/gambar/android-logo-white-.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>index.php/pengguna_login_facebook/">MASUK</a>
          <a class="mdl-navigation__link" href="<?php echo base_url(); ?>index.php/pengguna_login_facebook/">DAFTAR</a>
        </nav>
      </div>
      