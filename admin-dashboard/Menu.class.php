<?php
namespace AdminDashboard;

require_once "Admin.class.php";
require_once realpath(dirname(__FILE__) . "/DataBase.php");
use DataBase\DataBase;

class Menu extends Admin
{

    public function index()
    {
        $db = new DataBase();
        $menus = $db->select('SELECT * FROM `menus` ORDER BY `id` DESC ;');
        require_once realpath(dirname(__FILE__) . "/../template/admin/menus/index.php");

    }

    public function show($id)
    {
        $db = new DataBase();
        $menu = $db->select("SELECT * FROM `menus` WHERE (`id` = ?); ", [$id])->fetch();
        require_once realpath(dirname(__FILE__) . "/../template/admin/menus/show.php");

    }

    public function create()
    {
        $db = new DataBase();
        $menus = $db->select("SELECT * FROM `menus` WHERE `parent_id` IS NULL ;");
        require_once realpath(dirname(__FILE__) . "/../template/admin/menus/create.php");

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
