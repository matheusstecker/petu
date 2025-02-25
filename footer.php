<footer>
    <div class="footer-holder">
        <div class="item">
            <div class="itens">
                <?php dynamic_sidebar('rodape-widget-1'); ?>
            </div>
            <div class="itens">
                <?php dynamic_sidebar('rodape-widget-2'); ?>
            </div>
            <div class="itens">
                <?php dynamic_sidebar('rodape-widget-3'); ?>
            </div>
            <div class="itens">
                <?php dynamic_sidebar('rodape-widget-4'); ?>
            </div>
            <div class="itens">
                <ul class="socials">
                    <li><a href=""><img src="<?php echo _URLTHEME; ?>/assets/img/facebook.svg" alt="Ícone Facebook"></a></li>
                    <li><a href=""><img src="<?php echo _URLTHEME; ?>/assets/img/instagram.svg" alt="Ícone Instragram"></a></li>
                    <li><a href=""><img src="<?php echo _URLTHEME; ?>/assets/img/youtube.svg" alt="Ícone Youtube"></a></li>
                </ul>
            </div>
        </div>
        <div class="politics">
            <?php dynamic_sidebar('rodape-politics'); ?>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>