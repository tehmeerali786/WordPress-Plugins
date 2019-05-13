<?php

      /*

        Plugin Name: Admin Footer
        Description: Change content on Admin Footer.

      */

      add_action('admin_footer_text', 'change_footer');

      function change_footer()

      {

          echo("

              <p>Thank you for learning WordPress Plugin Tutorial

                <a href='http://www.facebook.com'>
                <img src='' border='0'/>
                </a>

              </p>


          ");



      }






?>
