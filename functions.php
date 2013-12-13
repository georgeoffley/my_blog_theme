<?php
/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );
?>
<?php
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
?>
<?php
function mytheme_remove_url($arg) {
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'mytheme_remove_url');
?>