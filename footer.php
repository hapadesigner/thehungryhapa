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

		<div class="footer-content">

			<div class="social-follow tc center">

				<?php get_template_part('template-parts/social-icons'); ?>	

			</div>
		</div>

		<!-- <div class="footer-container w-100 border-box flex items-center justify-between pa2">

			<div class="footer-container-content center flex">
				<a class="f6 f5-ns ttu no-underline black" href="http://localhost:8888/about/" title="About">About</a>
				<a class="f6 f5-ns ttu no-underline black" href="http://localhost:8888/recipes-main/" title="Privacy">Privacy</a>
				<a class="f6 f5-ns ttu no-underline black" href="http://localhost:8888/reviews-main/" title="Terms">Terms</a>
				<a class="f6 f5-ns ttu no-underline black" href="http://localhost:8888/blog-main/" title="Contact">Contact</a>
			</div>
		</div> -->

		<div class="footer-links">
			<ul>
				<li><a class="f6 f5-ns ttu no-underline black" href="http://localhost:8888/about/" title="About">About</a></li>
				<li><a class="f6 f5-ns ttu no-underline black" href="http://localhost:8888/recipes-main/" title="Privacy">Privacy</a></li>
				<li><a class="f6 f5-ns ttu no-underline black" href="http://localhost:8888/reviews-main/" title="Terms">Terms</a></li>
				<li><a class="f6 f5-ns ttu no-underline black" href="http://localhost:8888/blog-main/" title="Contact">Contact</a></li>
			</ul>
		
		</div>

		<!-- <div class="copyright-container tc text-white">
			<p class="ma0">Copyright &copy; 2018 The Hungry Hapa. All Rights Reserved.</p>
		</div> -->

	<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b5f41aa9ade9ffe"></script>


</body>
</html>
