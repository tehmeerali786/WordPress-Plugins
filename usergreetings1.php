<?php

  /*
   * Plugin Name: User Greeting1
   * Description: Display message to anyone whose user name starts with "user"
   */

   add_action('admin_notices', 'show_notices');

   function show_notices()

   {

     global $current_user;
     get_currentuserinfo();

     if(substr($current_user->user_login,0,4) == "user")
       {

     echo "Hello, " . $current_user->user_login;

     }
   }



?>
