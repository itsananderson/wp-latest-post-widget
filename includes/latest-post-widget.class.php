<?php

class Latest_Post_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'latest_post_widget',
            __( 'Latest Post' ),
            array( 'description' => __( 'Periodically update and display the latest post' ) )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        echo $args['before_title'] . 'Latest Post' . $args['after_title'];
        echo '<ul><li class="latest-post-widget-post-title"><a></a></li>';
        echo $args['after_widget'];
    }

    public function form( $instance ) {

    }

    public function update ( $new_instance, $old_instance ) {

    }

    public static function register() {
        register_widget( 'Latest_Post_Widget' );
    }
}

add_action( 'widgets_init', array( 'Latest_Post_Widget', 'register' ) );