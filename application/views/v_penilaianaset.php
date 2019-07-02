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
                        </tr>
                    <?php        
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>