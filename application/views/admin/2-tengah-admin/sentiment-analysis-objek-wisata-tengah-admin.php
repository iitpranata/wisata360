<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text" style="width: 100%;">
            <h4>Preprocessing</h4>
            <table id="example" class="mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">TOKENIZATION</th>
                        <th class="mdl-data-table__cell--non-numeric">STOPWARDS</th>
                        <th class="mdl-data-table__cell--non-numeric">STEAMMING</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sentiment_analysis as $row) { ?>
                    <tr>
                        
                        <td class="mdl-data-table__cell--non-numeric" style="white-space:normal;"> <?php echo $row->tokenized__objek_wisata__ulasan ?></td>
                        <td class="mdl-data-table__cell--non-numeric" style="white-space:normal;"> <?php echo $row->filtered__objek_wisata__ulasan ?></td>
                        <td class="mdl-data-table__cell--non-numeric" style="white-space:normal;"> <?php echo $row->stemmed__objek_wisata__ulasan ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
            <h4>Pembobotan</h4>
            
        </div>
    </div>