<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>


</head>

<header>
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="http://35.234.60.208/">
                <img src="http://localhost/wordpress/wp-content/uploads/2021/05/banner-logo.png" alt="" width="auto" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link navbar-item2" href="#" id="myBtn">認識協會</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/wordpress/%e5%8d%94%e6%9c%83%e6%9c%8d%e5%8b%99/">協會服務</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/wordpress/%e7%94%9f%e5%91%bd%e6%95%85%e4%ba%8b/">生命故事</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://510.org.tw/donations/ASWCx1?" target="_blank">
                            <button class="btn btn-primary" type="submit">立即支持</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body <?php body_class(); ?>>