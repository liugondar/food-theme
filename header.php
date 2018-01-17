<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Omni Food</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/Vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/Vendors/grid.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <!-- fontawsome -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/Vendors/css/font-awesome-4.7.0/css/font-awesome.min.css">
  <style>
    header{
    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("/wp-content/themes/food-theme/images/hero.jpg");
    background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("<?php bloginfo('stylesheet_directory')?>/images/hero.jpg");
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("<?php bloginfo('stylesheet_directory')?>/images/hero.jpg");
    }

    .section-testimonials{
    background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url(<?php bloginfo('stylesheet_directory')?>/images/back-customers.jpg);
    }

    body{
    background-image: url("<?php bloginfo('stylesheet_directory')?>/images/generic-bg.jpg");
    }
  </style>
</head>
<?php wp_head() ;?>
<body>
    <header>
        <div class="container">
                 <a href="<?php echo esc_url(home_url( '/')) ;?>">
                    <img class="logo-white" src="<?php bloginfo('stylesheet_directory')?>/images/logo-white.png" alt="Logo">
                </a> 
                <?php wp_nav_menu( array(
                    'theme_location'=>'primary',
                    'menu_class'=>'main-nav'
                ) ) ;?>
            <section class="welcome">
                <h1>
                    Goodbye junk food. Hello super healthy meals.</h1>
                <div class="show-button">
                    <a class="welcome-button btn-full" href="#">
                        I'm hungry
                    </a>
                    <a class="welcome-button btn-ghost" href="#">
                        Show me more
                    </a>
                </div>
            </section>
        </div>
    </header>
    <div class="clr"></div>