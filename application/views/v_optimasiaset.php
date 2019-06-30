<div class="row">
    <div class="table-responsive col-md-8 col-md-offset-2">
    <h2 align="center">Optimasi Aset</h2>
        <div class="col-md-3 col-md-offset-9">
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_optimasiaset/input">Input</a>
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_optimasiaset/print">Print</a>
        </div>
        <table class="table table-striped table-hover table-filtered">
            <thead>
                <tr class="success">
                    <td>
                        Acquisition
                    </td>
                    <td>
                        Condition
                    </td>
                    <td>
                        Broken Component
                    </td>
                    <td>
                        Type of Maintenance
                    </td>
                    <td>
                        Photo Optimization
                    </td>
                    <td>
                        Estimated Cost
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>480810</td>
                    <td>Broken</td>
                    <td>Lamp</td>
                    <td>Penggantian lampu</td>
                    <td><img src="<?php echo base_url(); ?>asset/upload/maintenance.png" width="100px"> </td>
                    <td>1400000</td>
                </tr>
                <tr>
                    <td>111940</td>
                    <td>Broken</td>
                    <td>Body keropos</td>
                    <td>Dempul bagian keropos</td>
                    <td><img src="<?php echo base_url(); ?>asset/upload/maintenance.png" width="100px"> </td>
                    <td>1250000</td>
                </tr>
                <tr>
                    <td>230390</td>
                    <td>Broken</td>
                    <td>Kain penutup</td>
                    <td>Penggantian kain penutup</td>
                    <td><img src="<?php echo base_url(); ?>asset/upload/maintenance.png" width="100px"> </td>
                    <td>800000</td>
                </tr>
                <!-- <?php
                    foreach($optimasi_aset as $result){?>
                        <tr>
                            <td>
                                <?php echo $result['akusisi']; ?>
                            </td>
                            <td>
                                <?php echo $result['kondisi']; ?>
                            </td>
                            <td>
                                <?php echo $result['komponen_rusak']; ?>
                            </td>
                            <td>
                                <?php echo $result['jenis_pemeliharaan']; ?>
                            </td>
                            <td>
                                <?php echo $result['foto_optimasi']; ?>
                            </td>
                            <td>
                                <?php echo $result['estimasi_biaya']; ?>
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