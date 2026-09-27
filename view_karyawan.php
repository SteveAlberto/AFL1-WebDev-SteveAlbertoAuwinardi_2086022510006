<?php require 'controller_karyawan.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>List Karyawan</title>
</head>

<body>
    <div class="container p-3">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">List Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_addkaryawan.php">Tambah Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_setkaryawan.php">Set Karyawan</a>
                </li>
            </ul>
        </div>
        <div class="card-body">

            <h1>List Karyawan</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kantor</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 0;
                    $members = GetAllMembers();
                    foreach ($members as $index => $member) {
                        $counter++;
                    ?>
                        <tr>
                            <th scope="row"><?php $counter; ?></th>
                            <td><?=$member->nama; ?></td>
                            <td><?=$member->kantor; ?></td>
                            <td><?=$member->umur; ?></td>
                            <td>
                                <a href="view_updatekaryawan.php?UpdateID=<?=$index;?>">
                                <button class="btn btn-warning">Update</button>
                                </a>
                                <a href="controller_karyawan.php?DeleteID=<?=$index;?>">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>