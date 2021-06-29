<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class DriverController{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }
    public function view_login_driver(){
        return View::createView('LoginDriver.php',[]);
    }
    public function view_daftar_driver(){
        return View::createView('signupDriver.php',[]);
    }
    public function addNewDriver(){
        $username = $_POST['iUsername'];
        $nama = $_POST['iNama'];
        $password = $_POST['iPass'];
        $_SESSION['username'] = $username;
        if(isset($username) && $username != ""){
            $username = $this->db->escapeString($username);
            $nama = $this->db->escapeString($nama);
            $password = $this->db->escapeString($password);
            $query = "INSERT INTO datadriver (username, nama, password) VALUES ('$username','$nama','$password')";
            $this->db->executeNonSelectQuery($query);
            header('Location: home');
        }else {
            alert("Username atau Password masih salah");
        }
    }
}
?>