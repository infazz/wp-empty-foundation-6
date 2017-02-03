<?php 
	/* Security Best Practices */


	// Disallow file edit
	define( 'DISALLOW_FILE_EDIT', true );
	
	/* Hide WP version strings from scripts and styles
	 * @return {string} $src
	 * @filter script_loader_src
	 * @filter style_loader_src
	 */
	function bgsecure_remove_wp_version_strings( $src ) {
	     global $wp_version;
	     parse_str(parse_url($src, PHP_URL_QUERY), $query);
	     if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
	          $src = remove_query_arg('ver', $src);
	     }
	     return $src;
	}
	add_filter( 'script_loader_src', 'bgsecure_remove_wp_version_strings' );
	add_filter( 'style_loader_src', 'bgsecure_remove_wp_version_strings' );



	/* Hide WP version strings from generator meta tag */
	function bgsecure_remove_version() {
		return false;
	}
	add_filter('the_generator', 'bgsecure_remove_version');
?>