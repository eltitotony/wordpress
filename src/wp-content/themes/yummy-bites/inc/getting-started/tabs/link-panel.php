<?php
/**
 * Right Buttons Panel.
 *
 * @package Yummy Bites
 */
?>
<div class="panel-right">
	<?php do_action( 'yummy_bites_pro_updates_html' ); ?>
	<?php if( !yummy_bites_pro_is_activated() ): ?>
		<div class="panel-aside">
			<h4><?php esc_html_e( 'Upgrade To Pro', 'yummy-bites' ); ?></h4>
			<p><?php esc_html_e( 'With the Pro version, you can change the look and feel of your website in seconds. The premium version lets you have better control over the theme as it comes with more customization options. Not just that, the Pro version also has more layout options as compared to the free version. The Pro version is multi-language compatible as well.', 'yummy-bites' ); ?></p>
			<p><?php esc_html_e( 'You will also get more frequent updates and quicker support with the Pro version.', 'yummy-bites' ); ?></p>
			<a class="button button-primary" href="<?php echo esc_url( 'https://wpdelicious.com/wordpress-themes/yummy-bites-pro/?utm_source=free_theme&utm_medium=getting_started&utm_campaign=upgrade_theme' ); ?>" title="<?php esc_attr_e( 'View Premium Version', 'yummy-bites' ); ?>" target="_blank">
				<?php esc_html_e( 'Read More About the Pro Version', 'yummy-bites' ); ?>
			</a>
		</div><!-- .panel-aside Theme Support -->
	<?php endif; ?>

	<!-- Knowledge base -->
	<div class="panel-aside">
		<h4><?php esc_html_e( 'Visit the Knowledge Base', 'yummy-bites' ); ?></h4>
		<p><?php esc_html_e( 'Need help with using the WordPress as quickly as possible? Visit our well-organized Knowledge Base!', 'yummy-bites' ); ?></p>
		<p><?php esc_html_e( 'Our Knowledge Base has step-by-step video and text tutorials, from installing the WordPress to working with themes and more.', 'yummy-bites' ); ?></p>

		<a class="button button-primary" href="<?php echo esc_url( 'https://wpdelicious.com/docs-category/' . YUMMY_BITES_THEME_TEXTDOMAIN . '/' ); ?>" title="<?php esc_attr_e( 'Visit the knowledge base', 'yummy-bites' ); ?>" target="_blank"><?php esc_html_e( 'Visit the Knowledge Base', 'yummy-bites' ); ?></a>
	</div><!-- .panel-aside knowledge base -->

</div><!-- .panel-right -->