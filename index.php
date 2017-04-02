<?php
/**
 * General index template
 *
 * @package    Receptar
 * @copyright  2015 WebMan - Oliver Juhas
 *
 * @since    1.0
 * @version  1.3
 */



get_header();

	get_template_part( 'template-parts/loop', 'index' );

?>


<!-- HTML section -->


<div class="container ">
	<div class="row">
		<div class="col-lg-i2">
	<div class="card-deck">
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/sublime_text_el_capitan_preview.png" class="img-fluid" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="https://drive.google.com/uc?export=download&id=0B3nKInfhAngSdU9fVEV5V05JTE0" class="btn btn-primary">Direct Download</a>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/card-img1.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/card-img1.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- second row -->

	<div class="row">
		<div class="col-lg-i2">
	<div class="card-deck">
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/card-img1.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/card-img1.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/images/card-img1.jpg" class="img-fluid" alt="Card image cap">
					<div class="card-block">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php  

get_footer();
?>