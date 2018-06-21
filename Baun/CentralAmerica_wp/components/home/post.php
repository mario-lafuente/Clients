<section id="content-post" class="post section magazine-section">
	<div class="container">
    <!--First row-->
    <div class="row text-left">
    	<!--Tutular para mobile-->
		  	<div class="type hidden-sm-up">
				<?php
					echo get_post_meta(156, 'title', true);
				?>
			</div>
        <!--First column-->
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
					<!--Card-->
					<div class="card">
			        <?php
			         $blog = new WP_query(array('category__in' => array(34,40,38),'posts_per_page' => '1', 'order' => 'DESC'));
			        //var_dump($blog);
			        $id_post=null;
			        if( $blog->have_posts()) : while ( $blog->have_posts()): $blog -> the_post();
			          $id_post=$post->ID;
			        ?>
					    <!--Card image-->
					    <div class="view overlay hm-white-slight">
			          <?php
			          if(has_post_thumbnail()){ the_post_thumbnail('thumb-image');}
			          ?>
			          <a href="<?= the_permalink(); ?>">
			              <div class="mask"></div>
			          </a>
					    </div>
					    <!--/.Card image-->

					    <!--Social buttons-->
					    <div class="card-share">
					        <div class="social-reveal">
					            <!--Facebook-->
					            <a type="button" class="st_facebook btn-floating btn-fb" st_title="<?php the_title(); ?>" st_url="<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
					            <!--Twitter-->
					            <a type="button" class="st_twitter btn-floating btn-tw" st_title="<?php the_title(); ?>" st_url="<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
					            <!--Google -->
					            <a type="button" class="st_googleplus btn-floating btn-gplus" st_title="<?php the_title(); ?>" st_url="<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
					        </div>
					        <a class="share btn-floating btn-action share-toggle"><i class="fa fa-share-alt"></i></a>
					    </div>
					    <!--/Social buttons-->

					    <!--Card content-->
					    <div class="card-block">
					        <div class="title">
								<div class="row">
									<div class="col-md-8"><h4><a href="#"><?= the_title(); ?></a></h4></div>
									<?php
									$micampo = get_post_meta($post->ID, 'Categoria', true);
							    if (!empty($micampo))
							    {

									?>
									<div class="col-md-4"><p><?php echo $micampo ?></p></div>
									<?php } ?>
								</div>
					           		</div>
							            <?= the_excerpt(); ?>
							            <div class="text-right">
											       <a href="<?= the_permalink(); ?>" class="hidden-xs-down pull-right">Read more <i class="fa fa-angle-right" aria-hidden="true"></i>
																			</a>
									</div>
					    </div>
					    <!--/.Card content-->
			        <?php
			        endwhile; else:
			        //   echo '<h2>No hay post</h2>';
			        endif;
			        ?>
					</div>
					<!--/.Card-->

        </div>
        <!--/First column-->

        <!--Second column-->
      <div class="col-lg-6 col-md-12 hidden-xs-down">

					<div class="hidden-md-down">
						<div class="row type-block">
							<?php
							$title = get_post(156);
							echo $title->post_content;
							?>
						</div>
					</div>

				<?php
					$q1 = new WP_query(array('category__in' => array(34,40,38),'posts_per_page' => '3','post__not_in' => array($id_post), 'order' => 'DESC'));
					$recent=null;
					if($q1->have_posts()) :
							$firstPosts = array();
							while($q1->have_posts()) : $q1->the_post();
							array_push($firstPosts, $post->ID, $id_post);
							$recent = new WP_query(array('category_name' => 'blog','post__not_in' => $firstPosts, 'order' => 'DESC'));
				?>
				<!--Small news-->
				<div class="single-news">
						<div class="row">
								<div class="col-md-4">
										<!--Image-->
										<div class="view overlay hm-white-slight">
												<?php
												if(has_post_thumbnail()){ the_post_thumbnail('thumb-image');}
												?>
												<a href="<?= the_permalink(); ?>">
														<div class="mask"></div>
												</a>
										</div>
								</div>

								<!--Excerpt-->
								<div class="col-md-8">
									<div class="content">
											<div class="title">
												<div class="row">
													<div class="col-md-8"><h4><a href="#"><?= the_title(); ?></a></h4></div>
													<?php
													$campo = get_post_meta($post->ID, 'Categoria', true);
											    if (!empty($campo))
											    {

													?>
													<div class="col-md-4">
														<p><?php echo $campo ?> </p>
													</div>
													<?php } ?>
												</div>
											</div>
											<div class="description">
												<a href="#">
													<?= the_excerpt(); ?>
												</a>
											</div>
									 </div>
								</div>

						</div>
				</div>
				<!--/Small news-->
				<?php
				// }
				endwhile; else:
					echo '<h2>No hay post</h2>';
				endif;
				?>
        </div>
        <!--/Second column-->

    </div>
    <!--/First row-->

 <!----SECTION RECENT---->
			<div class="row recent">
						<?php
						if($recent->have_posts()) :
								while($recent->have_posts()) : $recent->the_post();

						?>
				    <!--recent post-->
			    <div class="post-recent">
						<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
							<!--Card-->
								<div class="card">
										<!--Card image-->
										<div class="col-xs-4 col-sm-12 view overlay hm-white-slight">
												<?php
												if ( has_post_thumbnail() ) {
														$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
														//var_dump($feat_image_url);
														echo '<div class="img-flex" style="background-image: url('. $feat_image_url .')"></div>';
												}
												?>
												<a href="<?= the_permalink(); ?>">
														<div class="mask"></div>
												</a>
										</div>
										<!--/.Card image-->

										<!--Social buttons-->
										<div class="card-share">
												<div class="social-reveal">
														<!--Facebook-->
														<a type="button" class="btn-floating btn-fb"><i class="fa fa-facebook"></i></a>
														<!--Twitter-->
														<a type="button" class="btn-floating btn-tw"><i class="fa fa-twitter"></i></a>
														<!--Google -->
														<a type="button" class="btn-floating btn-gplus"><i class="fa fa-google-plus"></i></a>
												</div>
												<a class="share btn-floating btn-action share-toggle"><i class="fa fa-share-alt"></i></a>
										</div>
										<!--/Social buttons-->

										<!--Card content-->
										<div class="col-xs-8 col-sm-12 card-block">
												<div class="title">
											<div class="row">
												<div class="col-md-7"><h4><a href="#"><?= the_title(); ?></a></h4></div>
												<?php
												$micampo = get_post_meta($post->ID, 'Categoria', true);
												if (!empty($micampo)){
												?>
												<div class="col-md-5"><p><?php echo $micampo ?></p></div>
												<?php } ?>
											</div>
												</div>
													<div class="description">
														<?= the_excerpt(); ?>
													</div>
													<a href="<?= the_permalink(); ?>" class="hidden-md-down pull-right">Read more <i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
										</div>
										<!--/.Card content-->

								</div>
							<!--/.Card-->
						</div>
					<!--/.Card-->
			    </div>
					<?php
					// }
					endwhile; else:
						echo '<h2>No hay post</h2>';
					endif;
					?>
				  <!--END  buton recent post-->
					<div class="row">
						<div class="col-md-12 btn-line load-more">
							 <a id="btn-load-more" class="btn">
							 		View more
								</a>
						</div>
					</div>
			</div>
    </div><!--end-container-->
</section>
