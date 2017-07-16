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
        <h3 class="animated fadeInLeft" id="cuaca">
          <script>
            if ({{ $cuaca }} == 1) cuaca.innerHTML = "Cuaca : Cerah";
            if ({{ $cuaca }} == 2) cuaca.innerHTML = "Cuaca : Berawan";
            if ({{ $cuaca }} == 3) cuaca.innerHTML = "Cuaca : Hujan";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="temperatur">
          <script>
            if ({{ $temperatur }} == 1) temperatur.innerHTML = "Temperatur : Panas";
            if ({{ $temperatur }} == 2) temperatur.innerHTML = "Temperatur : Sejuk";
            if ({{ $temperatur }} == 3) temperatur.innerHTML = "Temperatur : Dingin";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="kelembapan">
          <script>
            if ({{ $kelembapan }} == 1) kelembapan.innerHTML = "Kelembapan : Tinggi";
            if ({{ $kelembapan }} == 2) kelembapan.innerHTML = "Kelembapan : Normal";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="angin">
          <script>
            if ({{ $angin }} == 1) angin.innerHTML = "Angin : True";
            if ({{ $angin }} == 2) angin.innerHTML = "Angin : False";
          </script>
        </h3>

      </div>
      <div class="col-sm-8">
        <h1 class="animated fadeInUp" id="bermain">
          Sistem Menyarankan Untuk {{$bermain}}
        </h1>
      </div>
      <div class="col-md-12">
      <hr>
        <table class="table table-hover">
          <tr class="active">
            <th>Bermain</th>
            <th>Cuaca</th>
            <th>Temperatur</th>
            <th>Kelembapan</th>
            <th>Angin</th>
            <th>Persentase</th>
          </tr>
          @if($persentaseY > $persentaseT)
          <tr class="danger">
          @else
          <tr class="active">
          @endif
            <td>Ya</td>
            <td>{{$cuacaY}}</td>
            <td>{{$temperaturY}}</td>
            <td>{{$kelembapanY}}</td>
            <td>{{$anginY}}</td>
            <td>{{$persentaseY}}%</td>            
          </tr>
          @if($persentaseT > $persentaseY)
          <tr class="danger">
          @else
          <tr class="active">
          @endif
            <td>Tidak</td>
            <td>{{$cuacaT}}</td>
            <td>{{$temperaturT}}</td>
            <td>{{$kelembapanT}}</td>
            <td>{{$anginT}}</td>
            <td>{{$persentaseT}}%</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
