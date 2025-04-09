<?php

/**
 * Template Name: Sobre Nós
 */
get_header();

?>

<section class="about">
    <div class="titles">
        <h1><?php echo get_field('titulo'); ?></h1>
        <div><?php echo get_field('descricao'); ?></div>
    </div>
    <div class="cards">
        <div class="card">
            <div class="icon">
                <img src="<?php echo _URLTHEME; ?>/assets/img/nossa-missao.svg" alt="Ícone Nossa Missão">
            </div>
            <div class="content">
                <h4>Nossa Missão</h4>
                <div><?php echo get_field('nossa_missao'); ?></div>
            </div>
        </div>
        <div class="card first">
            <div class="icon">
                <img src="<?php echo _URLTHEME; ?>/assets/img/nossos-valores.svg" alt="Ícone Nossos Valores">
            </div>
            <div class="content">
                <h4>Valores que nos definem</h4>
                <div><?php echo get_field('valores'); ?></div>
            </div>
        </div>
        <div class="card">
            <div class="icon">
                <img src="<?php echo _URLTHEME; ?>/assets/img/nos-move.svg" alt="Ícone Nos Move">
            </div>
            <div class="content">
                <h4>O que nos move</h4>
                <div><?php echo get_field('nos_move'); ?></div>
            </div>
        </div>
    </div>
</section>

<?php

if (get_field('exibir_nessa_pagina') == 'sim') {

?>

<div class="section-six">
    <div class="content hiddenBlur showBlur">
        <img src="<?php echo _URLTHEME; ?>/assets/img/icon-pin.svg" alt="Icone Pin">
        <h3>Compre Pet.U online</h3>

        <?php 
        
        if(!empty(get_field('link_da_pagina'))) {
        
        ?>
        <a class="btn" href="<?php echo get_field('link_da_pagina'); ?>">Clique Aqui</a>
        <?php 
        
        }
        
        ?>
    </div>
</div>

<?php
}

get_footer();
?>