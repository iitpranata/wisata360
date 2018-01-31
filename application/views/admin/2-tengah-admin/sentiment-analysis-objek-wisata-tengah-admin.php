<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text" style="width: 100%;">
            <table id="example" class="mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">NO</th>
                        <th class="mdl-data-table__cell--non-numeric">TOKENIZATION</th>
                        <th class="mdl-data-table__cell--non-numeric">STOPWARDS</th>
                        <th class="mdl-data-table__cell--non-numeric">STEAMMING</th>
                        <th class="mdl-data-table__cell--non-numeric">ULASAN</th>
                        <th class="mdl-data-table__cell--non-numeric">-</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($sentiment_analysis as $row) { ?>
                    <tr>
                        
                        <td class="mdl-data-table__cell--non-numeric" style="white-space:normal;"> <?php echo $no; ?></td>
                        <?php $no++; ?>
                        <td class="mdl-data-table__cell--non-numeric" style="white-space:normal;"> <?php echo $row->tokenized__objek_wisata__ulasan ?></td>
                        <td class="mdl-data-table__cell--non-numeric" style="white-space:normal;"> <?php echo $row->filtered__objek_wisata__ulasan ?></td>
                        <td class="mdl-data-table__cell--non-numeric" style="white-space:normal;"> <?php echo $row->stemmed__objek_wisata__ulasan ?></td>
                        <td class="mdl-data-table__cell--non-numeric">
                        <?php echo form_open('admin_edit/ulasan'); ?>
                            <?php
                                echo form_hidden('id_ulasan', $row->id__objek_wisata__ulasan);
                            ?>
                            <select name="ulasan">
                                <option <?php if($row->ulasan_objek_wisata__ulasan == 1){echo "selected";}?> value="1">POSITIF</option>
                                <option <?php if($row->ulasan_objek_wisata__ulasan == 0){echo "selected";}?> value="0">NEGATIF</option>
                                <option <?php if($row->ulasan_objek_wisata__ulasan == NULL){echo "selected";}?> value=" ">NETRAL</option>
                            </select>
                        </td>
                        <td>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="margin-left: 5px;">Simpan
                        </button>
                        </td>
                        <?php echo form_close(); ?>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    