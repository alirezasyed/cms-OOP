<?php
namespace AdminDashboard;
require_once ("Admin.class.php");
 require_once (realpath(dirname(__FILE__) . "/DataBase.php"));
 use DataBase\DataBase;
 class WebSetting extends Admin {

    public function index(){
        $db= new DataBase();
        $setting= $db->select("SELECT * FROM `websetting`;")->fetch();
        require_once (realpath(dirname(__FILE__). "/../template/admin/web-setting/index.php"));
    }
    
 }