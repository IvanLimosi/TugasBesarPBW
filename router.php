<?php
    $url = $_SERVER['REDIRECT_URL'];
    $baseURL = '/TugasBesarPBW';

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        switch ($url) {
            case $baseURL.'/home':
                require_once "Controller/HomeController.php";
                $pageCtrl = new HomeController();
                echo $pageCtrl->view_home();
                break;
            case $baseURL.'/Login':
                require_once "Controller/HomeController.php";
                $pageCtrl = new HomeController();
                echo $pageCtrl->view_login();
                break;
            case $baseURL.'/LoginCust':
                require_once "Controller/HomeController.php";
                $pageCtrl = new HomeController();
                echo $pageCtrl->view_login_cust();
                break;
            case $baseURL.'/daftar':
                require_once "Controller/HomeController.php";
                $pageCtrl = new HomeController();
                echo $pageCtrl->view_daftar();
                break;
            case $baseURL.'/LoginAdmin':
                require_once "Controller/HomeController.php";
                $pageCtrl = new HomeController();
                echo $pageCtrl->view_login_admin();
                break;
            case $baseURL.'/LoginDriver':
                require_once "Controller/HomeController.php";
                $pageCtrl = new HomeController();
                echo $pageCtrl->view_login_driver();
                break;
            case $baseURL.'/kirim': //belum dikasih if udah login atau belum login.
                require_once "Controller/HomeController.php";
                $pageCtrl = new HomeController();
                echo $pageCtrl->view_kirim();
                break;
            default:
                echo '404 Not Found';
                break;
        }
    }else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        switch ($url) {
            case $baseURL.'/signup':
               
                require_once "controller/UserController.php";
                $userCtrl = new UserController();
                echo $userCtrl->addNewUser();
                break;
            
            default:
                
                echo '404 Not Found';
                break;
        }
    }
?>