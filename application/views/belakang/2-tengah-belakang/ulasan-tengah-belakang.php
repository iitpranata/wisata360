<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text"> 
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" href="<?php echo base_url() ?>index.php/belakang/tambah_objek_wisata" target="blank_">
                    <i class="material-icons">add</i> Objek Wisata Baru
            </a>
        </div>
        <div class="mdl-card__supporting-text">
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">Objek Wisata</th>
                        <th>Ulasan</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ulasan_data as $row) { ?>
                    <tr>
                    <a>
                        <td class="mdl-data-table__cell--non-numeric" style="width: 500px;"><?php echo $row->nama__objek_wisata__post ?></td>
                        <td style="color : green;"><?php echo "POSITIF"?></td>
                        <td> 
                            <?php
                                echo $row->jumlah_hasil_rating__objek_wisata__post;
                                if($row->jumlah_hasil_rating__objek_wisata__post == 5){
                                    for($i=1; $i <= 5; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                }elseif ($row->jumlah_hasil_rating__objek_wisata__post == 4) {
                                    for($i=1; $i <= 4; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                    for($j=1; $j <= 1; $j++){ 
                                        echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                                    }
                                }elseif ($row->jumlah_hasil_rating__objek_wisata__post == 3) {
                                    for($i=1; $i <= 3; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                    for($j=1; $j <= 2; $j++){ 
                                        echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                                    }
                                }elseif ($row->jumlah_hasil_rating__objek_wisata__post == 2) {
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
                        </a>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>