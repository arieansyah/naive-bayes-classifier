<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Tester</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
  </head>
  <body>
    <div class="container">

      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('logout')}}">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <div class="col-md-6">
        <div class="form-primary">
          <form class="form-horizontal" action="/result" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
              <label for="pelayanan_pegawai">pelayanan_pegawai</label>
              <select class="form-control" required name="pelayanan_pegawai">
                <option value=""></option>
                <option value="1">Baik</option>
                <option value="2">Cukup Baik</option>
                <option value="3">Tidak Baik</option>                
              </select>
            </div>
            <div class="form-group row">
              <label for="ketanggapan_pegawai">ketanggapan_pegawai</label>
              <select class="form-control" required name="ketanggapan_pegawai">
                <option value=""></option>
                <option value="1">Baik</option>
                <option value="2">Cukup Baik</option>
                <option value="3">Tidak Baik</option>                
              </select>
            </div>
            <div class="form-group row">
              <label for="kesopanan_pegawai">kesopanan_pegawai</label>
              <select class="form-control" required name="kesopanan_pegawai">
                <option value=""></option>
                <option value="1">Baik</option>
                <option value="2">Cukup Baik</option>
                <option value="3">Tidak Baik</option>                
              </select>
            </div>
            <div class="form-group row">
              <label for="ketepatan_pelayanan">ketepatan_pelayanan</label>
              <select class="form-control" required name="ketepatan_pelayanan">
                <option value=""></option>
                <option value="1">Baik</option>
                <option value="2">Cukup Baik</option>
                <option value="3">Tidak Baik</option>                
              </select>
            </div>
            <div class="form-group row">
              <label for="fasilitas">fasilitas</label>
              <select class="form-control" required name="fasilitas">
                <option value=""></option>
                <option value="1">Baik</option>
                <option value="2">Cukup Baik</option>
                <option value="3">Tidak Baik</option>                
              </select>
            </div>
            <div class="form-group row">
              <label for="keamanan_kantor">keamanan_kantor</label>
              <select class="form-control" required name="keamanan_kantor">
                <option value=""></option>
                <option value="1">Baik</option>
                <option value="2">Cukup Baik</option>
                <option value="3">Tidak Baik</option>                
              </select>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-lg btn-danger">Submit</button>
                  or press enter
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
