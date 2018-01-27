<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text" style="width: 100%;">
            <table id="example" class="mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric"  style="width: 697px;">OBJEK WISATA</th>
                        <th>RATA-RATA</th>
                        <th>PEMBULATAN</th>
                        <th>RATING</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rating_data as $row) { ?>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo base_url()."index.php/admin/rating_objek_wisata/".$row->id__objek_wisata__post ?>" style="text-decoration:none;"><?php echo $row->nama__objek_wisata__post ?></a></td>
                        <td><?php echo $row->average__objek_wisata__rating ?></td>
                        <td><?php echo $row->floor__objek_wisata__rating ?></td>
                        <td>
                        <?php
                        if($row->floor__objek_wisata__rating == 5){
                            for($i=1; $i <= 5; $i++){
                                echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                            }
                        }elseif ($row->floor__objek_wisata__rating == 4) {
                            for($i=1; $i <= 4; $i++){
                                echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                            }
                            for($j=1; $j <= 1; $j++){ 
                                echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                            }
                        }elseif ($row->floor__objek_wisata__rating == 3) {
                            for($i=1; $i <= 3; $i++){
                                echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                            }
                            for($j=1; $j <= 2; $j++){ 
                                echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                            }
                        }elseif ($row->floor__objek_wisata__rating == 2) {
                            for($i=1; $i <= 2; $i++){
                                echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                            }
                            for($j=1; $j <= 3; $j++){ 
                                echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                            }
                        }else {
                            for($i=1; $i <= 1; $i++){
                                echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                            }
                            for($j=1; $j <= 4; $j++){ 
                                echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                            }
                        }
                    ?>
                        </td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h4>Nama Pengguna :</h4>
                <form action="<?php echo base_url().'index.php/admin/rating' ?>">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="left: 16px;">
                        <input class="mdl-textfield__input" name="nama_pengguna" type="text" id="sample3">
                        <label class="mdl-textfield__label" for="sample3">Nama Pengguna</label>
                    </div>
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised" style="margin-left: 30px;">
                    Simpan
                    </button>
                </form>
            <?php 
            // echo "<pre>";
            // print_r($cf_asli);
            // echo "<br>";
            // print_r($cf_dd);
            // echo "<br>";
            // print_r($cf_sama);
            // echo "<br>";
            // print_r(($cf));
            // echo "</pre>";
            ?>
            <?php 
                $a = $this->input->get('nama_pengguna');
                if($a){ 
            ?>
            <h4>Kemiripan(Similarity) :</h4>
            <div class="mdl-card__supporting-text" style="width: 97%;">
                <table class="mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric" style="width: 500px;">NAMA</th>
                            <th>NILAI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($cf_sama as $otherPerson=>$values){ ?>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric"><?php echo $otherPerson; ?></td>
                            <td><?php echo $values ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <h4>Direkomendasikan :</h4>
            <div class="mdl-card__supporting-text" style="width: 97%;">
            <table class="mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric" style="width: 500px;">OBJEK WISATA</th>
                        <th>RATING</th>
                        <th>ULASAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php error_reporting(0); foreach ($cf as $row) { ?>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric" ><a class="aksi" style="text-decoration: none;" target="blank_" href="<?php echo base_url()."index.php/pengguna/objek_wisata/".$row->id__objek_wisata__post ?>"><?php echo $row->nama__objek_wisata__post ?></a></td>
                        <td id="tanggal"> 
                            <?php
                                echo " (".$row->floor__objek_wisata__rating.") ";
                                if($row->floor__objek_wisata__rating == 5){
                                    for($i=1; $i <= 5; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                }elseif ($row->floor__objek_wisata__rating == 4) {
                                    for($i=1; $i <= 4; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                    for($j=1; $j <= 1; $j++){ 
                                        echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                                    }
                                }elseif ($row->floor__objek_wisata__rating == 3) {
                                    for($i=1; $i <= 3; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                    for($j=1; $j <= 2; $j++){ 
                                        echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                                    }
                                }elseif ($row->floor__objek_wisata__rating == 2) {
                                    for($i=1; $i <= 2; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                    for($j=1; $j <= 3; $j++){ 
                                        echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                                    }
                                }else {
                                    for($i=1; $i <= 1; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                    for($j=1; $j <= 4; $j++){ 
                                        echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                                    }
                                }
                                
                            ?>
                        </td>
                        <td>	
                        <i class="fa fa-comment" aria-hidden="true" style="padding-left: 10px;"></i> 
                        <?php 
                            $this->db->where('objek_wisata__post_id__objek_wisata__post',$row->id__objek_wisata__post);
                            $this->db->from('objek_wisata__rating_ulasan');
                            echo $this->db->count_all_results(); 
                        ?> 
                        Ulasan
                        </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
            </div>
            <?php }else{ echo ""; } ?>
        </div>
    </div>
    