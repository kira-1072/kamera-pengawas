<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-desktop icon-title"></i> Streaming

    <a class="btn btn-primary btn-social pull-right" onclick="Refresh()">
      <i class="fa fa-refresh"></i> Refresh
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box box-primary">
        <div class="box-body">
          <div class="center">
            <h1>Kamera 1</h1>
            <iframe width="660" height="500" src="http://192.168.0.101:5000/" frameborder="2" allow="autoplay" allowfullscreen></iframe>
          </div>

          <div class="center">
            <h1>Kamera 2</h1>
            <iframe width="660" height="500" src="http://localhost:8081/" frameborder="2" allow="autoplay" allowfullscreen></iframe>
          </div>
          
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col  -->
  </div>   <!-- /.row -->
<script>
function Refresh() {
    location.reload();
}
</script>

</section><!-- /.content