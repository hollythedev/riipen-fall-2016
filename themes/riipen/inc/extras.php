<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Riipen_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function riipen_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'riipen_body_classes' );

//Changes login logo of site
function my_custom_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {  background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
            padding-bottom: 30px; background-size: 220px !important; width: 230px !important;background-position: bottom !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_custom_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
    return 'Riipen';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


///For the Educators and Talent Page
function my_styles_method() {

	if(!is_page_template('educator.php')){
		return;
    }


		$url = CFS()->get ( 'banner'); // This is grabbing the background
        wp_add_inline_style( 'riipen-style' );
    }

    add_action( 'wp_enqueue_scripts', 'my_styles_method' );

		/**
		 * Custom About Page background image
		 */
		function my_background_method() {

						if(!is_page_template( 'about.php' )){
							return;
						}

		        $url = CFS()->get( 'about_background_image' );//This is grabbing the background image vis Custom Field Suite Plugin
		        $custom_css = "
		                .about-hero{
		                        background: url({$url}) no-repeat bottom center;
														background-size: cover;
		                }";
		        wp_add_inline_style( 'riipen-style', $custom_css );
		}
		add_action( 'wp_enqueue_scripts', 'my_background_method' );
