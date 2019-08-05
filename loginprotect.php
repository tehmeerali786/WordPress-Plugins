<?php

        /**
        *
        * Plugin Name: Login Protect
        * Description: Requires a special code in the URL to login to the admin page. It redirects user to the home.
        * Version: 1.0
        * Author: Tehmeer Ali Paryani.
        *
        *
        **/


        add_action('login_form_login', 'ti_login_protect');

        function ti_login_protect() {

          if($_SERVER['SCRIPT_NAME'] == '/wordpress2/wp-login.php')
          {

            $min = Date('i');

            if(!isset($_GET['tibe' . $min]))

            {

              // header("Location:http://localhost/wordpress2/");
            }

          }


        }





 ?>
