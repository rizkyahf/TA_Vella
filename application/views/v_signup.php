<div class="row">
    <h2 align="center">Input Data Mahasiswa</h2>
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="<?php echo base_url();?>index.php/c_mahasiswa/addmahasiswa" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" placeholder="Password" name="Password">
            </div>
            <div class="form-group">
                <label for="re-enter_password">Re-enter Password</label>
                <input type="text" class="form-control" id="re-enter_password" placeholder="Re-enter Password" name="Re-enter_Password">
            </div>
            <input type="submit" class="btn btn-sm" name="Save" value="Save">
        </form>
    </div>
</div>