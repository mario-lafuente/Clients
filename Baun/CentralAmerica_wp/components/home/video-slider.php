<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">

  <!--Slides-->
  <div class="carousel-inner" role="listbox">
      <!--First slide-->
      <?php
      $count = 0;
      query_posts('category_name=slider');
      if(have_posts()) : while (have_posts()): the_post();

      ?>
        <div class="carousel-item <?php if ($count==0) {echo "active";} ?>">
            <!--Mask color-->
            <div class="view hm-black-light">

                <!--Video source-->

                <?php
                $array = get_post_custom($post_id);
                /* ejemplo */
                $array = get_post_custom($post_id);
                $mis_valores_de_campos = $array['video'];
                foreach ( $mis_valores_de_campos as $nombre => $valor )
                  {
                ?>
                <video class="video-full" autoplay loop>
                    <source src="<?php echo $valor ?>" type="video/mp4" />
                </video>
                <?php } ?>
                <?php
  							if ( has_post_thumbnail() ) {
  									$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
  									//var_dump($feat_image_url);
  									echo '  <div class="full-bg-img visible-sm-down" style="background-image: url('. $feat_image_url .')"></div>';
  							}
  							?>
            </div>

            <!--Caption-->
            <div class="carousel-caption">
                <div class="flex-center animated fadeInDown">
                    <div class="type">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/First slide-->
           <!--second slide-->
      <?php
      $count=$count+1;
      endwhile; else:
        echo '<h2>No hay post</h2>';
      endif;
      ?>
  </div>

  <!--/.Slides-->

    <!--Controls
    <a class="left carousel-control" href="#video-carousel-example2" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#video-carousel-example2" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!/.Controls-->
</div>
<!--/.Carousel Wrapper-->
