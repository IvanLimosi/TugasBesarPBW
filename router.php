<?php
    $url = $_SERVER['REDIRECT_URL'];
    $baseURL = '/TugasBesarPBW';

    if($_SERVER["REQUEST_METHOD"] == "GET"){
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