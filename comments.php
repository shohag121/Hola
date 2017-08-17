<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="theme-comment-section" id="comments">
	
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
        <h4 class="comment-title">
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
				printf(
				/* translators: 1: title. */
					esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'hola' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
				/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'hola' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
        </h4><!-- .comments-title -->
		
		<?php the_comments_navigation(); ?>
        
		
        <ul class="list-unstyled">
			<?php
			// Register Custom Comment Walker
			
			wp_list_comments( array(
				'style'         => 'ul',
				'short_ping'    => true,
				'avatar_size'   => '106',
				'walker'        => new Bootstrap_Comment_Walker(),
			) );
			?>
        </ul><!-- .comment-list -->
		
		<?php the_comments_navigation();
		
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hola' ); ?></p>
			<?php
		endif;
	
	endif; // Check for have_comments().
	?>
</div>

<div class="comment-form-wrapper">
    <div class="row">
	<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " required='required'" : '' );
	
	$fields =  array(
		
	        
		'author' => '<div class="col-md-12"><div class="leave-form">' .
			'<input id="author" name="author" placeholder="'. __('Name','hola') .'" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			 '" ' .$aria_req . ' ></div></div>',
		
		'email' => '<div class="col-md-6"><div class="leave-form">' .
			'<input id="email" name="email" placeholder="' . __( 'Email', 'hola' ) . '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			'" ' .$aria_req . ' ></div></div>',
		
		'url' => '<div class="col-md-6"><div class="leave-form">' .
			'<input id="url" placeholder="' . __( 'Website', 'hola' ) . '" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
			'" ></div></div>',
	);
	
	
	$args = array(
		'comment_field' =>  '<div class="col-md-12"><div class="text-leave">' .
		                    '<textarea id="comment" name="comment" aria-required="true">' .
		                    '</textarea></div></div>',
		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	);
 
 
	
	comment_form($args);
	
	?>

    </div>
</div>
