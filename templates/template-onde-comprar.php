<?php

/**
 * Template Name: Onde Comprar
 */

get_header()
?>

<section class="where-buy">
    <div class="titles">
        <h1>Onde comprar Pet.U</h1>
        <p>Veja onde encontrar nossos produtos Pet.U em lojas oficiais.</p>
    </div>
    <div class="store-online">
    <h2>Compre agora online!</h2>
        <div class="store">
            <a href="https://www.fasdepet.com.br/racoes?fq=P__2__Marca%3apet.u" target="_blank">
                <img src="<?php echo _URLTHEME; ?>/assets/img/fasdepet.png" alt="Logo Fãs de Pet">
            </a>
        </div>
    </div>
    <div class="physical-store">
        <h2>Compre em lojas físicas parceiras!</h2>
        <div class="store">
            <div class="left">
                <img src="<?php echo _URLTHEME ?>/assets/img/vet.jpg" alt="Imagem Loja Física">
            </div>
            <div class="right">
                <h3>Vet Popular</h3>
                <ul>
                    <li><a href=""><strong>Endereço:</strong> Avenida Guapira n° 887, Tucuruvi - São Paulo, SP</a></li>
                    <li><a href=""><strong>Telefone:</strong> (11) 91234-5678</a></li>
                    <li><p><strong>Horário de funcionamento:</strong> 09:00 às 18:00</p></li>
                </ul>
            </div>
        </div>
        <div class="store">
            <div class="left">
                <img src="<?php echo _URLTHEME ?>/assets/img/vet.jpg" alt="Imagem Loja Física">
            </div>
            <div class="right">
                <h3>Vet Popular</h3>
                <ul>
                    <li><a href=""><strong>Endereço:</strong> Avenida Guapira n° 887, Tucuruvi - São Paulo, SP</a></li>
                    <li><a href=""><strong>Telefone:</strong> (11) 91234-5678</a></li>
                    <li><p><strong>Horário de funcionamento:</strong> 09:00 às 18:00</p></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>