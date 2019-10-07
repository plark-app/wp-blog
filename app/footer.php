<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plark_theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php require get_template_directory() . '/components/footer/footer.php' ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
