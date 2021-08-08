<?php
namespace DataBase;

require_once (realpath(dirname(__FILE__) . "/DataBase.php"));

class CreateDB extends DataBase
{
    private $createTableQueries = array(
        "CREATE TABLE `categories` (
          `id` int(11) NOT NULL AUTO_INCREMENT ,
          `name` varchar(200) NOT NULL,
          `created_at` datetime NOT NULL,
          `updated_at` datetime DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;",

        "CREATE TABLE `users` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `username` varchar(100) NOT NULL,
          `email` varchar(100) NOT NULL,
          `password` varchar(100) NOT NULL,
          `permission` enum('user','admin') NOT NULL DEFAULT 'user',
          `created_at` datetime NOT NULL,
          `updated_at` datetime DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `email` (`email`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;",

        "CREATE TABLE `articles` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `title` varchar(200) NOT NULL,
          `summary` text NOT NULL,
          `body` text NOT NULL,
          `view` int(11) NOT NULL DEFAULT '0',
          `user_id` int(11)  NOT NULL,
          `cat_id` int(11)  NOT NULL,
          `image` varchar(200) NOT NULL,
          `status` enum('disable','enable') NOT NULL DEFAULT 'disable',
          `created_at` datetime NOT NULL,
          `updated_at` datetime DEFAULT NULL,
          PRIMARY KEY (`id`),
          FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
          FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;",

        "CREATE TABLE `comments` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `user_id` int(11) NOT NULL,
          `comment` text NOT NULL,
          `article_id` int(11)  NOT NULL,
          `status` enum('unseen','seen','approved') NOT NULL DEFAULT 'unseen',
          `created_at` datetime NOT NULL,
          `updated_at` datetime DEFAULT NULL,
          PRIMARY KEY (`id`),
          FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
          FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;",

        "CREATE TABLE `websetting` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `title` text DEFAULT NULL,
          `description` text DEFAULT NULL,
          `keywords` text DEFAULT NULL,
          `logo` text DEFAULT NULL,
          `icon` text DEFAULT NULL,
          `created_at` datetime NOT NULL,
          `updated_at` datetime DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ",

        "CREATE TABLE `menus` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `name` varchar(100) NOT NULL,
          `url` varchar(300) NOT NULL,
          `parent_id` int(11) DEFAULT NULL,
          `created_at` datetime NOT NULL,
          `updated_at` datetime DEFAULT NULL,
          PRIMARY KEY (`id`),
          FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
        ",
    );

    private $tableInitializes = array(

        ['table'=>'users', 'fields'=>['username', 'email', 'password', 'permission'], 'values'=>['kam', 'kam@gmail.com', '$2y$10$X2IX2Qgf1DuSo9aVsvRgqeB3Wf1m1rU8gmpX3d1FA/rFrNLB5NWve', 'admin']],

    );
    

    public function run()
    {
        foreach ($this->createTableQueries as $createTableQuery){
            $this->createTable($createTableQuery);
        }
        foreach ($this->tableInitializes as $tableInitialize){
            $this->insert($tableInitialize['table'], $tableInitialize['fields'], $tableInitialize['values']);
        }
    }




}








