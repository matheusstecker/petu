<?php

/**
 * Template Name: Contato
 */
get_header();
?>

<section class="contact">
    <div class="titles">
        <h1>Fale Conosco</h1>
        <p>Preencha o formulário abaixo para entrar em contato conosco ou utilize outra forma de contato</p>
    </div>
    <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="1a96ebe" title="Fale Conosco"]'); ?>
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