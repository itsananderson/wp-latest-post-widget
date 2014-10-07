<?php
/**
 * Plugin Name: Latest Post Widget
 * Description: Periodically load the latest post as a sidebar widget
 * Author: Will Anderson
 * Author URI: http://willi.am/
 * Version: 0.1
 */

require_once( 'includes/latest-post-widget.class.php' );

class Latest_Post_Widget_Plugin {

    const VERSION = '0.1';

    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'queue_scripts'));
    }

    public function queue_scripts() {
        wp_enqueue_script('latest-post-widget', plugins_url( 'js/latest-post-widget.js', __FILE__ ), array( 'wp-api', 'jquery' ), self::VERSION);
    }
}

new Latest_Post_Widget_Plugin();