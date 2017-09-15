<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text">
            <table class="mdl-data-table mdl-js-data-table">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">Objek Wisata</th>
                        <th>Average</th>
                        <th>Floor</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sentiment_analysis as $row) { ?>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric" style="width: 697px;"><a href="<?php echo base_url()."index.php/belakang/sentiment_analysis_objek_wisata/".$row->id__objek_wisata__post ?>" style="text-decoration:none;"><?php echo $row->nama__objek_wisata__post ?></a></td>
                        <td><?php  ?></td>
                        <td><?php  ?></td>
                        <td></td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>