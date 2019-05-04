<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-users icon-title"></i> Setting

    <a class="btn btn-primary btn-social pull-right" href="?module=form_patient&form=add">
      <i class="fa fa-plus"></i> Add
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  
    if (empty($_GET['alert'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "user baru berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              The new user is successfully saved.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "user berhasil diubah"
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              The user is successfully canged.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "user berhasil dihapus"
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Success!</h4>
              The user is successfully deleted.
            </div>";
    }
    // jika alert = 4
    // tampilkan pesan Upload Gagal "Pastikan file yang diupload sudah benar"
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Failed!</h4>
              Make sure the uploaded file is correct.
            </div>";
    }
    // jika alert = 5
    // tampilkan pesan Upload Gagal "Pastikan ukuran gambar tidak lebih dari 1MB"
    elseif ($_GET['alert'] == 5) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Failed!</h4>
              Make sure the image size is not more than 1 Mb.
            </div>";
    }
    // jika alert = 6
    // tampilkan pesan Upload Gagal "Pastikan file yang diupload bertipe *.JPG, *.JPEG, *.PNG"
    elseif ($_GET['alert'] == 6) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Failed!</h4>
              Make sure the uploaded file is in *.JPG / *.JPEG / *.PNG.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel siswa -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">First Name</th>
                <th class="center">Last Name</th>
                <th class="center">Email</th>
                <th class="center">Phone Number</th>
                <th class="center">Create At</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel warta
            $query = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id_user DESC")
                                            or die('Ada kesalahan pada query tampil data users: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              // menampilkan isi tabel dari database ke tabel di aplikasi
                                    
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='55'>$data[firstname]</td>
                      <td width='80'>$data[lastname]</td>
                      <td width='50'>$data[email]</td>
                      <td width='80'>$data[phonenumber]</td>
                      <td class='center' width='80'>$data[created_at]<br>
                        <div>
                          ";
            ?>
<!--                         <a data-toggle='tooltip' data-placement='top' title='Detail' style='margin-right:5px' class='btn btn-success btn-sm' href='?module=form_patient&form=detail&id=<?php echo $data['id_user'];?>'>
                              <i style='color:#fff' class='glyphicon glyphicon-list-alt'></i>
                          </a>
                          <a data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btn-sm" href="modules/patient/proses.php?act=delete&id=<?php echo $data['id_user'];?>" onclick="return confirm('Are you sure you want to delete <?php echo $data['firstname']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a> -->
            <?php
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content