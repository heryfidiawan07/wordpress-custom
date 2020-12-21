<?php get_header(); ?>

<div class="container my-5">
    <?php if ( have_posts() ): ?>

    <h3>
        <?php
            if (is_category()) {
                echo 'Halaman Kategori '; single_cat_title();
            }elseif (is_author()) {
                echo 'Halaman Author ' . get_the_author(); 
            }else {
                echo 'Halaman Arsip';
            }
        ?>
    </h3>

    <div class="row">
        <?php while ( have_posts() ): the_post(); ?>
            <?php get_template_part('content'); ?>
        <?php endwhile ?>
    </div>
    <?php else: ?>
        <h5>Tidak ada post</h5>
    <?php endif ?>
</div>

<?php get_footer(); ?>
