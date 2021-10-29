<?php
/**
 * Template Name: Blog Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); 
$main_blog = 2; switch_to_blog( $main_blog ); ?>
<style>
.blog-news-section .blog-from-main .blog-box {
    display: none;
}

.blog-news-section .blog-from-main .blog-box:nth-child(-n+12) {
    display: block
}

.show-more-row {
    display: none
}
</style>
<script>
$ = jQuery;
$(document).ready(function() {
    !$(".blog-news-section .blog-from-main .blog-box:hidden").length ? $(".show-more-row").hide() : '';
    $(".show-more-row a").on('click', function(e) {
        e.preventDefault();
        $(".blog-news-section .blog-from-main .blog-box:hidden").slice(0, 3).fadeIn(function() {
            $(".blog-news-section .blog-from-main .blog-box:hidden").length == 0 ? $(
                '.show-more-row').hide() : '';
        });
    });
});

var loadMore = false

$(window).scroll(function() {
    if (jQuery(window).scrollTop() >= (jQuery(document).height() - jQuery(window).height() - 200) &&
        !loadMore && jQuery(".blog-news-section .blog-from-main").length) {
        loadMore = true
        $(".blog-news-section .blog-from-main .blog-box:hidden").slice(0, 3).fadeIn(function() {
            // scaling.navigationTop();
            $(".blog-news-section .blog-from-main .blog-box:hidden").length == 0 ? $('.show-more-row')
                .hide() : '';
            loadMore = false
        });
    }
})
</script>
<section class="iomarket-section blog-section blog-news-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-lg-8 col-xl-9 order-lg-1 order-2">
                <div class="blog-from-main row d-flex flex-wrap">
                    <!-- start blog-->
                    <?php wp_reset_query();
								$args = array(
								'post_type' => 'post',
								//'paged' => $paged,  
								'orderby' => 'publish_date',
								'lang' => ICL_LANGUAGE_CODE,
								'posts_per_page'   => '-1',
								'order'            => 'DESC',
                                    //'tax_query' => array (
                                      //  array(
                                       //     'taxonomy' => 'category', // I have a custom taxonomy, 'subject'
                                        //    'field' => 'slug',
										//	'terms'    => array( 'blog' ),
										//	 'operator' => 'IN'
                                            //'terms' => array('highlights', 'customer', 'casestudy'),
                                            //'operator' => 'NOT IN' // This operator ensures that the values listed in 'term' are excluded
                                       // )
                                   // ), 
                                    'post_status' => 'publish',
							); 
									$the_querys = new WP_Query( $args); 
									while ( $the_querys -> have_posts() ) :$the_querys ->  the_post(); 
									// for social share
									$post_url = urlencode( esc_url( get_permalink($post->ID) ) );
									$post_title = urlencode( $post->post_title );
									?>

                    <div class="col-sm-12 col-md-6 col-xl-4 blog-box mb-md-4 mb-3  align-self-stretch">
                        <div class="blog-box-item h-100 position-relative pb-5">
                            <a class="transiton-03s" href="<?php echo esc_url(get_permalink()); ?>"
                                title="<?php the_title();?>">
                                <?php   if ( has_post_thumbnail() ) :?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" />
                                <?php else:?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/INATBA_article-1200x802.jpg"
                                    alt="<?php the_title();?>" class="w-100">
                                <?php endif;?>
                            </a>
                            <div class="blog-info-box pt-3 p-4 pb-5">
                                <span class="gray-color d-inline-block small"><?php echo get_the_date(); ?></span>
                                <div class="heading-main">
                                    <a class="heading position-relative font-bold fs-5 pb-3 mt-3 mb-3 d-inline-block transiton-03s text-decoration-none"
                                        title="<?php the_title();?>"
                                        href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?></a>
                                </div>
                                <?php	if ( has_excerpt() ) {?>
                                <?php the_excerpt();  ?>
                                <?php } else { ?>
                                <p class="mb-3"><?php echo wp_trim_words( get_the_content(), 15 );?></p>
                                <?php  } ?>

                            </div>
                            <div
                                class="share-button position-absolute ms-4 me-4 overflow-hidden d-flex align-items-center justify-content-center">
                                <div class="share-box position-relative transiton-03s">
                                    <a href="javascript:;" <?php if(ICL_LANGUAGE_CODE=='en'){?> title="share"
                                        <?php } else { ?>title="Teilen" <?php } ?>
                                        class="share d-inline-block position-relative pt-3 pb-3 ps-4 pe-4 transiton-03s"></a>
                                    <ul
                                        class="share-icon position-absolute m-0 p-0 ps-2 transiton-03s d-flex flex-wrap align-items-center">
                                        <li class="d-flex flex-wrap ms-1">
                                            <a class="transiton-03s d-flex"
                                                href="https://web.skype.com/share?url=<?php echo $post_url;?>"
                                                target="_blank" title="Skype">
                                                <svg viewBox="0 0 26 26" class="w-100">
                                                    <use
                                                        xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#skype">
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
                                                        xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#mail">
                                                    </use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="d-flex flex-wrap ms-1">
                                            <a class="transiton-03s d-flex"
                                                href="https://www.facebook.com/sharer.php?u=<?php echo $post_url;?>"
                                                target="_blank" title="Facebook">
                                                <svg viewBox="0 0 26 26" class="w-100">
                                                    <use
                                                        xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#facebook">
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
                                                        xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#twitter">
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
                                                        xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/social-share.svg#linkedin">
                                                    </use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php if(ICL_LANGUAGE_CODE=='en'):?>
                            <a href="<?php echo esc_url(get_permalink()); ?>"
                                class="read-more position-absolute d-inline-block mb-3 ms-4 transiton-03s text-decoration-none"
                                title="<?php _e( 'Read more' ); ?>"><?php _e( 'Read more' ); ?></a>
                            <?php else:?>
                            <a href="<?php echo esc_url(get_permalink()); ?>"
                                class="read-more position-absolute d-inline-block mb-3 ms-4 transiton-03s text-decoration-none"
                                title="<?php _e( 'mehr lesen' ); ?>"><?php _e( 'mehr lesen' ); ?></a>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="show-more-row" style="display:block;width:100%;display:none;">
                        <a class="show-more" href="#" id="loadMore"><span
                                class="btn-more plus site-button trans"></span></a>
                    </div>
                    <?php endwhile;    wp_reset_postdata(); ?>
                </div>

            </div>
            <!-- end blog-->

            <div class="col-md-12 col-lg-4 col-xl-3 order-lg-2 order-1">
                <div class="blog-sidebar w-100 d-block">
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
                    <div class="sidebar-box categories-sidebar mb-3 pt-3 pb-3 pe-3 ps-3 white-bg">
                        <div class="site-title mb-4">
                            <span
                                class="font-black fs-5 black-color text-uppercase"><?php the_field('blog_sidebar_label_name'); ?></span>
                            <div class="fs-4 font-black green-color text-uppercase">
                                <?php the_field('blog_sidebar_label_green_name'); ?></div>
                        </div>

                        <?php    
							$categories = get_categories( [
							  'taxonomy'     => 'category',
							  'type'         => 'post',
							  'child_of'     => 0,
							  'parent'       => '',
							  'orderby'      => 'name',
							  'order'        => 'ASC',
							  'hide_empty'   => 1,
							  'hierarchical' => 1,
							  'exclude'      => '',
							  'include'      => '',
							  //'name'              => 'blog',
							  'number'       => 0,
							   'lang' => ICL_LANGUAGE_CODE,
							  'pad_counts'   => false,
							] );

							if( $categories ) {
							  foreach( $categories as $cat ) {

							?>
                        <li class="cat-item cat-item-20 d-block position-relative pt-2 pb-2 ps-3"><a
                                href="<?php echo get_category_link($cat->term_id); ?>"
                                class="text-decoration-none"><?php echo $cat->name; ?></a></li>
                        <?php
							  }
							}
						  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php restore_current_blog();
 get_footer();?>