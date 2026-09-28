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
    body {
      background-color: #f4f4f4;
    }
    .custom-container {
      width: 450px; 
      margin: 40px auto;
      background-color: white;
      border: 1px solid #999;
      padding-bottom: 30px;
    }
    .custom-header {
      background-color: #b3e5fc; 
      padding: 10px;
      border-bottom: 1px solid #999;
      font-size: 14px;
      text-align: left; 
      font-weight: bold;
    }
    .custom-header a {
      color: #000;
      text-decoration: none;
      margin: 0 5px;
    }
    .custom-header a:hover {
      text-decoration: underline;
      color: #3b5998;
    }
    
    .custom-title {
      color: #3b5998; 
      text-align: center;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .custom-table {
      width: 80%;
      margin: 0 auto;
      font-size: 14px;
    }
    .custom-table th {
      background-color: #87CEEB !important; 
      font-weight: normal;
      padding: 8px;
    }
    .custom-table td {
      padding: 8px;
    }
    .custom-form-group {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 10px;
    }
    .custom-label {
      width: 80px;
      text-align: left;
      font-size: 14px;
      margin: 0;
    }
    .custom-select {
      width: 150px;
      padding: 4px;
      border: 1px solid #999;
      border-radius: 0; 
    }
    .btn-save {
      background-color: #87CEEB;
      border: 1px solid #555;
      padding: 6px 30px;
      border-radius: 4px;
      color: black;
    }
  </style>
</head>

<body>

  <div class="custom-container">
    <div class="custom-header">
      <a href="view_karyawan.php">Employee</a> | 
      <a href="view_addkaryawan.php">Office</a> | 
      <a href="#" class="active-link">Office-Employees</a>
    </div>

    <h3 class="custom-title">Office Employees</h3>

    <table class="table table-bordered custom-table">
      <thead>
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
            echo "<tr><td colspan='2' class='text-center'>Data Kosong</td></tr>";
        }
        ?>
      </tbody>
    </table>

    <form method="post" action="controller_karyawan.php" class="text-center mt-4">
      
      <div class="custom-form-group">
        <label class="custom-label">Employee</label>
        <select name="setNama" class="custom-select">
          <?php
          if (!empty($members)) {
              foreach ($members as $member) {
                  echo "<option value='{$member->nama}'>{$member->nama}</option>";
              }
          }
          ?>
        </select>
      </div>

      <div class="custom-form-group mb-4">
        <label class="custom-label">Office</label>
        <select name="setKantor" class="custom-select">
          <?php
          if (!empty($members)) {
              foreach ($members as $member) {
                  echo "<option value='{$member->kantor}'>{$member->kantor}</option>";
              }
          }
          ?>
        </select>
      </div>

      <button name="btnSet" type="submit" class="btn-save">SAVE</button>

    </form>
  </div>

</body>
</html>