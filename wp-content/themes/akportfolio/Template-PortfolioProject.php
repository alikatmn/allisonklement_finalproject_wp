<?php
/**
* Template Name: Portfolio Project
*/
?>
get_header(); ?>
 
	<div id="primary">
		<div id="content" role="main">
 
			<?php while ( have_posts() ) : the_post(); ?>
 
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
 
				<?php 
 
				// check for rows (parent repeater)
				if( have_rows('project_header') ): ?>
					<div id="project-header">
					<?php 
 
					// loop through rows (parent repeater)
					while( have_rows('project_header') ): the_row(); ?>
						<div>
							<h3><?php the_sub_field('section_name'); ?></h3>
							<?php 
 
							// check for rows (sub repeater)
							if( have_rows('section_list') ): ?>
								<ul>
								<?php 
 
								// loop through rows (sub repeater)
								while( have_rows('section_list') ): the_row();
 
									// display each item as a list 
									?>
									<li <?php if( get_sub_field('submenu') ) ?>><?php the_sub_field('submenu'); ?></li>

				




								<?php endwhile; ?>
								</ul>
							<?php endif; //if( get_sub_field('section_list') ): ?>

									<?php 

 
							// check for rows (sub repeater)
							if( have_rows('list_item') ): ?>
								<ul>
								<?php 
 
								// loop through rows (sub repeater)
								while( have_rows('list_item') ): the_row();
 
									// display each item as a list 
									?>
									<li <?php if( get_sub_field('list_item_headline') ) ?>><?php the_sub_field('list_item_headline'); ?></li>
									<li <?php if( get_sub_field('list_item_paragraph') ) ?>><?php the_sub_field('list_item_paragraph'); ?></li>



											<?php endwhile; ?>
								</ul>
							<?php endif; //if( get_sub_field('list_item') ): ?>


						</div>	
 
					<?php endwhile; // while( has_sub_field('project_header') ): ?>
					</div>
				<?php endif; // if( get_field('project_header') ): ?>
 
			<?php endwhile; // end of the loop. ?>
 
		</div><!-- #content -->
	</div><!-- #primary -->
