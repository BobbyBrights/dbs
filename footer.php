<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dbs
 */
 
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-content">
			<div class="footer-line"></div>
			<div class="footer-logo">DBS</div>
			<!-- <div class="footer-desktop-wrapper-one"> -->
				<div class="footer-social">
					<span>Follow Us</span>
					<br/>
					<a href="https://www.instagram.com/dbsdevelopments/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/DBS_social_icons-instagram.svg"/></a>
					<a href="https://www.linkedin.com/company/dbs-developments" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/DBS_social_icons-linkedin.svg"/></a>				
				</div> 
				<div class="footer-contact">
					<a href="mailto:<?php the_field("email", 201) ?>" class="footer-contact-email"><?php the_field("email", 201) ?></a>
					<a href="tel:<?php the_field("phone_number", 201) ?>" class="footer-contact-phone"><?php the_field("phone_number", 201) ?></a>
					<div class="footer-contact-address-mobile">11 Curity Ave.,<br>Toronto, ON<br>M4B 1X4</div>
					<div class="footer-contact-address-desktop"><?php the_field("address", "203") ?></div>			
				</div>
			<!-- </div> -->
			<div class="footer-copyright-wrapper">
				<!-- <div class="footer-logo-desktop">DBS</div>			 -->
				<div class="footer-copyright">DBS Developments &copy; 2018</div>
				<div class="footer-design-by">Design and code by <a href="https://pivotandpilot.com" target="_blank">Pivot & Pilot</a></div>
			</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
