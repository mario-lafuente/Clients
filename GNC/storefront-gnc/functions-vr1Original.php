<?php
/* function marioLafuente_Index * /

//////////   System  /////////////////////////////////////
0.1      Global Variables
0.3      Prices


//////////   ACF  /////////////////////////////////////
0.4     google map ACF


//////////   WP CUSTOMIZATION ////////////////////////


1.0     Add Js Footer
1.01    Add Js header
1.2     Quita error del dom de js
1.3      Deregister CSS file
1.4      Css Call Enqueue

Customize DashBoard

1.5     Remove widgets
1.51    Remove Dashboar welcome and widgets
1.52    Customize Admin Panel
1.6     Remove submenus DashBoard
1.7     Add Dashboard menu
1.71    Add css for my menu
1.8     Add css to Dashboard


0.3      Add_theme_support except length to 20 words.
0.3.1    Add_theme_support  thumbnails
0.3.2    Add_theme_support  LOGO
0.3.3    Add_theme_support  redirection
0.3.4    Add_theme_support tags

0.3.5    Unregister Sidebar
0.3.6    Register   sidebar

Menus
0.3.6    Unregister Regular menus
0.3.7    Register menus
0.3.71   Register Walker
0.3.8    Remove menu li classs from li and add another
0.3.9    Nav_menu_link_attributes


unregister And Remove

3.1    Remove JUNK FROM HEAD
3.2    Remove All Yoast HTML Comments
3.3    Remove  ‘WordPress * is available! , boxes index
3.5   facebook metatag
3.6   html_schema



//////////   WooCommerce CUSTOMIZATION ////////////////////////
0.3.4 WooCommerce
1.2 - Customize Panel Hide items for woocommerce


//////////   others  /////////////////////////////////////
5.0 - AJAX
5.1 - For save info


//////////   Mashiur  /////////////////////////////////////
6.0 - 'gnc_setup'



//////////   System  /////////////////////////////////////



/* 0.1      Global Variables Variables el global y despues le meto el value
-------------------------------------------------------------- */
global $managerOpt_Home_PgId;       $managerOpt_Home_PgId     = 51;   // esta en otros lados run search
global $managerOpt_General_PgId;    $managerOpt_General_PgId  = 154; //up 1336; //change in line 405
global $tiendasPgId;                $tiendasPgId              = 181;   //up 45;





/* 0.3.2    Add_theme_support  LOGO
-------------------------------------------------------------- */
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}








/* 1.51    Remove Dashboar welcome and widgets
-------------------------------------------------------------- */
remove_action('welcome_panel', 'wp_welcome_panel');

function remove_dashboard_meta() {
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); //Removes the 'incoming links' widget
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); //Removes the 'plugins' widget
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); //Removes the 'WordPress News' widget
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); //Removes the secondary widget
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); //Removes the 'Quick Draft' widget
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side'); //Removes the 'Recent Drafts' widget
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); //Removes the 'Activity' widget
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); //Removes the 'At a Glance' widget
    remove_meta_box('dashboard_activity', 'dashboard', 'normal'); //Removes the 'Activity' widget (since 3.8)
}
add_action('admin_init', 'remove_dashboard_meta');



/*  1.52    Customize Admin Panel
-------------------------------------------------------------- */
add_action('login_head', 'marioLafuente_my_custom_logo');
   	 function marioLafuente_my_custom_logo() {
   	 echo '
   	 	<style type="text/css">
   	 	#header-logo { background-image: url('.get_stylesheet_directory_uri().'/assets/marioAdd-ons/logo.png) !important; }
   	 	</style>
   	 ';
   	 }

/* 1.6     Remove submenus DashBoard
-------------------------------------------------------------- */
add_action('login_head', 'marioLafuente_custom_login_logo');
   	 function marioLafuente_custom_login_logo() {
   	 	echo '<style type="text/css">
   	 	h1 a { background-image: url('.get_stylesheet_directory_uri().'/assets/marioAdd-ons/logo.png) !important; }
   	 	</style>';
   	 }

/* 1.7     Add Dashboard menu
-------------------------------------------------------------- */
add_action('login_head', 'marioLafuente_my_custom_login');
function marioLafuente_my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' .get_stylesheet_directory_uri(). '/assets/marioAdd-ons/login.css" />';
}

   	 // Admin footer modification
