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
			<div class="footer-logo-mobile">DBS</div>
			<div class="footer-desktop-wrapper-one">
				<div class="footer-social">
					<span>Follow Us</span>
					<br/>
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/DBS_social_icons-instagram.svg"/></a>
					<a href="https://www.linkedin.com/company/dbs-developments"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/DBS_social_icons-linkedin.svg"/></a>				
				</div> 
				<div class="footer-contact">
					<a href="mailto:info@dbsdevelopments.ca" class="footer-contact-email">info@dbsdevelopments.ca</a>
					<a href="tel:4164290969" class="footer-contact-phone">(416) 429.0969</a>
					<div class="footer-contact-address">
						11 Curity Ave.,<br>Toronto, On<br>M4B 1X4
					</div>
				</div>
				<div class="footer-subscribe">
					<span>Subscribe to learn more about upcoming developments and updates</span>
					<?php echo do_shortcode('[mc4wp_form id="120"]'); ?>				
				</div>
			</div>
			<div class="footer-desktop-wrapper-two">
				<div class="footer-logo-desktop">DBS</div>			
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
