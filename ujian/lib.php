<?php
    class lib {

        public function __construct(){
            $this->con = new PDO("mysql:host=localhost;dbname=lks","root","");
        }

        public function createData($id,$nama,$kelas,$jurusan){
            $query = $this->con->prepare("INSERT INTO kelas(id,nama,kelas,jurusan) VALUES ('$id','$nama','$kelas','$jurusan')");
            $query->execute();
            if(!$query){
                return "input gagal";
            }else{
                return "input sukses";
            }
        }

        public function editData($id){
            $query = $this->con->prepare("SELECT * FROM kelas WHERE id = '$id'");
            $query->execute();
            return $query;
        }

        public function updateData($id,$nama,$kelas,$jurusan){
            $query = $this->con->prepare("UPDATE kelas SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE id = '$id'");
            $query->execute();
            if(!$query){
                return "input gagal";
            }else{
                return "input sukses";
            }
        }

        public function readData(){
            $query = $this->con->prepare("SELECT * FROM kelas");
            $query->execute();
            return $query;
        }

        public function deleteData($id){
            $query = $this->con->prepare("DELETE FROM kelas WHERE id = '$id'");
            $query->execute();
        }
    }
?>