add_filter('admin_footer_text', 'marioLafuente_remove_footer_admin');
function marioLafuente_remove_footer_admin ()
{
echo '<span id="footer-thankyou">Developed by <a href="http://www.mariolafuente.com/" target="_blank">mariolafuente.com </a></span>';
}




/* 1.8     Add css to Dashboard
-------------------------------------------------------------- */
add_action( 'wp_dashboard_setup', 'marioLafuente_dashboard_widgets' );

function marioLafuente_dashboard_widgets() {
        wp_add_dashboard_widget(
            'quick-menu-access',              // Widget slug and css
            'Quick Menu Access',         // Title.
            'marioLafuente_dashboard_menu' // Display function.
        );
}


function marioLafuente_dashboard_menu() {
                echo '

      <table class="table-fill" style="width: 100%;">
       <thead>
          <tr>
             <th class="text-left" style="width: 80%;" colspan="2">Options Menu</th>
          </tr>
       </thead>
       <tbody class="table-hover">
       <tr>
          <td class="text-left" style="width: 80%;">
             <h4>Productos</h4>
          </td>
          <td class="text-left" style="width: 20%;"><a href="'.  esc_url( home_url( '/wp-admin/edit.php?post_type=product' ) )  .'" target="_blank" rel="noopener">Abrir</a></td>
       </tr>


          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Modificar Tipo de cambio</h4>
             </td>
             <td class="text-left" style="width: 20%;"><a href="'.  esc_url( home_url( '/wp-admin/options-general.php?page=gnc_storefront' ) )  .'" target="_blank" rel="noopener">Abrir</a></td>
          </tr>
          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Refrescar precios</h4>
             </td>
             <td class="text-left" style="width: 20%;">
             <a href="'. esc_url( home_url( '/run-dollar-product-price-update/' ) ) .'" target="_blank" rel="noopener">Abrir</a>
             </td>
          </tr>

          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Modificar Pg Principal</h4>
             </td>
             <td class="text-left" style="width: 20%;"><a href="'. esc_url( home_url( '/wp-admin/post.php?post=51&amp;action=edit' ) ) .'" target="_blank" rel="noopener">Abrir</a></td>
          </tr>
          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Modificar headlines</h4>
             </td>
             <td class="text-left" style="width: 20%;"><a href="' . esc_url( home_url( '/wp-admin/post.php?post=154&amp;action=edit' ) ) .'" target="_blank" rel="noopener">Abrir</a></td>
          </tr>
          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Modificar Menus</h4>
             </td>
             <td class="text-left" style="width: 20%;"><a href="' .esc_url( home_url( '/wp-admin/nav-menus.php' ) ) . '" target="_blank" rel="noopener">Abrir</a></td>
          </tr>
          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Modificar Footer Sidebar y mas</h4>
             </td>
             <td class="text-left" style="width: 20%;"><a href="' . esc_url( home_url( '/wp-admin/widgets.php' ) ) .'" target="_blank" rel="noopener">Abrir</a></td>
          </tr>
          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Listado de Clientes</h4>
             </td>
             <td class="text-left" style="width: 20%;"><a href="'.  esc_url( home_url( '/wp-admin/admin.php?page=wc-reports&tab=customers&report=customer_list' ) )  .'" target="_blank" rel="noopener">Abrir</a></td>
          </tr>
          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Listado de venta de este mes</h4>
             </td>
             <td class="text-left" style="width: 20%;"><a href="'.  esc_url( home_url( '/wp-admin/admin.php?page=wc-reports&tab=orders&range=month' ) )  .'" target="_blank" rel="noopener">Abrir</a></td>
          </tr>
          <tr>
             <td class="text-left" style="width: 80%;">
                <h4>Loguearse al chat</h4>
             </td>
             <td class="text-left" style="width: 20%;"><a href="'.  esc_url( home_url( '/wp-admin/options-general.php?page=tawkto_plugin&override=1' ) )  .'" target="_blank" rel="noopener">Abrir</a></td>
          </tr>
       </tbody>
    </table>

                ';
}


