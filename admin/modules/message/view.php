<section class="content-header">
	<h1>
		<i class="fa fa-envelope-o icon-title"></i>Message
	</h1>
	<ol class="breadcrumb">
		<li><a href="?module=home"><i class="fa fa-home"></i>Home</a></li>
		<li class="active">Message</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			
			<?php
			// untuk menampilkan pesan
			// jika alert = "" (kosong)
			//tampilkan pesan "" (kosong)
			if (empty($_GET['alert'])){
				echo "";
			} 
			// jika alert =1
			// tampilkan pesan sukses 
			elseif ($_GET['alert'] == 1) {
				echo "<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert'
							aria-hidden='true'>&times;</button>
							<h4> <i class='icon fa fa-check-circle'></i> Success! </h4>
							Message is sucessfully deleted.
						</div>";
			}

			?>
	<div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel pesan -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Name</th>
                <th class="center">Email</th>
                <th class="center">Message</th>
                <th class="center">Date</th>
                <th class="center">Action</th>
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            // fungsi query untuk menampilkan data dari tabel message
            $query = mysqli_query($mysqli, "SELECT * FROM pesan ORDER BY message_id DESC")
                                            or die('Ada kesalahan pada query tampil data message: '.mysqli_error($mysqli));

            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
              $tgl  = substr($data['date'],0,10);
              $exp  = explode('-',$tgl);
              $date = $exp[2]."-".$exp[1]."-".$exp[0];

              if ($data['status']=='y') {
                $warna = "";
              } else {
                $warna = "#fcf8e3";
              }
              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr style='background:$warna'>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[name]</td>
                      <td width='120'>$data[email]</td>
                      <td width='300'>$data[message]</td>
                      <td width='80' class='center'>$date</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Details' style='margin-right:5px' class='btn btn-primary btn-sm' href='modules/message/proses.php?act=update_status&id=$data[message_id]'>
                              <i style='color:#fff' class='fa fa-search-plus'></i>
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btn-sm" href="modules/message/proses.php?act=delete&id=<?php echo $data['message_id'];?>" onclick="return confirm('Are you sure you want to delete the messages from <?php echo $data['name']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
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