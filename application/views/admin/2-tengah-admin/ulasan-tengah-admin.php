<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text" style="width: 100%;">
            <table id="example" class="mdl-data-table mdl-js-data-table"  cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric"  style="width: 718px;">OBJEK WISATA</th>
                        <th>ULASAN</th>
                        <th>RATING</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ulasan_data as $row) { ?>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo base_url()."admin/ulasan_objek_wisata/".$row->id__objek_wisata__post ?>" style="text-decoration:none;"><?php echo $row->nama__objek_wisata__post ?></a></td>
                        <?php
                            $query = $this->db->query("SELECT `ulasan_objek_wisata__ulasan`, COUNT(`ulasan_objek_wisata__ulasan`) AS `value_occurrence` FROM `objek_wisata__ulasan` WHERE `objek_wisata__post_id__objek_wisata__post` = $row->id__objek_wisata__post GROUP BY `ulasan_objek_wisata__ulasan` ORDER BY `value_occurrence` DESC LIMIT 1");
                            $rows = $query->row();
                            if($rows->ulasan_objek_wisata__ulasan == "1"){
                                echo '<td style="color : green;">POSITIF</td>';
                            }else{
                                echo '<td style="color : red;">NEGATIF</td>';
                            }
                        ?>
                        <td> 
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
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>