<?php
/*
 * The header for our theme
 */

?><!DOCTYPE html>
 
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="this is a page for the custom theme">
  	<meta name="author" content="open.tech">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title> <?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?> </title>
	<link rel="icon" type="image/png" href="https://custom.opentech.opalstacked.com/wp-content/uploads/2022/07/flaticon.png">
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php wp_head();?>
</head>
 
	
<body <?php body_class(); ?>>
 
	
	
<div class="mobile-menu-container"> 
    <a id="hamburger-icon" href="#" class="open-close-btn"><span></span>
        <span></span>
        <span></span>
        <span></span>   
     </a>

    </div>
      <div id="myNav" class="overlay">
        <div class="overlay-content">
        
			<?php
				wp_nav_menu( array( 
					'theme_location' => 'my-custom-menu', 
					'container_class' => 'my-custom-menu' ) ); 
				?>


				<div class="social-medias">

					<div class=header-logo> <a href="https://custom.opentech.opalstacked.com/"><img src="https://custom.opentech.opalstacked.com/wp-content/uploads/2022/07/flaticon.png"></a></div>
					<div class="line"> </div>
					<div class="social-icon"> <a target="_blank" href="https://facebook.com"><i class="fa-brands fa-facebook-f fa-xl"></i></a></div>
					<div class="social-icon"> <a target="_blank" href="https://instagram.com"><i class="fa-brands fa-instagram fa-xl"></i></a></div>
					<div class="social-icon"> <a target="_blank" href="https://twitter.com"><i class="fa-brands fa-twitter fa-xl"></i></a></div>

				</div>
			
			
			
			

        </div>
      </div>
  
	
	

