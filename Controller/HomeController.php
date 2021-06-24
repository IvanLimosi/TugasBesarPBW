<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class HomeController{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }

    public function view_home(){
        return View::createView('home.php',[]);
    }
    
    public function view_login(){
        return View::createView('Login.php',[]);
    }
    public function view_login_cust(){
        return View::createView('LoginCust.php',[]);
    }
}
?>