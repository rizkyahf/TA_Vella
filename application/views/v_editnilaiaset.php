<div class="row">
    <h2 align="center">Edit Data Penilaian Aset</h2>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="<?php echo base_url();?>index.php/c_penilaianaset/update" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomor_aset">Nomor Aset</label>
                <select class="js-select2 form-control" id="nomor_aset" placeholder="Nomor Aset" name="nomor_aset">
                    <option> -- Pilih No. Asset -- </option>
                    <?php
                        foreach($nomor_aset as $result){?>
                        <!-- echo $result['nomor_aset'] -->
                            <option value="<?php echo $result['nomor_aset'] ?>" <?php if($result['nomor_aset'] == $nilaiaset['nomor_aset']) echo "selected";?>><?php echo $result['nomor_aset'] ?></option>
                        <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="akusisi">Akusisi</label>
                <input type="text" class="form-control" id="akusisi" placeholder="Akuisi" name="akusisi" value="<?php echo $nilaiaset['akusisi'];?>">
                <input type="hidden" class="form-control" id="akusisi_old" placeholder="Akuisi" name="akusisi_old" value="<?php echo $nilaiaset['akusisi'];?>">
            </div>
            <div class="form-group">
                <label for="akumulasi_depresiasi">Akumulasi Depresiasi</label>
                <input type="text" class="form-control" id="akumulasi_depresiasi" placeholder="Akumulasi Depresiasi" name="akumulasi_depresiasi" value="<?php echo $nilaiaset['akumulasi_depresiasi'];?>">
            </div>
            <div class="form-group">
                <label for="nilai_akhir">Nilai Akhir </label>
                <input type="text" class="form-control" id="nilai_akhir" placeholder="Nilai Akhir" name="nilai_akhir" value="<?php echo $nilaiaset['nilai_akhir'];?>">
            </div>
            <div class="form-group">
                <label for="BalShTm">BalShTm</label>
                <input type="text" class="form-control" id="BalShTm" placeholder="BalShTm" name="BalShTm" value="<?php echo $nilaiaset['BalShTm'];?>">
            </div>
            <div class="form-group">
                <label for="ApCacct">ApCacct</label>
                <input type="text" class="form-control" id="ApCacct" placeholder="ApCacct" name="ApCacct" value="<?php echo $nilaiaset['ApCacct'];?>">
            </div>
            <input type="submit" class="btn btn-sm btn-primary" name="simpan" value="Save">
        </form>
    </div>
</div>