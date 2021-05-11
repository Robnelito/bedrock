<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<style>
	
</style>

<div class="wrapper social-media-section" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer row" id="colophon">

					<div class="social-test col-md-8">

						<h5 class="h6t">RESTIONS EN CONTACT !</h5>

						<h2 class="h2t">Suivez nous sur les reseaux !</h2>

					</div><!-- .some social text -->

					<div class="social-icone col-md-4 row text-center">

						<span class="col-4 text-center">
							<a href="#" target="_blank" rel="noopener noreferrer"><i class="icone fab fa-facebook-f"></i></a>
						</span>
						<span class="col-4 text-center">
							<a href="#" target="_blank" rel="noopener noreferrer"><i class="icone fab fa-instagram"></i></a>
						</span>
						<span class="col-4 text-center">
							<a href="#" target="_blank" rel="noopener noreferrer"><i class="icone fab fa-pinterest"></i></a>

						</span>

					</div><!-- .some social text -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->



<div class="wrapper newsletter" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="text-center">
						<h6 class="h6t">NE LOUPEZ RIEN DE NOS ACTUALITES</h6>
						<h2 class="h2t" style="color: #343434;">Inscrivez-vous a notre newsletter</h2>
						<br>
						<button type="button" class="newsletterBtn">M'INSCRIRE A LA NEWSLETTER</button>
					</div>

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->





<section class="instagram-area">
	<div class="container-fluid auto-container">
		<div class="row">
			<div class="section-title text-center col-lg-12">
				<h2 class="h2t" style="color: #343434;">Suivez nous sur instagram !</h2>
			</div>
		</div>
	</div>
	<div class="container-fluid auto-container">
		<div class="row">
			<div class="col-lg-12">
				<div class="owl-carousel owltheme owl-loaded owl-drag">
					<div class="owl-stage-outer">
						<div class="owl-stage" style="transform: translate3d(-1);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script src="https://kit.fontawesome.com/079b17d26d.js" crossorigin="anonymous"></script>

</body>

</html>