<?php

/**
 * Template Name: Rações
 */

get_header();
?>

<section class="food-main">

<?php
$fundo = ' azul';
foreach (get_field('conteudo_de_produtos') as $content) {

if ($content['estilo_de_exibicao'] == 'img_dir') {

    $class='food-two';

} else {
    $class = 'food-one';
}

if ($content['cor_fundo'] == 'azul_verde') {

    $fundo = ' verde';

} elseif ($content['cor_fundo'] == 'verde_azul') {

    $fundo = ' verde-azul';

}


?>


    <section class="<?php echo $class; echo $fundo; ?>">
        <div class="left">
            <div class="img-product">
                <img src="<?php echo $content['imagem_produto']; ?>" alt="Imagem do Produto">
            </div>
            <div class="icons">
                <?php
                foreach ($content['icones'] as $content_icons) {
                ?>
                    <div class="icon">
                        <div class="card">
                            <img src="<?php echo $content_icons['imagem_icone']; ?>" alt="Ícone Super Premium">
                        </div>
                        <span><?php echo $content_icons['nome_icone']; ?></span>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="right">
            <div class="titles">
                <h2><?php echo $content['nome_produto']; ?></h2>
                <p><?php echo $content['descricao_produto'];; ?></p>
            </div>
            <div class="itens">
                <?php
                foreach ($content['caracteristicas_produto'] as $content_features) {
                ?>
                    <div class="item">
                        <h3><?php echo $content_features['nome_caracteristica']; ?></h3>
                        <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                        <p><?php echo $content_features['descricao_caracteristica']; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php

}

?>
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