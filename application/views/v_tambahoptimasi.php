<div class="row">
    <h2 align="center">Input Data Optimasi Aset</h2>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="<?php echo base_url();?>index.php/c_mahasiswa/addmahasiswa" enctype="multipart/form-data">
            <div class="form-group">
                <label for="akusisi">Akusisi</label>
                <select class="js-select2 form-control" id="akusisi" placeholder="Akuisi" name="akusisi">
                    <option> -- Pilih No. Asset -- </option>
                    <?php
                        foreach($akusisi as $result){?>
                        <!-- echo $result['nomor_aset'] -->
                            <option value="<?php echo $result['akusisi'] ?>"><?php echo $result['akusisi'] ?></option>
                        <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="kondisi">Kondisi</label>
                <input type="text" class="form-control" id="kondisi" placeholder="Kondisi" name="kondisi">
            </div>
            <div class="form-group">
                <label for="komponen_rusak">Komponen Rusak</label>
                <input type="text" class="form-control" id=komponen_rusak placeholder="Komponen Rusak" name="komponen_rusak">
            </div>
            <div class="form-group">
                <label for="jenis_pemeliharaan">Jenis Pemeliharaan </label>
                <input type="text" class="form-control" id="jenis_pemeliharaan" placeholder="Jenis Pemeliharaan" name="jenis_pemeliharaan">
            </div>
            <div class="form-group">
                <label for="foto_optimasi">Foto Optimasi</label>
                <input type="file" id="foto_optimasi" name="foto_optimasi">
            </div>
            <div class="form-group">
                <label for="estimasi_biaya">Estimasi Biaya</label>
                <input type="text" class="form-control" id="estimasi_biaya" placeholder="Estimasi Biaya" name="estimasi_biaya">
            </div>
            <input type="submit" class="btn btn-sm btn-primary" name="Save" value="Save">
        </form>
    </div>
</div>