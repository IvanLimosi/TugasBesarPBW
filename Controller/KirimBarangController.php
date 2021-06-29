<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class KirimBarangController{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }

    public function kirim(){
        $namaPenerima = $_POST['iNama'];
        $kategori = $_POST['iKategori'];
        $alamat = $_POST['iAlamat'];
        $keterangan = $_POST['iKeterangan'];
        $jumlah = $_POST['iJumlah'];
        $satuan = $_POST['iSatuan'];
        $idDriver = $_POST['iDriver'];
        if(isset($namaBrg)&&$namaBrg != ""){
            $namaPenerima = $this->db->escapeString($namaBrg);
            $kategori = $this->db->escapeString($kategori);
            $alamat = $this->db->escapeString($alamat);
            $keterangan = $this->db->escapeString($keterangan);
            $jumlah = $this->db->escapeString($jumlah);
            $satuan = $this->db->escapeString($satuan);
            $idDriver = $this->db->escapeString($idDriver);
            // mengambil id barang untuk ditaruh di detail pengiriman
            $query1 = "SELECT id FROM items WHERE name = '$keterangan'";
            $temp1 = $this->db->executeSelectQuery($query1);
            // mengambil kategori barang
            $query2 = "SELECT id FROM items WHERE category = '$kategori'";
            $temp2 = $this->db->executeSelectQuery($query2);
            // mengambil id customer
            $query3 = "SELECT id from customers where name = '$namaPenerima'";
            $temp3 = $this->db->executeSelectQuery($query3);
            // mengisi start_datetime dan status
            $query4 = "INSERT INTO deliveries(start_datetime,status) Values(Now(),'Ongoing')";
            $temp4 = $this->db->executeNonSelectQuery($query4);
            // mengambil id destination
            $query5 = "SELECT id from addresses where address = '$alamat'";
            $temp5 = $this->db->executeSelectQuery($query3);
            // memasukan semua data ke deliveries
            $query6 = "INSERT INTO deliveries(customer_id,destination_id,driver_id) Values('$temp3','$temp5','$idDriver')";
            $this->db->executeNonSelectQuery($query6);
            // memasukan delivery id ke deliveries detail
            $query7 = "SELECT id from deliveries where customer_id = '$temp3'";
            $temp7 = $this->db->executeSelectQuery($query7);
            $query8 = "INSERT INTO delivery_details(delivery_id,item_id,quantity,unit) values('$temp7','$temp1','$jumlah','$satuan')";
            $this->db->executeNonSelectQuery($query8);


        }
    }
}
?>