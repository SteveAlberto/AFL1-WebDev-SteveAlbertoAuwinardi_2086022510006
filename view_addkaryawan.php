<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Add Karyawan</title>
</head>

<body>
  <div class="container p-3">
    <div class="card text-center">
      <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link" href="view_karyawan.php">List Karyawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Tambah Karyawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_setkaryawan.php">Set Karyawan</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <h1>Add Karyawan</h1>
        <form method="post" action="controller_karyawan.php" class="w-50 mx-auto">
          <div class="form row">
            <div class="form-group col-md-12">
              <label for="inputNama">Nama</label>
              <input type="text" class="form-control" name="inputNama" placeholder="Masukkan Nama" required>
            </div>
          </div>

          <div class="form row">
            <div class="form-group col-md-12">
              <label for="inputKantor">Kantor</label>
              <input type="text" class="form-control" name="inputKantor" placeholder="Masukkan Kantor" required>
            </div>
          </div>

          <div class="form row">
            <div class="form-group col-md-12">
              <label for="inputUmur">Umur</label>
              <input type="number" class="form-control" name="inputUmur" placeholder="Masukkan Umur" required>
            </div>
          </div>

          <button name="btnAdd" type="submit" class="btn btn-primary">Tambah Karyawan</button>

        </form>
      </div>
    </div>
</body>

</html>