<?php
session_start();
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

class AdminController{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }
    public function loginAdmin(){
        $username = $_POST['iUsername'];
        $pass = $_POST['iPassword'];
        $_SESSION['username'] = $username;

        if(isset($username)&&$username!=""){
            $username = $this->db->escapeString($username);
            $password = $this->db->escapeString($pass);
            $query = "SELECT username,password from admin where username = '$username' and  password = '$pass'";
            $res = $this->db->executeSelectQuery($query);
            if (count($res)==1) {
                $_SESSION['isLogin']=true;
                $_SESSION['role'] = "admin";
                // echo $_SESSION['isLogin'];
                // echo $_SESSION['role'];
                // die;
                header('Location: home');
            }else{
                header('Location: LoginAdmin');
            }
        }else{
            header('Location: LoginAdmin');
        }
    }
}
?>