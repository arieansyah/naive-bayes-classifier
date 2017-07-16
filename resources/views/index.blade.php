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
      <div class="col-md-6">
        <div class="form-primary">
          <form class="form-horizontal" action="/result" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
              <label for="cuaca">Cuaca</label>
              <select class="form-control" required name="cuaca">
                <option value=""></option>
                <option value="1">Cerah</option>
                <option value="2">Berawan</option>
                <option value="3">Hujan</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="temperatur">Temperatur</label>
              <select class="form-control" required name="temperatur">
                <option value=""></option>
                <option value="1">Panas</option>
                <option value="2">Sejuk</option>
                <option value="3">Dingin</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="kelembapan">Kelembapan</label>
              <select class="form-control" required name="kelembapan">
                <option value=""></option>
                <option value="1">Tinggi</option>
                <option value="2">Normal</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="angin">Angin</label>
              <select class="form-control" required name="angin">
                <option value=""></option>
                <option value="1">True</option>
                <option value="2">False</option>
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
