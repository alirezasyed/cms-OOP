<?php
namespace AdminDashboard;

class Admin{
    protected function redirect($url){
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https')=== true ? 'https://' : 'http://';
        header("Location: " . $protocol . $_SERVER['HTTP_HOST'] . "/cms-php/" . $url);

    }


    protected function redirectBack(){
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}
