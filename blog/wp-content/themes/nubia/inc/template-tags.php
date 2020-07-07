<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Nubia
 */

/**
 * Flush out the transients used in nubia_categorized_blog.
 */
function nubia_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'nubia_categories' );
}
add_action( 'edit_category', 'nubia_category_transient_flusher' );
add_action( 'save_post',     'nubia_category_transient_flusher' );