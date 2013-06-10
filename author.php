<?php get_header(); ?>
    <section id="wrapper" class="width_default">
        <section id="profile">
            <?php
                $author = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
            ?>

            <h1><?php echo $author->nickname; ?></h1>

            <div id="profile_info">
                <figure id="profile_photo">
                    <?php echo get_avatar( $author->user_email , 140 ); ?>
                </figure>

                <div id="profile_description">
                    <div class="profile_social">

                        <?php if( !empty($author->github) ): ?>
                            <a href="<?php echo esc_url($author->github); ?>" title="Github" target="_blank" class="tipsy_se"><img src="<?php bloginfo('template_url'); ?>/images/icons/profile/github.png"></a>
                        <?php endif; ?>

                        <?php if( !empty($author->facebook) ): ?>
                            <a href="<?php echo esc_url($author->facebook); ?>" title="Facebook" target="_blank" class="tipsy_se"><img src="<?php bloginfo('template_url'); ?>/images/icons/profile/facebook.png"></a>
                        <?php endif; ?>

                        <?php if( !empty($author->googleplus) ): ?>
                            <a href="<?php echo esc_url($author->googleplus); ?>" title="Google+" target="_blank" class="tipsy_se"><img src="<?php bloginfo('template_url'); ?>/images/icons/profile/gplus.png"></a>
                        <?php endif; ?>

                    </div>

                    <p><?php echo !empty($author->description) ? nl2br($author->description) : '<i>Nenhuma descrição deste usuário.</i>'; ?></p>
                </div>
                <div class="clear"></div>
            </div>

            <?php if(have_posts()): ?>
                <h2>Artigos:</h2>
                <ul class="profile_articles">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <div class="clear"></div>
        </section>
    </section>
<?php get_footer(); ?>