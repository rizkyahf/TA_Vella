<div class="row">
    <div class="table-responsive col-md-8 col-md-offset-2">
    <h2 align="center">Daftar Aset</h2>
        <div class="col-md-3 col-md-offset-9">
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_asset/input">Input</a>
            <!-- <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_asset/print">Print</a> -->
        </div>
        <table id="table-filtered" class="table table-striped table-hover table-filtered" data-tablename="Daftar Inventarisasi Aset">
            <thead>
                <tr class="success">
                    <td>Nomor Aset</td>
                    <td>Nama</td>
                    <td>Jenis</td>
                    <td>Tanggal Pengadaan</td>
                    <td>Deskripsi Kegunaan</td>
                    <td>Tipe</td>
                    <td>Keterangan</td>
                    <td>Status</td>
                    <td>Lokasi</td>
                    <td>Penanggungjawab</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($inventarisasi_aset as $result){?>
                        <tr>
                            <td>
                                <?php echo $result['nomor_aset']; ?>
                            </td>
                            <td>
                                <?php echo $result['nama']; ?>
                            </td>
                            <td>
                                <?php echo $result['jenis']; ?>
                            </td>
                            <td>
                                <?php echo $result['tanggal_pengadaan']; ?>
                            </td>
                            <td>
                                <?php echo $result['deskripsi_kegunaan']; ?>
                            </td>
                            <td>
                                <?php echo $result['tipe']; ?>
                            </td>
                            <td>
                                <?php echo $result['keterangan']; ?>
                            </td>
                            <td>
                                <?php echo $result['status']; ?>
                            </td>
                            <td>
                                <?php echo $result['lokasi']; ?>
                            </td>
                            <td>
                                <?php echo $result['penanggungjawab']; ?>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-xs" href="<?php echo base_url(); ?>index.php/c_asset/delete/<?php echo $result['nomor_aset']; ?>"> Delete </a>
                                <a class="btn btn-danger btn-xs" href="<?php echo base_url(); ?>index.php/c_asset/edit/<?php echo $result['nomor_aset']; ?>"> Update </a>
                            </td>
                        </tr>
                    <?php        
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>