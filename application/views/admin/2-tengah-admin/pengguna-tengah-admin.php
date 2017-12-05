<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text" style="width: 100%;">
            <table id="example" class="mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th><center>-</center></th>
                        <th class="mdl-data-table__cell--non-numeric" style="width:700px;">NAMA</th>
                        <th class="mdl-data-table__cell--non-numeric">EMAIL</th>
                        <th class="mdl-data-table__cell--non-numeric">JENIS KELAMIN</th>
                        <th>DAFTAR</th>
                        <th>TERAKHIR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengguna_data as $row) { ?>
                    <tr>
                        <td id="photo-profil" class="mdl-data-table__cell--non-numeric"><center><img src="<?php echo $row->picture_url; ?>"></center></td>
                        <td class="mdl-data-table__cell--non-numeric"><a style="text-decoration:none; color:blue;" href="<?php echo $row->profile_url; ?>"><?php echo $row->first_name." ".$row->last_name;  ?></a></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $row->email; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php if($row->gender == "male"){ echo "Laki-laki"; }else{ echo "Perempuan"; } ?></td>
                        <td id="tanggal"><?php echo $row->created; ?></td>
                        <td id="tanggal"><?php echo $row->modified; ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>