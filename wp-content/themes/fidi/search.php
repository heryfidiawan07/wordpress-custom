<?php get_header(); ?>

<div class="container my-5">
    <?php if ( have_posts() ): ?>

    <h3>Halam Pencarian</h3>

    <div class="row">
        <?php while ( have_posts() ): the_post(); 
            if ($post->post_type == 'page') continue;
        ?>
        <?php get_template_part('content'); ?>
        <?php endwhile ?>
    </div>
    <?php else: ?>
        <h5>Tidak ada post</h5>
    <?php endif ?>
</div>

<?php get_footer(); ?>
