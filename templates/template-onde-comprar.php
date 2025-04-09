<?php

/**
 * Template Name: Onde Comprar
 */

get_header();

?>

<section class="where-buy">
    <div class="titles">
        <h1>Onde comprar Pet.U</h1>
        <p>Veja onde encontrar nossos produtos Pet.U em lojas oficiais.</p>
    </div>
    <div class="store-online">
        <h2>Compre agora online!</h2>

        <?php

        foreach (get_field('loja_online') as $content_store_online) {

        ?>
            <div class="store">
                <a href="<?php echo $content_store_online['link_loja']; ?>" target="_blank">
                    <img src="<?php echo $content_store_online['logo_loja']; ?>" alt="Logo Fãs de Pet">
                </a>
            </div>
        <?php

        }

        ?>
    </div>
    <div class="physical-store">
        <h2>Compre em lojas físicas parceiras!</h2>

        <?php

        foreach (get_field('loja_fisica') as $content_store_physical) {

        ?>

            <div class="store">
                <div class="left">
                    <img src="<?php echo $content_store_physical['imagem_loja']; ?>" alt="Imagem Loja Física">
                </div>
                <div class="right">
                    <?php
                    
                    if (!empty($content_store_physical['nome_loja'])) {
                    
                    ?>
                    <h3><?php echo $content_store_physical['nome_loja']; ?></h3>
                    <?php
                    }
                    ?>
                    <ul>
                        <?php

                        if (!empty($content_store_physical['endereco_loja'])) {

                        ?>
                            <li><a href="<?php echo $content_store_physical['link_endereco_loja']; ?>"><strong>Endereço:</strong> <?php echo $content_store_physical['endereco_loja']; ?></a></li>
                        <?php 
                        }
                        
                        if (!empty($content_store_physical['telefone_loja'])) {

                        ?>
                        <li><a href="tel:<?php echo $content_store_physical['telefone_loja']; ?>"><strong>Telefone:</strong> <?php echo $content_store_physical['telefone_loja']; ?></a></li>
                        <?php 
                        }

                        if (!empty($content_store_physical['horario_funcionamento_loja'])) {
                        ?>
                        <li>
                            <p><strong>Horário de funcionamento:</strong> <?php echo $content_store_physical['horario_funcionamento_loja']; ?></p>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

        <?php

        }

        ?>
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