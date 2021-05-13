<?php 

namespace AdminDashboard;


require_once ("Admin.class.php");
require_once (realpath(dirname(__FILE__) . "/DataBase.php"));


use DataBase\DataBase;


class Article {
    
    public function index()
    {
        $db = new DataBase();

        $articles = $db->select("SELECT * FROM `categories` ORDER BY `id` DESC; ");

        require_once (realpath(dirname(__FILE__). "/../template/admin/articles/index.php"));
    }

    public function show($id)
    {
        $db = new DataBase();

        $article = $db->select("SELECT * FROM `articles` WHERE `id` = ?; ", [$id])->fetch();

        require_once (realpath(dirname(__FILE__). "/../template/admin/articles/show.php"));

    }

    public function create()
    {
        $db= new DataBase();

        $categories = $db->select('SELECT * FROM `categories` ORDER BY `id` DESC ;');
        
        require_once (realpath(dirname(__FILE__). "/../template/admin/articles/create.php"));

    }

    public function store($request)
    {


    }

    public function edit($id)
    {

    }

    public function update($request, $id)
    {

    }

    public function delete($id)
    {
        
    }

}