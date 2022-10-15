<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hexo Lite
 */

$hexo_lite_options = new Hexo_Lite_Options();
?>

	</div><!-- #content -->

		<footer>  
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-bottom text-center">
								<?php $hexo_lite_options->copyrightText(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div><!-- #page --> 
<?php wp_footer(); ?>

</body>
</html>
