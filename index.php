<?php 
the_post();
get_header();
?>

<section class="container">
    <h1><?php echo the_title(); ?></h1>
    <div class="container-content">
        <?php echo the_content(); ?>
    </div>
</section>

<?php
get_footer();
?>