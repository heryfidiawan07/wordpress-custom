<?php get_header(); ?>

<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): the_post(); ?>
        <?php get_template_part('content'); ?>
    <?php endwhile ?>
<?php else: ?>
    <h5>Tidak ada post</h5>
<?php endif ?>

<?php get_footer(); ?>
