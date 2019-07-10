<div class="row">
    <div class="table-responsive col-md-8 col-md-offset-2">
    <h2 align="center">Penilaian Aset</h2>
        <div class="col-md-3 col-md-offset-9">
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_penilaianaset/input">Input</a>
            <!-- <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_penilaianaset/searchmahasiswa">Print</a> -->
        </div>
        <table class="table table-striped table-hover table-filtered">
            <thead>
                <tr class="success">
                    <td>
                        Asset
                    </td>
                    <td>
                        Acquisition
                    </td>
                    <td>
                        Accumulated Depreciation
                    </td>
                    <td>
                        Final Score
                    </td>
                    <td>
                        BalShTm
                    </td>
                    <td>
                        ApCacct
                    </td>
                    <td>
                        Action
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($penilaianaset as $result){?>
                        <tr>
                            <td>
                                <?php echo $result['nomor_aset']; ?>
                            </td>
                            <td>
                                <?php echo $result['akusisi']; ?>
                            </td>
                            <td>
                                <?php echo $result['akumulasi_depresiasi']; ?>
                            </td>
                            <td>
                                <?php echo $result['nilai_akhir']; ?>
                            </td>
                            <td>
                                <?php echo $result['BalShTm']; ?>
                            </td>
                            <td>
                                <?php echo $result['ApCacct']; ?>
                            </td>
                            <td>
                                <a class="btn btn-success btn-xs" href="<?php echo base_url(); ?>index.php/c_penilaianaset/edit/<?php echo $result['akusisi']; ?>"> Update </a>
                                <a class="btn btn-danger btn-xs"  href="<?php echo base_url(); ?>index.php/c_penilaianaset/delete/<?php echo $result['akusisi']; ?>"> Delete </a>
                            </td>
                        </tr>
                    <?php        
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>