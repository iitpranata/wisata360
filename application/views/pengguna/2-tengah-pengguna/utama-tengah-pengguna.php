        <div class="android-be-together-section mdl-typography--text-center">
          <div class="logo-font android-slogan">Objek Wisata 360</div>
          <div class="logo-font android-sub-slogan">Temukan perjalanan dan persinggahan destinasi wisata Kota Bengkulu</div>
        </div>

        <div class="mdl-tabs mdl-js-tabs">
          <?php echo form_open('pengguna/pencarian') ?>
          <div class="mdl-tabs__tab-bar mdl-layout--large-screen-only" style="height: 60px; padding-top: 10px; background-color : #ececec;">
            <div class="field" id="searchform">
              <input type="text" id="searchterm" name="keyword" placeholder="Cari destinasi tujuan anda?" />
              <button type="submit" id="search">CARI</button>
  	        </div>
          </div>
          <?php echo form_close() ?>
          <div class="mdl-tabs__tab-bar" style="background-color : #f3f3f3;">
              <a href="#tab1" class="mdl-tabs__tab is-active">POPULER</a>
              <a href="#tab2" class="mdl-tabs__tab">RATING</a>
              <a href="#tab3" class="mdl-tabs__tab">ULASAN</a>
          </div>

          <div class="mdl-tabs__panel is-active" id="tab1">
              <?php $this->load->view($populer); ?>
          </div>
          <div class="mdl-tabs__panel" id="tab2">
              <?php $this->load->view($rating); ?>
          </div>
          <div class="mdl-tabs__panel" id="tab3">
              <?php $this->load->view($ulasan); ?>
          </div>

        </div>