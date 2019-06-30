<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.css">
        
        <style>
            body{
            background-color: #5588a3;
        }
        </style>
    </head>
    <body>
        <div class="container col-md-offset-5">
            <div class="card" style="margin-top:250px;">
                <div class="card-header">
                    <h2>Log In</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url();?>index.php/c_user/do_login">
                        <div class="input-group form grup">
                            <div class="input-grup-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="username" class="form-control" placeholder="username" autofocus>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-key"></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" value="Login" class="btn float-right btn-primary login_btn">
                            <!-- <input type="button" name="signup" value="signup" class="btn float-right login_btn"> -->
                            <a class="btn btn-default float-right" href="<?php echo base_url(); ?>index.php/c_user/signup">Sign Up </a>
                        </div>
                        <div class="col-md-3 col-md-offset-9">
                            <!-- <a class="btn btn-info btn-lg" href="<?php echo base_url();?>index.php/c_user/input">Sign Up</a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>