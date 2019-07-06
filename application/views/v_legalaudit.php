<div class="row">
    <div class="table-responsive col-md-8 col-md-offset-2">
    <h2 align="center">Daftar Aset</h2>
        <div class="col-md-3 col-md-offset-9">
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_legalaudit/input">Input</a>
            <!-- <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_legalaudit/print">Print</a> -->
        </div>
        <table class="table table-striped table-hover table-filtered">
            <thead>
                <tr class="success">
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
            </thead>
            <tbody>
                <?php
                    foreach($legalaudit as $result){?>
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
                                <a data-idsertifikat="<?php echo $result['nomor_dokumen'];?> " onClick="showModalSertifikat(<?php echo $result['nomor_dokumen'];?>);">
                                    <?php echo $result['foto_aset']; ?>
                                </a>
                            </td>
                        </tr>
                    <?php        
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>