<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Create Data</title>
  </head>
  <body>
  <div class="container">
    <h1>Create Data</h1>

    <form action="create.php" method="post">
<table class="table table-dark table-striped" border="0" cellspacing="0">
    <input type="hidden" name="id">
    <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
    <tr><td>Kelas</td><td><input type="text" name="kelas"></td></tr>
    <tr><td>Jurusan</td><td><input type="text" name="jurusan"></td></tr>
</table>
<input type='submit' class='btn btn-primary' name="create" value="Create">
<a href="index.php"><input type='button' class='btn btn-primary' value="Cancel"></a>
</form>
</body>
</div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</html>
<?php
include("lib.php");
if(isset($_POST['create'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $lib = new lib();
    $create = $lib->createData($id,$nama,$kelas,$jurusan);
    if($create){
        header("location:index.php");
    }
}
?>