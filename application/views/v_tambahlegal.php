<div class="row">
    <h2 align="center">Input Legal Audit</h2>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="<?php echo base_url();?>index.php/c_mahasiswa/addmahasiswa" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomor_aset">Nomor Aset</label>
                <!-- <input type="text" class="form-control" id="nomor_aset" placeholder="Nomor Aset" name="nomor_aset"> -->
                <select class="js-example-basic-single form-control" id="nomor_aset" placeholder="Nomor Aset" name="nomor_aset">
                    <?php
                        foreach($nomor_aset as $result){?>
                            <option value="<?php echo $result['nomor_aset'] ?>">
                        <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nomor_dokumen">Nomor Dokumen</label>
                <input type="text" class="form-control" id="nomor_dokumen" placeholder="Nomor Dokumen" name="nomor_dokumen">
            </div>
            <div class="form-group">
                <label for="tanggal_penetapan">Tanggal Penetapan</label>
                <input type="text" class="form-control" id="tanggal_penetapan" placeholder="Tanggal Penetapan" name="taggal_penetapan">
            </div>
            <div class="form-group">
                <label for="foto_aset">Foto Aset</label>
                <input type="file" id="foto_aset" name="foto_aset">
            </div>
            <input type="submit" class="btn btn-sm" name="Save" value="Save">
        </form>
    </div>
</div>