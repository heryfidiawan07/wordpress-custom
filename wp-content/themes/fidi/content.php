<?php if (is_single()): ?>

    <h5><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h5>
    <?php the_post_thumbnail() ?>
    <?php the_content(); ?>

<?php elseif (is_page()): ?>

    <h5>
        <a href="<?php the_permalink(); ?>">
        Page <?php the_title(); ?>
        </a>
    </h5>
    <hr>
    <?php the_post_thumbnail() ?>
    <?php the_content(); ?>

<?php else: ?>    

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h5>
            </div>
            <div class="card-body">
                <?= get_the_excerpt(); ?>
                <?php the_post_thumbnail('small_thumb') ?>
                <a href="<?php the_permalink(); ?>" class="d-block">Lanjut baca...</a>
            </div>
            <div class="card-footer list-unstyled">
                <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?>
                </a>
                <?php
                    echo ' | '; the_time();
                ?>
                <div class="d-block">
                    <?php
                        echo 'Kategori: '; the_category(', ');
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php endif ?>