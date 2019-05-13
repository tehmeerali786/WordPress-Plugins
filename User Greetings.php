<?php

    /* Plugin Name: User Greeting
      Description: Display a message to anyone whose username starts with "user"
     */


      add_action('admin_notices', 'show_notice');
      add_action('wp_login', 'create_user_log_entry', 10, 2);


      function create_user_log_entry($user_login, $user) {

          $login_args = array(
            'post_type'     => 'post',
            'post_title'    => 'Login By' . $user_login .'at' .Date('H:i:s m/d/Y'),
            'post_status'   => 'private',
            'post_category' => array(2),
            'post_author'   => 1,
          );

          $post_id = wp_insert_post($login_args);

      }


      function show_notice()
      {


        // Always use these two lines to capture details about the currently logged in user.
        global $current_user;
        get_currentuserinfo();

        // If you want to greet usernames that begins with a specific prefix like "user"
        echo "Hello ".$current_user->user_login;


      }





?>
