<div class="row">
    <h2 align="center">Edit Data Aset</h2>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="<?php echo base_url();?>index.php/c_asset/update" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomor_aset">Nomor Aset</label>
                <input type="text" class="form-control" id="nomor_aset" placeholder="Nomor Aset" name="nomor_aset" value="<?php echo $asset['nomor_aset']; ?>">
                <input type="hidden" class="form-control" id="nomor_aset_old" placeholder="Nomor Aset" name="nomor_aset_old" value="<?php echo $asset['nomor_aset']; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Aset" name="nama" value="<?php echo $asset['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="text" class="form-control" id="jenis" placeholder="Jenis Aset" name="jenis" value="<?php echo $asset['jenis']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_pengadaan">Tanggal Pengadaan</label>
                <input type="text" class="form-control datepicker" id="tanggal_pengadaan" placeholder="Tanggal Pengadaan (yyyy-mm-dd)" name="tanggal_pengadaan" value="<?php echo $asset['tanggal_pengadaan']; ?>">
            </div>
            <div class="form-group">
                <label for="deskripsi_kegunaan">Deskripsi Kegunaan</label>
                <input type="text" class="form-control" id="deskripsi_kegunaan" placeholder="Deskripsi Kegunaan" name="deskripsi_kegunaan" value="<?php echo $asset['deskripsi_kegunaan']; ?>">
            </div>
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <input type="text" class="form-control" id="tipe" placeholder="Tipe Aset" name="tipe" value="<?php echo $asset['tipe']; ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" placeholder="Keterangan Aset" name="keterangan" value="<?php echo $asset['keterangan']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis">Status</label>
                <input type="text" class="form-control" id="status" placeholder="Status Aset" name="status" value="<?php echo $asset['status']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" placeholder="Lokasi Aset" name="lokasi" value="<?php echo $asset['lokasi']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis">Penangungjawab</label>
                <input type="text" class="form-control" id="status" placeholder="Penanggungjawab Aset" name="penanggungjawab" value="<?php echo $asset['penanggungjawab']; ?>">
            </div>
            <input type="submit" class="btn btn-sm btn-primary" name="simpan" value="Save">
        </form>
    </div>
</div>