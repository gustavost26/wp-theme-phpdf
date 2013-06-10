<?php get_header(); ?>
    <section id="wrapper" class="width_default">
        <nav id="home_featured">
            <h2>Destaque</h2>

            <ul>
                <li>
                    <?php dynamic_sidebar('home_widget_1') ?>

                    <?php /*
                        <a href="">
                            <img src="<?php bloginfo('template_url'); ?>/images/tmp/tb_210x150.png" alt="">
                            <h3>Lorem ipsum dolor sit amet, consectetuer</h3>
                        
                            <div class="clear"></div>
                        </a>
                    */ ?>
                </li>
                <li>
                    <?php dynamic_sidebar('home_widget_2') ?>
                </li>
                <li>
                    <?php dynamic_sidebar('home_widget_3') ?>
                </li>
                <li>
                    <?php dynamic_sidebar('home_widget_4') ?>
                </li>
            </ul>
            <div class="clear"></div>
        </nav>

        <div class="separator"><span></span></div>

        <section id="home_news_box">
            <header>
                <span></span>
                <h2>Artigos</h2>
            </header>

            <?php $news = get_posts( array( 'numberposts' => 3, 'category' => -2 ) );
                if( !empty( $news ) ): ?>

                <ul>
                    <?php foreach( $news as $post ): ?>
                        <li>
                            
                            <?php if ( has_post_thumbnail() ): ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/images/nothumb.png" alt="">
                                </a>
                            <?php endif; ?>
                            
                            <span class="home_news_info">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">Publicado <?php echo get_the_date(); ?></time>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="no_results">Nenhuma notícia foi publicidada.</p>
            <?php endif; ?>
        </section>


        <section id="home_jobs_box">
            <header>
                <span></span>
                <h2>Empregos</h2>
                <a href="nova-vaga" title="Adicionar vagas" class="add_icon tipsy_se"></a>
            </header>

            <?php $jobs = get_posts( array( 'numberposts' => 10, 'category' => 2 ) );
                if( !empty( $jobs ) ): ?>

                <ul>
                    <?php foreach( $jobs as $post ): ?>
                        <li>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <span class="home_jobs_details">
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">Publicado <?php echo get_the_date('d/m/Y'); ?></time>
                                <span class="local"><?php echo get_post_meta( get_the_ID(), 'Local do emprego', true ); ?></span>
                                <span class="type">
                                    <?php the_category(' &bull; '); ?>
                                </span>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>

            <?php else: ?>
                <p class="no_results">Nenhuma vaga de emprego foi publicada. <a href="<?php echo site_url('nova-vaga'); ?>">Cadastre uma vaga.</a></p>
            <?php endif; ?>
        </section>

        <div class="clear"></div>
    </section>
<?php get_footer(); ?>