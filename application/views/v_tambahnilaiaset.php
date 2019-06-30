<div class="row">
    <h2 align="center">Input Data Mahasiswa</h2>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="<?php echo base_url();?>index.php/c_mahasiswa/addmahasiswa" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomor_aset">Nomor Aset</label>
                <input type="text" class="form-control" id="nomor_aset" placeholder="Nomor Aset" name="nomor_aset">
            </div>
            <div class="form-group">
                <label for="akusisi">Akusisi</label>
                <input type="text" class="form-control" id="akusisi" placeholder="Akuisi" name="akuisi">
            </div>
            <div class="form-group">
                <label for="akumulasi_depresiasi">Akumulasi Depresiasi</label>
                <input type="text" class="form-control" id="akumulasi_depresiasi" placeholder="Akumulasi Depresiasi" name="akumulasi_depresiasi">
            </div>
            <div class="form-group">
                <label for="nilai_akhir">Nilai Akhir </label>
                <input type="text" class="form-control" id="nilai_akhir" placeholder="Nilai Akhir" name="nilai_akhir">
            </div>
            <div class="form-group">
                <label for="BalShTm">BalShTm</label>
                <input type="text" class="form-control" id="BalShTm" placeholder="BalShTm" name="BalShTm">
            </div>
            <div class="form-group">
                <label for="ApCacct">ApCacct</label>
                <input type="text" class="form-control" id="ApCacct" placeholder="ApCacct" name="ApCacct">
            </div>
            <input type="submit" class="btn btn-sm" name="Save" value="Save">
        </form>
    </div>
</div>