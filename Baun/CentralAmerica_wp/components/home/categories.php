<section class="categories container section magazine-section multi-columns">

    <!--Section heading-->
    <div class="type hidden-sm-down">
      <?php

      ?>
    </div>

    <!--First row-->
    <div class="row text-left">

        <!--First column-->
        <div class="col-lg-4 col-md-12 mb-r">

          <!--Card-->
              <div class="card">
                  <?php

                  ?>
                  <!--Card image-->
                  <div class="view overlay hm-white-slight">
                  
                      <div class="content-mobile">
                          <h2><? ?></h2>
                          <div>
                              <p><? ?></p>
                          </div>
                      </div>
                      <a>
                          <div class="mask"></div>
                      </a>

                  </div>
                  <!--/.Card image-->
              </div>
          <!--/.Card-->
          <?php

         ?>
          <!--Small news-->
          <div class="single-news">
              <div class="title">
                  <div class="row">
                      <div class="col-md-8"><h4><a href="#"><?= the_title(); ?></a></h4></div>
                      <?php

    									?>
    									<div class="col-md-4"><p>xxx222</p></div>

                  </div>
              </div>
              <div class="description">
              xxxdd
              </div>
          </div>
          <!--/Small news-->


        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-lg-4 col-md-6 mb-r">

          <!--Card-->
          <div class="card">
              <?php

              ?>
              <!--Card image-->
              <div class="view overlay hm-white-slight">

                  <div class="content-mobile">
                      <h2><?  ?></h2>
                      <div>
                          <p><? ?></p>
                      </div>
                  </div>
                  <a>
                      <div class="mask"></div>
                  </a>

              </div>
              <!--/.Card image-->
          </div>

          <?php

         ?>
          <!--Small news-->
          <div class="single-news">
              <div class="title">
                  <div class="row">
                      <div class="col-md-8"><h4><a href="#"><?= the_title(); ?></a></h4></div>
                      <?php

    							    {

    									?>
    									<div class="col-md-4"><p><?php echo $campo ?></p></div>
    									<?php } ?>
                  </div>
              </div>
              <div class="description">
                  <?= the_excerpt(); ?>
              </div>
          </div>
          <!--/Small news-->
          <?php

          ?>


        </div>
        <!--/Second column-->


        <!--Third column-->
        <div class="col-lg-4 col-md-6 mb-r">

          <div class="card">
              <?php
                $category = get_category(40);
              ?>
              <!--Card image-->
              <div class="view overlay hm-white-slight">

                  <div class="content-mobile">
                      <h2>xxxxxxxxxx</h2>
                      <div>
                          <p><?= $category->description ?></p>
                      </div>
                  </div>
                  <a>
                      <div class="mask"></div>
                  </a>

              </div>
              <!--/.Card image-->
          </div>
          <?php
          $noticia = new WP_query(array('category_name' => 'investing', 'posts_per_page' => '3', 'order' => 'DESC'));
         //var_dump($noticia->posts);
         if( $noticia->have_posts()) : while ( $noticia->have_posts()): $noticia -> the_post();
         ?>
          <!--Small news-->
          <div class="single-news">
              <div class="title">
                  <div class="row">
                      <div class="col-md-8"><h4><a href="#"><?= the_title(); ?></a></h4></div>
                      <?php
    									$valor = get_post_meta($post->ID, 'Categoria', true);
    							    if (!empty($valor))
    							    {

    									?>
    									<div class="col-md-4"><p><?php echo $valor ?></p></div>
    									<?php } ?>
                  </div>
              </div>
              <div class="description">
                <?= the_excerpt(); ?>
              </div>

          </div>
          <!--/Small news-->
          <?php
          endwhile; else:
          //   echo '<h2>No hay post</h2>';
          endif;
          ?>

        </div>
        <!--/Third column-->

    </div>
    <!--/First row-->

</section>
<!--/Section: Magazine v.3-->
