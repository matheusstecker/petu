<?php

/**
 * Template Name: Sobre Nós
 */
get_header();

// ACF ABOUT
$title_about = get_field('title_about');
$text_about = get_field('text_about');
$link_header = get_field('link_header');

?>

<section class="about">
    <div class="titles">
        <h1><?php echo $title_about; ?></h1>
        <p><?php echo $text_about; ?></p>
    </div>
    <div class="cards">
        <div class="card">
            <div class="icon">
                <img src="<?php echo _URLTHEME; ?>/assets/img/nossa-missao.svg" alt="Ícone Nossa Missão">
            </div>
            <div class="content">
                <h4>Nossa Missão</h4>
                <p>Nossa missão é oferecer produtos de alta qualidade, que vão desde ração e acessórios até brinquedos e produtos de cuidados, sempre com um toque especial de carinho e dedicação. Queremos que você encontre tudo o que seu pet precisa em um só lugar, com a praticidade de um e-commerce confiável e com atendimento excepcional.</p>
            </div>
        </div>
        <div class="card first">
            <div class="icon">
                <img src="<?php echo _URLTHEME; ?>/assets/img/nossos-valores.svg" alt="Ícone Nossos Valores">
            </div>
            <div class="content">
                <h4>Valores que nos definem</h4>
                <ul>
                    <li>- Compromisso com a Qualidade: Só oferecemos produtos que acreditamos ser os melhores para o seu pet.</li>
                    <li>- Atendimento Personalizado: Estamos aqui para ouvir e ajudar, oferecendo um  atendimento que faz a diferença.</li>
                    <li>- Transparência e Confiança: Valorizamos a honestidade e buscamos construir relações duradouras com nossos clientes.</li>
                    <li>- Amor pelos Animais: Nosso amor pelos pets é o que nos motiva a fazer sempre o melhor.</li>
                </ul>

            </div>
        </div>
        <div class="card">
            <div class="icon">
                <img src="<?php echo _URLTHEME; ?>/assets/img/nos-move.svg" alt="Ícone Nos Move">
            </div>
            <div class="content">
                <h4>O que nos move</h4>
                <p>Acreditamos que um pet feliz é um pet saudável, e por isso, trabalhamos com as melhores marcas e fornecedores do mercado. Estamos constantemente em busca de inovações e tendências para garantir que você tenha acesso às melhores opções para seu amigo peludo.</p>
            </div>
        </div>
    </div>
</section>

<div class="section-six">
    <div class="content hiddenBlur showBlur">
        <img src="http:///petu.com.br/wp-content/themes/petu/assets/img/icon-pin.svg" alt="Icone Pin">
        <h3>Compre Pet.U online</h3>
        <a class="btn" href="">Clique Aqui</a>
    </div>
</div>

<?php
get_footer();
?>