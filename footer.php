<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Hungry_Hapa
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">


	<div class="footer-section">

		<div class="footer-section-left">

			<div>
				<img src="<?php bloginfo('template_directory');?>/images/footer-logo-white.svg" alt="logo"></img>
			</div>
			
			<div class="soc-icon-container">
				<?php get_template_part('template-parts/social-icons-footer'); ?>
			</div>

		</div>

		<div class="footer-section-right">

			<div>
				<ul class="footer-section-links">
					<li class=""><a class="f6 f5-ns ttu no-underline" href="http://localhost:8888/about/" title="About">About</a></li>
					<li class=""><a class="f6 f5-ns ttu no-underline" href="http://localhost:8888/recipes-main/" title="Privacy">Privacy</a></li>
					<li class=""><a class="f6 f5-ns ttu no-underline" href="http://localhost:8888/reviews-main/" title="Terms">Terms</a></li>
					<li class=""><a class="f6 f5-ns ttu no-underline" href="http://localhost:8888/blog-main/" title="Contact">Contact</a></li>
				</ul>
			</div>

			<div class="footer-disclosure">
				<p>
					Disclosure: The Hungry Hapa may contain sponsored content and contextual affiliate links. Affiliate links signify that we may receive a commission on sales of products that are linked to in our posts. All sponsored posts are clearly marked as such.
				</p>
			</div>

		</div>
		
	</div>

	<div class="copyright">
		<p class="ma0">Copyright &copy; 2018 The Hungry Hapa LLC. All Rights Reserved.</p>
	</div>
	

	<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b5f41aa9ade9ffe"></script>


</body>
</html>
