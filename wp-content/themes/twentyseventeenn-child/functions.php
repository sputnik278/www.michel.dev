<?php

 /**
 * bReplaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentyseventeen_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ), get_the_title( get_the_ID() ) )
	);
	return ' TOTO; ' . $link;
}
add_filter( 'excerpt_more', 'twentyseventeen_excerpt_more' );

/*
il faut meter le if sur la fonction parent pour que la fonction modifier enfant fonctionne
if (! function_exists ('twentyseventeen_excerpt_more')){  ---> donc 'twentyseventeen_excerpt_more' est la fonction parent
*/
?>