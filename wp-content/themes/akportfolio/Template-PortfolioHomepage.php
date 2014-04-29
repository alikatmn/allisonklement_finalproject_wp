<?php
/**
* Template Name: Portfolio Homepage
*/

get_header(); ?>

<div class="main-homepage-section">
	
		<!-- <div class="homepage-main">
			<img class="homepage-main-image" src="http://localhost:8888/wp-content/uploads/2014/04/bkg_1.png">
		</div> -->

		<?php 
 
$image = get_field('homepage_background_image');
 
if( !empty($image) ): ?>
 
	<img class="homepagebackground" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
 
<?php endif; ?>

 <section>			

		<nav class="homepage-main-nav">
			<ul>
				<li><a href="http://localhost:8888/portfolio-inner-page">Web Portfolio</a>
					<ul>
						<li><a href="#">PlayPlan.com</a></li>
						<li><a href="#">Bark.com</a></li>
						<li><a href="#">ThinkGreen.com</a></li>
						<li><a href="#">LoveOfType.com</a></li>
					</ul>
				</li>

				<li><a href="#">Print Portfolio</a>
					<ul>
						<li><a href="#">Kathy Ireland</a></li>
						<li><a href="#">Fish! for Schools</a></li>
						<li><a href="#">Floor To Ceiling</a></li>
						<li><a href="#">Miscellaneous</a></li>
					</ul>
				</li>

				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			
			</ul>
		</nav>

	</section>

</div>


	<?php
	get_footer(); ?>
