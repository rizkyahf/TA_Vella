<html>
    <head>
        <title>UTC Aerospace System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/datatable/datatables.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/datatable/datatables.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/datatable/DataTables-1.10.18/css/jquery.dataTables.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/datatable/DataTables-1.10.18/js/jquery.dataTables.js"></script>
        <style>
            p{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            h1{
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                padding-bottom: 1px;
                padding-top:1px;
                font-size: 63px;
                margin-top: 5%;
            }
            @media(max-width:767px){
                h1{font-size: 18px}
                h2{font-size: 16px}
                
            }
            tr.button{
                font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            /* tr.button td:nth-child(2){
                background-color: #73C2BE;
            } */
            .bordered{
                border: solid 1px red;
            }
            .active {
                background-color:#C9F0FF;
            }
            img.photo_list {
                width:100px !important;

            }
            body{
                background-color: #5588a3;
            }
            .header{
                background-color: #145374;
                color: whitesmoke;
            }
            .navbar div{
                background-color: #153669;
                padding: 1%;
            }
            .navbar div a{
                color: whitesmoke;
            }
            .content{
                background-color: #a4c5f8;
                padding:3%
            }
        </style>
    </head>
    <body>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-md-12 col-xs-12" align="center">
                    <h1 align="center">UTC Aerospace System</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row navbar"  style="margin:0px">
                <div class="col-md-2" align="center" style="border-radius: 15px">
                    <a href="<?php echo base_url();?>">Inventarisasi Aset</a>
                </div>
                <div class="col-md-2" align="center" style="border-radius: 15px">
                    <a href="<?php echo base_url();?>index.php/c_legalaudit/display">Legal Audit</a>
                </div>
                <div class="col-md-2" align="center" style="border-radius: 15px">
                    <a href="<?php echo base_url();?>index.php/c_penilaianaset/display">Penilaian Aset</a>
                </div>
                <div class="col-md-2" align="center" style="border-radius: 15px">
                    <a href="<?php echo base_url();?>index.php/c_optimasiaset/display">Optimasi Aset</a>
                </div>
                <div class="col-md-2" align="center" style="border-radius: 15px">
                    <a href="<?php echo base_url();?>index.php/c_user/logout">Logout</a>
                </div>
                </div>
            </div>
            <div class="row content">
                <?php echo $content;?>
            </div>
        </div>
        <script src="<?php echo base_url();?>asset/bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.js"></script>
        <script scr="<?php echo base_url(); ?>asset/datatable/datatables.js"></script>
        <script type="text/javascript"> 
            $(document).ready( function () {
                $('#table-filtered').DataTable();
            });
        </script>
    </body>
    <footer class="text-center">
        Copyright 2019
    </footer>
</html>