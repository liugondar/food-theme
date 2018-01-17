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
</head>
<?php wp_head() ;?>
<body>
    <header>
        <div class="container">
                 <a href="/">
                    <img class="logo-white" src="<?php bloginfo('stylesheet_directory')?>/logo-white.png" alt="Logo">
                </a> 
                    <ul class="main-nav">
                        <li>
                            <a href="/omni-food/index.php">Food Delivery</a>
                        </li>
                        <li>
                            <a href="#">How it Works</a>
                        </li>
                        <li>
                            <a href="#">our cites</a>
                        </li>
                        <li>
                            <a href="#">sign up</a>
                        </li>
                    </ul>
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