<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */

if ( is_single() && 'post' == get_post_type() ) {
 ?>
<div class="breadcrumb py-md-4 py-3">
    <div class="container">
        <ul class="d-flex flex-wrap align-items-center font-semibold">
            <li><a href="<?php echo icl_get_home_url() ?>" title="Home"
                    class="dark-color hover-green-color me-2 pe-2 position-relative">Blog</a></li>
            <li><a href="javascript:void(0)" title="<?php echo $page_title = $wp_query->post->post_title;;?>"
                    class="dark-color hover-green-color me-2 pe-2 position-relative current"><?php echo $page_title = $wp_query->post->post_title;;?></a>
            </li>
        </ul>
    </div>
</div>
<section class="iomarket-section blog-detail-section pt-4">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-lg-8 col-xl-9 mb-xl-0 mb-4">
                <div class="blog-details">
                    <?php 
                    the_content();
                    ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-3">
                <div class="blog-sidebar w-100 d-block">
                    <div class="link-box d-flex align-items-center flex-wrap justify-content-lg-between mb-3">
                        <span class="link-title font-semibold me-lg-0 me-3">
                            <?php if(ICL_LANGUAGE_CODE=='en'){?>Share post<?php } else { ?>Beitrag teilen:<?php } ?>
                        </span>
                        <?php $post_url = urlencode( esc_url( get_permalink($post->ID) ) );
									$post_title = urlencode( $post->post_title );
									?>
                        <ul class="share-icon m-0 p-1 d-flex flex-wrap align-items-center">
                            <li class="d-flex flex-wrap">
                                <a class="transiton-03s d-flex"
                                    href="https://web.skype.com/share?url=<?php echo $post_url;?>" target="_blank"
                                    title="Skype">
                                    <svg viewBox="0 0 26 26" class="w-100">
                                        <use
                                            xlink:href="https://blog.io-market.com/wp-content/themes/io-market-latest/assets/images/svg/social-share.svg#skype">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                            <li class="d-flex flex-wrap ms-1">
                                <a class="transiton-03s d-flex"
                                    href="https://mail.google.com/mail/?view=cm&su=<?php echo $post_title; ?>&body=<?php echo $post_url;?>"
                                    target="_blank" title="Mail">
                                    <svg viewBox="0 0 26 26" class="w-100">
                                        <use
                                            xlink:href="https://blog.io-market.com/wp-content/themes/io-market-latest/assets/images/svg/social-share.svg#mail">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                            <li class="d-flex flex-wrap ms-1">
                                <a class="transiton-03s d-flex"
                                    href="https://www.facebook.com/sharer.php?u=<?php echo $post_url;?>" target="_blank"
                                    title="Facebook">
                                    <svg viewBox="0 0 26 26" class="w-100">
                                        <use
                                            xlink:href="https://blog.io-market.com/wp-content/themes/io-market-latest/assets/images/svg/social-share.svg#facebook">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                            <li class="d-flex flex-wrap ms-1">
                                <a class="transiton-03s d-flex"
                                    href="https://twitter.com/intent/tweet/?text=<?php echo $post_title; ?>&url=<?php echo $post_url; ?>"
                                    target="_blank" title="Twitter">
                                    <svg viewBox="0 0 26 26" class="w-100">
                                        <use
                                            xlink:href="https://blog.io-market.com/wp-content/themes/io-market-latest/assets/images/svg/social-share.svg#twitter">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                            <li class="d-flex flex-wrap ms-1">
                                <a class="transiton-03s d-flex"
                                    href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url;?>"
                                    target="_blank" title="Linkedin">
                                    <svg viewBox="0 0 26 26" class="w-100">
                                        <use
                                            xlink:href="https://blog.io-market.com/wp-content/themes/io-market-latest/assets/images/svg/social-share.svg#linkedin">
                                        </use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box search-box mb-3 pt-3 pb-3 pe-3 ps-3 white-bg">
                        <?php if(ICL_LANGUAGE_CODE=='en'):?>
                        <form role="search" method="get" class="search-form mb-0"
                            action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <div class="form-group gray-bg">
                                <input type="search" class="search-field form-control rounded-0 border-0 gray-bg"
                                    placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'twentysixteen' ); ?>"
                                    value="<?php echo get_search_query(); ?>" name="s" />
                                <input type="hidden" name="lang" value="en" />
                                <button type="submit"
                                    class="search-submit p-0 position-absolute m-auto rounded-0 border-0"></button>
                            </div>
                        </form>
                        <?php else:?>

                        <form role="search" method="get" class="search-form mb-0"
                            action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <div class="form-group gray-bg">
                                <input type="search" class="search-field form-control rounded-0 border-0 gray-bg"
                                    placeholder="<?php echo esc_attr_x( 'Suchen', 'placeholder', 'twentysixteen' ); ?>"
                                    value="<?php echo get_search_query(); ?>" name="s" />
                                <button type="submit"
                                    class="search-submit p-0 position-absolute m-auto rounded-0 border-0"></button>
                            </div>
                        </form>
                        <?php endif;?>
                    </div>
                    <div class="sidebar-box pt-3 pb-3 pe-3 ps-3 white-bg">
                        <div class="site-title mb-4">
                            <?php if(ICL_LANGUAGE_CODE=='en'){?>
                            <div class="fs-4 font-black text-uppercase">
                                ALSO INTERESTING:</div>
                            <?php } else { ?>
                            <div class="fs-4 font-black text-uppercase">
                                Ebenfalls interessant:</div>
                            <?php } ?>

                        </div>
                        <div class="recent-post">
                            <?php 
							$the_query = new WP_Query( array(
								'posts_per_page' => 3,
								'post__not_in'   => array( get_the_ID() )
							)); 
						?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="post mb-3 pt-3 pb-2 pe-3 ps-3 gray-bg">
                                <a href="#" class="title darkgray-color hover-green-color d-block" title="post">
                                    <span
                                        class="date mb-2 small d-block darkgray-color"><?php echo get_the_date(); ?></span>
                                    <span
                                        class="title d-block fs-5 mb-1 font-bold text-break"><?php the_title();?></span>
                                    <?php	if ( has_excerpt() ) {?>
                                    <?php the_excerpt();  ?>
                                    <?php } else { ?>
                                    <p><?php echo wp_trim_words( get_the_content(), 8);?></p>
                                    <?php  } ?>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } else { ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php

	//get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	?>

    <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

        <div class="entry-content">

            <?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

        </div><!-- .entry-content -->

    </div><!-- .post-inner -->

    <div class="section-inner">
        <?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

	

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

    </div><!-- .section-inner -->

    <?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}
?>

</article><!-- .post -->
<?php } ?>