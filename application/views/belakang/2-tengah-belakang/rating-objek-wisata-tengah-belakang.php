<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text">
            <table class="mdl-data-table mdl-js-data-table">
                <thead>
                    <tr>
                        <th>Tanggal</tg>
                        <th class="mdl-data-table__cell--non-numeric">Nama</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rating_objek_wisata as $row) { ?>
                    <tr>
                        <td> <?php echo $row->tanggal__objek_wisata__rating_ulasan ?></td>
                        <td class="mdl-data-table__cell--non-numeric" style="white-space:normal;width: 480px;"><?php echo $row->objek_wisata__pengguna_id__objek_wisata__pengguna ?></td>
                        <td style="width: 480px;"> 
                            <?php
                                if($row->rating__objek_wisata__rating_ulasan == 5){
                                    for($i=1; $i <= 5; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                }elseif ($row->rating__objek_wisata__rating_ulasan == 4) {
                                    for($i=1; $i <= 4; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                    for($j=1; $j <= 1; $j++){ 
                                        echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                                    }
                                }elseif ($row->rating__objek_wisata__rating_ulasan == 3) {
                                    for($i=1; $i <= 3; $i++){
                                        echo '<i class="material-icons" style="font-size : 10px;">star</i>';
                                    }
                                    for($j=1; $j <= 2; $j++){ 
                                        echo '<i class="material-icons" style="font-size : 10px;">star_border</i>';
                                    }
                                }elseif ($row->rating__objek_wisata__rating_ulasan == 2) {
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

                                echo " (".$row->rating__objek_wisata__rating_ulasan.")";
                            ?>
                        </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>