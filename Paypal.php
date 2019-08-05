<?php
/*
Plugin Name: Get Secure Paypal Button By HWI
Plugin URI: http://www.hotwebideas.net
Description: Get the paypal code fo secure buttons. You simply pass the button ID.
Version: 1.0
Author: Bruce Chamoff of Hot Web Ideas
Author URI: http://www.hotwebideas.net
 */

add_filter('the_content',array('hotwebideas_paypal_button_code','get_paypal'));

class hotwebideas_paypal_button_code
{
	function paypal_button_code($id)
	{


		$paypal_code = ("
				<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">
				<input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
				<input type=\"hidden\" name=\"hosted_button_id\" value=\"$id\">
				<input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
				<img alt=\"\" border=\"0\" src=\"https://www.paypal.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
				</form>

		");

		return $paypal_code;

	}

	function get_paypal($content)
	{

		$content=ereg_replace('paypal_([A-Z0-9]+)',hotwebideas_paypal_button_code::paypal_button_code('\\1'),$content);
		return "$content";
	}

}


?>
