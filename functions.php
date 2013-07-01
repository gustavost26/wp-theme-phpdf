<?php

add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 100, 70, true ); // 50 pixels wide by 50 pixels tall, crop mode

// Add Twitter, Facebook and Google+ field to contact methods, remove AIM, YIM and Jabber
// http://wp.me/p1Ehkq-fX
 
add_filter( 'user_contactmethods', 'ts_add_contact_fields' );
function ts_add_contact_fields( $contactmethods ) {
    $contactmethods['github'] = 'URL do Github';
    $contactmethods['facebook'] = 'URL do Facebook';
    $contactmethods['googleplus'] = 'URL do Google+';
    $contactmethods['twitter'] = 'URL do Twitter';
 
    unset( $contactmethods['yim'] );
    unset( $contactmethods['aim'] );
    unset( $contactmethods['jabber'] );
 
    return $contactmethods;
}

// Widgets home page
register_sidebar(array(
    'id' => 'home_widget_1',
    'name' => 'Home Widget 1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
));

register_sidebar(array(
    'id' => 'home_widget_2',
    'name' => 'Home Widget 2',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
));

register_sidebar(array(
    'id' => 'home_widget_3',
    'name' => 'Home Widget 3',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
));

register_sidebar(array(
    'id' => 'home_widget_4',
    'name' => 'Home Widget 4',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''
));

register_sidebar(array(
    'id' => 'single_sidebar',
    'name' => 'Single Sidebar',
    'before_widget' => '<div class="wp_widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));

register_sidebar(array(
    'id' => 'category_sidebar',
    'name' => 'Category Sidebar',
    'before_widget' => '<div class="wp_widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));

register_sidebar(array(
    'id' => 'page_sidebar',
    'name' => 'Page Sidebar',
    'before_widget' => '<div class="wp_widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));


function phpdf_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);

    ?>
        <article class="comment">
            <a name="comment-<?php comment_ID() ?>"></a>
            <?php echo get_avatar( $comment, 70 ); ?>
            <div class="balloon">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em class="comment_moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
                <?php endif; ?>
                <p><b><?php echo get_comment_author_link(); ?></b> <time><?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()); ?></time></p>
                <p><?php comment_text() ?></p>
            </div>
        </article>

    <?php

}

function is_type_page() { // Check if the current post is a page
    global $post;

    if ($post->post_type == 'page') {
        return true;
    }
    return false;
}