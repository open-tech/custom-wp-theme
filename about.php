<?php
/**
* Template Name: about
*/
?>
<?php include 'header.php';?>


<div class="about-container"> 

<h1 class="about-title">About Us</h1>

<div class="about-image"> <img src="https://custom.opentech.opalstacked.com/wp-content/uploads/2022/07/about.jpg"> </div>

<div class="about-desc">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</div>

<div class="about-contact-title">Do you have a question?</div>

<div class="about-contact">
	<?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1"]'); ?>
	</div>


</div>


<?php wp_footer(); ?>
<?php include 'footer.php';?>
</body>
</html>