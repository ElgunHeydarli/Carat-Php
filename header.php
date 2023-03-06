<?php
require_once 'admin/baglanti.php';
require_once 'function.php';
$ayarsor=$baglanti->prepare("SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$hakkimizdasor=$baglanti->prepare("SELECT * FROM hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

$slidersor=$baglanti->prepare("SELECT * FROM slider where slider_id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);


 ?>



<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo $ayarcek['ayar_baslik'] ?></title>
    <meta name="description" content="<?php echo $ayarcek ['ayar_aciklama'] ?>">
<meta name="keywords" content="<?php echo $ayarcek['ayar_anahtar'] ?>">
<meta name="google-site-verification" content="i86asMPyYYmYo3APudRJKXXIdT19oKf2Yi5jmZB7nnk" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-144098545-1');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader"></div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
       
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
<a href="index"><img class="sss" style="width:135px;position:relative;top:10px;" src="12.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link " href="index">Əsas səhifə</a></li>
                         <li class="nav-item"><a class="nav-link " href="about">Haqqımızda</a></li>
                <li class="nav-item"><a class="nav-link " href="services">Xidmətlərimiz</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Əlaqə</a></li>
            </ul>
        </div>
        </div>
    </nav>