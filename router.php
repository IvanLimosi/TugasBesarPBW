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
            default:
                echo '404 Not Found';
                break;
        }
    }else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        switch ($url) {
            case $baseURL.'/index':
               
                require_once "controller/bookController.php";
                $bookCtrl = new bookController();
                echo $bookCtrl->view_book();
                break;
            
            default:
                
                echo '404 Not Found';
                break;
        }
    }
?>