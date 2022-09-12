<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" />
 </head>
<header>
    <nav class="nav__container">
        
            <div class="nav__brand">            
                <a class="nav__brand--link" href="<?php echo esc_url(home_url('/')); ?>"><img class="nav__brand--image" src="<?php echo bloginfo('template_directory'); ?>/assets/images/logo.svg" />
           </a> </div>
        
        <div>
            <ul id="menu">
                <li><a class="nav-item" href="#mission">Mission</a></li>
                <li><a class="nav-item" href="#product">About the product</a></li>
                <li><a class="nav-item" href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="nav__switch__language">
            <div>pl</div>
            <div>en</div>
        </div>
        <div class="burger__wrapper">
            <button id="burger" class="burger" onclick="this.classList.toggle('active');"></button>
        </div>
    </nav>
</header>