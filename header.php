<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

        <link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico" />
        <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

        <?php wp_head(); ?>

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tipsy.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/settings.js"></script>
    </head>
    <body>
        <header id="header">
            <div class="width_default">
                <a href="<?php echo site_url(''); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/php_df.png" alt="<?php echo bloginfo('name'); ?>"></a>
                <nav>
                    <a href="<?php echo site_url(''); ?>" title="Página principal">Início</a>
                    <a href="<?php echo site_url('novidades'); ?>" title="Novidades PHP-DF">Novidades</a>
                    <a href="<?php echo site_url('empregos'); ?>" title="Vagas de emprego no DF">Emprego</a>
                    <a href="<?php echo site_url('contato'); ?>" title="Entre em contato">Contato</a>
                </nav>
            </div>
            <div class="clear"></div>
        </header>