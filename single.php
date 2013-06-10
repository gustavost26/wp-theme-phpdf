<?php get_header(); ?>
    <section id="wrapper" class="width_default">
        
        <section id="single">
            <article>
                <?php while ( have_posts() ) : the_post(); ?>
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <p class="details">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">Publicado em <?php the_date(); ?></time> 
                            <span>Por: <?php the_author_posts_link(); ?></span>
                            <span>Categoria: <?php the_category(', '); ?></span>
                        </p>
                    </header>
                    <div class="article_content">
                        <?php the_content(); ?>
                    </div>
                    <div class="social_bar">
                        <!-- Twitter -->
                        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="pt" data-count="none" data-hashtags="phpdf">Tweetar</a>

                        <!-- Google Plus -->
                        <div class="g-plus" data-action="share" data-annotation="bubble"></div>

                        <!-- Facebook -->
                        <div class="fb-like" data-send="true" data-layout="button_count" data-width="210" data-show-faces="false" data-font="arial"></div>
                    </div>

                    <?php comments_template(); ?> 
                <?php endwhile; ?>
            </article>
        </section>

        <aside id="single_aside">
            <?php dynamic_sidebar('single_sidebar'); ?>
        </aside>

        <div class="clear"></div>
    </section>

    <!-- Facebook share -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <!-- Google Plus share -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>

    <!-- Twitter share -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<?php get_footer(); ?>