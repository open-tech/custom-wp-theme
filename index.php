<?php
/* 
Template Name: archive
*/
?>
<?php include 'header.php';?>

<div class="front-page-content">
	
	<h1 class="main-header">Archive</h1>

	<div class="posts-container">


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<a class=" preview-post-link" href="<?php the_permalink(); ?>">
			<div class="preview-post">
					<div class=" preview-post-thumb"><?php the_post_thumbnail(); ?></div>
					<div class=" preview-post-title"><?php the_title(); ?></div>
					<div class=" preview-post-excerpt"><?php the_excerpt(); ?></div>
					<div class=" preview-post-date"><?php echo get_the_date(); ?></div>
			</div>
		</a>

		<?php endwhile; ?>

		<div class="pagination"> <?php echo paginate_links(); ?></div>

		<?php else: ?>

		<p>No posts found :(</p>

		<?php endif; ?>
		
	</div>
	
</div>
<?php wp_footer(); ?>
<?php include 'footer.php';?>
</body>
</html>