<?php
/**
 * Template Name: Blog-detail Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */
 get_header(); ?>
<div class="breadcrumb py-md-4 py-3">
    <div class="container">
        <ul class="d-flex flex-wrap align-items-center font-semibold">
            <li><a href="#" title="Home" class="dark-color hover-green-color me-2 pe-2 position-relative">link one</a>
            </li>
            <li><a href="#" title="Lösungen" class="dark-color hover-green-color me-2 pe-2 position-relative">link
                    two</a></li>
            <li><a href="javascript:void(0)" title="EDI Netzwerk"
                    class="dark-color hover-green-color me-2 pe-2 position-relative current">link three</a></li>
        </ul>
    </div>
</div>
<section class="iomarket-section blog-detail-section pt-4">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 col-lg-8 col-xl-9 mb-xl-0 mb-4">
                <div class="blog-details">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; else: ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-3">
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
                    <div class="sidebar-box search-box pt-3 pb-3 pe-3 ps-3 white-bg">
                        <div class="site-title mb-4">
                            <div class="fs-4 font-black text-uppercase">
                                Ebenfalls interessant:</div>
                        </div>
                        <div class="recent-post">
                            <div class="post mb-3 pt-3 pb-2 pe-3 ps-3 gray-bg">
                                <a href="#" class="title darkgray-color hover-green-color d-block" title="post">
                                    <span class="date mb-2 small d-block darkgray-color">16. Juni 2021</span>
                                    <span class="title d-block fs-5 mb-1 font-bold">Contract Management</span>
                                    <p>Die Funktion des Contract Managements liegt</p>
                                </a>
                            </div>
                            <div class="post mb-3 pt-3 pb-2 pe-3 ps-3 gray-bg">
                                <a href="#" class="title darkgray-color hover-green-color d-block" title="post">
                                    <span class="date mb-2 small d-block darkgray-color">16. Juni 2021</span>
                                    <span class="title d-block fs-5 mb-1 font-bold">Contract Management</span>
                                    <p>Die Funktion des Contract Managements liegt</p>
                                </a>
                            </div>
                            <div class="post mb-3 pt-3 pb-2 pe-3 ps-3 gray-bg">
                                <a href="#" class="title darkgray-color hover-green-color d-block" title="post">
                                    <span class="date mb-2 small d-block darkgray-color">28. Mai 2021</span>
                                    <span class="title d-block fs-5 mb-1 font-bold">Was ist Business Blockchain</span>
                                    <p>Was bedeutet Blockchain überhaupt? Einfach ge</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>