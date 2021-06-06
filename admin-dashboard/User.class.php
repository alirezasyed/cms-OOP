<?php
namespace AdminDashboard;
require_once ("Admin.class.php");
 require_once (realpath(dirname(__FILE__) . "/DataBase.php"));
 use DataBase\DataBase;

 class User extends Admin{

    public function index(){
        $db= new DataBase();
        $users=$db->select('SELECT * FROM `users` ORDER BY `id` DESC ;');
        require_once (realpath(dirname(__FILE__). "/../template/admin/users/index.php"));
    }

    public function permission($id){
        $db= new DataBase();
        $user = $db->select("SELECT * FROM `users` WHERE (`id` = ?); ",[$id])->fetch();
        if($user['permission'] == 'admin'){
            $db->update('users',$id,['permission'],['user']);

        }
        else{
            $db->update('users',$id,['permission'],['admin']);

        }
        $this->redirectBack();

    }

  


 }





?>