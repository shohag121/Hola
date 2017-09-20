<?php

class WP_Bootstrap_Comments_Walker extends Walker_Comment {
    /**
     * Start the element output.
     *
     * This opens the comment.  Will check if the comment has children or is a
     * stand-alone comment.
     *
     * @access public
     * @since 0.1.0
     *
     * @see Walker::start_el()
     * @see wp_list_comments()
     *
     * @global int        $comment_depth
     * @global WP_Comment $comment
     *
     * @param string $output  Passed by reference. Used to append additional
     *     content.
     * @param object $comment Comment data object.
     * @param int    $depth   Depth of comment in reference to parents.
     * @param array  $args    An array of arguments.
     */
    public function start_el( &$output, $comment, $depth = 0, $args = [], $id = 0 )
    {
        $depth++;
        $GLOBALS['comment_depth'] = $depth;
        $GLOBALS['comment'] = $comment;
        if ( !empty( $args['callback'] ) ) {
            ob_start();
            call_user_func( $args['callback'], $comment, $args, $depth );
            $output .= ob_get_clean();
            return;
        }
        if ( ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) && $args['short_ping'] ) {
            ob_start();
            $this->ping( $comment, $depth, $args );
            $output .= ob_get_clean();
        } elseif ( 'html5' === $args['format'] ) {
            ob_start();
            if ( !empty( $args['has_children'] ) ) {
                $this->start_parent_html5_comment( $comment, $depth, $args );
            } else {
                $this->html5_comment( $comment, $depth, $args );
            }
            $output .= ob_get_clean();
        } else {
            ob_start();
            $this->comment( $comment, $depth, $args );
            $output .= ob_get_clean();
        }
    }

    /**
     * Output a pingback comment.
     *
     * @access protected
     * @since 0.1.0
     *
     * @see wp_list_comments()
     *
     * @param WP_Comment $comment The comment object.
     * @param int        $depth   Depth of comment.
     * @param array      $args    An array of arguments.
     */
    protected function ping( $comment, $depth, $args ) {
        $tag = ( 'div' == $args['style'] ) ? 'div' : 'li';
        $comment_classes = [];
        $comment_classes[] = 'media';
        $comment_classes = apply_filters( 'wp_bootstrap_comment_class', $comment_classes, $comment, $depth, $args );
        $class_str = implode(' ', $comment_classes);
?>
        <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $class_str, $comment ); ?>>
            <div class="comment-body">
                <div class="media-body">
                    <?php esc_html_e( 'Pingback:', 'hola' ); ?> <?php comment_author_link( $comment ); ?> <?php edit_comment_link( esc_html__( 'Edit','hola' ), '<span class="edit-link">', '</span>' ); ?>
                </div><!-- /.media-body -->
            </div><!-- /.comment-body -->
