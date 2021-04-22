<?php
require_once ("admin-dashboard/Category.class.php");
require_once ("admin-dashboard/CreateDB.php");
use AdminDashboard\Category;
use  DataBase\CreateDB;



























//category
uri('category','Category','index');
uri('category/show/{id}','Category','show');
uri('category/create','Category','create');
uri('category/store','Category','store','POST');
uri('category/edit/{id}','Category','edit');
uri('category/update/{id}','Category','update','POST');
uri('category/delete/{id}','Category','delete');















