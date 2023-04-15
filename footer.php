
<div class="container-fluid footer">

    <div class="row">
    	<div class="col-12">
    	<?php dynamic_sidebar('top-footer');?>
    	</div>	
	</div>

  <div class="row footer-bar">
  
    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
	  	<?php
		if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
		}
		?>
		<ul>
		<li><i class="fa fa-home"></i> 16 Basioni, Cairo, Egypt.</li>
		<li><a href="#"><i class="fa fa-phone"></i> (495) 989—20—11</a></li>		
		<li><a  href="mailto:cmail@mail.com"><i class="fa fa-envelope"></i> contact@rihana.com</a></li>
		</ul>
				<div class="socials-footer">
					<ul>
					<li><a href="#" title="Face Book"><span class="fab fa-facebook"></span></a></li>
					<li><a href="#" title="Twitter"><span class="fab fa-twitter-square"></span></a></li>
					<li><a href="#" title="pinterest"><span class="fab fa-pinterest"></i></a></li>
					<li><a href="#" title="Instagram"><span class="fab fa-instagram"></span></a></li>
					</ul>
					</div>
    </div>
    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
		 <?php dynamic_sidebar('footer1');?>
    </div>
    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
		 <?php dynamic_sidebar('footer2');?>
	</div>
    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-2">
		<?php dynamic_sidebar('footer3');?>
    </div>
    <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
		<?php dynamic_sidebar('footer4');?>
    </div>
  </div>
    <div class="row footer-credits">
		<div class="col-sm-12 ">
			  <p >COPYRIGHT Ahmed Basioni - Rihana.</p> 
		</div>
	 </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