<?php
    }

    /**
     * Output the beginning of a parent comment in the HTML5 format.
     *
     * Bootstrap media element requires child comments to be nested within the
     * parent media-body. The original comment walker writes the entire comment
     * at once, this method writes the opening of a parent comment so children
     * comments can be nested within.
     *
     * @access protected
     * @since 0.1.0
     *
     * @see http://getbootstrap.com/components/#media
     * @see wp_list_comments()
     *
     * @param object $comment Comment to display.
     * @param int    $depth   Depth of comment.
     * @param array  $args    An array of arguments.
     */
    protected function start_parent_html5_comment( $comment, $depth, $args )
    {
        $this->html5_comment( $comment, $depth, $args, $is_parent = TRUE );
    }
    /**
     * Output a comment in the HTML5 format.
     *
     * @access protected
     * @since 0.1.0
     *
     * @see wp_list_comments()
     *
     * @param object  $comment   Comment to display.
     * @param int     $depth     Depth of comment.
     * @param array   $args      An array of arguments.
     * @param boolean $is_parent Flag indicating whether or not this is a
     *     parent comment
     */
    protected function html5_comment( $comment, $depth, $args, $is_parent = FALSE )
    {
        $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
        $type = get_comment_type();
        $comment_classes = [];
        $comment_classes[] = 'media';
        // if it's a parent
        if ( $this->has_children ) {
            $comment_classes[] = 'parent';
            $comment_classes[] = 'has-children';
        }
        // if it's a child
        if ( $comment->comment_parent > 0 ) {
            $comment_classes[] = 'child';
            $comment_classes[] = 'has-parent';
            $comment_classes[] = 'parent-' . $comment->comment_parent;
        }
        $comment_classes = apply_filters( 'wp_bootstrap_comment_class', $comment_classes, $comment, $depth, $args );
        $class_str = implode(' ', $comment_classes);
?>
        <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $class_str, $comment ); ?>>

            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">

                <?php if ( 0 != $args['avatar_size'] && 'pingback' !== $type && 'trackback' !== $type ) { ?>
                    <div class="media-left">
                        <?php echo $this->get_comment_author_avatar( $comment, $args ); ?>
                    </div>
                <?php }; ?>

                <div class="media-body">

                    <footer class="comment-meta">
                        <div class="comment-author vcard">
                            <?php printf(  '%s <span class="says sr-only">'. esc_html__('says:','hola').'</span>' , sprintf( '<b class="media-heading fn">%s</b>', get_comment_author_link( $comment ) ) ); ?>
                        </div><!-- /.comment-author -->

                        <div class="comment-metadata">
                            <a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
                                <time datetime="<?php comment_time( 'c' ); ?>">
                                    <?php
                                    /* translators: 1: comment date, 2: comment time */
                                    printf( esc_html__( '%1$s at %2$s', 'hola' ), get_comment_date( '', $comment ), get_comment_time() );
                                    ?>
                                </time>
                            </a>
                            <?php edit_comment_link( esc_html__( 'Edit', 'hola' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!-- /.comment-metadata -->

                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'hola' ); ?></p>
                        <?php endif; ?>
                    </footer><!-- /.comment-meta -->

                    <div class="comment-content">
                        <?php comment_text(); ?>
                    </div><!-- /.comment-content -->

                    <?php $this->comment_reply_link( $comment, $depth, $args, $add_below = 'reply-comment' ); ?>

                    <?php if ( $is_parent ) { ?>
                        <div class="child-comments">
                    <?php } else { ?>
                            </div><!-- /.media-body -->
                        </article><!-- /.comment-body -->
                    <?php } ?>

<?php
    }

    /**
     * Generate avatar markup
     *
     * @access protected
     * @since 0.1.0
     * @return string
     *
     * @param object $comment Comment to display.
     * @param array  $args    An array of arguments.
     */
    protected function get_comment_author_avatar( $comment, $args )
    {
        $avatar_string = get_avatar( $comment, $args['avatar_size'] );
        $comment_author_url = get_comment_author_url( $comment );
        if ( '' !== $comment_author_url ) {
            $avatar_string = sprintf(
                '<a href="%1$s" class="author-link url" rel="external nofollow">%2$s</a>',
                esc_url($comment_author_url),
                $avatar_string
            );
        };
        return $avatar_string;
    }

    /**
     * Displays the HTML content for reply to comment link.
     *
     * @access protected
     * @since 0.1.0
     *
     * @param object $comment   Comment being replied to. Default current
     *     comment.
     * @param int    $depth     Depth of comment.
     * @param array  $args      An array of arguments for the Walker Object
     * @param string $add_below The id of the element where the comment form
     *     will be placed
     */
    protected function comment_reply_link( $comment, $depth, $args, $add_below = 'div-comment' )
    {
        $type = get_comment_type();
        if ( 'pingback' === $type || 'trackback' === $type ) {
            return;
        }
        comment_reply_link( array_merge( $args, [
            'add_below' => $add_below,
            'depth'     => $depth,
            'max_depth' => $args['max_depth'],
            'before'    => '<div id="reply-comment-'.$comment->comment_ID.'" class="reply">',
            'after'     => '</div>',
        ] ) );
    }

    /**
     * Ends the element output, if needed.
     *
     * This ends the comment.  Will check if the comment has children or is a
     * stand-alone comment.
     *
     * @access public
     * @since 0.1.0
     *
     * @see Walker::end_el()
     * @see wp_list_comments()
     *
     * @param string     $output  Passed by reference. Used to append
     *     additional content.
     * @param WP_Comment $comment The comment object. Default current comment.
     * @param int        $depth   Depth of comment.
     * @param array      $args    An array of arguments.
     */
    public function end_el( &$output, $comment, $depth = 0, $args = [] )
    {
        if ( !empty( $args['end-callback'] ) ) {
            ob_start();
            call_user_func( $args['end-callback'], $comment, $args, $depth );
            $output .= ob_get_clean();
            return;
        }
        if ( !empty( $args['has_children'] ) && 'html5' === $args['format']) {
            ob_start();
            $this->end_parent_html5_comment( $comment, $depth, $args );
            $output .= ob_get_clean();
        } else {
            if ( 'div' == $args['style'] ) {
                $output .= "</div><!-- #comment-## -->\n";
            } else {
                $output .= "</li><!-- #comment-## -->\n";
            }
        }
    }

    /**
     * Output the end of a parent comment in the HTML5 format.
     *
     * Bootstrap media element requires child comments to be nested within the
     * parent media-body. The original comment walker writes the entire comment
     * at once, this method writes the end of a parent comment so child
     * comments can be nested within.
     *
     * @see http://getbootstrap.com/components/#media
     *
     * @access protected
     * @since 0.1.0
     *
     * @see wp_list_comments()
     *
     * @param object $comment Comment to display.
     * @param int    $depth   Depth of comment.
     * @param array  $args    An array of arguments.
     */
    protected function end_parent_html5_comment( $comment, $depth, $args )
    {
        $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
?>
                    </div><!-- /.child-comments -->
                </div><!-- /.media-body -->
            </article><!-- /.comment-body -->
        </<?php echo $tag; ?>><!-- /.parent -->

<?php
    }
}