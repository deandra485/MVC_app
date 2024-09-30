<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    // private $mhs = [
    //     [
    //        "nama" => "deandra putra",
    //        "nrp" => "84645379",
    //        "email" => "deandra@gmail.com",
    //        "jurusan" => "teknik informatika"
    //     ],

    //     [
    //         "nama" => "muhammad azzam",
    //         "nrp" => "64373482",
    //         "email" => "azzam@gmail.com",
    //         "jurusan" => "teknik sipil"
    //     ],

    //     [
    //         "nama" => "syauqi billah",
    //         "nrp" => "47634014",
    //         "email" => "syauqi@gmail.com",
    //         "jurusan" => "teknik mesin"
    //     ]
    // ];

   public function getAllMahasiswa()
   {
     $this->db->query('SELECT * FROM mahasiswa') . ($this->table);
     return $this->db->resultset();
   }
}