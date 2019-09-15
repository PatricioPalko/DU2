<?php
$page_name = basename($_SERVER['SCRIPT_NAME'], '.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nightfury</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&amp;subset=latin,latin-ext">
<!--    <link rel="stylesheet" href="asset/css/font-awesome.css">-->
    <link rel="stylesheet" href="asset/css/normalize.css">
    <link rel="stylesheet" href="asset/css/style.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="/asset/js/jquery-2.1.1.min.js"></script>
</head>
<body>

<header>
    <div class="contact-bar">
        <div class="container">
            <ul class="menu personal">
                <li><i class="fa fa-phone"></i><a href="tel:+421900111222">+421 900 111 222</a></li>
                <li><i class="fa fa-envelope"></i><a href="mailto:email@mailinator.com">email@mailinator.com</a></li>
            </ul>
            <ul class="menu social">
                <li><a href="#" class="social-icon"><i class="fa fa-github"></i></a></li>
                <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="nav-bar">
        <div class="container">
            <h1 class="logo">
                <a href="#">
                    <strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
                </a>
            </h1>

            <nav class="group">
                <ul class="menu navigation">

<!--                    --><?php
//
//                        $pages = glob('*.php');
//
//                        foreach ($pages as $file) {
//
//                            $page = basename($file, '.php');
//                            if ($page == 'index') $page = 'home';
//
//                            if ($page_name == $page) echo '<li><a href="'. $file .'">'. ucfirst($page) .'</a></li>';
//                        }
//
//                    ?>


                </ul>
            </nav>
        </div>
    </div>
</header>

<main>