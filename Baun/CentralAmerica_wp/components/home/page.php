<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->
  <?php
  while ( have_posts() ) : the_post();
    the_content();

    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
      'after'  => '</div>',
    ) );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

  endwhile; // End of the loop.
  ?>
</article><!-- #post-## -->
