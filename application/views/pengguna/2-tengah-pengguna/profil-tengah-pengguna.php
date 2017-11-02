<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--3-col"></div>
  <div class="mdl-cell mdl-cell--6-col">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Akun Anda</h2>
  </div>
  <div class="mdl-card__supporting-text">
    <center>
        <img src="<?php echo $this->session->userdata('userData')['picture_url']; ?>" alt="<?php echo $this->session->userdata('userData')['first_name']." ".$this->session->userdata('userData')['last_name']; ?>">
        <form>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="nama_lengkap" value="<?php echo $this->session->userdata('userData')['first_name']." ".$this->session->userdata('userData')['last_name']; ?>" disabled>
            <label class="mdl-textfield__label" for="nama_lengkap">Nama Lengkap</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="alamat_email" value="<?php echo $this->session->userdata('userData')['email']; ?>" disabled>
            <label class="mdl-textfield__label" for="alamat_email">Alamat Email</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="nomor_telepon" value="<?php  if($this->session->userdata('userData')['gender'] == "male"){ echo "Laki-Laki"; }else{ echo "Perempuan"; } ?>" disabled>
            <label class="mdl-textfield__label" for="nomor_telepon">Jenis Kelamin</label>
        </div>
        </form>
    </center>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <center>
    <a href="<?php echo $this->session->userdata('userData')['profile_url']; ?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--facebook"><i class="fa fa-facebook fa-fw"></i> <?php echo $this->session->userdata('userData')['first_name']." ".$this->session->userdata('userData')['last_name']; ?></a>
    </center>
  </div>
</div></div>
  <div class="mdl-cell mdl-cell--3-col"></div>
</div>