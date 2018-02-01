<?php 
// echo "<pre>";
// print_r($this->session->all_userdata());
// echo "<br>";
// print_r($cf_asli);
// echo "<br>";
// print_r(($cf));
// echo "</pre>";
?>
<?php if($this->session->userdata('userData')['oauth_uid'] == TRUE){?>  

<h5 style="text-align: center;margin-bottom: 0px;">
	Terima Kasih
</h5>
<h6 style="margin-top: 0px;text-align: center;">
Telah Meluangkan Waktu Untuk Memberikan Rating dan Ulasan Wisata Kota Bengkulu.
</h6>

<?php }elseif($this->session->userdata('userData')['oauth_uid'] == " "){  ?>

	<div class="android-more-section" style="padding-bottom: 0px;">
	<h6 style="margin-top: 0px; margin-bottom: 0px; padding-left: 10px;">Direkomendasikan :</h6>
	<div class="android-card-container mdl-grid">
    <?php error_reporting(0); foreach ($cf as $row) {?>
		<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
      <div class="mdl-card__media">
        <?php 
          if ($row->thumbnail__objek_wisata__post == null) {
           echo '<img src="'.base_url() .'assets/pengguna/gambar/'. $row->foto_virtual_reality__objek_wisata__post.'" height="226.344px">';
          }else {
            echo '<img src="'.base_url() .'assets/pengguna/gambar/'. $row->thumbnail__objek_wisata__post.'">';
          }
        ?>
        
			</div>
			<div class="mdl-card__title" style="padding-bottom: 0px; padding-left: 25px; padding-right: 25px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;line-height: 16px;     /* fallback */max-height: 45px;      /* fallback */-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical;">
				<h4 class="mdl-card__title-text"><?php echo $row->nama__objek_wisata__post ?></h4>
			</div>
			<div class="mdl-card__supporting-text" style="padding-bottom: 16px; padding-top: 0px; height: 100px;"> <span class="mdl-typography--font-light mdl-typography--subhead">
          <div class="mdl-grid" style="padding-left: 0px; padding-bottom : 0px; padding-top: 0px;">
            <div class="mdl-cell mdl-cell--5-col mdl-cell--5-col-tablet mdl-cell--2-col-phone">
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
            <div class="mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone">
              <?php 
                
              ?>
            </div>
          </div>
					<i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 
					<?php 
						$this->db->where('objek_wisata__post_id__objek_wisata__post',$row->id__objek_wisata__post);
						$this->db->from('objek_wisata__rating_ulasan');
						echo $this->db->count_all_results(); 
					?> 
					Ulasan
        </span>
      </div>
			<div class="mdl-card__actions"> <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?php echo base_url()."pengguna/objek_wisata/".$row->id__objek_wisata__post ?>" data-upgraded=",MaterialButton">
          Selengkapnya
          <i class="material-icons">chevron_right</i>
        </a>
			</div>
    </div>
    <?php  }   ?>
	</div>
	<hr>
</div>

<?php }else{ } ?>

<div class="android-more-section">
	<div class="android-card-container mdl-grid">
    <?php foreach ($populer_data as $row) {?>
		<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
      <div class="mdl-card__media">
        <?php 
          if ($row->thumbnail__objek_wisata__post == null) {
           echo '<img src="'.base_url() .'assets/pengguna/gambar/'. $row->foto_virtual_reality__objek_wisata__post.'" height="226.344px">';
          }else {
            echo '<img src="'.base_url() .'assets/pengguna/gambar/'. $row->thumbnail__objek_wisata__post.'">';
          }
        ?>

			</div>
			<div class="mdl-card__title" style="padding-bottom: 0px; padding-left: 25px; padding-right: 25px;overflow: hidden; text-overflow: ellipsis; display: -webkit-box;line-height: 16px;     /* fallback */max-height: 45px;      /* fallback */-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical;">
				<h4 class="mdl-card__title-text"><?php echo $row->nama__objek_wisata__post ?></h4>
			</div>
			<div class="mdl-card__supporting-text" style="padding-bottom: 16px; padding-top: 0px; height: 100px;"> <span class="mdl-typography--font-light mdl-typography--subhead">
          <div class="mdl-grid" style="padding-left: 0px; padding-bottom : 0px; padding-top: 0px;">
            <div class="mdl-cell mdl-cell--5-col mdl-cell--5-col-tablet mdl-cell--2-col-phone">
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
            <div class="mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone">
              <?php 
                
              ?>
            </div>
          </div>
					<i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 
					<?php 
						$this->db->where('objek_wisata__post_id__objek_wisata__post',$row->id__objek_wisata__post);
						$this->db->from('objek_wisata__rating_ulasan');
						echo $this->db->count_all_results(); 
					?> 
					Ulasan
        </span>
      </div>
			<div class="mdl-card__actions"> <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?php echo base_url()."pengguna/objek_wisata/".$row->id__objek_wisata__post ?>" data-upgraded=",MaterialButton">
          Selengkapnya
          <i class="material-icons">chevron_right</i>
        </a>
			</div>
    </div>
    <?php  }   ?>
	</div>
	<div class="mdl-grid">
		<div class="mdl-layout-spacer"></div>
		<div class="mdl-cell mdl-cell--2-col">
			<a href="<?php echo base_url().'populer/' ?>" target="_blank" class="mdl-button mdl-js-button mdl-button--raised"> <i class="material-icons">chevron_right</i> Selanjutnya</a>
		</div>
		<div class="mdl-layout-spacer"></div>
	</div>
</div>