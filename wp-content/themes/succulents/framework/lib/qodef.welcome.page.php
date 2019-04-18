<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'SucculentsQodefWelcomePage' ) ) {
	class SucculentsQodefWelcomePage {
		
		/**
		 * Singleton class
		 */
		private static $instance;
		
		/**
		 * Get the instance of SucculentsQodefWelcomePage
		 *
		 * @return self
		 */
		public static function getInstance() {
			if ( ! ( self::$instance instanceof self ) ) {
				self::$instance = new self();
			}
			
			return self::$instance;
		}
		
		/**
		 * Cloning disabled
		 */
		private function __clone() {
		}
		
		/**
		 * Serialization disabled
		 */
		private function __sleep() {
		}
		
		/**
		 * De-serialization disabled
		 */
		private function __wakeup() {
		}
		
		/**
		 * Constructor
		 */
		private function __construct() {
			
			// Theme activation hook
			add_action( 'after_switch_theme', array( $this, 'initActivationHook' ) );
			
			// Welcome page redirect on theme activation
			add_action( 'admin_init', array( $this, 'welcomePageRedirect' ) );
			
			// Add welcome page into theme options
			add_action( 'admin_menu', array( $this, 'addWelcomePage' ), 12 );
			
			//Enqueue theme welcome page scripts
			add_action( 'succulents_qodef_admin_scripts_init', array( $this, 'enqueueStyles' ) );
		}
		
		/**
		 * Init hooks on theme activation
		 */
		function initActivationHook() {
			
			if ( ! is_network_admin() ) {
				set_transient( '_succulents_qodef_welcome_page_redirect', 1, 30 );
			}
		}
		
		/**
		 * Redirect to welcome page on theme activation
		 */
		function welcomePageRedirect() {
			
			// If no activation redirect, bail
			if ( ! get_transient( '_succulents_qodef_welcome_page_redirect' ) ) {
				return;
			}
			
			// Delete the redirect transient
			delete_transient( '_succulents_qodef_welcome_page_redirect' );
			
			// If activating from network, or bulk, bail
			if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
				return;
			}
			
			// Redirect to welcome page
			wp_safe_redirect( add_query_arg( array( 'page' => 'succulents_qodef_welcome_page' ), esc_url( admin_url( 'themes.php' ) ) ) );
			exit;
		}
		
		/**
		 * Add welcome page
		 */
		function addWelcomePage() {
			
			add_theme_page(
				esc_html__( 'About', 'succulents' ),
				esc_html__( 'About', 'succulents' ),
				current_user_can( 'edit_theme_options' ),
				'succulents_qodef_welcome_page',
				array( $this, 'welcomePageContent' )
			);
			
			remove_submenu_page( 'themes.php', 'succulents_qodef_welcome_page' );
		}
		
		/**
		 * Print welcome page content
		 */
		function welcomePageContent() {
			$qodef_theme              = wp_get_theme();
			$qodef_theme_name         = esc_html( $qodef_theme->get( 'Name' ) );
			$qodef_theme_description  = esc_html( $qodef_theme->get( 'Description' ) );
			$qodef_theme_version      = $qodef_theme->get( 'Version' );
			$qodef_theme_screenshot   = file_exists( QODE_ROOT_DIR . '/screenshot.png' ) ? QODE_ROOT . '/screenshot.png' : QODE_ROOT . '/screenshot.jpg';
			$qodef_welcome_page_class = 'qodef-welcome-page-' . QODE_PROFILE_SLUG;
			?>
			<div class="wrap about-wrap qodef-welcome-page <?php echo esc_attr( $qodef_welcome_page_class ); ?>">
				<div class="qodef-welcome-page-content">
					<div class="qodef-welcome-page-logo">
						<img src="<?php echo esc_url( succulents_qodef_get_skin_uri() . '/assets/img/logo.png' ); ?>" alt="<?php esc_html_e( 'Profile Logo', 'succulents' ); ?>" />
					</div>
					<h1 class="qodef-welcome-page-title">
						<?php echo sprintf( esc_html__( 'Welcome to %s', 'succulents' ), $qodef_theme_name ); ?>
						<small><?php echo esc_html( $qodef_theme_version ) ?></small>
					</h1>
					<div class="about-text qodef-welcome-page-text">
						<?php echo sprintf( esc_html__( 'Thank you for installing %s - %s! Everything in %s is streamlined to make your website building experience as simple and fun as possible. We hope you love using it to make a spectacular website.', 'succulents' ),
							$qodef_theme_name,
							$qodef_theme_description,
							$qodef_theme_name
						); ?>
						<img src="<?php echo esc_url( $qodef_theme_screenshot ); ?>" alt="<?php esc_html_e( 'Theme Screenshot', 'succulents' ); ?>" />
						
						<h4><?php esc_html_e( 'Useful Links:', 'succulents' ); ?></h4>
						<ul class="qodef-welcome-page-links">
							<li>
								<a href="<?php echo sprintf('https://%s.ticksy.com/', QODE_PROFILE_SLUG ); ?>" target="_blank"><?php esc_html_e( 'Support Forum', 'succulents' ); ?></a>
							</li>
							<li>
								<a href="<?php echo sprintf('http://succulents.%s-themes.com/documentation/', QODE_PROFILE_SLUG ); ?>" target="_blank"><?php esc_html_e( 'Theme Documentation', 'succulents' ); ?></a>
							</li>
							<li>
								<a href="<?php echo sprintf('https://themeforest.net/user/%s-themes/portfolio/', QODE_PROFILE_SLUG ); ?>" target="_blank"><?php esc_html_e( 'All Our Themes', 'succulents' ); ?></a>
							</li>
							<li>
								<a href="<?php echo add_query_arg( array( 'page' => 'install-required-plugins&plugin_status=install' ), esc_url( admin_url( 'themes.php' ) ) ); ?>"><?php esc_html_e( 'Install Required Plugins', 'succulents' ); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php
		}
		
		/**
		 * Enqueue theme welcome page scripts
		 */
		function enqueueStyles() {
			wp_enqueue_style( 'succulents_qodef_welcome_page_style', QODE_FRAMEWORK_ADMIN_ASSETS_ROOT . '/css/qodef-welcome-page.css' );
		}
	}
}

SucculentsQodefWelcomePage::getInstance();