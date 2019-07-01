<div class="row">
    <div class="table-responsive col-md-8 col-md-offset-2">
    <h2 align="center">Daftar Aset</h2>
        <div class="col-md-3 col-md-offset-9">
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_asset/input">Input</a>
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_asset/print">Print</a>
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>3000753</td>
                    <td>V_BLOCK</td>
                    <td>3000</td>
                    <td>27072012</td>
                    <td>Block & Clamp UP V</td>
                    <td>LPI-1688-1</td>
                    <td>ASDFG</td>
                    <td>CIR</td>
                    <td>Lemari 4-c</td>
                    <td>IN STORE</td>
                </tr>
                <tr>
                    <td>300761</td>
                    <td>HEIGHT GAUGE</td>
                    <td>3000</td>
                    <td>27072012</td>
                    <td>Trimos Mini Vertical Height</td>
                    <td>LPI-0621</td>
                    <td>QWERT</td>
                    <td>VALID</td>
                    <td>IN STORE</td>
                    <td>OUT CELL SHAFT WA</td>
                </tr>
                <tr>
                    <td>300772</td>
                    <td>HOLTEST</td>
                    <td>3000</td>
                    <td>27072012</td>
                    <td>Tesa White Set 16 Pairs, 1 set</td>
                    <td>LPI-1038</td>
                    <td>lkjh</td>
                    <td>VALID</td>
                    <td>R29-A</td>
                    <td>OUT CELL COUPLING</td>
                </tr>
                <!-- <?php
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
                                <?php echo $result['[penanggungjawab]']; ?>
                            </td>
                        </tr>
                    <?php        
                    }
                ?> -->
            </tbody>
        </table>
    </div>
</div>