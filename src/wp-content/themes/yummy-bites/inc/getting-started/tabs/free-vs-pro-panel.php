<?php
/**
 * Free Vs Pro Panel.
 *
 * @package Yummy Bites
 */
?>
<!-- Free Vs Pro panel -->
<div id="free-pro-panel" class="panel-left">
	<div class="panel-aside">               		
		<img src="<?php echo esc_url( get_template_directory_uri() . '/inc/getting-started/images/free-vs-pro.png' ); //@todo change respective images.?>" alt="<?php esc_attr_e( 'Free vs Pro', 'yummy-bites' ); ?>"/>
		<a class="button button-primary" href="<?php echo esc_url( 'https://wpdelicious.com/wordpress-themes/yummy-bites-pro/' ); ?>" title="<?php esc_attr_e( 'View Premium Version', 'yummy-bites' ); ?>" target="_blank">
            <?php esc_html_e( 'View Pro', 'yummy-bites' ); ?>
        </a>
	</div><!-- .panel-aside -->
</div>