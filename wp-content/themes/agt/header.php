<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&display=swap" rel="stylesheet">
    <title>ага тех</title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    
  </head>
  <body style="background-color: #004085;">
   
<header class="asd">
        <div class="header">
            <div class="header__logo">
               <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="LOGO">
            </div>

            <div class="header__menu">

                <nav>
<?php 
wp_nav_menu(array(
    'container' => false,
    'menu_class' => 'header__menu',
    'echo' => true,
    'before' => '<div class="header__menu_link" id="header__menu_link_first">',
    'after' => '</div>',
    'link_before' => '',
    'link_after' => '',
    'depth' => 0,
    'walker' => new description_walker())
);
?>

             </nav>
            </div>
         
        <div class="header__lang">
           <a href="#">English</a>
        </div>
         
      </div>

      
      
   </header>
   <!-- /.header -->