<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wp_smithett
 */
?>

  	</div><!-- #content -->

  	<footer id="colophon" class="site-footer" role="contentinfo">
  		<div class="site-info">
  			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wp_smithett' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wp_smithett' ), 'WordPress' ); ?></a>
  			<span class="sep"> | </span>
  			<?php printf( __( 'Theme: %1$s by %2$s.', 'wp_smithett' ), 'wp_smithett', '<a href="http://tombryan.co" rel="designer">Tom Bryan</a>' ); ?>
  		</div><!-- .site-info -->
  	</footer><!-- #colophon -->
  </div><!-- #page -->

</div><!-- .grid -->

<?php wp_footer(); ?>

</body>
</html>
