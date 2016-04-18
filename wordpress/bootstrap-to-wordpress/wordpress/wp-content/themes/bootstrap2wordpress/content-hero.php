<?php 
    $prelaunch_price = get_post_meta( 11, 'prelaunch_price', true );
    $launch_price = get_post_meta( 11, 'launch_price', true );
    $final_price = get_post_meta( 11, 'final_price', true );
    $course_url = get_post_meta( 11, 'course_url', true );
    $button_text = get_post_meta( 11, 'button_text', true );
 ?>

<!-- hero -->
<section id="hero" data-type="background" data-speed="0.5">
	<article>
		<div class="container clearfix">
			<div class="row">
				
				<div class="col-sm-5">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/photo-1.jpg" alt="Cat badge" class="logo">
				</div><!-- col -->

				<div class="col-sm-7 hero-text">
					<h1><?php bloginfo('name'); ?></h1>
					<p class="lead"><?php bloginfo('description'); ?></p>

					<div id="price-timeline">
						<div class="price active">
							<h4>Pre-Launch<small>Price ends soon</small></h4>
							<span><?php echo $prelaunch_price; ?></span>
						</div><!-- price -->
						<div class="price">
							<h4>Launch price<small>Coming soon!</small></h4>
							<span><?php echo $launch_price; ?></span>
						</div><!-- price -->
						<div class="price">
							<h4>Final price<small>Coming soon!</small></h4>
							<span><?php echo $final_price; ?></span>
						</div><!-- price -->
					</div><!-- price-timeline -->

					<p><a href="<?php echo $course_url; ?>" class="btn btn-lg btn-danger" role="button"><?php echo $button_text; ?></a></p>

				</div><!-- col -->

			</div><!-- row -->
		</div><!-- container -->
	</article>
	
</section>