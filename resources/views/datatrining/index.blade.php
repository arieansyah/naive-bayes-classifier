<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/animate.css">
    <style>
      body{
        font: 100%/1.5 "Roboto", Verdana, sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="col-sm-4" id="input">
        <h3 class="animated fadeInLeft" id="pelayanan_pegawai">
          <script>
            if ({{ $pelayanan_pegawai }} == 1) pelayanan_pegawai.innerHTML = "pelayanan_pegawai : Baik";
            if ({{ $pelayanan_pegawai }} == 2) pelayanan_pegawai.innerHTML = "pelayanan_pegawai : Cukup Baik";
            if ({{ $pelayanan_pegawai }} == 3) pelayanan_pegawai.innerHTML = "pelayanan_pegawai : Tidak Baik";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="ketanggapan_pegawai">
          <script>
            if ({{ $ketanggapan_pegawai }} == 1) ketanggapan_pegawai.innerHTML = "ketanggapan_pegawai : Baik";
            if ({{ $ketanggapan_pegawai }} == 2) ketanggapan_pegawai.innerHTML = "ketanggapan_pegawai : Cukup Baik";
            if ({{ $ketanggapan_pegawai }} == 3) ketanggapan_pegawai.innerHTML = "ketanggapan_pegawai : Tidak Baik";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="kesopanan_pegawai">
          <script>
            if ({{ $kesopanan_pegawai }} == 1) kesopanan_pegawai.innerHTML = "kesopanan_pegawai : Baik";
            if ({{ $kesopanan_pegawai }} == 2) kesopanan_pegawai.innerHTML = "kesopanan_pegawai : Cukup Baik";
            if ({{ $kesopanan_pegawai }} == 3) kesopanan_pegawai.innerHTML = "kesopanan_pegawai : Tidak Baik";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="ketepatan_pelayanan">
          <script>
            if ({{ $ketepatan_pelayanan }} == 1) ketepatan_pelayanan.innerHTML = "ketepatan_pelayanan : Baik";
            if ({{ $ketepatan_pelayanan }} == 2) ketepatan_pelayanan.innerHTML = "ketepatan_pelayanan : Cukup Baik";
            if ({{ $ketepatan_pelayanan }} == 3) ketepatan_pelayanan.innerHTML = "ketepatan_pelayanan : Tidak Baik";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="fasilitas">
          <script>
            if ({{ $fasilitas }} == 1) fasilitas.innerHTML = "fasilitas : Baik";
            if ({{ $fasilitas }} == 2) fasilitas.innerHTML = "fasilitas : Cukup Baik";
            if ({{ $fasilitas }} == 3) fasilitas.innerHTML = "fasilitas : Tidak Baik";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="keamanan_kantor">
          <script>
            if ({{ $keamanan_kantor }} == 1) keamanan_kantor.innerHTML = "keamanan_kantor : Baik";
            if ({{ $keamanan_kantor }} == 2) keamanan_kantor.innerHTML = "keamanan_kantor : Cukup Baik";
            if ({{ $keamanan_kantor }} == 3) keamanan_kantor.innerHTML = "keamanan_kantor : Tidak Baik";
          </script>
        </h3>

      </div>
      <div class="col-sm-8">
        <h1 class="animated fadeInUp" id="hasil">
          Sistem Memberikan Hasil {{$hasil}}
        </h1>
      </div>
      <div class="col-md-12">
      <hr>
        <table class="table table-hover">
          <tr class="active">
            <th>Hasil</th>
            <th>Pelayanan Pegawai</th>
            <th>Ketanggapan Pegawai</th>
            <th>Kesopanan Pegawai</th>
            <th>Ketepatan Pelayanan</th>
            <th>Fasilitas</th>
            <th>Keamanan Kantor</th>
            <th>Persentase</th>
          </tr>
          @if($hasil == 'Sangat Puas')
          <tr class="danger">
          @else
          <tr class="active">
          @endif
            <td>Sangat Puas</td>
            <td>{{$pelayanan_pegawai_sangatPuas}}</td>
            <td>{{$ketanggapan_pegawai_sangatPuas}}</td>
            <td>{{$kesopanan_pegawai_sangatPuas}}</td>
            <td>{{$ketepatan_pelayanan_sangatPuas}}</td>
            <td>{{$fasilitas_sangatPuas}}</td>
            <td>{{$keamanan_kantor_sangatPuas}}%</td>
            <td>{{$presentaseSangatPuas}}%</td>
          </tr>
          @if($hasil == 'Puas')
          <tr class="danger">
          @else
          <tr class="active">
          @endif
            <td>Puas</td>
            <td>{{$pelayanan_pegawai_puas}}</td>
            <td>{{$ketanggapan_pegawai_puas}}</td>
            <td>{{$kesopanan_pegawai_puas}}</td>
            <td>{{$ketepatan_pelayanan_puas}}</td>
            <td>{{$fasilitas_puas}}</td>
            <td>{{$keamanan_kantor_puas}}%</td>
            <td>{{$presentasePuas}}%</td>
          </tr>
          @if($hasil == 'Tidak Puas')
          <tr class="danger">
          @else
          <tr class="active">
          @endif
            <td>Tidak Puas</td>
            <td>{{$pelayanan_pegawai_tidakPuas}}</td>
            <td>{{$ketanggapan_pegawai_tidakPuas}}</td>
            <td>{{$kesopanan_pegawai_tidakPuas}}</td>
            <td>{{$ketepatan_pelayanan_tidakPuas}}</td>
            <td>{{$fasilitas_tidakPuas}}</td>
            <td>{{$keamanan_kantor_tidakPuas}}%</td>
            <td>{{$presentaseTidakPuas}}%</td>
          </tr>
          @if($hasil == 'Sangat Tidak Puas')
          <tr class="danger">
          @else
          <tr class="active">
          @endif
            <td>Sangat Tidak Puas</td>
            <td>{{$pelayanan_pegawai_sangatTidakPuas}}</td>
            <td>{{$ketanggapan_pegawai_sangatTidakPuas}}</td>
            <td>{{$kesopanan_pegawai_sangatTidakPuas}}</td>
            <td>{{$ketepatan_pelayanan_sangatTidakPuas}}</td>
            <td>{{$fasilitas_sangatTidakPuas}}</td>
            <td>{{$keamanan_kantor_sangatTidakPuas}}%</td>
            <td>{{$presentaseSangatTidakPuas}}%</td>
          </tr>
        </table>
        <hr>
        <a href="{{url('result/print')}}">
          <button type="button" class="btn btn-lg btn-danger">Print</button>
        </a>

      </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
