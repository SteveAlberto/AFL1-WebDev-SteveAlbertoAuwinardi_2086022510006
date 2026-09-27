<?php require 'controller_karyawan.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Set Karyawan</title>
  <style>
    .bg-lightblue { background-color: #87CEEB !important; border-color: #dee2e6;}
    .btn-lightblue { background-color: #87CEEB; border: 1px solid #333; color: #000; font-weight: 500;}
    .btn-lightblue:hover { background-color: #6cbde0; }
  </style>
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
            <a class="nav-link" href="view_addkaryawan.php">Tambah Karyawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Set Karyawan</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <h2 class="text-primary mb-4">Karyawan Kantor</h2>
        <div class="d-flex justify-content-center mb-4">
          <table class="table table-bordered w-50">
            <thead class="bg-lightblue">
              <tr>
                <th scope="col">Employee</th>
                <th scope="col">Office</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $members = GetAllMembers();
              if (!empty($members)) {
                  foreach ($members as $member) {
                      echo "<tr>";
                      echo "<td>{$member->nama}</td>";
                      echo "<td>{$member->kantor}</td>";
                      echo "</tr>";
                  }
              } else {
                  echo "<tr><td colspan='2'>Data Karyawan Belum Ada</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>

        <form method="post" action="controller_karyawan.php" class="w-50 mx-auto">
          <div class="form-group row justify-content-center">
            <label class="col-sm-3 col-form-label text-right font-weight-bold">Employee</label>
            <div class="col-sm-6">
              <select name="setNama" class="form-control border-dark">
                <?php
                if (!empty($members)) {
                    foreach ($members as $member) {
                        echo "<option value='{$member->nama}'>{$member->nama}</option>";
                    }
                }
                ?>
              </select>
            </div>
          </div>

          <div class="form-group row justify-content-center">
            <label class="col-sm-3 col-form-label text-right font-weight-bold">Office</label>
            <div class="col-sm-6">
              <select name="setKantor" class="form-control border-dark">
                <?php
                if (!empty($members)) {
                    foreach ($members as $member) {
                        echo "<option value='{$member->kantor}'>{$member->kantor}</option>";
                    }
                }
                ?>
              </select>
            </div>
          </div>

          <button name="btnSet" type="submit" class="btn btn-lightblue mt-3 px-5">SAVE</button>
        </form>

      </div>
    </div>
  </div>
</body>

</html>