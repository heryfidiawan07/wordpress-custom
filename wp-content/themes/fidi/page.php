<?php get_header(); ?>

<div class="container my-5">
    <?php if ( have_posts() ): ?>
    <div class="row bg-light text-danger">
        <?php while ( have_posts() ): the_post(); ?>
            <?php get_template_part('content'); ?>
        <?php endwhile ?>
    </div>
    <?php else: ?>
        <h5>Tidak ada post</h5>
    <?php endif ?>
</div>

<?php get_footer(); ?>
