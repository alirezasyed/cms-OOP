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

    );





}








