<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Membaca data</title>
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Read Data</a>
</nav>

        <table class="table table-dark table-striped" border="0" cellsapcing="0" >
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Jurusan</td>
                <td>Option</td>
            </tr>
            <?php
    include("lib.php");
    $no = 0;
    $library = new lib();
    $read = $library->readData();
    while($data = $read->fetch(PDO::FETCH_OBJ)){
    $no++;
        echo "
            <tr>
                <td>$no</td>
                <td>$data->nama</td>
                <td>$data->kelas</td>
                <td>$data->jurusan</td>
                <td>
                    <a href='edit.php?id=$data->id'><button type='button' class='btn btn-primary'>Edit</button></a>
                    ||
                    <a href='index.php?delete=$data->id'><button type='button' class='btn btn-primary'>Delete</button></a>
                </td>
            </tr>
        ";
    }
?>
        </table>
        <a href="create.php"><button type="button" class="btn btn-primary">Create</button></a>

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</div>
</body>
</html>

<?php

$lib = new lib();
if(isset($_GET['delete'])){
    $delete = $lib->deleteData($_GET['delete']);
    header("location:index.php");
}
?>

