<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="header">
        <div class="containerNav container">
            <div class="logo-header-block">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
            </div>
            <div class="btnBurgerMenu">
                <span class="buger1">|</span>
                <span class="buger2">|</span>
                <span class="buger3">|</span>
            </div>

            <nav class="menuHeader">
                <?php
                wp_nav_menu(array('theme_location' => 'main', 'container' => 'ul', 'menu_class' => 'menuTopBaseSud',));
                ?>
            </nav>
        </div>
    </header>

    <div class="Main_container" id="main">