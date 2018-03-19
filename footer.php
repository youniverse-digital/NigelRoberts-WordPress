<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baryon
 */

 $site_logo_footer = get_field('site_logo_footer', 'options');

?>

	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col col-12">
					<img src="<?php echo $site_logo_footer ?>" alt="" class="footer-logo">
				</div>
			</div>
			<div class="row">
				<div class="col col-12">
					<p class="address">
						8 Houghton Close, Asfordby Hill, Melton Mowbray. LE14 3QL
						<br><br>
						t: 01664 812765<br>
						m: 07973860996
					</p>
				</div>
			</div>
		</div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>
