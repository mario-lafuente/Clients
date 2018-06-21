<?php
/* function marioLafuente_Index * /

0.0  Increase the Maximum File Upload Size
1.0 - Css Call Enqueue
 1.1 - add Js
2.0 - Customize Admin Panel
3.0 - remove_version
3.1  remove 'twentysixteen_credits
	3.1 - remove JUNK FROM HEAD
	3.2	- remove All Yoast HTML Comments



/* 0.0  Increase the Maximum File Upload Size
-------------------------------------------------------------- */

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/*
PHP.INI
	upload_max_filesize = 64M
	post_max_size = 64M
	max_execution_time = 300

htaccess Method
	php_value upload_max_filesize 64M
	php_value post_max_size 64M
	php_value max_execution_time 300
	php_value max_input_time 300
*/

/* 1.0 - Css Call Enqueue
-------------------------------------------------------------- */

function marioLafuente_enqueue_styles() {

		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

			 if ( is_rtl() ) {
			 wp_enqueue_style( 'mfn-rtl', get_template_directory_uri() . '/rtl.css' );
		 	}

			//Template from bahum
			wp_enqueue_style( 'bootstrap-style',   get_theme_file_uri() . '/assets/system/bootstrap.min.css' );
			wp_enqueue_style( 'mdb-style',   get_theme_file_uri() .'/assets/system/mdb.css' );
			wp_enqueue_style( 'fold-style',   get_theme_file_uri() . '/assets/css/fold.css' );
			wp_enqueue_style( 'main-style',  get_theme_file_uri() . '/assets/css/style.css' );
			wp_enqueue_style( 'awesome-style',   get_theme_file_uri() . '/assets/css/font-awesome.css' );
	 }
add_action( 'wp_enqueue_scripts', 'marioLafuente_enqueue_styles' );

/* 1.1 - add Js
-------------------------------------------------------------- */

function marioLafuente_include_js() {

wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/system/jquery-2.2.4.min.js', array(), '2.2.4', true );
wp_enqueue_script( 'Tether', get_template_directory_uri() . '/assets/plugins/mdb/tether.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/system/bootstrap.min.js', array(), '4.0.0', true );
wp_enqueue_script( 'MDB', get_template_directory_uri() . '/assets/plugins/mdb/mdb.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugin.min.js', array(), '', true );
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/all.min.js', array(), '', true );


}

add_action('wp_enqueue_scripts', 'marioLafuente_include_js');


	 /* 2.0 - Customize Admin Panel
	 -------------------------------------------------------------- */

	 function marioLafuente_custom_admin_Dash(){
	     echo '
	         <style type="text/css">
	 				#wp-admin-bar-wp-logo {
	 				display: none;
	 				}

	 				#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
	     		width: 160px;
	     		background-color: #4d4d4d;

	 				#contextual-help-link-wrap {
	 				    display: none!important;
	 				}

	 				#footer-upgrade {
	     		display: none;
	 				}
	 				}
	         </style>
	     ';
	 }


	 function marioLafuente_my_custom_logo() {
	 echo '
	 	<style type="text/css">
	 	#header-logo { background-image: url('.get_stylesheet_directory_uri().'/assets/images/logo.png) !important; }
	 	</style>
	 ';
	 }

	 function marioLafuente_custom_login_logo() {
	 	echo '<style type="text/css">
	 	h1 a { background-image: url('.get_stylesheet_directory_uri().'/assets/images/logo.png) !important; }
	 	</style>';
	 }

	 function marioLafuente_my_custom_login() {
	 echo '<link rel="stylesheet" type="text/css" href="' .get_stylesheet_directory_uri(). '/assets/css/login.css" />';
	 }

	 // Admin footer modification
	 function marioLafuente_remove_footer_admin ()
	 {
	     echo '<span id="footer-thankyou">Developed by <a href="https://baumdigital.com" target="_blank">Baumdigital </a></span>';
	 }

	 add_action( 'admin_head', 'marioLafuente_custom_admin_Dash' );
	 add_action('login_head', 'marioLafuente_my_custom_logo');
	 add_action('login_head', 'marioLafuente_my_custom_login');
	 add_action('login_head', 'marioLafuente_custom_login_logo');
	 add_filter('admin_footer_text', 'marioLafuente_remove_footer_admin');


	 /* 3.0 - remove_version
	 -------------------------------------------------------------- */

	 function marioLafuente_remove_version() {
	 return '';
	 }
 	function remove_revslider_meta_tag() {
    return '';
		}

 		add_filter('the_generator', 'marioLafuente_remove_version');
		add_filter( 'revslider_meta_generator', 'remove_revslider_meta_tag' );




	 /* 3.1 - REMOVE JUNK FROM HEAD
	 -------------------------------------------------------------- */

	 // Removes the wlwmanifest link
	 remove_action( 'wp_head', 'wlwmanifest_link' );
	 // Removes the RSD link
	 remove_action( 'wp_head', 'rsd_link' );
	 // Removes the WP shortlink
	 remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	 // Removes the canonical links
	 remove_action( 'wp_head', 'rel_canonical' );
	 // Removes the links to the extra feeds such as category feeds
	 remove_action( 'wp_head', 'feed_links_extra', 3 );
	 // Removes links to the general feeds: Post and Comment Feed
	 remove_action( 'wp_head', 'feed_links', 2 );
	 // Removes the index link
	 remove_action( 'wp_head', 'index_rel_link' );
	 // Removes the prev link
	 remove_action( 'wp_head', 'parent_post_rel_link' );
	 // Removes the start link
	 remove_action( 'wp_head', 'start_post_rel_link' );
	 // Removes the relational links for the posts adjacent to the current post
	 remove_action( 'wp_head', 'adjacent_posts_rel_link' );
	 remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
	 // Removes the WordPress version i.e. -
	 remove_action( 'wp_head', 'wp_generator' );

	 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	 remove_action( 'wp_print_styles', 'print_emoji_styles' );
	 remove_action( 'admin_print_styles', 'print_emoji_styles' );


		/* 3.2 - Remove All Yoast HTML Comments
 	 -------------------------------------------------------------- */
		if (defined('WPSEO_VERSION')){
		  add_action('get_header',function (){ ob_start(function ($o){
		  return preg_replace('/^<!--.*?[Y]oast.*?-->$/mi','',$o); }); });
		  add_action('wp_head',function (){ ob_end_flush(); }, 999);
		}


		/* 4.0 - Rename widgets
 	 -------------------------------------------------------------- */
	 function marioLafuente_widgets(){

	 	// Unregister some of the TwentyTen sidebars
	 	//unregister_sidebar( 'sidebar-1' );
	 //	unregister_sidebar( 'sidebar-2' );
	 	//unregister_sidebar( 'sidebar-3' );

		// register with new names
		register_sidebar( array(
			'name'          => __( 'Search Sidebar', 'twentyseventeen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

	 register_sidebar( array(
 		'name'          => __( 'Footer 1', 'twentyseventeen' ),
 		'id'            => 'sidebar-2',
 		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
 		'after_widget'  => '</section>',
 		'before_title'  => '<h2 class="widget-title">',
 		'after_title'   => '</h2>',
 	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'twentyseventeen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		 }
	 add_action( 'widgets_init', 'marioLafuente_widgets', 11 );
