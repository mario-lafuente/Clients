<?php
/* function marioLafuente_Index * /
//////////   System  /////////////////////////////////////
	0.0      Increase  the Maximum File Upload Size
	0.1      Global Variables

//////////   WP CUSTOMIZATION ////////////////////////
	1.0     Add Js Footer
	1.01    Add Js header
	1.2     Quita error del dom de js

	Customize DashBoard
	1.5     Remove widgets
	1.51    Remove Dashboar welcome and widgets
	1.52    Customize Admin Panel
	1.6     Remove submenus DashBoard
	1.7     Add Dashboard menu
	1.71    Add css for my menu
	1.8     Add css to Dashboard
0.3.3    Add_theme_support  redirection

unregister And Remove

3.1    Remove JUNK FROM HEAD
3.2    Remove All Yoast HTML Comments
3.3    Remove  ‘WordPress * is available! , boxes index
3.5   facebook metatag
3.6   html_schema



//////////   System  /////////////////////////////////////

/* 0.0      Increase the Maximum File Upload Size
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


		/* 0.1      Global Variables Variables el global y despues le meto el value
		-------------------------------------------------------------- */
		global $managerOpt_Home_PgId;       $managerOpt_Home_PgId     = 497;   //up 28;
		global $managerOpt_General_PgId;    $managerOpt_General_PgId  = 154; //up 1336; //change in line 405
		global $tiendasPgId;                $tiendasPgId              = 181;   //up 45;



		   /* 1.0     Add Js Footer
		   -------------------------------------------------------------- */

		   function add_this_script_footer(){
		     wp_enqueue_script( 'flexslider',            get_theme_file_uri() .                '/assets/js/jquery.flexslider.js', array('jquery') );
		     wp_enqueue_script( 'jquery',                get_stylesheet_directory_uri() .     '/assets/js/boostrap/jquery-3.2.1.slim.min.js');
		   	 //wp_enqueue_script( 'boostrap',              get_stylesheet_directory_uri() .     '/assets/js/boostrapV4/bootstrap.min.js'); //vr4
		     //wp_enqueue_script( 'tether',                get_stylesheet_directory_uri() .     '/assets/js/boostrapV3/tether.min.js');   //vr3
		     //wp_enqueue_script( 'boostrap',              get_stylesheet_directory_uri() .     '/assets/js/boostrapV3/bootstrap.min.js'); //vr3
		   	//wp_enqueue_script( 'boostrap',              get_stylesheet_directory_uri() .     '/assets/js/boostrapV3/ie10-viewport-bug-workaround.js');

		   	//wp_enqueue_script( 'tether',                get_stylesheet_directory_uri() .     '/assets/js/boostrapV4/tether.min.js');   //vr3
		   	//wp_enqueue_script( 'boostrap',              get_stylesheet_directory_uri() .     '/assets/js/boostrapV4/bootstrap.min.js'); //vr3
		   	//wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA506nzzuAPv8i_BeUD6jZj_3xNGevTCdQ', array(), '3', true );
		     //wp_enqueue_script( 'google-map-init', 			get_stylesheet_directory_uri() 		. 		'/assets/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );

		     wp_enqueue_script( 'myScrip',               get_stylesheet_directory_uri() .     '/assets/js/scripts.js');
		     wp_enqueue_script( 'myScripThumbnail',      get_stylesheet_directory_uri() .     '/assets/js/ekko-lightbox.js');
		   }

		   add_action('wp_footer', 'add_this_script_footer');


		   /* 1.01     Add Js header
		   -------------------------------------------------------------- */

		   // function marioLafuente_include_js_head() {
		   //   //wp_footer wp_head wp_enqueue_scripts
		   // 	wp_enqueue_script( 'plugins',      get_stylesheet_directory_uri() .     '/assets/js/plugin.min.js');
		   //   wp_enqueue_script( 'scripts',      get_stylesheet_directory_uri() .    '/assets/js/all.min.js');
		   //   if ( is_single() ) {
		   //     wp_enqueue_script( 'flexsliderscripts',      get_stylesheet_directory_uri() .    '/assets/marioAdd-ons/jquery.flexslider-min.js');
		   // }
		   // }
		   // //add_action('wp_head', 'marioLafuente_include_js_head');
		   //
		   //


		/* 1.2     Quita error del dom de js
		-------------------------------------------------------------- */
		add_action( 'wp_default_scripts', function( $scripts ) {
		       if ( ! empty( $scripts->registered['jquery'] ) ) {
		           $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
		       }
		} );


		/* 0.3.3    Add_theme_support  redirection
		-------------------------------------------------------------- */
		//allow redirection, even if my theme starts to send output to the browser
		add_action('init', 'do_output_buffer');
		function do_output_buffer() {
		        ob_start();
		}



		// Customize DashBoard

		/*  1.5     remove widgets
		-------------------------------------------------------------- */

		function remove_dashboard_widgets() {
		  remove_meta_box( 'woocommerce_dashboard_recent_reviews', 'dashboard', 'normal');

		}
		add_action('wp_user_dashboard_setup', 'remove_dashboard_widgets', 20);
		add_action('wp_dashboard_setup', 'remove_dashboard_widgets', 20);

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
		                <h4>Configuraciones Generales</h4>
		             </td>
		             <td class="text-left" style="width: 20%;"><a href="'. get_site_url() . '/wp-admin/post.php?post=154&amp;action=edit" target="_blank" rel="noopener">Abrir</a></td>
		          </tr>
		          <tr>
		             <td class="text-left" style="width: 80%;">
		                <h4>Modificar Pg Principal</h4>
		             </td>
		             <td class="text-left" style="width: 20%;"><a href="'. get_site_url() . '/wp-admin/post.php?post=52&amp;action=edit" target="_blank" rel="noopener">Abrir</a></td>
		          </tr>
		          <tr>
		             <td class="text-left" style="width: 80%;">
		                <h4>Modificar Menus</h4>
		             </td>
		             <td class="text-left" style="width: 20%;"><a href="'. get_site_url() . '/wp-admin/nav-menus.php" target="_blank" rel="noopener">Abrir</a></td>
		          </tr>
		          <tr>
		             <td class="text-left" style="width: 80%;">
		                <h4>Modificar Footer Sidebar y mas</h4>
		             </td>
		             <td class="text-left" style="width: 20%;"><a href="'. get_site_url() . '/wp-admin/widgets.php" target="_blank" rel="noopener">Abrir</a></td>
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
		      .table-fill,div.table-title{margin:auto;max-width:600px;padding:5px;width:100%}.table-fill td,.table-fill th{vertical-align:middle;text-align:left}.table-title h3,td{text-shadow:-1px -1px 1px rgba(0,0,0,.1)}.table-fill td,.table-fill th.text-left,th{text-align:left}div.table-title{display:block}.table-title h3{color:#fafafa;font-size:30px;font-weight:400;font-style:normal;font-family:Roboto,helvetica,arial,sans-serif;text-transform:uppercase}.table-fill{background:#fff;border-radius:3px;border-collapse:collapse;height:320px;box-shadow:0 5px 10px rgba(0,0,0,.1);animation:float 5s infinite}.table-fill tr:hover td,.table-fill tr:nth-child(odd):hover td{background:#4E5066}.table-fill th{border-bottom:4px solid #9ea7af;border-right:1px solid #343a45;font-size:23px;font-weight:100;padding:24px;text-shadow:0 1px 1px rgba(0,0,0,.1)}.table-fill th:first-child{border-top-left-radius:3px}.table-fill th:last-child{border-top-right-radius:3px;border-right:none}.table-fill tr{border-top:1px solid #C1C3D1;border-bottom-:1px solid #C1C3D1;color:#666B85;font-size:16px;font-weight:400;text-shadow:0 1px 1px rgba(256,256,256,.1)}.table-fill tr:hover td{color:#FFF;border-top:1px solid #22262e;border-bottom:1px solid #22262e}.table-fill tr:first-child{border-top:none}.table-fill tr:last-child{border-bottom:none}.table-fill tr:nth-child(odd) td{background:#EBEBEB}.table-fill tr:last-child td:first-child{border-bottom-left-radius:3px}.table-fill tr:last-child td:last-child{border-bottom-right-radius:3px}.table-fill td{background:#FFF;padding:5px;font-weight:300;font-size:18px;border-right:1px solid #C1C3D1}.table-fill td:last-child{border-right:0}.table-fill th.text-center{text-align:center}.table-fill th.text-right{text-align:right}.table-fill td.text-left{text-align:left}.table-fill td.text-center{text-align:center}.table-fill td.text-right{text-align:right} }
		      </style>';
		}

			 /* 2.0 - Customize Admin Panel
			 -------------------------------------------------------------- */
		add_action( 'admin_head', 'marioLafuente_custom_admin_Dash' );
		   	 function marioLafuente_custom_admin_Dash(){

		   	     echo '
		              <style type="text/css">
		              #wpwrap { background-image: url('.get_stylesheet_directory_uri().'/assets/marioAdd-ons/logo.png) !important; background-repeat: no-repeat; background-position: top; padding-top: 80px!important; }
		              #quick-menu-access,.wp-admin.toplevel_page_jetpack{background-color:#fff!important}#wp-admin-bar-wp-logo,.load-customize,a.button.hide-if-no-customize,a.page-title-action.hide-if-no-customize,tr.user-admin-color-wrap{display:none}.plugin-card{width:30%;width:calc(49.1% - 8px)}input#save{color:red;background-color:red!important}#adminmenu .wp-submenu a{color:#dc3232}div#adminmenumain{border-top:solid gray 10px;margin-top:20px}#adminmenuback{bottom:unset}.postbox .inside h2,.wrap [class$=icon32]+h2,.wrap h1,.wrap>h2:first-child{color:#fff}body{background:#fff}.wp-core-ui .button-primary{background:#dc3232;border-color:#dc3232;box-shadow:0 1px 0 #400b0b;color:#fff;text-decoration:none;text-shadow:none}.wrap .wp-heading-inline+.page-title-action,a{color:#dc3232}#wpadminbar{background:grey!important}#adminmenu .opensub .wp-submenu li.current a,#adminmenu .wp-submenu li.current,#adminmenu .wp-submenu li.current a,#adminmenu .wp-submenu li.current a:focus,#adminmenu .wp-submenu li.current a:hover,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a{color:#b4b9be}#adminmenu .wp-has-current-submenu .wp-submenu,#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,#adminmenu .wp-has-current-submenu.opensub .wp-submenu,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu,.no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#fff}#adminmenu li.menu-top:hover,#adminmenu li.opensub>a.menu-top,#adminmenu li>a.menu-top:focus{background-color:red;color:#fff}#wpadminbar .ab-top-menu>li.hover>.ab-item,#wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus,#wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item,#wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus{background:#dc3232;color:#fff}.metabox-holder .postbox-container .empty-container{border:3px dashed #f3f3f3}#wpadminbar .menupop .ab-sub-wrapper,#wpadminbar .shortlink-input{background:#dc3232}#adminmenu li a:focus div.wp-menu-image:before,#adminmenu li.opensub div.wp-menu-image:before,#adminmenu li:hover div.wp-menu-image:before{color:#fff}#adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after{border-right-color:transparent}#adminmenu .wp-submenu a:focus,#adminmenu .wp-submenu a:hover,#adminmenu a:hover,#adminmenu li.menu-top>a:focus{color:#f5a2a2}#adminmenu div.wp-menu-image:before{color:#b4b9be}#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,#adminmenu .wp-menu-arrow,#adminmenu .wp-menu-arrow div,#adminmenu li.current a.menu-top,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,.folded #adminmenu li.current.menu-top,.folded #adminmenu li.wp-has-current-submenu{background:grey;color:#b4b9be}header-logo{background-image:url(your_logo_path_here)!important}#adminmenu a{color:#444}#adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap{width:160px;background-color:#fff}@media (min-width:575.98px){#wpwrap{width:70%!important;padding:0 15%}}
		              </style>
		   	     ';
		   	 }




