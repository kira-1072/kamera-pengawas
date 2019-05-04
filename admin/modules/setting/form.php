<?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Tambah User
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=patient"> Users </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/patient/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="firstname" placeholder="first name" autocomplete="off" required>
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="lastname" placeholder="last name" autocomplete="off" required>
                </div>
              </div>
              <br>

                <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" placeholder="email must @" autocomplete="off" required>
                </div>
              </div>
              <br>

                <div class="form-group">
                <label class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phonenumber" placeholder="phone number" autocomplete="off" required>
                </div>
              </div>
              <br>

                <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="password" placeholder="password" autocomplete="off" required>
                </div>
              </div>
              <br>
         
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=ambulance" class="btn btn-default btn-reset">Cancel</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
// jika form edit data yang dipilih
// isset : cek data ada / tidak
elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {
     
      $query = mysqli_query($mysqli, "SELECT * FROM users WHERE id_user='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data user : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Change user information
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=patient"> user </a></li>
      <li class="active"> Change </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/patient/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">

              <div class="form-group">
                <label class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="firstname" placeholder="first name" autocomplete="off" value="<?php echo $data['firstname']; ?>" required>
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="lastname" placeholder="last name" autocomplete="off" value="<?php echo $data['lastname']; ?>" required> 
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" placeholder="email" autocomplete="off" value="<?php echo $data['email']; ?>" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phonenumber" placeholder="phone number" autocomplete="off" value="<?php echo $data['phonenumber']; ?>" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="password" placeholder="password" autocomplete="off" value="<?php echo $data['password']; ?>" required>
                </div>
              </div>
              <br>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=patient" class="btn btn-default btn-reset">Cancel</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='detail') { 
  if (isset($_GET['id'])) {
     
      $query = mysqli_query($mysqli, "SELECT * FROM gambars WHERE gambar_id='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data user : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-user"></i> Detail User
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=user"> user </a></li>
      <li class="active"> Detail </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="#" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-8">
                  <input class="form-control" name="gambar" autocomplete="off" value="<?php echo $data['gambar']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-8">
                  <input class="form-control" name="lastname" autocomplete="off" value="<?php echo $data['lastname']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                  <input class="form-control" name="email" autocomplete="off" value="<?php echo $data['email']; ?>" required> 
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-8">
                  <input class="form-control" name="phonenumber" autocomplete="off" value="<?php echo $data['phonenumber']; ?>" required> 
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-8">
                  <input class="form-control" name="password" autocomplete="off" value="<?php echo $data['password']; ?>" required> 
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Latitude</label>
                <div class="col-sm-8">
                  <input class="form-control" name="lat" autocomplete="off" value="<?php echo $data['lat']; ?>" required> 
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Longitude</label>
                <div class="col-sm-8">
                  <input class="form-control" name="log" autocomplete="off" value="<?php echo $data['log']; ?>" required> 
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Position</label>
                <div class="col-sm-8">
                  <input class="form-control" name="position" autocomplete="off" value="<?php echo $data['position']; ?>" required> 
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <a href="?module=patient" class="btn btn-default btn-reset">Back</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
  <?php
}
?>