<?php get_header(); ?>
<main>
	<div class="container">
		<div class="white-wrap">
			<h1><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-hw">
				<h3><?php the_title(); ?></h3>
				<div class="ft-img">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} 
					?>
				</div>
				<?php the_excerpt(); ?>
				<button class="alignRight" onclick="javascript:location.href='<?php the_permalink(); ?>'">Read More</button>
			</div>
		<?php endwhile; else: ?>
	<?php endif; ?>
	<div class="pagination">
		<?php echo paginate_links(); ?>
	</div>
</div>
</div>
</main>
<?php get_footer(); ?>