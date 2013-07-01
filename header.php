<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico" />
        <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">

        <?php wp_head(); ?>

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tipsy.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/settings.js"></script>
    </head>
    <body>
        <header id="header">
            <div id="header_top" class="width_default">
                <a href="<?php echo site_url(''); ?>" id="header_logo"><img src="<?php bloginfo('template_url'); ?>/images/php_df.png" alt="<?php echo bloginfo('name'); ?>"></a>
                <span class="site_desc">Comunidade do Distrito Federal</span>

                <form method="get" action="<?php echo site_url(); ?>">
                    <input type="text" name="s" placeholder="Faça uma busca" value="<?php the_search_query(); ?>" />
                </form>
            </div>
            <div id="header_menu">
                
                <nav class="width_default">
                    <a href="#" id="show_menu">Menu</a>
                    <ul>
                        <li><a href="<?php echo site_url(''); ?>" title="Página principal">Início</a></li>
                        <li><a href="<?php echo site_url('artigos/novidades'); ?>" title="Novidades PHP-DF">Novidades</a></li>
                        <li>
                            <a href="<?php echo site_url('artigos/tutoriais-dicas'); ?>" title="Dicas e tutoriais">Dicas e tutoriais</a>
                            <ul>
                                <li><a href="<?php echo site_url('artigos/tutoriais-dicas/zce'); ?>" title="Certificação Zend">ZCE</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('membros'); ?>" title="Membros da comunidade">Membros</a></li>
                        <li><a href="<?php echo site_url('contato'); ?>" title="Entre em contato">Contato</a></li>
                        
                        <?php if( !is_user_logged_in() ): ?>
                            <li class="account"><a href="<?php echo site_url(); ?>/wp-login.php" class="alignright" title="Fazer login">Login</a></li>
                            <li class="account"><a href="<?php echo site_url(); ?>/wp-login.php?action=register" title="Cadastre-se na comunidade">Cadastre-se</a></li>
                        <?php else: ?>
                            <li class="account"><a href="<?php echo site_url(); ?>/wp-admin/profile.php" title="Meu perfil">Meu perfil</a></li>
                            <li class="account"><a href="<?php echo site_url(); ?>/wp-admin/" title="Painel de controle">Painel</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            
        </header>