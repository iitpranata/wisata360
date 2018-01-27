<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
    <div class="mdl-card__supporting-text"  style="width: 100%;">
        <table id="example" class="mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric"  style="width: 697px;">OBJEK WISATA</th>
                    <th class="mdl-data-table__cell--non-numeric">NILAI</th>
                    <th class="mdl-data-table__cell--non-numeric">ULASAN</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sentiment_analysis as $row) { ?>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo base_url()."index.php/admin/sentiment_analysis_objek_wisata/".$row->id__objek_wisata__post ?>" style="text-decoration:none;"><?php echo $row->nama__objek_wisata__post ?></a></td>
                    <td><?php 
                        $query = $this->db->query("SELECT `ulasan_objek_wisata__ulasan`, COUNT(`ulasan_objek_wisata__ulasan`) AS `value_occurrence` FROM `objek_wisata__ulasan` WHERE `objek_wisata__post_id__objek_wisata__post` = $row->id__objek_wisata__post GROUP BY `ulasan_objek_wisata__ulasan` ORDER BY `value_occurrence` DESC LIMIT 1");
                        $rows = $query->row();
                        echo $rows->value_occurrence;
                    ?></td>
                    <?php
                        $query = $this->db->query("SELECT `ulasan_objek_wisata__ulasan`, COUNT(`ulasan_objek_wisata__ulasan`) AS `value_occurrence` FROM `objek_wisata__ulasan` WHERE `objek_wisata__post_id__objek_wisata__post` = $row->id__objek_wisata__post GROUP BY `ulasan_objek_wisata__ulasan` ORDER BY `value_occurrence` DESC LIMIT 1");
                        $rows = $query->row();
                        if($rows->ulasan_objek_wisata__ulasan == "1"){
                            echo '<td style="color : green;">POSITIF</td>';
                        }else{
                            echo '<td style="color : red;">NEGATIF</td>';
                        }
                    ?>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
