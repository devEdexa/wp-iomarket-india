<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwenty_unique_id = twentytwenty_unique_id( 'search-form-' );

$twentytwenty_aria_label = ! empty( $args['label'] ) ? 'aria-label="' . esc_attr( $args['label'] ) . '"' : '';
?>
<!-- <?php if(ICL_LANGUAGE_CODE=='en'):?>
<form role="search" <?php echo $twentytwenty_aria_label;  ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $twentytwenty_unique_id ); ?>">
		<span class="screen-reader-text"><?php _e( 'Search for:', 'twentytwenty' );  ?></span>
		<input type="search" id="<?php echo esc_attr( $twentytwenty_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty' ); ?>" />
</form>
<?php else:?>
<form role="search" <?php echo $twentytwenty_aria_label;  ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $twentytwenty_unique_id ); ?>">
		<span class="screen-reader-text"><?php _e( 'Suchen nach::', 'twentytwenty' );  ?></span>
		<input type="search" id="<?php echo esc_attr( $twentytwenty_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Suchen', 'submit button', 'twentytwenty' ); ?>" />
</form>
 <?php endif;?> -->
<div class="sidebar-box search-box pt-3 pb-3 pe-3 ps-3 white-bg">
    <form role="search" method="get" class="search-form mb-0" action="http://localhost/iomwp/">
        <div class="form-group gray-bg">
            <input type="search" class="search-field form-control rounded-0 border-0 gray-bg" placeholder="Suchen"
                value="" name="s">
            <button type="submit" class="search-submit p-0 position-absolute m-auto rounded-0 border-0"></button>
        </div>
    </form>
</div>