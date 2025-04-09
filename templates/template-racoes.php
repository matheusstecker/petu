<?php

/**
 * Template Name: Rações
 */

get_header();

foreach (get_field('conteudo_de_produtos') as $content) {

?>

    <section class="food-one">
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


<section class="food-two">
    <div class="left">
        <div class="titles">
            <h2>Alimentos Úmidos para Cães</h2>
            <p>Pet.U® Natural é resultado de intensa pesquisa em nutrição de alta qualidade, baseado na utilização de uma grande variedade de ingredientes naturais e cereais integrais, sem corantes e aromatizantes artificiais.</p>
        </div>
        <div class="itens">
            <div class="item">
                <h3>Modo de Usar</h3>
                <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                <p>Para um cão adulto com atividade física normal, servir preferencialmente duas refeições diárias, seguindo a recomendação do guia alimentar. As quantidades indicadas podem ser adaptadas segundo a raça, idade, estado fisiológico, atividade física ou a critério do médico veterinário.</p>
            </div>
            <div class="item">
                <h3>Guia Alimentar</h3>
                <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                <p>Para um cão adulto com atividade física normal, servir preferencialmente duas refeições diárias, seguindo a recomendação do guia alimentar. As quantidades indicadas podem ser adaptadas segundo a raça, idade, estado fisiológico, atividade física ou a critério do médico veterinário.</p>
            </div>
            <div class="item">
                <h3>Composição Básica</h3>
                <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                <p>Para um cão adulto com atividade física normal, servir preferencialmente duas refeições diárias, seguindo a recomendação do guia alimentar. As quantidades indicadas podem ser adaptadas segundo a raça, idade, estado fisiológico, atividade física ou a critério do médico veterinário.</p>
            </div>
            <div class="item">
                <h3>Niveis de Garantia</h3>
                <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                <p>Para um cão adulto com atividade física normal, servir preferencialmente duas refeições diárias, seguindo a recomendação do guia alimentar. As quantidades indicadas podem ser adaptadas segundo a raça, idade, estado fisiológico, atividade física ou a critério do médico veterinário.</p>
            </div>
        </div>
    </div>
    <div class="right">
        <img src="<?php echo _URLTHEME; ?>/assets/img/img-produto-shadow.png" alt="Imagem do Produto">
        <div class="icons">
            <div class="icon">
                <div class="card">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/icone-saude-intestinal.svg" alt="Ícone Saúde Intestinal">
                </div>
                <span>Saúde Intestinal</span>
            </div>
            <div class="icon">
                <div class="card">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/icone-ingrediente-natural.svg" alt="Ícone Ingrediente Natural">
                </div>
                <span>Ingrediente Natural</span>
            </div>
            <div class="icon">
                <div class="card">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/icone-saboroso-saudavel.svg" alt="Ícone Saboroso Saudável">
                </div>
                <span>Saboroso e Saudável</span>
            </div>
        </div>
    </div>
</section>

<section class="food-three">
    <div class="left">
        <img src="<?php echo _URLTHEME; ?>/assets/img/img-produto-shadow.png" alt="Imagem do Produto">
        <div class="icons">
            <div class="icon">
                <div class="card">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/icone-saude-intestinal.svg" alt="Ícone Saúde Intestinal">
                </div>
                <span>Saúde Intestinal</span>
            </div>
            <div class="icon">
                <div class="card">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/icone-ingrediente-natural.svg" alt="Ícone Ingrediente Natural">
                </div>
                <span>Ingrediente Natural</span>
            </div>
            <div class="icon">
                <div class="card">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/icone-saboroso-saudavel.svg" alt="Ícone Saboroso Saudável">
                </div>
                <span>Saboroso e Saudável</span>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="titles">
            <h2>Alimentos Úmidos para Cães</h2>
            <p>Pet.U® Natural é resultado de intensa pesquisa em nutrição de alta qualidade, baseado na utilização de uma grande variedade de ingredientes naturais e cereais integrais, sem corantes e aromatizantes artificiais.</p>
        </div>
        <div class="itens">
            <div class="item">
                <h3>Modo de Usar</h3>
                <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                <p>Para um cão adulto com atividade física normal, servir preferencialmente duas refeições diárias, seguindo a recomendação do guia alimentar. As quantidades indicadas podem ser adaptadas segundo a raça, idade, estado fisiológico, atividade física ou a critério do médico veterinário.</p>
            </div>
            <div class="item">
                <h3>Guia Alimentar</h3>
                <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                <p>Para um cão adulto com atividade física normal, servir preferencialmente duas refeições diárias, seguindo a recomendação do guia alimentar. As quantidades indicadas podem ser adaptadas segundo a raça, idade, estado fisiológico, atividade física ou a critério do médico veterinário.</p>
            </div>
            <div class="item">
                <h3>Composição Básica</h3>
                <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                <p>Para um cão adulto com atividade física normal, servir preferencialmente duas refeições diárias, seguindo a recomendação do guia alimentar. As quantidades indicadas podem ser adaptadas segundo a raça, idade, estado fisiológico, atividade física ou a critério do médico veterinário.</p>
            </div>
            <div class="item">
                <h3>Niveis de Garantia</h3>
                <img src="<?php echo _URLTHEME; ?>/assets/img/icone-seta.svg" alt="Ícone Seta">
                <p>Para um cão adulto com atividade física normal, servir preferencialmente duas refeições diárias, seguindo a recomendação do guia alimentar. As quantidades indicadas podem ser adaptadas segundo a raça, idade, estado fisiológico, atividade física ou a critério do médico veterinário.</p>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>