/* 1.71    Add css for my menu
-------------------------------------------------------------- */
add_action('admin_head', 'marioLafuente_menu_dashboar_style');
function marioLafuente_menu_dashboar_style() {
      echo '
      <style>
      ul.wf-block-list > li:nth-child(3) { display: none!important; }
      .table-fill,div.table-title{margin:auto;max-width:600px;padding:5px;width:100%}.table-fill td,.table-fill th{vertical-align:middle;text-align:left}.table-title h3,td{text-shadow:-1px -1px 1px rgba(0,0,0,.1)}.table-fill td,.table-fill th.text-left,th{text-align:left}div.table-title{display:block}.table-title h3{color:#fafafa;font-size:30px;font-weight:400;font-style:normal;font-family:Roboto,helvetica,arial,sans-serif;text-transform:uppercase}.table-fill{background:#fff;border-radius:3px;border-collapse:collapse;height:320px;box-shadow:0 5px 10px rgba(0,0,0,.1);animation:float 5s infinite}.table-fill tr:hover td,.table-fill tr:nth-child(odd):hover td{background:#ffbebe}.table-fill th{border-bottom:4px solid #9ea7af;border-right:1px solid #343a45;font-size:23px;font-weight:100;padding:24px;text-shadow:0 1px 1px rgba(0,0,0,.1)}.table-fill th:first-child{border-top-left-radius:3px}.table-fill th:last-child{border-top-right-radius:3px;border-right:none}.table-fill tr{border-top:1px solid #C1C3D1;border-bottom-:1px solid #C1C3D1;color:#666B85;font-size:16px;font-weight:400;text-shadow:0 1px 1px rgba(256,256,256,.1)}.table-fill tr:hover td{color:#FFF;border-top:1px solid #22262e;border-bottom:1px solid #22262e}.table-fill tr:first-child{border-top:none}.table-fill tr:last-child{border-bottom:none}.table-fill tr:nth-child(odd) td{background:#EBEBEB}.table-fill tr:last-child td:first-child{border-bottom-left-radius:3px}.table-fill tr:last-child td:last-child{border-bottom-right-radius:3px}.table-fill td{background:#FFF;padding:5px;font-weight:300;font-size:18px;border-right:1px solid #C1C3D1}.table-fill td:last-child{border-right:0}.table-fill th.text-center{text-align:center}.table-fill th.text-right{text-align:right}.table-fill td.text-left{text-align:left}.table-fill td.text-center{text-align:center}.table-fill td.text-right{text-align:right} }
      </style>';
}

	 /* 2.0 - Customize Admin Panel
	 -------------------------------------------------------------- */
add_action( 'admin_head', 'marioLafuente_custom_admin_Dash' );
   	 function marioLafuente_custom_admin_Dash(){

   	     echo '
              <style type="text/css"> #wpfooter{position:inherit;bottom:0;left:0;right:0;padding:10px 20px;color:#555d66;width:20%;margin-left:auto;margin-right:auto}
              #wpwrap { background-image: url('.get_stylesheet_directory_uri().'/assets/marioAdd-ons/logo.png) !important; background-repeat: no-repeat; background-position: top; padding-top: 80px!important; }
              #quick-menu-access,.wp-admin.toplevel_page_jetpack{background-color:#fff!important}#wp-admin-bar-wp-logo,.load-customize,a.button.hide-if-no-customize,a.page-title-action.hide-if-no-customize,tr.user-admin-color-wrap{display:none}.plugin-card{width:30%;width:calc(49.1% - 8px)}input#save{color:red;background-color:red!important}#adminmenu .wp-submenu a{color:#dc3232}div#adminmenumain{border-top:solid gray 10px;margin-top:20px}#adminmenuback{bottom:unset}.postbox .inside h2,.wrap [class$=icon32]+h2,.wrap h1,.wrap>h2:first-child{color:#fff}body{background:#fff}.wp-core-ui .button-primary{background:#dc3232;border-color:#dc3232;box-shadow:0 1px 0 #400b0b;color:#fff;text-decoration:none;text-shadow:none}.wrap .wp-heading-inline+.page-title-action,a{color:#dc3232}#wpadminbar{background:grey!important}#adminmenu .opensub .wp-submenu li.current a,#adminmenu .wp-submenu li.current,#adminmenu .wp-submenu li.current a,#adminmenu .wp-submenu li.current a:focus,#adminmenu .wp-submenu li.current a:hover,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a{color:#b4b9be}#adminmenu .wp-has-current-submenu .wp-submenu,#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,#adminmenu .wp-has-current-submenu.opensub .wp-submenu,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu,.no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#fff}#adminmenu li.menu-top:hover,#adminmenu li.opensub>a.menu-top,#adminmenu li>a.menu-top:focus{background-color:red;color:#fff}#wpadminbar .ab-top-menu>li.hover>.ab-item,#wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,#wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,#wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus{background:#dc3232;color:#fff}.metabox-holder .postbox-container .empty-container{border:3px dashed #f3f3f3}#wpadminbar .menupop .ab-sub-wrapper,#wpadminbar .shortlink-input{background:#dc3232}#adminmenu li a:focus div.wp-menu-image:before,#adminmenu li.opensub div.wp-menu-image:before,#adminmenu li:hover div.wp-menu-image:before{color:#fff}#adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after{border-right-color:transparent}#adminmenu .wp-submenu a:focus,#adminmenu .wp-submenu a:hover,#adminmenu a:hover,#adminmenu li.menu-top>a:focus{color:#f5a2a2}#adminmenu div.wp-menu-image:before{color:#b4b9be}#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,#adminmenu .wp-menu-arrow,#adminmenu .wp-menu-arrow div,#adminmenu li.current a.menu-top,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,.folded #adminmenu li.current.menu-top,.folded #adminmenu li.wp-has-current-submenu{background:grey;color:#b4b9be}header-logo{background-image:url(your_logo_path_here)!important}#adminmenu a{color:#444}#adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap{width:160px;background-color:#fff}@media (min-width:575.98px){#wpwrap{width:80%!important;padding:0 10%}}
              </style>
   	     ';
   	 }





		 //////////   WooCommerce CUSTOMIZATION ////////////////////////


		 /* 1.2 - Customize Panel Hide items for woocommerce
		 -------------------------------------------------------------- */

		 function my_customize_register() {
		 global $wp_customize;
		 echo '    <style type="text/css">

		  #accordion-section-header_image, #accordion-section-storefront_footer, #accordion-section-background_image, #accordion-section-storefront_typography,
		  #accordion-section-storefront_buttons, #accordion-section-storefront_layout{
		     display: none!important;
		 }
		 .wp-core-ui .button-primary-disabled, .wp-core-ui .button-primary.disabled, .wp-core-ui .button-primary:disabled, .wp-core-ui .button-primary[disabled] {
		     color: white!important;
		     background: #dc3232!important;
		     border-color: #dc3232!important;}
		 </style>
		 ';
		 }

		 add_action( 'customize_register', 'my_customize_register', 11 );



		 	 /* 3.1    Remove JUNK FROM HEAD
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


			 /* 3.0    remove_version,  ‘WordPress * is available! , boxes index
			  	 -------------------------------------------------------------- */

			 /*** Remove Apperance */

			  function remove_submenus() {
			    global $submenu;
			    //Dashboard menu
			    unset($submenu['index.php'][10]); // Removes Updates
			    //Posts menu
			    //unset($submenu['edit.php'][5]); // Leads to listing of available posts to edit
			    //unset($submenu['edit.php'][10]); // Add new post
			    //unset($submenu['edit.php'][15]); // Remove categories
			    //unset($submenu['edit.php'][16]); // Removes Post Tags

			    //Media Menu
			    //unset($submenu['upload.php'][5]); // View the Media library
			    //unset($submenu['upload.php'][10]); // Add to Media library

			    //Links Menu
			    //unset($submenu['link-manager.php'][5]); // Link manager
			    //unset($submenu['link-manager.php'][10]); // Add new link
			    //unset($submenu['link-manager.php'][15]); // Link Categories

			    //Pages Menu
			   // unset($submenu['edit.php?post_type=page'][5]); // The Pages listing
			    //unset($submenu['edit.php?post_type=page'][10]); // Add New page

			    //Appearance Menu
			   // unset($submenu['themes.php'][5]); // Removes 'Themes'
			    //unset($submenu['themes.php'][7]); // Widgets
			    unset($submenu['themes.php'][15]); // Removes Theme Installer tab
			    unset($submenu['themes.php'][20]); //Background
			    //unset($submenu['themes.php'][6]); // Customize

			    //Plugins Menu
			    //unset($submenu['plugins.php'][5]); // Plugin Manager
			    //unset($submenu['plugins.php'][10]); // Add New Plugins
			    //unset($submenu['plugins.php'][15]); // Plugin Editor

			    //Users Menu
			    //unset($submenu['users.php'][5]); // Users list
			    //unset($submenu['users.php'][10]); // Add new user
			    //unset($submenu['users.php'][15]); // Edit your profile

			    //Tools Menu
			    //unset($submenu['tools.php'][5]); // Tools area
			    //unset($submenu['tools.php'][10]); // Import
			    //unset($submenu['tools.php'][15]); // Export
			    //unset($submenu['tools.php'][20]); // Upgrade plugins and core files

			    //Settings Menu
			   // unset($submenu['options-general.php'][10]); // General Options
			   // unset($submenu['options-general.php'][15]); // Writing
			    //unset($submenu['options-general.php'][20]); // Reading
			    //unset($submenu['options-general.php'][25]); // Discussion
			    //unset($submenu['options-general.php'][30]); // Media
			    //unset($submenu['options-general.php'][35]); // Privacy
			    //unset($submenu['options-general.php'][40]); // Permalinks
			    //unset($submenu['options-general.php'][45]); // Misc
			  }
			  add_action('admin_menu', 'remove_submenus');































/* 6.0     'gnc_setup'
		 -------------------------------------------------------------- */


if ( ! function_exists( 'gnc_setup' ) ) :

	function gnc_setup() {

		load_theme_textdomain( 'gnc', get_stylesheet_directory_uri() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-main' => esc_html__( 'Main Menu', 'gnc' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'customize-selective-refresh-widgets' );


	}

endif;
add_action( 'after_setup_theme', 'gnc_setup' );





/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gnc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Search', 'gnc' ),
		'id'            => 'header-search',
		'description'   => esc_html__( 'Add widgets here.', 'gnc' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Cart', 'gnc' ),
		'id'            => 'quick-cart',
		'description'   => esc_html__( 'Add widgets here.', 'gnc' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Page Bottom', 'gnc' ),
		'id'            => 'page-bottom',
		'description'   => esc_html__( 'Add widgets here.', 'gnc' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'gnc' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'gnc' ),
		'before_widget' => '<div id="%1$s" class="widget grid__item one-sixth %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'gnc_widgets_init' );

function gnc_scripts() {



	wp_enqueue_style( 'gnc-fonts', get_stylesheet_directory_uri() . '/assets/fonts/fonts.css' );

	wp_enqueue_style( 'gnc-style', get_stylesheet_uri() , array() , '20151215' );

	wp_enqueue_script( 'gnc-matchHeight', get_stylesheet_directory_uri() .'/assets/js/jquery.matchHeight-min.js', array('jquery'), '20151215', true );


	wp_enqueue_script( 'gnc-isotope', get_stylesheet_directory_uri() .'/assets/js/isotope.pkgd.js', array('jquery'), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'gnc_scripts' );


function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}


// Add the filter and function, returning the widget title only if the first character is not "!"
add_filter( 'widget_title', 'remove_widget_title' );
function remove_widget_title( $widget_title ) {
	if ( substr ( $widget_title, 0, 1 ) == '!' )
		return;
	else
		return ( $widget_title );
}

// Override theme default specification for product # per row
function loop_columns() {
return 5; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);

function gnc_notitle(){
	return false;
}

add_filter( 'woocommerce_show_page_title', 'gnc_notitle' , 5 );

function gnc_t_container_start(){
	if(is_shop() || is_product_category()){
	echo '<div class="shop_header"><div class="container">';
	echo '<h1 class="woocommerce-products-header__title page-title">';
	woocommerce_page_title();
	echo '</h1>';
	}
}

add_action( 'storefront_content_top',             'gnc_t_container_start',                   5 );


function gnc_t_container_end(){
	if(is_shop() || is_product_category()){
	echo '</div></div>';
	}
}

add_action( 'storefront_content_top',             'gnc_t_container_end',                   999 );
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering' , 55 );
add_action( 'storefront_content_top' , 'woocommerce_catalog_ordering' , 7 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}


add_action( 'admin_menu', 'gnc_currency_add_admin_menu' );
add_action( 'admin_init', 'gnc_currency_settings_init' );


function gnc_currency_add_admin_menu(  ) {

	add_options_page( 'Exchange Rate', 'Exchange Rate', 'manage_options', 'gnc_storefront', 'gnc_currency_options_page' );

}

add_action( 'woocommerce_checkout_after_terms_and_conditions', 'your_function_name' );

function your_function_name() {
		$nivel_de_proteccion = get_field('nivel_de_proteccion', 1136);
echo '<div style=" height:120px;width:405px;border:1px solid #ccc;font:16px/26px;overflow:auto;">
'.$nivel_de_proteccion.'
</div><a style="margin: 5px 0px" href="/politica-de-privacidad/" target="blank">Ver políticas de privacidad</a>';
}





function gnc_currency_settings_init(  ) {

	register_setting( 'pluginPage', 'gnc_currency_settings' );

	add_settings_section(
		'gnc_currency_pluginPage_section',
		__( 'USD To Colon Exchange Rate', 'gnc_storefront' ),
		'gnc_currency_settings_section_callback',
		'pluginPage'
	);

	add_settings_field(
		'gnc_currency_text_field_0',
		__( 'Exchange Rate', 'gnc_storefront' ),
		'gnc_currency_text_field_0_render',
		'pluginPage',
		'gnc_currency_pluginPage_section'
	);


}


function gnc_currency_text_field_0_render(  ) {

	$options = get_option( 'gnc_currency_settings' );
	?>
	<input type='text' name='gnc_currency_settings[gnc_currency_text_field_0]' value='<?php echo $options['gnc_currency_text_field_0']; ?>'>
	<?php

}


function gnc_currency_settings_section_callback(  ) {

	echo __( '&nbsp;', 'gnc_storefront' );

}


function gnc_currency_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2></h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}
//
// // Scheduled Action Hook
// function gnc_woo_cron_update( ) {
//
// 				// Get currency conversion rate from settings
// 				$currentcy_settings = get_option( 'gnc_currency_settings' );
// 				$rate = $currentcy_settings[gnc_currency_text_field_0];
//
//
//
// 				// Query argument for woocommerce products.
// 				$args = array(
// 					// WC product post types
// 					'post_type'   => array('product', 'product_variation'),
// 					// all posts
// 					'numberposts' => -1,
// 					'post_status' => 'publish',
// 				);
//
//
// 				// Get all products
// 				$shop_products = get_posts( $args );
// 				foreach( $shop_products as $item){
//
// 					// Get Dollar value from acf
// 					$dolares = get_field('dolares' , $item->ID );
//
//
// 					// check if the product has Dollar value
// 					if (!empty( $dolares )){
//
// 					$meta_data = get_post_meta($item->ID);
//
// 						// Multiply Dollar value with conversion rate
// 						$regular_price = $dolares * $rate;
//
// 						// Round up the price in colon
// 						$regular_price = round($regular_price);
//
//
// 						// Update the price for the product.
// 						update_post_meta($item->ID, '_regular_price', $regular_price);
// 						update_post_meta($item->ID, '_price', $regular_price);
//
// 					}
//
//
// 				}
//
//
//
// }

// Schedule Cron Job Event
function gnc_woo_cron() {
	if ( ! wp_next_scheduled( 'gnc_woo_cron_update2' ) ) {
		wp_schedule_event( current_time( 'timestamp' ), 'hourly', 'gnc_woo_cron_update2' );
	}
}
add_action( 'wp', 'gnc_woo_cron' );


























function reOrder_product_divs(){
	//global $woocommerce;

    if ( is_product() ) {
        global $post;
        $product = wc_get_product( $post->ID );
        if ( $product->is_type( 'variable' ) ) {
					  $product_variation = new WC_Product_Variation($_POST['variation_id']);
            remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
            remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

						add_action( 'woocommerce_after_variations_form', 'woocommerce_template_single_title', 5 );
						add_action( 'woocommerce_after_variations_form', 'woocommerce_single_variation', 10);

        }
    }
}
add_action( 'woocommerce_before_single_product', 'reOrder_product_divs' );







// all variations same price. WooCommerce default behavior No muestra precios con esto si.
add_filter('woocommerce_show_variation_price',      function() { return TRUE;});

// Add Variation Settings
add_action( 'woocommerce_product_after_variable_attributes', 'variation_settings_fields', 10, 3 );
// // Save Variation Settings
add_action( 'woocommerce_save_product_variation', 'save_variation_settings_fields', 10, 2 );
//I add <INPUS>  <UI>  <TO>  woocommerce
function variation_settings_fields( $loop, $variation_data, $variation ) {

	// Get currency conversion rate from settings
	$currentcy_settings = get_option( 'gnc_currency_settings' );
	$rate = 'Tipo de cambio = $'.$currentcy_settings[gnc_currency_text_field_0];


	// Text Field
	echo '<p class="form-row col-3 firstCol dolarRate">'.$rate. '</p>';
	// Text Field
	echo '<p class="form-row col-3 firstCol  divchangeDolar"> <a href="/wp-admin/options-general.php?page=gnc_storefront" target="_blank">Modificar tipo de cambio</a></p>';



 //gnc_woo_cron_update2( );
	// Number Field Dolares regular price
	woocommerce_wp_text_input(


		array(
			 'wrapper_class'    => 'divRegularPrice',
			'id'          => '_number_field[' . $variation->ID . ']',
			'label'       => __( 'Precio en dolares', 'woocommerce' ),
			'desc_tip'    => 'true',
			'description' => __( 'ponga el precio en dolares del producto', 'woocommerce' ),
			'value'       => get_post_meta( $variation->ID, '_number_field', true ),
			'custom_attributes' => array(
							'step' 	=> 'any',
							'min'	=> '0'
						)
		)
	);


	// Number Field Dolares regular price
	woocommerce_wp_text_input(
		array(
			'wrapper_class'    => 'divSalesrPrice',
			'id'          => '_number_field_sale[' . $variation->ID . ']',
			'label'       => __( 'sales en dolares', 'woocommerce' ),
			'desc_tip'    => 'true',
			'description' => __( 'ponga el precio en dolares del producto', 'woocommerce' ),
			'value'       => get_post_meta( $variation->ID, '_number_field_sale', true ),
			'custom_attributes' => array(
							'step' 	=> 'any',
							'min'	=> '0'
						)
		)
	);



  echo '
  <style type="text/css">
  table.variations {
      float: left;
      background-color: red;
      width: 50%;
  }
  .variable_pricing:before {
      content: "  ";
  		display:block;
  		width:100%;
  		height:80px;
  		background-color:#d0d0d0;
  }

  .data {
      position: relative;
  }

  .dolarRate {
  	position: absolute;
  	    width: 15%;
  	    background-color: #fdff97;
  	    top: 148px;
  	    padding: 10px;
  	    margin: 10px;
  }
  .form-row.form-row-first, .form-row.form-row-last {
      width: 40%;
  }
  .divRegularPrice {
  	width: 20%!important;
  	position: absolute;
  	background-color: white;
  	top: 148px;
  	left: 30%;
  	padding: 5px;
  	margin: 10px;
  }

  .divSalesrPrice {
  	width: 20%!important;
  	position: absolute;
  	background-color: white;
  	top: 148px;
  	left: 55%;
  	padding: 5px;
  	margin: 10px;
  }

  .divchangeDolar{
  	width: 10%;
  	position: absolute;
  	background-color: white;
  	top: 148px;
  	left: 78%;
  	padding: 10px;
  	margin: 10px;

  }
  p.form-field {
      float: left;
      min-height: 20px;
      margin: 5px 20px 0px 0px;
  }
  .form-row.form-row-full {
    width: 100%;
}

  </style>
  ';


}





/**
 * Save new fields for variations
 *
*/
function save_variation_settings_fields( $post_id ) {
	global $product;

  $productPrice = get_post_meta( $post_id, '_regular_price', true);


		// Number Field Dolares regular price
			$Dolar_number_field = $_POST['_number_field'][ $post_id ];
			if( ! empty( $Dolar_number_field ) ) {
				update_post_meta( $post_id, '_number_field', esc_attr( $Dolar_number_field ) );
			}

			// Number Field Dolares sale price
				$Dolar_number_field_sale = $_POST['_number_field_sale'][ $post_id ];
				if( ! empty( $Dolar_number_field_sale ) ) {
					update_post_meta( $post_id, '_number_field_sale', esc_attr( $Dolar_number_field_sale ) );
				}


				// Get currency conversion rate from settings
				$currentcy_settings = get_option( 'gnc_currency_settings' );
				$rate = $currentcy_settings[gnc_currency_text_field_0];


				// update sales filed
				if($Dolar_number_field_sale < 1 ){
				update_post_meta( $post_id, '_number_field_sale', '');
				}else {
				update_post_meta($post_id, '_sale_price', $Dolar_number_field_sale * $rate);
				}

        //echo "nadaaaaaaaaaa".$productPrice;
        //     echo "xxxxxxxxxxxxx";
		    // $meta_data = get_post_meta($post_id);
        // var_dump($meta_data);

			// Multiply Dollar value with conversion rate
			$regular_price = $Dolar_number_field * $rate;

			// Round up the price in colon
			$regular_price = round($regular_price);



			// Update the price for the product.
			//	update_post_meta($post_id, '_sale_price', $Dolar_number_field_sale); arriba
      if( ! empty( $Dolar_number_field ) ) {
			update_post_meta($post_id, '_regular_price', $regular_price);
			update_post_meta($post_id, '_price', $regular_price);
    }
    //Si dolar esta vacio
     if( empty($Dolar_number_field)  &&  !empty( $productPrice) ) {
      update_post_meta( $post_id, '_number_field', '' );
        }
}

// Scheduled Action Hook by acf
function gnc_woo_cron_update2( ) {

				// Get currency conversion rate from settings
				$currentcy_settings = get_option( 'gnc_currency_settings' );
				$rate = $currentcy_settings[gnc_currency_text_field_0];



				// Query argument for woocommerce products.
				$args = array(
					// WC product post types
					'post_type'   => array('product', 'product_variation'),
					// all posts
					'numberposts' => -1,
					'post_status' => 'publish',
				);
				// Get all products
				$shop_products = get_posts( $args );

// Number Field Dolares regular price
foreach( $shop_products as $item){

							// Number Field Dolares regular price
							$Dolar_number_field = get_post_meta( $item->ID, '_number_field' );

							// check if the product has Dollar value
												if (!empty( $Dolar_number_field )){
													foreach( $Dolar_number_field as $priceX){
														// Multiply Dollar value with conversion rate
														$regular_price = $priceX * $rate;
														// // Update the price for the product.
														update_post_meta($item->ID, '_regular_price', $regular_price);
															}
													}


													// Number Field Dolares regular price
													$Dolar_number_field_sale = get_post_meta( $item->ID, '_number_field_sale' );
													///var_dump($Dolar_number_field_sale);
													if (!empty( $Dolar_number_field_sale )){
														foreach( $Dolar_number_field_sale as $priceXS){
															// Multiply Dollar value with conversion rate
															$sales_price = $priceXS * $rate;
															echo " ".$sales_price;
															// // Update the price for the product.
															if($sales_price > 1){
																update_post_meta($item->ID, '_sale_price', $sales_price);
															}




																}
														}

}

}





/**
 * Add a custom product data tab */
//add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
// function woo_new_product_tab( $tabs ) {
// 	$entregas = get_field('entregas', 1136);
// 	// Adds the new tab
//
// 	$tabs['test_tab'] = array(
// 		'title' 	=> __( 'Seguridad', 'woocommerce' ),
// 		'priority' 	=> 50,
// 		'callback' 	=> 'woo_new_product_tab_content'
// 	);
//
// 	if($entregas !== '' && $entregas !== NULL)
// 	{
// 		$tabs['test_tab2'] = array(
// 			'title' 	=> __( 'Entrega', 'woocommerce' ),
// 			'priority' 	=> 60,
// 			'callback' 	=> 'woo_new_product_tab_content2'
// 		);
// 	}
// 	return $tabs;
//
// }
// function woo_new_product_tab_content() {
// 	$nivel_de_proteccion = get_field('nivel_de_proteccion', 1136);
//   $medios_de_pago 		 = get_field('medios_de_pago', 1136);
//
//
// 	echo $nivel_de_proteccion;
// 	echo $medios_de_pago;
//
// }
// function woo_new_product_tab_content2() {
// 	$entregas = get_field('entregas', 1136);
//
// 	if($entregas !== '' && $entregas !== NULL)
// 	{
// 	   echo 	$entregas;
// 	}
//
//
//
// }
