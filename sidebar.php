<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package wp_smithett
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<div class="box">
        <aside id="search" class="widget widget_search">
  				<?php get_search_form(); ?>
  			</aside>
      </div>

      <div class="box--outlined">
			  <aside id="archives" class="widget">
				  <h1 class="widget-title"><?php _e( 'Archives', 'wp_smithett' ); ?></h1>
				  <ul>
					  <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				  </ul>
			  </aside>
      </div>

      <div class="box--outlined">
  			<aside id="meta" class="widget">
  				<h1 class="widget-title"><?php _e( 'Meta', 'wp_smithett' ); ?></h1>
  				<ul>
  					<?php wp_register(); ?>
  					<li><?php wp_loginout(); ?></li>
  					<?php wp_meta(); ?>
  				</ul>
  			</aside>
      </div>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
