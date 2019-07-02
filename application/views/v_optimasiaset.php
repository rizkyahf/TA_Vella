<div class="row">
    <div class="table-responsive col-md-8 col-md-offset-2">
    <h2 align="center">Optimasi Aset</h2>
        <div class="col-md-3 col-md-offset-9">
            <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_optimasiaset/input">Input</a>
            <!-- <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_optimasiaset/print">Print</a> -->
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
                <?php
                    foreach($optimasiaset as $result){?>
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
                                <?php 
                                    if($result['foto_optimasi'] == NULL) {$foto = "maintenance.png";}
                                    else {$foto = $result['foto_optimasi'];}?>
                                <img src="<?php echo base_url(); ?>asset/upload/<?php echo $foto; ?>" width="100px">
                            </td>
                            <td>
                                <?php echo $result['estimasi_biaya']; ?>
                            </td>
                        </tr>
                    <?php        
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>