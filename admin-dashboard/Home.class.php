<?php
namespace AdminDashboard;

require_once(realpath(dirname(__FILE__) . "/DataBase.php"));
use DataBase\DataBase;
class Home {
    
    public function index()
    {
        $db = new DataBase();
        $articles = $db->select("SELECT articles.*, (SELECT COUNT(*) FROM comments WHERE comments.article_id = articles.id) AS comments_count, (SELECT username FROM users WHERE users.id = articles.user_id) AS username FROM articles  ORDER BY `created_at` DESC LIMIT 0,6 ;")->fetchAll();

        $popularArticles = $db->select("SELECT articles.*, (SELECT COUNT(*) FROM comments WHERE comments.article_id = articles.id) AS comments_count, (SELECT username FROM users WHERE users.id = articles.user_id) AS username FROM articles  ORDER BY `view` DESC LIMIT 0,4 ;")->fetchAll();

        $sidebarPopularArticles = $popularArticles;
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