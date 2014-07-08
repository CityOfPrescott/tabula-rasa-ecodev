<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer_inner">
				<?php tr_main_nav(); ?>
				<div class="contact-info">
					<h3>Department of Economic Initiatives</h3>
					<p>928-777-1204</p>
					<div class="other-links">
						<p class="other-links-title">Prescott Links</p>
						<p>
							<a href="http://www.prcairport.com/">Prescott Municipal Airport</a> * <a href="http://www.visit-prescott.com/">Tourism</a>
						</p>
					</div>					
				</div>
		</div><!-- .footer_inner -->

		<div class="cop_footer">
			<div class="footer_inner">
				<p class="logo"><a href="http://www.cityofprescott.net/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_40.png" alt="Prescott Municipal Airport" /></a></p>
				<div class="cop_menu">
					<ul>
						<li><a href="http://www.cityofprescott.net/visitors/">Visitors</a></li>
						<li><a href="http://www.cityofprescott.net/services/">City Services</a></li>
						<li><a href="http://www.cityofprescott.net/history/">History</a></li>
						<li><a href="http://www.cityofprescott.net/business/">Business</a></li>
						<li><a href="http://www.cityofprescott.net/leadership/">City Leadership</a></li>
						<li><a href="http://www.cityofprescott.net/documents/">Documents</a></li>
						<li><a href="http://www.cityofprescott.net/contact/">Contact Us</a></li>
					</ul>
				</div><!-- .site-info -->
			</div>	
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>