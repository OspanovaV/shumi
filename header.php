
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<!-- Header
================================================== -->
	<header id="masthead" class="site-header">
            <div class="d-flex">
                <nav class="navbar navbar-light">
                    <div class="">
                        <button class="navbar-toggler" type="button" id="burgerButton">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="30" height="3" fill="#2D243A"/>
                                <rect y="14" width="30" height="3" fill="#2D243A"/>
                            </svg>
                        </button>

                        <div class="menu-wrapper" id="menuWrapper">
                            <div class="d-flex close-menu" id="closeMenu">
                                <p>Menu</p>
                                <button class="close-button" type="button">X</button>
                            </div>
                        <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header_menu',
                            'menu'           => 'Top menu',
                            'menu_id'        => 'header-menu',
                            'container' => 'nav',
                            'container_class' => 'navbar navbar-expand-lg navbar-light bg-light',
                            'menu_class' => 'navbar-nav',
                            'walker' => new WP_Bootstrap_Navwalker()
                        )
                    );
                    ?>
                    </div>
                </div>
                </nav>
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img alt="" src="<?php echo get_template_directory_uri() . '/images/icons/logo.svg'; ?>">
                    </a>
                </div>
                <div class="language">
                    <a href="#">EN</a>
                    <a href="#">KA</a>
                </div>
        </div>
	</header><!-- #masthead -->
