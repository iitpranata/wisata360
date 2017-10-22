<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text">
            <h4>1. Preprocessing</h4>
            <table class="mdl-data-table mdl-js-data-table">
                <thead>
                    <tr>
                        
                        <th class="mdl-data-table__cell--non-numeric">Tokenization</th>
                        <th class="mdl-data-table__cell--non-numeric">Filter</th>
                        <th class="mdl-data-table__cell--non-numeric">Stemmed</th>
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
            <h4>2. Pembobotan</h4>
            
        </div>
    </div>