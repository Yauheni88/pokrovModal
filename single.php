<?php get_header(); ?>

<section class="singlepost">
    <div class="singlepost__container container">
        <div class="singlepost__inner">
            <h1 class="singlepost__title title"><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(
                array(1000, 900),
                array(
                    'class' => 'singlepost__thumbnail'
                )
            ) ?>
            <?php endif ?>

            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>