<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <title><?php bloginfo('title');?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <?php wp_head(); ?>  

</head>
<body <?php body_class();?> >

<div class="container-fluid top-nav-bar " >
	  <div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="container " >
			  	<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 " >
							 <?php dynamic_sidebar('top-left-widget');?>
					</div>  
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align: right;">
						<?php dynamic_sidebar('top-right-widget');?>
				  	</div>  
			 	</div>  
		  </div>  
		</div>  
	</div>  
</div>  

<div class="container" >
  	<div class="row">
	    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
		  	<?php
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
		  	?>
	    </div>
	    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
	      <div class="top-middle-area">
			 <?php dynamic_sidebar('top-middle-widget');?>
		  </div>
	    </div>
	    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 right-middle-area">
			  	<a href="#" role="button" id="cartMenu" data-bs-toggle="dropdown" aria-expanded="false">
			    	<i class="fas fa-shopping-basket"></i>
			  	</a>
			  	<div class="dropdown-menu" aria-labelledby="cartMenu">
					<?php woocommerce_mini_cart();  ?>
				</div>

			<a data-bs-toggle="collapse" href="#searchForm" role="button" aria-expanded="false" aria-controls="searchForm"><i class="fas fa-search"></i></a>
			<div class="collapse" id="searchForm">
			    <form method="get" id="searchform" action="<?php echo home_url(); ?>/">
					<input type="text" name="s" id="s" title="<?php _e( 'Search', 'rihana' ); ?>" placeholder="<?php _e( 'Search...', 'rihana' ); ?>" value="<?php echo get_search_query(); ?>" />
				</form>
			</div>
	    </div>
  	</div>
</div>

	<div class="container">
		<div class="row">
	      	<div class="col-12">   
	      		
<nav class="navbar navbar-light  mobile-menu">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      MENU
    </button>
  </div>
      <div class="collapse" id="navbarToggleExternalContent">
		<?php 
		       wp_nav_menu( array(
		      'depth' => 6,
		      'sort_column' => 'menu_order',
		      'container' => 'ul',
		      'menu_id' => 'primarymenu',
		      'menu_class' => 'nav',
		      'theme_location' => 'mobile-menu'
		    ) );
		?>
	</div>
</nav>
				
				<?php
				$args = array(
					'theme_location' => 'primary',
					'menu_class' => 'primary-menu'
				);
				wp_nav_menu($args);
				?>  
			</div>
	    </div>
  	</div>
