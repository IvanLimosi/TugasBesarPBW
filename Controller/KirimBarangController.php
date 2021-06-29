<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class HomeController{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }

    public function kirim(){
        $namaBrg = $_POST['iNama'];
        $kategori = $_POST['iKategori'];
        $alamat = $_POST['iAlamat'];
        $keterangan = $_POST['iKeterangan'];
        $jumlah = $_POST['iJumlah'];
        $satuan = $_POST['iSatuan'];

    }
}
?>