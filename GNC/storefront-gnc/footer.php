<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>


		</div>

	</div><!-- #content -->

	<?php if( is_active_sidebar( 'page-bottom' ) ){ ?>
	<div class="page-bottom">
		<div class="container">
			<?php dynamic_sidebar( 'page-bottom' ); ?>
		</div>
	</div>
	<?php } ?>

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="grid">
				<?php dynamic_sidebar( 'footer' ); ?>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>
<script>



jQuery(document).ready(function(){






		//Change Price
		jQuery( "select" ).change(function () {

			setTimeout(function() {
				var a = jQuery('.woocommerce-variation-price').html();
				var b = jQuery('.price').html(a);
			}, 300);

		});


	var a = jQuery('.woocommerce-variation-price').html();
	var b = jQuery('.price').html(a);

	jQuery('footer.site-footer .widget_media_image img').wrap('<div class="img_hold"><div class="img_in">', '</div></div>');
	jQuery('footer.site-footer .widget_media_image .img_hold').matchHeight();
	jQuery('#main').append('<a href="#" onclick="event.preventDefault();Tawk_API.toggle();" class="fixedChat"></a>');
	jQuery('.mega-toggle-blocks-right').append('<div class="mega-toggle-block mega-cart-block mega-toggle-block-2"><a href="<?php echo wc_get_cart_url(); ?>"><span class="mega-toggler-label">Cart (<?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>)</span></a></div>');

})
</script>
</body>
</html>
