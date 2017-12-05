<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
    <div class="mdl-card__supporting-text"  style="width: 100%;">
        <table id="example" class="mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric"  style="width: 697px;">Objek Wisata</th>
                    <th class="mdl-data-table__cell--non-numeric">Nilai</th>
                    <th class="mdl-data-table__cell--non-numeric">Ulasan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sentiment_analysis as $row) { ?>
                <tr>
                    <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo base_url()."index.php/admin/sentiment_analysis_objek_wisata/".$row->id__objek_wisata__post ?>" style="text-decoration:none;"><?php echo $row->nama__objek_wisata__post ?></a></td>
                    <td><?php echo "33"?></td>
                    <td style="color : green;"><?php echo "POSITIF"?></td>
                <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
