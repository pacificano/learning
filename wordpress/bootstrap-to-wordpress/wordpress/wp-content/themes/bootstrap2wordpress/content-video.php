<?php  
// Advanced Custom Fields
	$video_name = get_field('video_name');
?>

<!-- video featurette -->
<section id="featurette">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>Watch this silly little cat</h2>
				<iframe width="100%" height="415" src="https://www.youtube.com/embed/<?php echo $video_name; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
</section>