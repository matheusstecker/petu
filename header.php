<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <a href="<?php echo get_home_url(); ?>" class="logo">
            <img src="<?php echo _URLTHEME; ?>/assets/img/logo-branca.svg" alt="Logo PetU">
        </a>
    </header>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'main_menu', 'container_id' => 'menu')); ?>
        <button class="menu-mb" id="menu-mb" style="display: none;">
            <span class="um"></span>
            <span class="dois"></span>
            <span class="tres"></span>
            <span class="quatro"></span>
        </button>
    </nav>