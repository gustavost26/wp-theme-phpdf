<?php get_header(); ?>
    <section id="wrapper" class="width_default">
        
        <section id="members">
            <h1><?php echo get_the_title(); ?></h1>
            <ul>
                <?php

                    // Configuração da paginação
                    $total_users = count_users();
                    $total_users = $total_users['total_users'];
                    $paged = get_query_var('paged');
                    $number = 24; // ie. 20 users page page 
                
                    // Configuração da listagem de membros
                    $usersArgs['offset'] = $paged ? ($paged - 1 ) * $number : 0;
                    $usersArgs['number'] = $number;
                    $usersArgs['order'] = 'desc';
                    $usersArgs['orderby'] = 'user_registered';
                ?>
                <?php foreach ( get_users($usersArgs) as $user): ?>
                    <li>
                        <?php echo get_avatar( $user->user_email, 75 ); ?>
                        <a href="<?php echo site_url('perfil/'.$user->user_nicename); ?>" class="member_name"><?php echo $user->display_name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="clear"></div>
            <div style="margin-bottom:30px;"></div>

            <div class="pagination">
            <?php
            
                // Execução da paginação
                if($total_users > $number){
                    $pl_args = array(
                        'base'     => add_query_arg('paged','%#%'),
                        'format'   => '',
                        'total'    => floor($total_users / $number),
                        'current'  => max(1, $paged),
                    );

                    if($GLOBALS['wp_rewrite']->using_permalinks())
                        $pl_args['base'] = user_trailingslashit(trailingslashit(get_pagenum_link(1)).'page/%#%/', 'paged');
                    echo paginate_links($pl_args);
                }
            ?>
            </div>
            <div class="clear"></div>
        </section>

        <div class="clear"></div>
    </section>

<?php get_footer(); ?>