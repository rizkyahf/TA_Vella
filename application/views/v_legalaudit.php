<div class="row">
    <div class="table-responsive col-md-8 col-md-offset-2">
    <h2 align="center">Daftar Aset</h2>
        <div class="col-md-3 col-md-offset-9">
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_legalaudit/inputlegal">Input</a>
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_legalaudit/print">Print</a>
        </div>
        <table class="table table-striped table-hover table-filtered">
            <tr>
                <td>
                    Asset
                </td>
                <td>
                    Document Asset
                </td>
                <td>
                    Cap Date
                </td>
                <td>
                    Sertificate
                </td>
            </tr>
            <tr>
                <td>3000753</td>
                <td>Sertikat</td>
                <td>27072012</td>
                <td>LPI-1688-1</td>
            </tr>
            <tr>
                <td>300761</td>
                <td>Kartu Garansi</td>
                <td>27072012</td>
                <td>LPI-0621</td>
            </tr>
            <tr>
                <td>300772</td>
                <td>Kartu Kepemilikan</td>
                <td>27072012</td>
                <td>LPI-1038</td>
            </tr>
            <!-- <?php
                foreach($legal_audit as $result){?>
                    <tr>
                        <td>
                            <?php echo $result['nomor_aset']; ?>
                        </td>
                        <td>
                            <?php echo $result['nomor_dokumen']; ?>
                        </td>
                        <td>
                            <?php echo $result['tanggal_penetapan']; ?>
                        </td>
                        <td>
                            <?php echo $result['foto_aset']; ?>
                        </td>
                        <!-- <td>
                            <a href="template.php?page=delete&id=<?php echo $row['nim'];?>">Delete</a>
                        </td>
                        <td>
                            <a href="template.php?page=update&id=<?php echo $row['nim'];?>">Update</a>
                        </td>
                    </tr> -->
                <?php        
                }
            ?> -->
        </table>
    </div>
</div>