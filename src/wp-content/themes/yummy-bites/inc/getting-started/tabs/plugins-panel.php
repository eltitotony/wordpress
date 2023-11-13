<?php
/**
 * Help Panel.
 *
 * @package Yummy Bites
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left visible">
	<h4><?php esc_html_e( 'Recommended Plugins', 'yummy-bites' ); ?></h4>

	<p><?php printf( esc_html__( 'Below is a list of recommended plugins to install that will help you get the most out of %1$s. Although each plugin is optional, it is recommended that you at least install the Delicious Recipes, BlossomThemes Email Newsletter & Smash Balloon Social Photo Feed to create a website similar to the %1$s demo.', 'yummy-bites' ), YUMMY_BITES_THEME_NAME ); ?></p>

	<hr/>

	<?php 
	$free_plugins = array(
		'delicious-recipes' => array(
			'plugin_name'        => __( 'Delicious Recipes','yummy-bites' ),
			'slug'               => 'delicious-recipes',
			'filename'           => 'delicious-recipes/delicious-recipes.php',
			'settings-link'      => admin_url( 'admin.php?page=delicious_recipes_global_settings' ),
			'settings-link-text' => __( 'Settings','yummy-bites' ),
		),  
		'blossomthemes-email-newsletter' => array(
			'plugin_name'        => __( 'BlossomThemes Email Newsletter','yummy-bites' ),
			'slug'               => 'blossomthemes-email-newsletter',
			'filename'           => 'blossomthemes-email-newsletter.php',
			'settings-link'      => admin_url( 'themes.php?page=class-blossomthemes-email-newsletter-admin.php' ),
			'settings-link-text' => __( 'Settings','yummy-bites' ),
		),         
		'instagram-feed' => array(
			'plugin_name'        => __( 'BlossomThemes Social Feed','yummy-bites' ),
            'slug'               => 'instagram-feed',
            'filename'           => 'instagram-feed/instagram-feed.php',
            'settings-link'      => admin_url( 'themes.php?page=class-instagram-feed-admin.php' ),
            'settings-link-text' => __( 'Settings','yummy-bites' ),
		),                 
		'regenerate-thumbnails' => array(
			'plugin_name'        => __( 'Regenerate Thumbnails','yummy-bites' ),
            'slug'               => 'regenerate-thumbnails',
            'filename'           => 'regenerate-thumbnails/regenerate-thumbnails.php',
            'settings-link'      => admin_url( 'tools.php?page=regenerate-thumbnails#/' ),
            'settings-link-text' => __( 'Settings','yummy-bites' ),
		),    
        'demo-importer-plus' => array(
            'plugin_name'        => __( 'Demo Importer Plus','yummy-bites' ),
            'slug'               => 'demo-importer-plus',
            'filename'           => 'demo-importer-plus/demo-importer-plus.php',
            'settings-link'      => admin_url( 'themes.php?page=demo-importer-plus' ),
            'settings-link-text' => __( 'Settings','yummy-bites' ),
		),        
	);

	if( $free_plugins ){ ?>
		<h4 class="recomplug-title"><?php esc_html_e( 'Free Plugins', 'yummy-bites' ); ?></h4>
		<p><?php esc_html_e( 'These Free Plugins might be handy for you.', 'yummy-bites' ); ?></p>
		<div class="recomended-plugin-wrap">
    		<?php
    		foreach( $free_plugins as $slug => $plugin ) {
    			$info     = yummy_bites_call_plugin_api( $plugin['slug'] );
    			$icon_url = yummy_bites_check_for_icon( $info->icons );
				$plugin_active_status = '';
                if ( is_plugin_active( $plugin['filename'] ) ) {
                    $plugin_active_status = ' active';
                } ?>    
    			<div class="recom-plugin-wrap">
    				<div class="plugin-img-wrap">
    					<img src="<?php echo esc_url( $icon_url ); ?>" />
    					<div class="version-author-info">
    						<span class="version"><?php printf( esc_html__( 'Version %s', 'yummy-bites' ), $info->version ); ?></span>
    						<span class="seperator">|</span>
    						<span class="author"><?php echo esc_html( strip_tags( $info->author ) ); ?></span>
    					</div>
    				</div>
    				<div class="plugin-title-install clearfix">
    					<span class="title" title="<?php echo esc_attr( $info->name ); ?>">
    						<?php echo esc_html( $info->name ); ?>	
    					</span>
						<div class="button-wrap <?php echo esc_attr( $plugin_active_status ); ?>" id="gs-<?php echo esc_attr( $slug ); ?>" data-slug="gs-<?php echo esc_attr( $slug ); ?>">
                           	<div class="gs-recommended-plugin">
                            <?php 
                                if ( ! is_plugin_active( $plugin['filename'] ) ) {
                                    if ( file_exists( WP_CONTENT_DIR . '/plugins/' . $plugin['filename'] ) ) {
                                        //activate if there is file on the wp-content/plugins ?>
                                        <a class="activate-now button button-primary " data-slug="<?php echo esc_attr( $slug ); ?>" href="#" aria-label="<?php echo esc_attr( $plugin['plugin_name'] ); ?>" data-init="<?php echo esc_attr( $plugin['filename'] ); ?>" data-settings-link="<?php if( isset( $plugin['settings-link'] ) ) echo esc_url( $plugin['settings-link'] ); ?>" data-settings-link-text="<?php if( isset( $plugin['settings-link-text'] ) ) echo esc_attr( $plugin['settings-link-text'] ); ?>">
                                                <?php echo esc_html( 'Activate','the-schema' ); ?>        
                                            </a>
                                    <?php }else{ //install if there are not any plugins which are listed on wp-content/plugins ?>   
                                        <a class="install-now button " data-slug="<?php echo esc_attr( $slug ); ?>" href="#" aria-label="<?php echo esc_attr( $plugin['plugin_name'] ); ?>" data-init="<?php echo esc_attr( $plugin['filename'] ); ?>" data-settings-link="<?php if( isset( $plugin['settings-link'] ) ) echo esc_url( $plugin['settings-link'] ); ?>" data-settings-link-text="<?php if( isset( $plugin['settings-link-text'] ) ) echo esc_attr( $plugin['settings-link-text'] ); ?>">
                                                <?php echo esc_html( 'Install and Activate','the-schema' ); ?>        
                                            </a>
                                    <?php }
                                }else{ ?>
									<a href="#" class="deactivate-now button" data-init="<?php echo esc_attr( $plugin['filename'] ); ?>" aria-label="<?php echo esc_attr( $plugin['plugin_name'] ); ?>" data-settings-link="<?php if( isset( $plugin['settings-link'] ) ) echo esc_url( $plugin['settings-link'] ); ?>" data-settings-link-text="<?php if( isset( $plugin['settings-link-text'] ) ) echo esc_attr( $plugin['settings-link-text'] ); ?>">
										<?php echo esc_html( 'Deactivate','the-schema' ); ?>
									</a>
									<?php
									if ( isset( $plugin['settings-link'] ) ) { ?>
										<a class="gs-recommended-plugin-links button" data-slug="<?php echo esc_attr( $slug ); ?>" href="<?php if( isset( $plugin['settings-link'] ) ) echo esc_url( $plugin['settings-link'] ); ?>"><?php if( isset( $plugin['settings-link-text'] ) ) echo esc_attr( $plugin['settings-link-text'] ); ?></a>  
									<?php } ?>
                                <?php }
                            ?>
                           	</div>
                        </div>
    				</div>
    			</div>
    			<?php
    		} 
            ?>
		</div>
	<?php
	} 
?>
</div><!-- .panel-left -->