<?php
/**
 * Block Header .
 *
 * @package Shopical
 */
?>

<div class="header-style-3-1 header-style-center">
    <div class="desktop-header clearfix">
        <?php
        $class = '';
        $background = '';
        if (has_header_image()) {
            $class = 'data-bg';
            $background = get_header_image();
        }

        ?>
        <div class="header-background-img aft-header-background  <?php echo esc_attr($class); ?>"
             data-background="<?php echo esc_attr($background); ?>">
            <div class="container-wrapper">
                <div class="header-left-part">
                    <div class="logo-brand">
                        <div class="site-branding">
                            <?php
                            the_custom_logo();
                            if (is_front_page() && is_home()) :
                                ?>
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                          rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php
                            else :
                                ?>
                                <h3 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                          rel="home"><?php bloginfo('name'); ?></a></h3>
                            <?php
                            endif;
                            $shopical_description = get_bloginfo('description', 'display');
                            if ($shopical_description || is_customize_preview()) :
                                ?>
                                <p class="site-description"><?php echo $shopical_description; /* WPCS: xss ok. */ ?></p>
                            <?php endif; ?>
                        </div><!-- .site-branding -->
                    </div>
                </div>
                <div class="search">
                    <div class="center-header-af">
                        <?php shopical_product_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="site-primary-navigation" class="navigation-section-wrapper clearfix">
            <div class="container-wrapper">
                <div class="header-middle-part">
                    <div class="navigation-container">

                        <nav id="site-navigation" class="main-navigation">
                            <span class="toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                                <span class="screen-reader-text">
                                    <?php esc_html_e('Primary Menu', 'storement'); ?></span>
                                 <i class="ham"></i>
                        </span>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'aft-primary-nav',
                                'menu_id' => 'primary-menu',
                                'container' => 'div',
                                'container_class' => 'menu main-menu'
                            ));
                            ?>
                        </nav><!-- #site-navigation -->

                    </div>
                </div>
                <div class="header-right-part">

                    <?php if (class_exists('WooCommerce')): ?>
                        <?php $aft_enable_minicart = shopical_get_option('aft_enable_minicart');
                        if ($aft_enable_minicart == true): ?>
                            <div class="cart-shop">

                                <div class="af-cart-wrapper dropdown">
                                    <?php shopical_woocommerce_header_cart(); ?>
                                </div>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <div class="search aft-show-on-mobile">
                        <div id="myOverlay" class="overlay">
                            <span class="close-serach-form" title="Close Overlay">x</span>
                            <div class="overlay-content">
                                <?php shopical_product_search_form(); ?>
                            </div>
                        </div>
                        <button class="open-search-form"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>