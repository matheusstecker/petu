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
get_footer();
?>