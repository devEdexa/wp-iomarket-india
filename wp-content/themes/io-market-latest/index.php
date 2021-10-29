<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */

get_header();
?>
<?php if(ICL_LANGUAGE_CODE=='en'):?>
<main id="site-content" role="main">
    <section class="iomarket-section">
        <div class="container">

            <?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

            <div class="archive-header has-text-align-center header-footer-group">

                <div class="archive-header-inner section-inner medium">

                    <?php if ( $archive_title ) { ?>
                    <div class="archive-title section-title display-5 green-color font-black mb-md-4 mb-3">
                        <?php echo wp_kses_post( $archive_title ); ?></div>
                    <?php } ?>

                    <?php if ( $archive_subtitle ) { ?>
                    <div class="archive-subtitle section-inner thin max-percentage intro-text mb-md-4 mb-3">
                        <?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
                    <?php } ?>

                </div><!-- .archive-header-inner -->

            </div><!-- .archive-header -->

            <?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

            <div class="no-search-results-form section-inner thin">

                <?php
			get_search_form(
				array(
					'label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

            </div><!-- .no-search-results -->

            <?php
	}
	?>

            <?php get_template_part( 'template-parts/pagination' ); ?>
        </div>
    </section>

</main><!-- #site-content -->
<?php else:?>
<main id="site-content" role="main">
    <section class="iomarket-section">
        <div class="container">

            <?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'SUCHERGEBNISSE FÜR:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'Entschuldigung, aber nichts entspricht Ihren Suchbegriffen. Bitte versuchen Sie es erneut mit verschiedenen Keywords.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nichts gefunden', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

            <div class="archive-header has-text-align-center header-footer-group">

                <div class="archive-header-inner section-inner medium">

                    <?php if ( $archive_title ) { ?>
                    <div class="archive-title section-title display-5 green-color font-black mb-md-4 mb-3">
                        <?php echo wp_kses_post( $archive_title ); ?></div>
                    <?php } ?>

                    <?php if ( $archive_subtitle ) { ?>
                    <div class="archive-subtitle section-inner thin max-percentage intro-text mb-md-4 mb-3">
                        <?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
                    <?php } ?>

                </div><!-- .archive-header-inner -->

            </div><!-- .archive-header -->

            <?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

            <div class="no-search-results-form section-inner thin">

                <?php
			get_search_form(
				array(
					'label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

            </div><!-- .no-search-results -->

            <?php
	}
	?>

            <?php get_template_part( 'template-parts/pagination' ); ?>
        </div>
    </section>

</main><!-- #site-content -->
<?php endif;?>
<?php
get_footer();