<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="shortcut icon" href="http://localhost/cms-php/" type="image/x-icon" />

    <link rel="stylesheet" href="http://localhost/cms-php/public/css/admin/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Bootstrap -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <link href="http://localhost/cms-php/public/css/admin/style.css" rel="stylesheet" type="text/css">

</head>
<body>

    <nav class="navbar  navbar-light bg-gradiant-green-blue nav-shadow">

        <a class="navbar-brand" href="http://localhost/cms-php/admin"></a>
        <span class="">

                    <a class="text-decoration-none px-3 text-dark" href="http://localhost/cms-php/comment"><i class="fas fa-comments"></i> <span class="badge badge-danger"></span> </a>
                <span class="dropdown">
                    <a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost/cms-php/logout">logout</a>
                    </div>
                </span>
        </span>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block pt-3 bg-sidebar sidebar px-0">
                <a class="text-decoration-none d-block py-1 px-2 mt-1" href="http://localhost/cms-php/admin"><i class="fas fa-home"></i> Home</a>
                <a class="text-decoration-none d-block py-1 px-2 mt-1" href="http://localhost/cms-php/category"><i class="fas fa-clipboard-list"></i> Category</a>
                <a class="text-decoration-none d-block py-1 px-2 mt-1" href="http://localhost/cms-php/article"><i class="fas fa-newspaper"></i> Article</a>
                <a class="text-decoration-none d-block py-1 px-2 mt-1" href="http://localhost/cms-php/comment"><i class="fas fa-comments"></i> Comment</a>
                <a class="text-decoration-none d-block py-1 px-2 mt-1" href="http://localhost/cms-php/menu"><i class="fas fa-bars"></i> Menus</a>
                <a class="text-decoration-none d-block py-1 px-2 mt-1" href="http://localhost/cms-php/user"><i class="fas fa-users"></i> User</a>
                <a class="text-decoration-none d-block py-1 px-2 mt-1" href="http://localhost/cms-php/web-setting"><i class="fas fa-tools"></i> Web Setting</a>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
