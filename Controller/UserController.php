
<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/services/view.php";

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
            $query = "INSERT INTO users (username, password) VALUES ('$username','$password')"
            $this->db->executeNonSelectQuery($query);
            header('Location: home');
        }else {
            alert("Username atau Password masih salah");
        }
    }
}
?>