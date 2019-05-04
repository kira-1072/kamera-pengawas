 <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Home

    </h1>
    <ol class="breadcrumb">
      <li><i class="center"><?php
            $tgl = mktime(date("m"), date("d"), date("y")); ?>
             <i class="icon fa fa-calendar"> </i> <?php echo date("d-m-Y", $tgl) ;
                date_default_timezone_set('Asia/Jakarta'); 
                  $jam=date("H:i:s"); ?>   &nbsp;
             <i class="icon fa fa-clock-o"></i> <?php
                  echo $jam;
                  ?></i>&nbsp;&nbsp;&nbsp;
           <a href="?module=home"><i class="fa fa-home"></i> Home</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">

            <i class="icon fa fa-user"></i> Welcome <?php $a = date ("H");
              if (($a>=6) && ($a<=11)){
                echo "<b>, Good Morning </b>";
                  }else if(($a>11) && ($a<=15)){
                  echo ", Good Morning";}
                    else if (($a>15) && ($a<=18)){
                  echo ", Good Afternoon";}
                    else { echo ", <b> Good Night </b>";}
            ?>  <strong><?php echo $_SESSION['fullname']; ?></strong>
          </p>        
        </div>
      </div>
    </div>
    <br><br>
    <div style="text-align: center" class="row">
      <div class="col-lg-12 col-xs-12">
        <img src="../images/logo.png" height="280">
        <br><br>
        <div style="margin-right: 150px; margin-left: 150px">
          <h3>Welcome to Camera Surveillance System With Raspberry Pi</h3>
        </div>

<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.305854667306!2d110.4011793143236!3d-7.757350394409065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599f4ed7f93d%3A0x2e244e0d7bc758cb!2sRS+JIH!5e0!3m2!1sid!2sid!4v1511781256205" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->

        <br>
      </div>
    </div>
  </section><!-- /.content -->