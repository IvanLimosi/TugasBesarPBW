<?php
    $url = $_SERVER['REDIRECT_URL'];
    $baseURL = '/file2/T0818032';

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        switch ($url) {
            case $baseURL.'/index':
                require_once "controller/bookController.php";
                $bookCtrl = new bookController();
                echo $bookCtrl->view_book();
                break;
            case $baseURL.'/deleteBuku':
                require_once "controller/bookController.php";
                $bookCtrl = new bookController();
                echo $bookCtrl->delete_book();
                header('location:index');
                break;
            case $baseURL.'/rentPage':
                require_once "controller/bookController.php";
                $bookCtrl = new bookController();
                echo $bookCtrl->view_rent();
                break;
            case $baseURL.'/add':
                require_once "controller/bookController.php";
                $bookCtrl = new bookController();
                echo $bookCtrl->view_add();
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