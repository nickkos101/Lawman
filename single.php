<?php get_header(); ?>
<main>
	<div class="container">
		<div class="white-wrap">
			<div class="col-db">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<div class="ft-img">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
					?>
				</div>
				<?php the_content(); ?>
			<?php endwhile; else: endif; ?>
		</div>
		<div class="col-third">
			<h3>Headline Goes Here</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>
</main>
<?php get_footer(); ?>