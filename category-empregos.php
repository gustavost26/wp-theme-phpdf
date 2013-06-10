<?php get_header(); ?>
    <section id="wrapper" class="width_default">
        
        <aside id="article_list_sidebar">
            <?php dynamic_sidebar('category_sidebar'); ?>

        </aside>

        <section id="article_list">
            <header>
                <h1><?php echo single_cat_title(); ?></h1>
                <a href="<?php echo site_url('nova-vaga'); ?>" class="header-btn-right">Cadastrar vaga</a>
                <div class="clear"></div>
            </header>

            <div class="articles">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="details">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">Publicado em <?php echo get_the_date(); ?></time>
                            <span>Autor: <?php echo get_the_author(); ?></span>
                        </p>
                    </article>
                <?php endwhile; else: ?>
                    <p class="no_articles"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>

            <nav class="pagination">
                <?php 
                    global $wp_query;
                    $big = 999999999; // need an unlikely integer

                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'mid_size' => 2
                    ) );
                ?>
            </nav>
        </section>

        <div class="clear"></div>
    </section>
<?php get_footer(); ?>