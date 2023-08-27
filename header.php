<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,minimun-scale=1.0">
    
    <title>
        <?php if(is_home()){
            echo get_bloginfo('name');
        } else if(is_single()){
            echo the_title();
        } else{
            echo get_bloginfo('name');
        }?>
    </title>

    <?php wp_head();?>

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/estilos.css">
</head>
<body>
    <header>
       <div class="container">
        <div class="row">
            <div class="logo col-xs-12 col-sm-6">
                <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/img/33e63d5adb0da6b303a83901c8e8463a.png" alt="Pilar Logo"></a>
            </div>    
            <div class="redes-sociales col-xs-12 col-sm-6">
                <a class="youtube" href="http://www.youtube.com"><i class="fa-brands fa-youtube"></i> </a>
                <a class="facebook" href="http://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                <a class="twitter" href="http://www.twitter.com"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>   
       </div>
       <nav class="menu">
        <div class="container">
            <div class="row">
                <ul class="col-md-12">
                    <li><a href="#">OFERTA</a></li>
                    <li><a href="#">ACERCA DE</a></li>
                    <li><a href="#">CONTACTO</a></li>
                    <li><a href="#">GALERIA</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="ad container hidden-xs">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php bloginfo('template_url');?>/img/ad.jpg" alt="ad">
            </div>
        </div>
    </div>

    </header>