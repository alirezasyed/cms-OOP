<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $setting['title']; ?></title>


    <link href="http://localhost/cms-php/public/css/app/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

<section class="app">

    <header>

        <nav class="header">

            <img class="header-logo" src="http://localhost/cms-php/<?php echo $setting['logo'] ?>" alt="">
            
            <button class="header-menu-burger" onclick="showMenu()" type="button"><i class="fas fa-bars"></i></button>

            <ul class="header-menu" id="menu">

            <?php foreach($menus as $menu) {?>
                <li class="header-menu-item"><?php if($menu['parent_id']== null){ ?> <a class="header-menu-item-link"  href="<?php echo $menu['url'] ?>"><?php echo $menu['name'] ?></a><?php }?>
                <?php if($menu['submenu_count'] > 0) {?>
                    <span>
                        <?php foreach($submenus as $submenu) {
                            if($submenu['parent_id'] == $menu['id']){
                                ?>
                        <a href="<?php echo $submenu['url'] ?>"><?php echo $submenu['name'] ?></a>
                        <?php }} ?>
                    </span>
                            <?php }?>
                </li>
                <?php } ?>
            </ul>


        </nav><!--fin de la barre de navigation--> 

    </header><!--fin d'en-tête-->