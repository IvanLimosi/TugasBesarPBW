
<?php
session_start();
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";
require_once "model/user.php";

class UserController{
    protected $db;

    public function __construct()
    {
        $this->db = new MySQLDB("localhost", "root", "", "delivery");
    }

    public function usernameChecker()
    {
        $username = $_POST['username'] ? $_POST['username'] : '';
        $query    = "SELECT COUNT(*) AS countUsername FROM users WHERE username = '$username'";
        $result   = $this->db->executeSelectQuery($query);
        
        if ($result[0]['countUsername'] >= 1 || strlen($username)>8) {
            echo "Username Tidak Tersedia";
        } else {
            echo "Username Tersedia";
        }
    }
    
    public function addNewUser(){
        $username = $_POST['iUsername'];
        $password = $_POST['iPass'];
        $_SESSION['username'] = $username;
        if(isset($username) && $username != ""){
            $username = $this->db->escapeString($username);
            $password = $this->db->escapeString($password);
            $query = "INSERT INTO users (username, password) VALUES ('$username','$password')";
            $this->db->executeNonSelectQuery($query);
            header('Location: home');
        }else {
            alert("Username atau Password masih salah");
        }
    }

    public function loginUser(){
        $username = $_POST['iUsername'];
        $pass = $_POST['iPassword'];
        $_SESSION['username'] = $username;
        
        if(isset($username) && $username != ""){
            $username = $this->db->escapeString($username);
            $password = $this->db->escapeString($pass);
            $query = "SELECT username, password FROM users WHERE username = '$username' AND password = '$pass'";
            $res = $this->db->executeSelectQuery($query);
            if (count($res)==1) {
                $_SESSION['isLogin']=true;
                $_SESSION['role'] = "member";
                // echo $_SESSION['isLogin'];
                // echo $_SESSION['role'];
                // die;
                header('Location: home');
            }else{
                header('Location: LoginCust');
            }
            // header('Location: home');
        }else {
            header('Location: LoginCust');
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        header('Location: home');
    }
}
?>