<?php 
the_post();
get_header();
?>

<section class="container-single">
        <?php echo the_content(); ?>
</section>

<?php
get_footer();
?>