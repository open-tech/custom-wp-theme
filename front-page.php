<?php
/**
 * Template Name: front page
 */
?>
<?php include 'header.php'; ?>

<div class="front-page-content">
	
	<div class="front-section">
		
		<div > <h1><?php bloginfo('name'); ?></h1></div>
		<div class="front-page-cover">
			<img class="front-photo" src="https://custom.opentech.opalstacked.com/wp-content/uploads/2022/07/pexels-kristina-paukshtite-712876-2.jpg"> 
			<div class="front-page-square">
				<div class="header2"><?php bloginfo('description'); ?></div>
			</div>		
		</div>


	<div class="mouse">
		<section id="example" class="example "><span class="scroll-icon"><span class="scroll-icon__dot"></span></span></section></div>
	</div>
	
	
	<div class="front-words"> LEARN ● PLANT ● REPEAT</div>
	
		<div class="front-desc"> New to gardening? Browse our list of hints and tips on getting started, sowing, planting and creating wildlife habitats.
Gardening is fun and rewarding. What could be nicer than eating food you have grown yourself or eating an evening meal on the patio surrounded by the fragrance of scented plants you have grown? It can be hard to know when and how to start a garden, but we’re here to guide you through the process.</div>
		

	<div class="landing-button"> <a href="/about-us">read more</a></div>
	
	<div class="front-featured-posts"> Featured Posts </div>
	
	<div class="front-posts-container">
	
		<?php $recentPosts = new WP_Query(); $recentPosts->query('showposts=3&tag=featured'); while ($recentPosts->have_posts()): $recentPosts->the_post(); ?>
 
		<div class="front-preview-post">
			<a class=" preview-post-link" href="<?php the_permalink(); ?>">
				<div class=" preview-post-thumb"><?php the_post_thumbnail(); ?></div>
				<div class=" preview-post-title"><?php the_title(); ?></div>
				<div class=" preview-post-date"><?php echo get_the_date(); ?></div>
				<div class=" preview-post-excerpt"><?php the_excerpt(); ?></div>
			</a>
		</div>

 
		<?php endwhile; ?>
	</div>
 
</div>
	

<?php wp_footer(); ?>
<?php include 'footer.php'; ?>
</body>
</html>