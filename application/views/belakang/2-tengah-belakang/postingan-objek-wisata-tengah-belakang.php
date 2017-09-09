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
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($postingan_data as $row) { ?>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric" style="width: 500px;"><?php echo $row->nama__objek_wisata__post ?></td>
                        <td style="color : green;"><?php echo "POSITIF"?></td>
                        <td> 
                            <?php
                                echo $row->floor__objek_wisata__rating;
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
                        <td><?php echo $row->tanggal__objek_wisata__post ?></td>
                        <td><?php echo $row->kategori__objek_wisata__post ?></td>
                        <td><a class="aksi" style="text-decoration: none;" target="blank_" href="<?php echo base_url()."index.php/depan/objek_wisata/".$row->id__objek_wisata__post ?>">Lihat </a>|
                            <a class="aksi" style="text-decoration: none;" target="blank_" href="<?php echo base_url()."index.php/belakang/edit_objek_wisata/".$row->id__objek_wisata__post?>"> Edit </a>|
                            <a class="aksi" style="text-decoration: none;" href=""> Hapus</a>
                        </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>