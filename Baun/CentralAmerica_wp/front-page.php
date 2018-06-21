
<?php
/**
 * The front page template file
 */
get_header();
?>

	<!--Double navigation-->
	<header>
		<!--4 Slider revolution-->
		<?php putRevSlider('bannerInicio', 'homepage'); ?>


	</header>



	<section class="map">
	      <div class="container">
	            <div class="row">
	                  <!-- se muestra full mapa de 540 > hacia arriba -->
	            <div id="MapContainer" class="hidden-sm-down">
	                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 svgMap">
	                    <div class="pad">
	                      map
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 svgContent">
	                        <div class="type">
														<?php if( get_field('maptext') ): ?>
																<?php the_field('maptext'); ?>
															<?php endif; ?>
	                         </div>
	                </div>
	            </div>
	        </div>
	    </div>
	      <!-- se muestran los paises de < 540 hacia abajo-->
	            <div id="PaisesContainer" class="hidden-sm-up">
	                <div class="col-12">
	                <div class="type">
	                            <h2>travelers</h2>
	                            <h3>guide</h3>
	                      </div>
	                      <div class="list">



	                    </div>
	                </div>
	            </div>

	</section>


	<section id="content-post" class="post section magazine-section">
		<div class="container">
	    <!--First row-->
	    <div class="row text-left">
	    	<!--Tutular para mobile-->
			  	<div class="type hidden-sm-up">
					<h3>read from</h3>
	<h4>our blog</h4>			</div>
	        <!--First column-->
	        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
						<!--Card-->
						<div class="card">



						    <!--Card content-->
						    <div class="card-block">
					        xxxx
						    </div>
						    <!--/.Card content-->
				       </div>
						<!--/.Card-->

	        </div>
	        <!--/First column-->

	        <!--Second column-->
	      <div class="col-lg-6 col-md-12 hidden-xs-down">

						<div class="hidden-md-down">
							<div class="row type-block">
	              text
					    </div>
						</div>

									<!--Small news-->
					<div class="single-news">
							<div class="row">
									<div class="col-md-4">
											<!--Image-->
											<div class="view overlay hm-white-slight">
													<img width="1400" height="800" src="http://wordpress-vinicio.us-east-1.elasticbeanstalk.com/wp-content/uploads/2017/04/12171_14020415350018245546-1400x800.jpeg" class="attachment-thumb-image size-thumb-image wp-post-image" alt="" srcset="http://wordpress-vinicio.us-east-1.elasticbeanstalk.com/wp-content/uploads/2017/04/12171_14020415350018245546-1400x800.jpeg 1400w, http://wordpress-vinicio.us-east-1.elasticbeanstalk.com/wp-content/uploads/2017/04/12171_14020415350018245546-1400x800-768x439.jpeg 768w" sizes="(max-width: 1400px) 100vw, 1400px" />												<a href="http://wordpress-vinicio.us-east-1.elasticbeanstalk.com/uncategorized/ejemplo-belize-culture/">
															<div class="mask"></div>
													</a>
											</div>
									</div>

									<!--Excerpt-->
									<div class="col-md-8">
										<div class="content">
												<div class="title">
													<div class="row">
														<div class="col-md-8"><h4><a href="#">Ejemplo Belize Culture</a></h4></div>
																											<div class="col-md-4">
															<p>Culture </p>
														</div>
																										</div>
												</div>
												<div class="description">
													<a href="#">
														<p>this is the excerpt text with the post</p>
													</a>
												</div>
										 </div>
									</div>

							</div>
					</div>
					<!--/Small news-->
									<!--Small news-->

					<!--/Small news-->

					        </div>
	        <!--/Second column-->

	    </div>
	    <!--/First row-->

	 <!----SECTION RECENT---->
				<div class="row recent">
											    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">

									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">

									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">

							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">


									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">


									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">


									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">

									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">

									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">

	sss

									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
										    <!--recent post-->
				    <div class="post-recent">
							<div class="col-xs-12 col-md-4 col-lg-4 item-recent">
								<!--Card-->
									<div class="card">
							aa

									</div>
								<!--/.Card-->
							</div>
						<!--/.Card-->
				    </div>
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
	<section class="categories container section magazine-section multi-columns">

	    <!--Section heading-->
	    <div class="type hidden-sm-down">
	      &nbsp;
	<h2>learn more</h2>
	<h3>about</h3>
	<h4>centralamerica</h4>    </div>

	    <!--First row-->
	    <div class="row text-left">

	        <!--First column-->
	        <div class="col-lg-4 col-md-12 mb-r">

	          <!--Card-->
	              <div class="card">
	              fffffff
	              </div>
	          <!--/.Card-->
	                    <!--Small news-->
	          <div class="single-news">
	            2222
	          </div>
	          <!--/Small news-->
	                    <!--Small news-->
	          <div class="single-news">
	            xxx
	          </div>
	          <!--/Small news-->
	                    <!--Small news-->
	          <div class="single-news">

	          </div>
	          <!--/Small news-->

	        </div>
	        <!--/First column-->

	        <!--Second column-->
	        <div class="col-lg-4 col-md-6 mb-r">

	          <!--Card-->
	          <div class="card">
	                            <!--Card image-->
	              <div class="view overlay hm-white-slight">
	                  <img src="http://wordpress-vinicio.us-east-1.elasticbeanstalk.com/wp-content/uploads/2017/04/categoria-1.jpg" />                  <div class="content-mobile">
	                      <h2>Experiencing</h2>
	                      <div>
	                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	                      </div>
	                  </div>
	                  <a>
	                      <div class="mask"></div>
	                  </a>

	              </div>
	              <!--/.Card image-->
	          </div>

	                    <!--Small news-->
	          <div class="single-news">
	              <div class="title">
	                  <div class="row">
	                      <div class="col-md-8"><h4><a href="#">13 Great Options For Staying Fit In San Juan Del Sur, Nicaragua</a></h4></div>
	                                        </div>
	              </div>
	              <div class="description">
	                  <p>San Juan del Sur is definitely booming as more foreigners heed the tales of the kick-back beach lifestyle-on-a-budget that’s available here in Nicaragua. One sign of this surge is the array of fitness options popping up all over town. Nicaragua isn’t just for yoga retreats anymore, there is now an abundance of options to help [&hellip;]</p>
	              </div>
	          </div>
	          <!--/Small news-->
	                    <!--Small news-->
	          <div class="single-news">

	          </div>
	          <!--/Small news-->
	                    <!--Small news-->
	          <div class="single-news">


	          </div>
	          <!--/Small news-->


	        </div>
	        <!--/Second column-->


	        <!--Third column-->
	        <div class="col-lg-4 col-md-6 mb-r">

	          <div class="card">

	          </div>
	                    <!--Small news-->
	          <div class="single-news">


	          </div>
	          <!--/Small news-->
	                    <!--Small news-->
	          <div class="single-news">


	          </div>
	          <!--/Small news-->
	                    <!--Small news-->
	          <div class="single-news">


	          </div>
	          <!--/Small news-->

	        </div>
	        <!--/Third column-->

	    </div>
	    <!--/First row-->

	</section>
	<!--/Section: Magazine v.3-->
	<section class="instagram text-md-center">
		<div class="type">
	    Title
		</div>
	    aca Instagram plugin

	</section>
<?php
get_footer();
?>
