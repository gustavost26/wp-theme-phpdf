<footer class="comments">
    <h2>Comentários</h2>

    <?php if ( !comments_open() ): ?>
        <p class="nocomments">Os comentários deste artigo estão fechados.</p>
    <?php else:  ?>

        <a href="javascript:void(0);" class="leave_comment">Deixe seu comentário</a>
        
        <div id="comment_form" class="hide">
            <?php

            // Configuração do formulário de comentários
            $args['id_form'] = '';
            $args['id_submit'] = 'submit';
            $args['title_reply'] = '';
            $args['title_reply_to'] = '';
            $args['cancel_reply_link'] = __('Cancel Reply');
            $args['label_submit'] = __('Post Comment');
            $args['must_log_in'] = '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>';
            $args['logged_in_as'] = '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>';
            $args['comment_notes_before'] = '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>';
            $args['comment_notes_after'] = '';
            
            // Campos do formulário HTML
            $args['comment_field'] = '<div><label for="comment">Comentário <span>// Obrigatório</span></label><textarea name="comment" id="comment" required="required" aria-required="true"></textarea></div>';
            $args['fields'] = apply_filters( 
                'comment_form_default_fields', array(
                    'author' => '<div><label for="author">Nome <span>// Obrigatório</span></label><input type="text" id="author" name="author" required="required" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></div>',
                    'email' => '<div><label for="email">E-mail <span>// Obrigatório</span></label><input id="email" name="email" type="text" required="required" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' /></div>'
                )
            );
            ?>

            <?php comment_form($args); ?>
        </div>
    <?php endif; ?>

    <?php wp_list_comments('type=comment&callback=phpdf_comment'); ?> 
</footer>