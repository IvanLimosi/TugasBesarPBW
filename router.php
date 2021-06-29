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
            case $baseURL.'/logout':
                require_once "Controller/UserController.php";
                $userCtrl = new UserController();
                echo $userCtrl->logout();
                break;
            case $baseURL.'/signupDriver':
                require_once "Controller/DriverController.php";
                $driverCtrl = new DriverController();
                echo $driverCtrl->view_daftar_driver();
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
            case $baseURL.'/loginCust':
                require_once "controller/UserController.php";
                $userCtrl = new UserController();
                echo $userCtrl->loginUser();
                break;
            case $baseURL.'/daftarDriver':
                require_once "controller/DriverController.php";
                $driverCtrl = new DriverController();
                echo $driverCtrl->addNewDriver();
                break;
            case $baseURL.'/kirimBarang':
                require_once "controller/KirimBarangController.php";
                $brgCtrl = new KirimBarangController();
                echo $brgCtrl->addNewDriver();
                break;
            default:
                
                echo '404 Not Found';
                break;
        }
    }
?>