/* ---------------------------------------------------------------------------
 * Child Theme URI | DO NOT CHANGE
 * --------------------------------------------------------------------------- */
define( 'CHILD_THEME_URI', get_stylesheet_directory_uri() );


/* ---------------------------------------------------------------------------
 * Define | YOU CAN CHANGE THESE
 * --------------------------------------------------------------------------- */

// White Label --------------------------------------------
define( 'WHITE_LABEL', false );

// Static CSS is placed in Child Theme directory ----------
define( 'STATIC_IN_CHILD', false );


/* ---------------------------------------------------------------------------
 * Enqueue Style
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'mfnch_enqueue_styles', 101 );
function mfnch_enqueue_styles() {

	// Enqueue the parent stylesheet
// 	wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.css' );		//we don't need this if it's empty

	// Enqueue the parent rtl stylesheet
	if ( is_rtl() ) {
		wp_enqueue_style( 'mfn-rtl', get_template_directory_uri() . '/rtl.css' );
	}

	// Enqueue the child stylesheet
	wp_dequeue_style( 'style' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/style.css' );

}


/* ---------------------------------------------------------------------------
 * Load Textdomain
 * --------------------------------------------------------------------------- */
add_action( 'after_setup_theme', 'mfnch_textdomain' );
function mfnch_textdomain() {
    load_child_theme_textdomain( 'betheme',  get_stylesheet_directory() . '/languages' );
    load_child_theme_textdomain( 'mfn-opts', get_stylesheet_directory() . '/languages' );
}
