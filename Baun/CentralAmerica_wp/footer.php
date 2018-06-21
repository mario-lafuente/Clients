
<!--Footer-->
<div class="page-footer background-category"></div>

<footer class="page-footer center-on-small-only">
    <!--Footer Links-->
    <div class="container">
        <div class="row">
                        <!--First column-->
            <div class="hidden-sm-down col-md-6 foot-menu">
              <?php
                 the_field('footerAbout');

                wp_nav_menu(
                  array(
                    'container' => false,
                    'item_wrap' => '%3$5',
                    'theme_location' => 'footer'
                  )
                );
              ?>
				     </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <!--sing up-->
                <form class="form-group">
                      <div class="widget-column footer-widget-1">
                      <section id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
                        <?php
                        if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
                          <div class="widget-column footer-widget-1">
                            <?php dynamic_sidebar( 'sidebar-2' ); ?>
                          </div>
                        <?php }?>
	                       </section>
                         </div>
                </form>

                 <!--social media-->
                <div class="social-section">
                    <h5 class="hidden-sm-down">Join us</h5>
                    <?php
                      wp_nav_menu(
                        array(
                          'container' => false,
                          'item_wrap' => '<li><a class="btn-floating btn-small btn-fb">%3$5</a></li>',
                          'theme_location' => 'social',
                        ));
                    ?>
               </div>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="copyright">
        <div class="container">
            <h2><?php the_field('copyright'); ?></h2>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->



  <?php wp_footer(); ?>

  
  </body>
  </html>
