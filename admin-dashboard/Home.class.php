<?php
namespace AdminDashboard;

require_once(realpath(dirname(__FILE__) . "/DataBase.php"));
use DataBase\DataBase;
class Home {
    
    public function index()
    {
        
    }

    public function show($id){

    }

    public function category($id){
        
    }

    public function commentStore($request)
    {
        
    }

    protected function redirectBack(){
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    
}