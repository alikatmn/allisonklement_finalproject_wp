<?php
/**
* Template Name: Portfolio Project
*/

get_header(); ?>

 
	<div id="primary">
		<div id="content" role="main">
			<div class='section'>
				<div class='page-border'>
				<div class='portfolio-page'>
 
			<?php while ( have_posts() ) : the_post(); ?>
 
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
 
 			<!--<div class="project-top">-->
				
				<?php 
 
				// check for rows (parent repeater)
				if( have_rows('project_header') ): ?>
			<section class='project-header'>
								
							<?php 
 
							// loop through rows (parent repeater)
							while( have_rows('project_header') ): the_row(); ?>
								<section class='section-name'>
									<h1><?php the_sub_field('section_name'); ?></h1>
								</section>

								<section class='top-background-img'>
									<img src="<?php the_sub_field('section_background_image'); ?>" >
								</section>

				<?php 
 
				// check for rows (sub repeater)
				if( have_rows('section_list') ): ?>
					<section class="section-list">
						<ul>
							<?php 
 
							// loop through rows (sub repeater)
							while( have_rows('section_list') ): the_row();
 
							// display each item as a list 
							?>
							<li class="submenu" <?php if( get_sub_field('submenu') ) ?>><?php the_sub_field('submenu'); ?></li>

								
							<?php endwhile; ?>
						</ul>
						</section><!-- /section_list -->
							<?php endif; //if( get_sub_field('section_list') ): ?>
					
			</section><!-- /project header -->

				

							<?php 
							$images = get_sub_field('section_image_gallery');

							if( $images ): ?>
				    <div id="slider" class="flexslider">
				    <section class='project-gallery'>
				        <ul class="slides">
				            <?php foreach( $images as $image ): ?>
				                <li class='indv-slide'>
				                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				                    <p><?php echo $image['caption']; ?></p>
				                </li>
				            <?php endforeach; ?>
				        </ul>
				    </div> <!-- #slider -->
							<?php endif; ?>
					</section> <!-- /project gallery -->

							<?php 
							// check for rows (sub repeater)
							if( have_rows('list_item') ): ?>
							<div class='challenges'>
								<section class='list-items'>
								<ul>
								<?php 
 
								// loop through rows (sub repeater)
								while( have_rows('list_item') ): the_row();
 
									// display each item as a list 
									?>
									<div class='list-headline-bkg'>
										<li class='list-headline' <?php if( get_sub_field('list_item_headline') ) ?>><?php the_sub_field('list_item_headline'); ?></li>
									</div>
									<div class='list-paragraph-bkg'>
									<li class='list-paragraph' <?php if( get_sub_field('list_item_paragraph') ) ?>><?php the_sub_field('list_item_paragraph'); ?></li>
									</div>

								<?php endwhile; ?>
								</ul>
								</section> <!-- /list-items -->
							</div><!-- /challenges -->
							<?php endif; //if( get_sub_field('list_item') ): ?>

					<?php endwhile; // while( has_sub_field('project_header') ): ?>
					
				<?php endif; // if( get_field('project_header') ): ?>
 
			<?php endwhile; // end of the loop. ?>
						<!--</div></project top -->
 		</div>
 	</div>
 	</div>
		</div><!-- #content -->
	</div><!-- #primary -->
