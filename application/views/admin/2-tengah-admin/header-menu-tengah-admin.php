<header class="demo-drawer-header">
          <img src="<?php echo base_url(); ?>assets/admin/gambar/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php echo $this->session->userdata('userData')['first_name']." ".$this->session->userdata('userData')['last_name']; ?></span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item"><a style="color: black; text-decoration: none;" href="<?php echo base_url() ?>pengguna_login_facebook/logout">Keluar</a></li>
            </ul>
          </div>
        </header>