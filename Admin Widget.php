<?php

      /* Plugin Name: Admin Widget
        Description: Creates Admin Widget.
       */


        add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

        function my_custom_dashboard_widgets() {

            global $wp_meta_boxes;

            wp_add_dashboard_widget('custom_help_widget', 'Good morning', 'custom_dashboard_help');


        }

        function custom_dashboard_help() {

            global $current_user;
            $username = $current_user->user_login;

            echo 'Greetings, ' . $username . 'Today is ' . Date('m/d/Y');

        }


?>
