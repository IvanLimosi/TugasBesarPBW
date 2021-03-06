<?php
session_start();
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
    public function view_daftar(){
        return View::createView('signup.php',[]);
    }
    public function view_login_admin(){
        return View::createView('LoginAdmin.php',[]);
    }
    public function view_login_driver(){
        return View::createView('LoginDriver.php',[]);
    }
    public function view_kirim(){
        if (isset($_SESSION['isLogin'])&&$_SESSION['role'] == 'admin') {
            return View::createView('KirimBarang.php',[]);
        }else{
            return View::createView('Login.php',[]);
        }
    }
}
?>