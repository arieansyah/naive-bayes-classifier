<!DOCTYPE html>
<html>
<head>
  {{-- <title>{{$arsip}}</title> --}}
  {{-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('public/bootstrap/css/bootstrap.min.css') }}">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
  <div class="text-center">
    <img height="200px" src="kota.jpg" alt="">
    <h1>DPUPR KOTA TEGAL</h1>
  </div>

  <ul class="list-group">
    <li class="list-group-item"><strong>Data Testing</strong></li>
    <li class="list-group-item">
      Jenis Saluran :
      @if ($arsip->jenis_saluran == 1)
          Primer
      @else
          Skunder
      @endif
      <br>
      Jenis Daerah :
      @if ($arsip->jenis_daerah == 1)
          Pemukiman
      @else
          Non-Pemukiman
      @endif
      <br>
      Jenis Kerusakan :
      @if ($arsip->jenis_kerusakan == 1)
          Berat
      @else
          Ringan
      @endif
      <br>
      Dana :
      @if ($arsip->dana == 1)
          > 100 Jt
      @else
          < 100 Jt
      @endif
      <br>
      Hasil :
      {{$arsip->hasil}}
      <br>
    </li>
    <br>
  </ul>

  <hr>
    <table class="table table-striped">
      <tr>
        <th>Hasil</th>
        <th>Saluran</th>
        <th>Daerah</th>
        <th>kerusakan</th>
        <th>Dana</th>
        <th>Persentase</th>
      </tr>
      <tr>
        <td>UnUrgent</td>
        <td>{{$arsip->pjenis_saluranUnUrgent}}</td>
        <td>{{$arsip->pjenis_daerahUnUrgent}}</td>
        <td>{{$arsip->pjenis_kerusakanUnUrgent}}</td>
        <td>{{$arsip->pdanaUnUrgent}}</td>
        <td>{{$arsip->presentaseUnUrgent}}%</td>
      </tr>
      <tr>
        <td>Urgent</td>
        <td>{{$arsip->pjenis_saluranUrgent}}</td>
        <td>{{$arsip->pjenis_daerahUrgent}}</td>
        <td>{{$arsip->pjenis_kerusakanUrgent}}</td>
        <td>{{$arsip->pdanaUrgent}}</td>
        <td>{{$arsip->presentaseUrgent}}%</td>
      </tr>
    </table>
    <hr>
  </div>

</body>
</html>
