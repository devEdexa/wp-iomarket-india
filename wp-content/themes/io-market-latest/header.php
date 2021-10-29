<?php
/**
 * Header file for the io-market WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage io-market
 * @since io-market 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", user-scalable="no">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico"
        type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css" />
    <?php if ( is_page_template( 'templates/frontpage.php' ) ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css" />
    <?php }  else if ( is_page_template( 'templates/solution.php' ) ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/solution.css" />
    <?php }  else if (is_page_template( 'templates/about-two.php' ) ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css" />    
    <?php }  else if (is_page_template( 'templates/about.php' ) ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/customers.css" />
    <?php }  else if ( is_page_template( 'templates/customers.php' ) ) { ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/customers.css" />
    <?php }  else if ( is_page_template( 'templates/edi-network.php' ) ) { ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/edi-network.css" />
    <?php }  else if ( is_page_template( 'templates/contact.php' ) ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css" />
    <?php }  else if ( is_page_template( 'templates/blog.php' ) ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css" />
    <?php }  else if ( is_page_template( 'templates/blog-detail.php' ) ) { ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/blog-details.css" />
    <?php } else if ( is_singular( 'post' ) ) { ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo get_template_directory_uri(); ?>/assets/css/blog-details.css" />
    <?php }  else if ( is_archive() ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css" />
    <?php } else { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <?php } ?>
    <?php wp_head(); ?>
</head>
<?php if ( is_single() && 'post' == get_post_type() ) { ?>

<body <?php body_class('blog-detail'); ?>>
    <?php } else { ?>

    <body <?php body_class(); ?>>
        <?php } ?>
        <?php wp_body_open(); ?>
        <header id="site-header" class="site-header">
            <div class="container">
                <div class="header-main d-flex align-items-center justify-content-between">
                    <div class="mobile-menu-toggle d-lg-none">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/toggle-menu.svg"
                            alt="menu" title="menu">
                    </div>

                    <?php 
						$upload_logo = get_field('upload_logo', 'option');
						if( !empty( $upload_logo ) ): ?>
                    <a href="<?php echo site_url() ?>" class="logo" title="IO MARKET">
                        <img src="<?php echo $upload_logo; ?>" alt="IOMARKET">
                    </a>
                    <?php endif;	//switch back to the current site ?>

                    <div class="d-flex flex-wrap align-items-center">
                        <div class="header-menu d-lg-flex align-items-lg-center">
                            <div class="close-menu d-lg-none">
                                <span></span>
                                <span></span>
                            </div>
                            <div class="menu-bg-layer d-lg-none"></div>
                            <ul class="primary-menu reset-list-style black-color fs-6">
                                <?php	//switch to the main site of the network (it has ID 1)			

                            if ( has_nav_menu( 'primary' ) ) {

                            wp_nav_menu(
                                array(
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'menu' => '2',
                                )
                            );
							} elseif ( ! has_nav_menu( 'expanded' ) ) {

                                wp_list_pages(
                                    array(
                                        'show_sub_menu_icons' => true,
                                    )
                                );

                            }//switch back to the current site
                            
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--- banner section start--->
        <?php if ( ! is_404() ) { ?>
        <!-- HOMEPAGE ONLY-->
        <?php if ( is_page_template( 'templates/frontpage.php' ) ) { 
            $banner_image = get_field('banner_image');
            $banner_title = get_field('banner_title');
            $banner_subtitle = get_field('banner_subtitle');
            $banner_description = get_field('banner_description'); 
            $call_action_label = get_field('call_action_label'); 
            $call_action_link = get_field('call_action_link'); 
        ?>
        <section class="banner-section">
            <div class="banner-section-main position-relative">
                <?php if(!empty($banner_image)){ ?>
                <img class="banner-image position-absolute h-100" src="<?php echo $banner_image; ?>" alt="banner">
                <?php } else { ?>
                <img class="banner-image position-absolute h-100"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg" alt="banner">
                <?php } ?>
                <div class="banner-text py-3 w-100 position-absolute">
                    <div class="container">
                        <h1
                            class="lightgray-color display-5 font-black z-index2 position-relative mb-xxl-4 mb-md-3 mb-2">
                            <?php echo $banner_title; ?>
                            <br>
                            <span class="green-color typewriter-text pe-2"
                                data-text='[<?php echo $banner_subtitle; ?>]'>
                            </span>
                        </h1>
                        <p class="banner-discription black-color fs-5 font-semibold z-index2 position-relative">
                            <?php echo $banner_description; ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <?php //if(have_rows('home_logo')) : ?>
            <div class="banner-logo-bar position-relative gray-bg overflow-hidden py-3">
                <div class="container">
                    <ul class="banner-logo-slider owl-carousel d-flex flex-wrap m-md-auto">
                        <?php //while(have_rows('home_logo')) : the_row(); 
                //$upload_home_logo = get_sub_field('upload_home_logo');?>
                        <li
                            class="d-flex justify-content-center align-items-center grayscale-item position-relative m-auto gray-bg overflow-hidden">
                            <img src="<?php //echo esc_url($upload_home_logo['url']); ?>"
                                alt="<?php //echo esc_attr($upload_home_logo['alt']); ?>" class="img_grayscale w-100" />
                        </li>
                        <?php //endwhile; wp_reset_query();?>
                    </ul>
                </div>
            </div> <?php //endif; ?> -->
        </section>
        <!--- for blog detail--->

        <!-- END HOMEPAGE-->
        <?php } elseif ( is_page_template( 'templates/about.php' ) ) { ?>
        <!-- ABOUT PAGE ONLY-->
        <section class="innerbanner-section">
            <div class="innerbanner-section-main position-relative">
                <?php 
		$header_banner = get_field('header_banner');   
		if( !empty( $header_banner ) ){ ?>
                <img class="banner-image position-absolute h-100" src="<?php echo esc_url($header_banner['url']); ?>"
                    alt="header-banner" />
                <?php } else { ?>
                <img class="banner-image position-absolute h-100"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-banner.jpg" alt="banner">
                <?php } ?>
                <div class="banner-text py-3 w-100 position-absolute">
                    <div class="container">
                        <h1
                            class="lightgray-color display-5 font-black z-index2 position-relative mb-xxl-4 mb-md-3 mb-2  about-typewriter-text">
                            <?php the_field('header_heading'); ?>
                            <?php 
					$header_subheading = get_field('header_subheading');   
					?>
                            <span class="green-color typewriter-text pe-2"
                                data-text='[<?php the_field('header_subheading'); ?>]'>
                            </span>

                        </h1>
                        <div class="banner-discription mb-3 black-color fs-5 font-semibold z-index2 position-relative">
                            <?php the_field('header_shortline'); ?></div>
                        <?php $page_button_label = get_field('page_button_label');    $page_redirect_link = get_field('page_redirect_link');    if(!empty($page_button_label)) { ?>
                        <a href="<?php echo $page_redirect_link; ?>" titile="<?php echo $page_button_label; ?>"
                            class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block"><?php echo $page_button_label; ?></a>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- END ABOUT PAGE-->
        <?php } elseif ( is_singular( 'post' ) ) { ?>
        <section class="innerbanner-section">
            <div class="innerbanner-section-main position-relative blogdetailsbanner-section-main">
                <?php 
		$blog_upload_banner = get_field('blog_upload_banner');   
		if( !empty( $blog_upload_banner ) ){ ?>
                <img class="banner-image position-absolute h-100 "
                    src="<?php echo esc_url($blog_upload_banner['url']); ?>" alt="header-banner" />
                <?php } else { ?>
                <img class="banner-image position-absolute h-100 "
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/Blog-Banner.jpg" alt="banner"
                    title="banner">
                <?php } ?>

                <div class="banner-text py-3 w-100 position-absolute z-index2">
                    <div class="container">
                        <div class="date fs-6 mb-2 position-relative"><?php echo get_the_date(); ?></div>
                        <div class="catagory position-relative fs-5 font-black mb-xxl-4 mb-md-3 mb-2 d-inline-block">
                            <?php $category = get_the_category();
						   $category_detail=get_the_category($post->ID);//$post->ID
						foreach($category_detail as $cd){
						echo $cd->cat_name;
						} ?>
                        </div>
                        <h1
                            class="lightgray-color display-6 font-black z-index2 position-relative mb-xxl-4 mb-md-3 mb-2 text-break">
                            <?php the_title();?>
                            <span class="d-block"></span>
                        </h1>
                        <div class="banner-discription black-color fs-5 font-semibold z-index2 position-relative">
                            <?php the_field('banner_descriptions'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ALL POST/ARCHIVE ONLY-->
        <?php } elseif ( is_archive() ) { ?>
        <section class="innerbanner-section">
            <div class="innerbanner-section-main position-relative">
                <?php 
		$header_banner = get_field('header_banner');   
		if( !empty( $header_banner ) ){ ?>
                <img class="banner-image position-absolute h-100" src="<?php echo esc_url($header_banner['url']); ?>"
                    alt="header-banner" />
                <?php } else { ?>
                <img class="banner-image position-absolute h-100"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-banner.jpg" alt="banner">
                <?php } ?>
                <div class="banner-text py-3 w-100 position-absolute">
                    <div class="container">
                        <h1
                            class="lightgray-color display-4 font-black z-index2 position-relative mb-xl-4 mb-md-3 mb-2">

                            <?php  if( is_archive()) { ?>
                            <span class="d-block green-color"> <?php the_archive_title(); ?> </span>
                            <?php } else { ?>
                            <br>
                            <span class="d-block green-color"><?php the_title();?> </span>
                            <?php } ?>
                        </h1>
                        <div class="banner-discription black-color fs-5 font-semibold z-index2 position-relative">
                            <?php the_field('header_shortline'); ?></div>
                    </div>
                </div>
            </div>
        </section>
        <?php } else {  ?>
        <!-- END ALL POST/ARCHIVE ONLY -->
        <!-- ALL INNER PAGE ONLY-->
        <section class="innerbanner-section">
            <div class="innerbanner-section-main position-relative">
                <?php 
		$header_banner = get_field('header_banner');   
		if( !empty( $header_banner ) ){ ?>
                <img class="banner-image position-absolute h-100" src="<?php echo esc_url($header_banner['url']); ?>"
                    alt="header-banner" />
                <?php } else { ?>
                <img class="banner-image position-absolute h-100"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/solution-banner.jpg" alt="banner">
                <?php } ?>
                <div class="banner-text py-3 w-100 position-absolute">
                    <div class="container">
                        <h1
                            class="lightgray-color display-5 font-black z-index2 position-relative mb-xxl-4 mb-md-3 mb-2 ">
                            <?php 
					$header_heading = get_field('header_heading');   
					if( !empty( $header_heading ) ){ ?>
                            <?php the_field('header_heading'); ?>
                            <?php } ?>
                            <?php 
					$header_subheading = get_field('header_subheading');   
					if( !empty( $header_subheading ) ){ ?>

                            <span class="d-block green-color"><?php the_field('header_subheading'); ?>
                            </span>
                            <?php } else { ?>

                            <span class="d-block green-color"><?php the_title();?>
                                <?php } ?>
                        </h1>

                        <div class="banner-discription mb-3 black-color fs-5 font-semibold z-index2 position-relative">
                            <?php the_field('header_shortline'); ?></div>
                        <?php $page_button_label = get_field('page_button_label');    $page_redirect_link = get_field('page_redirect_link');    if(!empty($page_button_label)) { ?>
                        <a href="<?php echo $page_redirect_link; ?>" titile="<?php echo $page_button_label; ?>"
                            class="iom-arrow-button fs-4 green-bg white-color hover-white-color transiton-03s rounded border-1 green-border text-capitalize position-relative d-inline-block"><?php echo $page_button_label; ?></a>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- END INNER PAGE ONLY-->

        <?php } } // 404 PAGE CONDITION END ?>
        <!-- banner section ends-->