<?php if($this->session->userdata('userData')['oauth_uid'] > 0){  ?>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--2-col"></div>
    <div class="mdl-cell mdl-cell--8-col" style="margin-left:auto;margin-right:auto;text-align:center;">
        <h2>Terima Kasih</h2>
        <img src="<?php echo $this->session->userdata('userData')['picture_url']; ?>" alt="<?php echo $this->session->userdata('userData')['first_name']." ".$this->session->userdata('userData')['last_name']; ?>">
        <h4 style="margin-bottom: 0px;margin-top: 5px;"><?php echo $this->session->userdata('userData')['first_name']." ".$this->session->userdata('userData')['last_name']; ?></h4>
        <h6>Sekarang lakukan proses rating dan ulasan untuk pariwisata Indonesia lebih baik!</h6>
    </div>
    <div class="mdl-cell mdl-cell--2-col"></div>
    <div class="android-more-section">
                <div class="android-card-container mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <img src="<?php echo base_url() ?>assets/pengguna/gambar/more-from-4.png">
                    </div>
                    <div class="mdl-card__title" style="padding-bottom: 0px; padding-left: 25px; padding-right: 25px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;line-height: 16px;     /* fallback */max-height: 45px;      /* fallback */-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical;">
                      <h4 class="mdl-card__title-text">Fort Marlborough</h4>
                    </div>
                    <div class="mdl-card__supporting-text" style="padding-bottom: 16px; padding-top: 0px; height: 100px;">
                      <span class="mdl-typography--font-light mdl-typography--subhead">
                        <div class="mdl-grid" style="padding-left: 0px; padding-bottom : 0px; padding-top: 0px;">
                          <div class="mdl-cell mdl-cell--5-col mdl-cell--5-col-tablet mdl-cell--2-col-phone">
                            <select class="peringkat">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone">
                            (10)
                          </div>
                        </div>
                        <i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 27 Ulasan
                      </span>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
                        Selengkapnya
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <img src="<?php echo base_url() ?>assets/pengguna/gambar/more-from-4.png">
                    </div>
                    <div class="mdl-card__title" style="padding-bottom: 0px; padding-left: 25px; padding-right: 25px;">
                      <h4 class="mdl-card__title-text">Pantai Panjang</h4>
                    </div>
                    <div class="mdl-card__supporting-text" style="padding-bottom: 16px; padding-top: 0px; height: 100px;">
                      <span class="mdl-typography--font-light mdl-typography--subhead">
                        <div class="mdl-grid" style="padding-left: 0px; padding-bottom : 0px; padding-top: 0px;">
                          <div class="mdl-cell mdl-cell--5-col mdl-cell--5-col-tablet mdl-cell--2-col-phone">
                            <select class="peringkat">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone">
                            (10)
                          </div>
                        </div>
                        <i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 27 Ulasan
                      </span>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
                        Selengkapnya
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__media">
                      <img src="<?php echo base_url() ?>assets/pengguna/gambar/more-from-4.png">
                    </div>
                    <div class="mdl-card__title" style="padding-bottom: 0px; padding-left: 25px; padding-right: 25px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;line-height: 16px;     /* fallback */max-height: 45px;      /* fallback */-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical;">
                      <h4 class="mdl-card__title-text">Rumah Pengasingan Bung Soekarno</h4>
                    </div>
                    <div class="mdl-card__supporting-text" style="padding-bottom: 16px; padding-top: 0px; height: 100px;">
                      <span class="mdl-typography--font-light mdl-typography--subhead">
                        <div class="mdl-grid" style="padding-left: 0px; padding-bottom : 0px; padding-top: 0px;">
                          <div class="mdl-cell mdl-cell--5-col mdl-cell--5-col-tablet mdl-cell--2-col-phone">
                            <select class="peringkat">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
                          <div class="mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone">
                            (10)
                          </div>
                        </div>
                        <i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 27 Ulasan
                      </span>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
                        Selengkapnya
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
</div>
<?php }else { ?>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--2-col"></div>
    <div class="mdl-cell mdl-cell--8-col" style="margin-top:80px;margin-bottom:100px;margin-left:auto;margin-right:auto;text-align:center;">
        <h2>Masuk</h2>
        <h6>Masuk sekarang untuk kemudahan proses rating dan ulasan untuk pariwisata Indonesia lebih baik!</h6>
        <a href="<?php echo $authUrl; ?>" title="Masuk Dengan Facebook" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--facebook"><i class="fa fa-facebook fa-fw"></i> Masuk Dengan Facebook</a>
    </div>
    <div class="mdl-cell mdl-cell--2-col"></div>
</div>
<?php } ?>

