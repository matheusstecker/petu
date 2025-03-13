<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="header-nav">
        <header>
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <img src="<?php echo _URLTHEME; ?>/assets/img/logo-branca.svg" alt="Logo PetU">
            </a>
            <button class="menu-mb" id="menu-mb">
                <span class="um"></span>
                <span class="dois"></span>
            </button>
        </header>
        <nav class="">
            <?php wp_nav_menu(array('theme_location' => 'main_menu', 'container_id' => 'menu')); ?>
        </nav>
    </div>