<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-6">
      <?php 
		the_post_thumbnail( array( 612, 500 ) );
		?>
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h2 class="card-title">
        <?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'rihana' ) );
		}
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
    	</h2>
        <p class="card-text">
		<?php 
		the_excerpt(); 
		?>
        </p>
        <p class="card-text">
        <ul class="card-text">
        	<li><i class="fas fa-user-alt"></i> Author: <?php the_author_posts_link(); ?></li> 
        	<li><i class="fas fa-clock"></i> Date: <?php the_time('F jS, Y'); ?>  </li>
        	<li><i class="fas fa-clipboard-list"></i> Categories: <?php the_category(', '); ?> </li>
        	<li><i class="fas fa-clock"></i>  Tags : <?php the_tags('', ' - '); ?> </li>
        </ul>
    	</p>
        <p class="card-text">
        <a class="read-more" href="<?php print esc_url( get_permalink());?>" rel="bookmark">Read More</a>
      	</p>
      </div>
    </div>
  </div>
</div>
