<?php

/*

  Plugin Name: SUProfile.php
  Description: Add User Profile in User Admin
  Version: 1.0
  Author: Tehmeer Ali Paryani

*/


add_action( 'show_user_profile', 'my_show_extra_profile_fields' );

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

<h3>Employee Information</h3>

<table class="form-table">

<tr>

<th><label for="jobtitle">Job Title</label></th>

<td>

<input type="text" name="jobtitle" id="jobtitle" value="<?php echo esc_attr( get_the_author_meta( 'jobtitle', $user->ID ) ); ?>" class="regular-text" /><br />

<span class="description">Please enter your title.</span>

</td>

</tr>

<tr>

<th><label for="jobtitle">Years of Experience</label></th>

<td>

<input type="text" name="yearsexperience" id="yearsexperience" value="<?php echo esc_attr( get_the_author_meta( 'yearsexperience', $user->ID ) ); ?>" class="regular-text" /><br />

<span class="description">Enter a number.</span>

</td>

</tr>

</table>

<?php }

function my_save_extra_profile_fields( $user_id ) {

if ( !current_user_can( 'edit_user', $user_id ) )

return false;

/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */

update_usermeta( $user_id, 'jobtitle', $_POST['jobtitle'] );

update_usermeta( $user_id, 'yearsexperience', $_POST['yearsexperience'] );

}
