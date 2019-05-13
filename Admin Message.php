<?php

      /*

        Plugin Name: Admin Message
        Description: Displays message to all admins
        Version: 1.0
        Author: Tehmeer Ali Paryani

       */

       add_action('all_admin_notices', 'top_message');
       add_shortcode('date-and-time', 'show_date_and_time');

       function show_date_and_time($atts) {

         $a = shortcode_atts( array(

            'color' => '#FF0000',
            'bgcolor' => '#CCC',
          ), $atts );

          $color = $a['color'];
          $bgcolor = $a['bgcolor'];

          return  '<span style="background-color:' . $bgcolor .'; color:' . $color. '">' .  date('m/d/Y H:i:s') . '</span>';
       }

       function top_message() {

          if (strpos($_SERVER['REQUEST_URI'], 'post-new')  > 0 || strpos($_SERVER['REQUEST_URI'], 'post.php') >0) {

                echo("

                        <div style='background: #FFF; width: 95%; font-weight:bold; border: 2px solid #AAA; border-radius:7px; padding: 20px; margin: 0 auto 0 auto ; margin-top:10px;'>


                          <div style='margin-bottom:20px; '>
                            Welcome to this WordPress Tutorial.
                          </div>


                        </div>

                ");

          }

       }

?>
