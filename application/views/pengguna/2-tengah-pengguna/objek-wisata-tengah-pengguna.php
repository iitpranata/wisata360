<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--12-col">
		<?php foreach ($objek_wisata as $row) { ?>
		<h2 style="margin-bottom: 0px;"><?php echo $row->nama__objek_wisata__post; ?></h2>
		<h6 style="margin-bottom: 0px; margin-top: 5px;"><?php echo $row->alamat__objek_wisata__post; ?></h6>
		<div class="mdl-grid" style="padding-left: 0px; padding-bottom : 0px; padding-top: 0px;">
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
					}else{
					for($i=1; $i <= 1; $i++){
						echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
					}
					for($j=1; $j <= 4; $j++){ 
						echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
					}
					}
			?>
		</div>
	</div>
	<div class="mdl-cell mdl-cell--8-col">
		<div id="panorama" style="height: 400px;"></div>
		<script>
			pannellum.viewer('panorama', {
			            "type": "equirectangular",
			            "panorama": "<?php echo base_url() ?>assets/pengguna/gambar/<?php echo $row->foto_virtual_reality__objek_wisata__post ?>",
			            "autoLoad": true,
			            "autoRotate": -2
			        });
		</script>
		<div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width: 100%; margin-top: 10px;">
				<div class="mdl-card__supporting-text" style="padding-bottom: 0px;">
					<div class="mdl-grid">
					<div class="mdl_cell mdl_cell--5-col">
						<h6 style="margin-top: 0px; margin-bottom: 0px; padding-top: 10px;padding-bottom: 5px;">Penilaian anda tentang objek wisata ini?</h6>
						<?php 
							echo form_open('index.php/pengguna_tambah/objek_wisata');
							$data = array(
								'type'  => 'hidden',
								'name'  => 'id_objekwisata_post',
								'id'    => 'id_objekwisata_post',
								'value' => $row->id__objek_wisata__post,
							);
							
							echo form_input($data);
							echo form_hidden('id_objekwisata_pengguna', $this->session->userdata('userData')['oauth_uid']);
						?>
						<select name="hasil_rating" class="peringkat" required>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="mdl-cell--1-offset">
					</div>
					<div class="mdl_cell mdl_cell--5-col">
						<h6 class="wisata_hasil_bintang" style="margin-top: 0px; margin-bottom: 0px; padding-top: 10px;">Kenapa anda memberi bintang?</h6>
							<div class="mdl-textfield mdl-js-textfield">
								<textarea class="mdl-textfield__input" name="hasil_ulasan" type="text" maxlength="160" rows="5" cols="200" id="ulasan" required></textarea>
								<label class="mdl-textfield__label" for="ulasan">Tulis ulasan kamu disini...</label>
							</div>
							<br>
					</div>
					</div>
				</div>
				<?php if($this->session->userdata('userData')['oauth_uid'] > 0){ ?>
					<div class="mdl-card__actions mdl-card--border">
						<button class="mdl-button mdl-js-button mdl-button--raised">Batal</button>
						<button class="mdl-button mdl-js-button mdl-button--raised" style="margin-left: 5px;">Komentar</button>
						<?php echo form_close(); ?>
					</div>
				<?php } ?>
			</div>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<div style="height: 45px; background-color : #ececec; margin-bottom: 5px;">
			<h6 style="margin-top: 0px; margin-bottom: 0px; padding-top: 10px; padding-left: 10px;"><i class="fa fa-map-marker" aria-hidden="true"></i> Lokasi</h6>
		</div>
		<div id="map" style="height: 350px;width: 100%;"></div>
		<script>
			function initMap() {
			        var uluru = {lat: <?php echo $row->lat_map__objek_wisata__post ?>, lng: <?php echo $row->lng_map__objek_wisata__post ?>};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 17,
			          center: uluru
			        });
			        var marker = new google.maps.Marker({
			          position: uluru,
			          map: map
			        });
			      }
		</script>
		<div style="height: 45px; background-color : #ececec; margin-bottom: 5px; margin-top: 10px;">
			<h6 style="margin-top: 0px; margin-bottom: 0px; padding-top: 10px; padding-left: 10px;"><i class="fa fa-wikipedia-w" aria-hidden="true"></i> Keterangan</h6>
		</div>
		<p style="margin-top: 10px;">
			<?php echo $row->keterangan__objek_wisata__post; ?>
		</p>
		<?php } ?>
	</div>
	<div class="mdl-cell mdl-cell--8-col">
		<div style="height: 45px; background-color : #ececec; margin-bottom: 5px; margin-top: 10px;">
			<h6 style="margin-top: 0px; margin-bottom: 0px; padding-top: 10px; padding-left: 10px;"><i class="fa fa-comment" aria-hidden="true"></i> Ulasan (<?php printf($jumlah_ulasan); ?>)</h6>
		</div>
		<?php foreach ($ulasanrating as $row) { ?>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--2-col">
				<div style="background-image: url('<?php echo base_url() ?>assets/pengguna/gambar/profil.JPG');display: inline-block;width: 130px;height: 130px;border-radius: 50%;background-repeat: no-repeat;background-position: center center;background-size: cover;"></div>
			</div>
			<div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp komentar-objek-wisata">
				<div class="mdl-card__supporting-text">
					 <?php
					 	if($row->rating__objek_wisata__rating_ulasan == 5){
							for($i=1; $i <= 5; $i++){
								echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
							}
						 }elseif ($row->rating__objek_wisata__rating_ulasan == 4) {
							for($i=1; $i <= 4; $i++){
								echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
							}
							for($j=1; $j <= 1; $j++){ 
								echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
							}
						 }elseif ($row->rating__objek_wisata__rating_ulasan == 3) {
							for($i=1; $i <= 3; $i++){
								echo '<i class="fa fa-star" aria-hidden="true" style="color: #EDB867; font-size : 20px;"></i>';
							}
							for($j=1; $j <= 2; $j++){ 
								echo '<i class="fa fa-star" aria-hidden="true" style="color: #D2D2D2; font-size : 20px;"></i>';
							}
						 }elseif ($row->rating__objek_wisata__rating_ulasan == 2) {
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
					<h6 style="margin-top: 0px;margin-bottom: 0px;">
						<?php echo $row->ulasan__objek_wisata__rating_ulasan ?>
					</h6>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="mdl-card__actions" align="center">
			<a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
			Tampikan yang lain
			<i class="material-icons">chevron_right</i>
			</a>
		</div>
	</div>
	<div class="mdl-cell mdl-cell--4-col">
		<div style="height: 44px; background-color : #ececec; margin-bottom: 5px; margin-top: 10px;">
			<h6 style="margin-top: 0px; margin-bottom: 0px; padding-top: 10px; padding-left: 10px;"><i class="fa fa-plane" aria-hidden="true"></i> Destinasi wisata lain</h6>
		</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
				<div class="mdl-card__media">
					<img src="<?php echo base_url() ?>assets/pengguna/gambar/more-from-4.png" width="100%" height="100%">
				</div>
				<div class="mdl-card__title mdl-card--expand" style="padding-bottom: 0px; padding-left: 25px; padding-right: 25px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;line-height: 16px;     /* fallback */max-height: 45px;      /* fallback */-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical;">
					<h2 class="mdl-card__title-text">Fort Marlborough</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<select class="peringkat">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>	<i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 27 Ulasan</div>
				<div class="mdl-card__actions mdl-card--border"> <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
                        Selengkapnya
                        <i class="material-icons">chevron_right</i>
                      </a>
				</div>
			</div>
		</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
				<div class="mdl-card__media">
					<img src="<?php echo base_url() ?>assets/pengguna/gambar/more-from-4.png" width="100%" height="100%">
				</div>
				<div class="mdl-card__title mdl-card--expand" style="padding-bottom: 0px; padding-left: 25px; padding-right: 25px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;line-height: 16px;     /* fallback */max-height: 45px;      /* fallback */-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical;">
					<h2 class="mdl-card__title-text">Fort Marlborough</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<select class="peringkat">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>	<i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 27 Ulasan</div>
				<div class="mdl-card__actions mdl-card--border"> <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
                        Selengkapnya
                        <i class="material-icons">chevron_right</i>
                      </a>
				</div>
			</div>
		</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp">
				<div class="mdl-card__media">
					<img src="<?php echo base_url() ?>assets/pengguna/gambar/more-from-4.png" width="100%" height="100%">
				</div>
				<div class="mdl-card__title mdl-card--expand" style="padding-bottom: 0px; padding-left: 25px; padding-right: 25px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;line-height: 16px;     /* fallback */max-height: 45px;      /* fallback */-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical;">
					<h2 class="mdl-card__title-text">Fort Marlborough</h2>
				</div>
				<div class="mdl-card__supporting-text">
					<select class="peringkat">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>	<i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 27 Ulasan</div>
				<div class="mdl-card__actions mdl-card--border"> <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
                        Selengkapnya
                        <i class="material-icons">chevron_right</i>
                      </a>
				</div>
			</div>
		</div>
	</div>
</div>