<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class LoginController{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }

    public function view_login(){
        return View::createView('Login.php',[]);
    }
}
?>