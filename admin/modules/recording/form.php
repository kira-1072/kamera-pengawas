<?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Tambah Antrian
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=recording"> Recording </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/ambulance/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Number Ambulance</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="number_ambulance" placeholder="AB 4444 CC" autocomplete="off" required>
                </div>
              </div>
              
              <br>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Driver</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="driver" placeholder="driver's name" autocomplete="off" required>
                </div>
              </div>
              <br>

               <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-8">
                  <label><input type="radio" class="radio" name="status" value="Stand by">Stand by</label>&nbsp&nbsp&nbsp&nbsp
                  <label><input type="radio" class="radio" name="status" value="Pick up the patient">Pick up the patient</label>
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Longitude</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="log" placeholder="110.403368" autocomplete="off" required>
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Latitude</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="lat" placeholder="-7.7573504" autocomplete="off" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-2 control-label">Position</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="position" placeholder="location for ambulance" autocomplete="off" required>
                </div>
              </div>
             

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
     
      $query = mysqli_query($mysqli, "SELECT * FROM siswa WHERE nis='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data siswa : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Change queue hospital
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=siswa"> siswa </a></li>
      <li class="active"> Change </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/siswa/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="nis" value="<?php echo $data['nis']; ?>">

              <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama" placeholder="ikhwan alfath" autocomplete="off" value="<?php echo $data['nama']; ?>" required>
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="jenis_kelamin" placeholder="laki-laki/Perempuan" autocomplete="off" value="<?php echo $data['jenis_kelamin']; ?>" required> 
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                  <input type="datetime-local" class="form-control" name="tgl_lahir" placeholder="1996/06/04" autocomplete="off" value="<?php echo $data['tgl_lahir']; ?>" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tempat Lahir</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Karanganyar" autocomplete="off" value="<?php echo $data['tempat_lahir']; ?>" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="foto" autocomplete="off">
                  <br>
                  <img src="../images/siswa/<?php echo $data['foto']; ?>" height="150">
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Save">
                  <a href="?module=siswa" class="btn btn-default btn-reset">Cancel</a>
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
     
      $query = mysqli_query($mysqli, "SELECT * FROM rekaman WHERE rekaman_id='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil data recording : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-hdd-o"></i> Detail Recording
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Home </a></li>
      <li><a href="?module=recording"> recording </a></li>
      <li class="active"> Detail </li>
    </ol>
  </section>

   <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">

          <!-- form start -->
          <br>
          <ul class="timeline">
            <li>
              <div class="timeline-item">
                <span class="time">
                  <i class="fa fa-clock-o icon-title"></i> <?php echo $data['tanggal']; ?>
                </span>
                <h3 class="timeline-header">
                  <a href="javascript:void(0);"> <i class="fa fa-picture-o icon-title"></i> <?php echo $data['kamera']; ?></a> (<?php echo $data['video']; ?>)
                </h3>
                <div class="timeline-body center"><?php echo "<video preload='auto' autoplay='autoplay' width=440 controls> <source src='../recording/$data[video]' type='video/x-msvideo'></video>"; ?></div><br><br>
              </div>
            </li>
          </ul>
        <a href="?module=recording" class="btn btn-default btn-reset">Back</a>&nbsp&nbsp 
        <a class="btn btn-primary btn-reset" download="<?=$data[video]?>" href="../recording/<?=$data[video]?>" title="<?=$data[video]?>">Download</a>
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
  <?php
}
?>