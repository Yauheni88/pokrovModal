<?php
/*
Template Name: news
*/
?>

<?php get_header(); ?>

        <section class="news section" id="news">
            <div class="container">
                <div class="news__inner">
                    <h1 class="news__title title" data-aos="fade-up">Новости храма</h1>
                    <div class="news__box">
                        <?php
                        global $post;

                        $myposts = get_posts([
                                'numberposts'    => -1,
                                'category'    => 3
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>
                                <article class="news__article" data-aos="fade-up">
                                    <div class="news__thumb">
                                        <?php the_post_thumbnail(
                                    array(340, 300),
                                    array(
                                        'class' => 'news__image'
                                    )
                                ); ?>
                                    </div>
                                    <a class="news__title-link" href="<?php the_permalink(); ?>">
                                        <h2 class="news__article-title"><?php the_title(); ?></h2>
                                    </a>
                                    <div class="news__article-iconbox">
                                        <div class="news__article-viewsbox">
                                            <svg class="news__article-svg-calendar" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M14.25 2.5h-.75v-1h-1.25v1h-8.5v-1H2.5v1h-.75A1.25 1.25 0 0 0 .5 3.75v9.5a1.25 1.25 0 0 0 1.25 1.25h12.5a1.25 1.25 0 0 0 1.25-1.25v-9.5a1.25 1.25 0 0 0-1.25-1.25zM1.75 3.75h12.5V5H1.75V3.75zm0 9.5v-7h12.5v7z"/><path d="M3 8h1.1v1.2H3zm0 2.4h1.1v1.2H3zM11.8 8h1.1v1.2h-1.1zm0 2.4h1.1v1.2h-1.1zM9.6 8h1.1v1.2H9.6zm0 2.4h1.1v1.2H9.6zM7.4 8h1.1v1.2H7.4zm0 2.4h1.1v1.2H7.4zM5.2 8h1.1v1.2H5.2zm0 2.4h1.1v1.2H5.2z"/></svg>
                                            <span class="news__article-date"><?php echo get_the_date(); ?></span>
                                        </div>
                                        
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="news__article-link">Читать далее</a>
                                </article>
                                <?php } }
                        wp_reset_postdata();
                    ?>
                    </div>
                    <div id="pagination">
                        <?php echo get_the_posts_pagination(); ?>
		    </div>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>