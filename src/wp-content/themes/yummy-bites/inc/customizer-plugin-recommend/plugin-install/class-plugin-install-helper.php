<?php
/**
 * Yummy Bites Plugin install helper.
 *
 * @package Yummy Bites
 */

/**
 * Class Yummy_Bites_Plugin_Install_Helper
 */
class Yummy_Bites_Plugin_Install_Helper {
	/**
	 * Instance of class.
	 *
	 * @var bool $instance instance variable.
	 */
	private static $instance;

	/**
	 * Check if instance already exists.
	 *
	 * @return Yummy_Bites_Plugin_Install_Helper
	 */
	public static function instance() {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Yummy_Bites_Plugin_Install_Helper ) ) {
			self::$instance = new Yummy_Bites_Plugin_Install_Helper;
		}

		return self::$instance;
	}

	/**
	 * Generate action button html.
	 *
	 * @param string $slug plugin slug.
	 *
	 * @return string
	 */
	public function get_button_html( $slug ) {
		$button = '';
		$state  = $this->check_plugin_state( $slug );
		if ( ! empty( $slug ) ) {

			$button .= '<div class=" plugin-card-' . esc_attr( $slug ) . '" style="padding: 8px 0 5px;">';

			switch ( $state ) {
				case 'install':
					$nonce  = wp_nonce_url(
						add_query_arg(
							array(
								'action' => 'install-plugin',
								'from'   => 'import',
								'plugin' => $slug,
							),
							network_admin_url( 'update.php' )
						),
						'install-plugin_' . $slug
					);
					$button .= '<a data-slug="' . esc_attr( $slug ) . '" class="install-now install-plugin button  " href="' . esc_url( $nonce ) . '" data-name="' . esc_attr( $slug ) . '" aria-label="' . sprintf( esc_attr__( 'Install %s', 'yummy-bites' ), $slug ) . '">' . __( 'Install and activate', 'yummy-bites' ) . '</a>';
					break;

				case 'activate':					
					$plugin_link_suffix = $slug . '/' . $slug . '.php';
					
					$nonce = add_query_arg(
						array(
							'action'        => 'activate',
							'plugin'        => rawurlencode( $plugin_link_suffix ),
							'plugin_status' => 'all',
							'paged'         => '1',
							'_wpnonce'      => wp_create_nonce( 'activate-plugin_' . $plugin_link_suffix ),
						), network_admin_url( 'plugins.php' )
					);

					$button .= '<a data-slug="' . esc_attr( $slug ) . '" class="activate button button-primary" href="' . esc_url( $nonce ) . '" aria-label="' . sprintf( esc_attr__( 'Activate %s', 'yummy-bites' ), $slug ). '">' . __( 'Activate', 'yummy-bites' ) . '</a>';
					break;
			}// End switch().
			$button .= '</div>';
		}// End if().

		return $button;
	}

	/**
	 * Check plugin state.
	 *
	 * @param string $slug plugin slug.
	 *
	 * @return bool
	 */
	private function check_plugin_state( $slug ) {
		if ( file_exists( ABSPATH . 'wp-content/plugins/' . $slug . '/' . $slug . '.php' ) || file_exists( ABSPATH . 'wp-content/plugins/' . $slug . '/index.php' ) ) {
			$needs = ( is_plugin_active( $slug . '/' . $slug . '.php' ) || is_plugin_active( $slug . '/index.php' ) ) ? 'deactivate' : 'activate';
			return $needs;
		} else {
			return 'install';
		}
	}

	/**
	 * Enqueue Function.
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( 'plugin-install' );
		wp_enqueue_script( 'updates' );
		wp_enqueue_script( 'yummy-bites-plugin-install-helper', get_template_directory_uri() . '/inc/customizer-plugin-recommend/plugin-install/js/plugin-install.js', array( 'jquery' ), YUMMY_BITES_THEME_VERSION, true );
		wp_localize_script(
			'yummy-bites-plugin-install-helper', 'plugin_helper',
			array(
				'activating' => esc_html__( 'Activating ', 'yummy-bites' ),
			)
		);
	}
}
