<div class="row">
    <div class="table-responsive col-md-8 col-md-offset-2">
    <h2 align="center">Penilaian Aset</h2>
        <div class="col-md-3 col-md-offset-9">
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_penilaianaset/input">Input</a>
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_penilaianaset/searchmahasiswa">Print</a>
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
                <tr>
                    <td>2000008</td>
                    <td>480810</td>
                    <td>334613.87</td>
                    <td>146196.13</td>
                    <td>140</td>
                    <td>153000</td>
                </tr>
                <tr>
                    <td>2000009</td>
                    <td>111940</td>
                    <td>77903.29</td>
                    <td>34036.71</td>
                    <td>140</td>
                    <td>153000</td>
                </tr>
                <tr>
                    <td>2000010</td>
                    <td>230390</td>
                    <td>160337.13</td>
                    <td>70052.87</td>
                    <td>140</td>
                    <td>153000</td>
                </tr>
                <!-- <?php
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
                            <!-- <td>
                                <a href="template.php?page=delete&id=<?php echo $row['nim'];?>">Delete</a>
                            </td>
                            <td>
                                <a href="template.php?page=update&id=<?php echo $row['nim'];?>">Update</a>
                            </td> -->
                        </tr>
                    <?php        
                    }
                ?> -->
            </tbody>
        </table>
    </div>
</div>