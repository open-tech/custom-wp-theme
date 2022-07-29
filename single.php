<?php
/**
* Template Name: single page
*/
?>


<?php include 'header.php';?>

<div class="single-post-container">
	
	
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 

	
	<div class=" single-post-thumb"><?php the_post_thumbnail(); ?></div>
	
	<div class="single-post-metadata">

		<div class=" single-post-title"><?php the_title(); ?></div>
		<div class=" single-post-date"><?php echo get_the_date(); ?></div>
		<div class=" single-post-author"><?php echo get_the_author(); ?></div>
		<div class=" single-post-categories">
<!-- 			 λούπα για να εμφανιστούν -->
			<?php $categories = get_the_category();
			 foreach( $categories as $category ) {
				echo  $category->name . ' ';
			} ?>
		</div>
	</div>
	
	<div class="single-post-content">
		<?php echo get_the_content(); ?>

	</div>
	
<div class="post-pagination">
	


	<div> <?php previous_post_link(); ?> </div>

	<div> <?php next_post_link(); ?> </div>
 
	
</div>
	
</div>


 
<?php endwhile; ?>
	


	
	
	
	
	
	
<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>
 
<?php else: ?>
 
<p>No posts found. :(</p>
 
<?php endif; ?>
<?php wp_footer(); ?>
<?php include 'footer.php';?>
</body>
</html>