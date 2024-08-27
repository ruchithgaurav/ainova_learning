<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
/**
 * The Blockskit Import hooks callback functionality of the plugin.
 *
 */
class Bk_Base_Install_Hooks {

    /**
     * Initialize the class and set its properties.
     *
     */
    public function __construct() {
        add_action( 'advanced_import_before_plugin_screen', array( $this, 'switch_base_theme' ) );
        add_action( 'after_switch_theme', array( $this, 'after_switch_theme' ));
        add_action( 'wp_ajax_install_base_theme_selection', array( $this, 'install_base_theme_selection' ));
        add_action( 'wp_ajax_clear_transient_on_cancel', array( $this, 'clear_transient_on_cancel' ));
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ), 10, 1 );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ), 10, 1 );
    }

    /**
     * Enqueue styles.
     *
     */
    public function enqueue_styles() {
    
        wp_enqueue_style( 'bk-base-install', plugin_dir_url( __FILE__ ) . 'assets/base-install.css',array( 'wp-admin' ), '1.0.0', 'all' );
    }

    /**
     * Enqueue scripts.
     *
     */
    public function enqueue_scripts() {

        wp_enqueue_script( 'bk-base-install', plugin_dir_url( __FILE__ ) . 'assets/base-install.js', array( 'jquery' ), '1.0.0', true );

        wp_localize_script(
            'bk-base-install',
            'install_theme',
            array(
                'ajax_url'  => admin_url( 'admin-ajax.php' ),
                'admin_url' => admin_url(),
                'is_base_installed' => bk_base_theme_installed() ? true : false,
                'is_base_active' => get_stylesheet() === 'blockskit-base' ? true : false,
                'nonce'     => wp_create_nonce( 'install_theme_nonce' ),
                'base_html' => '<div class="base-install-notice-outer">
                    <div class="base-install-notice-inner">
                        <div class="base-install-content"><h3>Blockskit Base</h3><p>We recommend to install Blockskit Base theme as all our demo works perfectly with this theme. You can still try our demo on any block theme but it might not look as you see on our demo. You can skip if you want to proceed without installing theme.</p></div>
                        <div class="base-install-btn">
                            <a class= "install-base-theme button button-primary">Install Blockskit Base</a>
                            <a class= "close-base-notice button">Skip</a>
                        </div>
                    </div>
                    </div>',
                'notice_html' => '<li>We recommend to install Blockskit Base theme as all our demo works perfectly with this theme. You can skip if you want to proceed without installing theme.</li><br><input type="checkbox" checked="true" id="installBase"><label> Install Blockskit Base</label>'
            )
        );
        wp_localize_script(
            'bk-base-install',
            'clear_state',
            array(
                'ajax_url'  => admin_url( 'admin-ajax.php' ),
                'nonce'     => wp_create_nonce( 'clear_transient' ),
            )
        );
    }

    /**
     * Check base theme install option.
     */
    public function install_base_theme_selection(){
        check_ajax_referer( 'install_theme_nonce', 'security' );

        if( $_POST['is_checked'] == 'true' ){
            delete_transient( 'skip_base_install' );
            return;
        }
        set_transient('skip_base_install', 'skipped', HOUR_IN_SECONDS);
    }

    /**
     * Clears base theme option transient.
     */
    public function clear_transient_on_cancel(){
        check_ajax_referer( 'clear_transient', 'security' );
        if( get_transient('skip_base_install') ){
            delete_transient( 'skip_base_install' );
        }
    }

    /**
     * Switches to base theme.
     */
    public function switch_base_theme(){
        if( get_transient('skip_base_install') ){
            return;
        }
        $base_theme = 'blockskit-base';
        if( get_stylesheet() === $base_theme ){
            return;
        }

        if( !bk_base_theme_installed() ){
            return;
        }
        
        switch_theme('blockskit-base');
        return;
    }

    /**
     * Redirects after base theme activation to demo import.
     */
    public function after_switch_theme () {
        if( get_stylesheet() == 'blockskit-base' ){
            wp_safe_redirect( admin_url( 'themes.php?page=advanced-import&browse=all' ) );
        }
    }
}

/**
 * Checks base theme installed.
 */
function bk_base_theme_installed(){
    $base_theme = 'blockskit-base';
    $all_themes = wp_get_themes();
    $installed_themes = array();
    foreach( $all_themes as $theme ){
        $theme_text_domain = esc_attr ( $theme->get('TextDomain') );
        $installed_themes[] = $theme_text_domain;
    }
    if( in_array( $base_theme, $installed_themes, true ) ){
        return true;
    }
    return false;
    
}

return new Bk_Base_Install_Hooks();