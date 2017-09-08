<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col">
        <?php echo form_open_multipart('index.php/Belakang_edit/objek_wisata'); ?>
            <?php foreach ($objek_wisata as $row) { ?>
            <?php echo form_hidden('id_objekwisata', $row->id__objek_wisata__post)?>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <?php $nama=array( 'class'=>'mdl-textfield__input', 'type' => 'text', 'id' => 'nama_wisata'); echo form_input('nama_wisata', $row->nama__objek_wisata__post, $nama); $label_nama = array('class' => 'mdl-textfield__label'); echo form_label('Nama','nama_wisata', $label_nama); ?></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <?php $alamat=array( 'class'=>'mdl-textfield__input', 'type' => 'text', 'id' => 'alamat_wisata'); echo form_input('alamat_wisata', $row->alamat__objek_wisata__post, $alamat); $label_alamat = array('class' => 'mdl-textfield__label'); echo form_label('Alamat','alamat_wisata', $label_alamat); ?></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
            <input class="mdl-textfield__input" name="kategori_wisata" type="text" id="kategori_wisata" value="<?php echo $row->kategori__objek_wisata__post?>" readonly tabIndex="-1">
            <label for="kategori_wisata" class="mdl-textfield__label">Kategori</label>
            <ul for="kategori_wisata" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                <li class="mdl-menu__item">Buatan Manusia</li>
                <li class="mdl-menu__item">Budaya</li>
                <li class="mdl-menu__item">Alam</li>
            </ul>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
            <?php $keterangan=array( 'class'=>'mdl-textfield__input', 'type' => 'text', 'row' => '9', 'id' => 'keterangan_wisata'); echo form_textarea('keterangan_wisata', $row->keterangan__objek_wisata__post, $keterangan); $label_keterangan = array('class' => 'mdl-textfield__label'); echo form_label('Keterangan','keterangan_wisata', $label_keterangan); ?></div>
        <div class="file_input_div" style="margin-left: 0px; margin-right: 0px;">
                <div class="file_input">
                <label class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect">
                    <i class="material-icons">attach_file</i>
                    <?php $thumbnail = array('id' => 'file_input_file', 'class' => 'none', 'type' => 'file', 'name' => 'thumbnail'); echo form_input($thumbnail) ?>
                </label>
                </div>
                <div id="file_input_text_div" class="mdl-textfield mdl-js-textfield textfield-demo">
                <input class="file_input_text mdl-textfield__input" placeholder="<?php 
                    if($row->thumbnail__objek_wisata__post == null)
                    {echo "Upload Thumbnail";
                        }else{echo $row->thumbnail__objek_wisata__post;}
                ?>" type="text" disabled readonly id="file_input_text" />
                <label class="mdl-textfield__label" for="file_input_text"></label>  
                </div>
            </div>
        </div>
    <div class="mdl-cell mdl-cell--6-col">
        <div class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <?php $lat=array( 'class'=>'mdl-textfield__input', 'type' => 'text', 'id' => 'lat_wisata'); echo form_input('lat_wisata', '', $lat); $label_lat = array('class' => 'mdl-textfield__label'); echo form_label('Latitude','lat_wisata', $label_lat); ?></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <?php $lng=array( 'class'=>'mdl-textfield__input', 'type' => 'text', 'id' => 'lng_wisata'); echo form_input('lng_wisata', '', $lng); $label_lng = array('class' => 'mdl-textfield__label'); echo form_label('Longitude','lng_wisata', $label_lng); ?></div>
        </div>
        <div class="mdl-cell mdl-cell--12-col">
            <label for="fotovr" class="custom-file-upload"> <i class="fa fa-cloud-upload"></i> Upload Wisata</label>
            <?php $foto=array( 'type'=>'file', 'id' => 'fotovr', 'name' => 'fotovr'); echo form_input($foto); ?></div>
        <div class="mdl-cell mdl-cell--12-col">
            <img id="foto360" src="<?php echo base_url()."assets/depan/gambar/" . $row->foto_virtual_reality__objek_wisata__post?>" alt="" style='width:100%;' border="0"/>
        </div>
    </div>
    <?php } ?>
    <div class="mdl-cell mdl-cell--9-col"></div>
    <div class="mdl-cell mdl-cell--3-col">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"> <i class="material-icons">chevron_left</i> Batal</button>
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="margin-left: 5px;">Simpan <i class="material-icons">chevron_right</i>
        </button>
    </div>
    <?php echo form_close(); ?>
</div>
</div>