<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__supporting-text">
            <table class="mdl-data-table mdl-js-data-table">
                <thead>
                    <tr>
                        <th><center>-</center></th>
                        <th class="mdl-data-table__cell--non-numeric">Nama</th>
                        <th class="mdl-data-table__cell--non-numeric">Email</th>
                        <th class="mdl-data-table__cell--non-numeric">Jenis Kelamin</th>
                        <th>Daftar</th>
                        <th>Terakhir Login</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengguna_data as $row) { ?>
                    <tr>
                        <td><center><img src="<?php echo $row->picture_url; ?>"></center></td>
                        <td class="mdl-data-table__cell--non-numeric"><a style="text-decoration:none;" href="<?php echo $row->profile_url; ?>"><?php echo $row->first_name." ".$row->last_name;  ?></a></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $row->email; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php if($row->gender == "male"){ echo "Laki-laki"; }else{ echo "Perempuan"; } ?></td>
                        <td><?php echo $row->created; ?></td>
                        <td><?php echo $row->modified; ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>