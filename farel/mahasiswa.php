<?php
    class mahasiswa{
        public $nim = "2325 23276";
        public $nama = "Farel";
        public $jurusan = "PPLG";

        function tampil_biodata(){
            echo $this -> nim;
            echo $this -> nama;
            echo $this -> jurusan;
        }
    }
    $siswa = new mahasiswa();
    $siswa->tampil_biodata();
?>