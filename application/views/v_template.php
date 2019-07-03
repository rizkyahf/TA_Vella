<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>UTC Aerospace System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/bootstrap/datatable/datatables.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/bootstrap/datatable/buttons.datatables.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
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
                    <a href="<?php echo base_url();?>index.php/c_home/display">Inventarisasi Aset</a>
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
        <script src="<?php echo base_url();?>asset/bootstrap/datatable/datatables.min.js"></script>
        <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
                
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
        
        <script type="text/javascript"> 
            $(document).ready( function () {
                $('.table-filtered').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            title: $(this).data("tablename"),
                            text:'Export to excel'
                            //Columns to export
                            //exportOptions: {
                        //     columns: [0, 1, 2, 3,4,5,6]
                        // }
                        },
                        {
                            extend: 'pdfHtml5',
                            title: $(this).data("tablename"),
                            text: 'Export to PDF'
                            //Columns to export
                            //exportOptions: {
                        //     columns: [0, 1, 2, 3, 4, 5, 6]
                        //  }
                        }
                    ]
                });
                
                $('.js-select2').select2();
            });
        </script>
    </body>
    <footer class="text-center">
        Copyright 2019
    </footer>
</html>