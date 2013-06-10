<?php get_header(); ?>
        <section id="wrapper" class="width_default">
            <section id="single">
                <article>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <header>
                            <h1><?php the_title(); ?></h1>
                        </header>
                        <div class="article_content" style="border-bottom:none;">
                            <?php the_content(); ?>
                        </div>

                    <?php endwhile; ?>
                </article>
            </section>

            <aside id="single_aside">
                <?php dynamic_sidebar('page_sidebar'); ?>
            </aside>

            <div class="clear"></div>
        </section>
<?php get_footer(); ?>