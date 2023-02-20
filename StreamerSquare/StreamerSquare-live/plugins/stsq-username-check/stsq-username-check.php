<?php

/**
 * Plugin Name: StSq Username Checker
 * Plugin URI: #
 * Description: Username blacklist.
 * Author: Mitch Canter
 * Version: 1.0
 *
 * TODO: Move Blacklist / Greylist Array To ACF Options Menu
 */

 /**
  * Username Administration Page.
  */

 if( function_exists('acf_add_options_page') ) {

 	acf_add_options_page(array(
 		'page_title' 	=> 'Username Settings',
 		'menu_title'	=> 'Username Settings',
 		'menu_slug' 	=> 'username-settings',
 		'capability'	=> 'edit_posts',
 		'redirect'		=> false
 	));


 }

/**
 * Username BLACKLIST function.
 */

function username_blacklist( $user_login, $user_email, $errors ) {

    $terms = get_field('blacklist', 'option');
    $blacklist = [];
    foreach ($terms as $term){
      array_push($blacklist, $term['word']);
    }

    foreach($blacklist as $string){
      if(strpos($user_login, $string) !== false){
        $errors->add( 'blacklist_username', '<strong>ERROR</strong>: This username is not allowed. Please choose a new username to complete registration.' );
        break;
      }
    }

}
add_action( 'register_post', 'username_blacklist', 10, 3 );
add_action( 'woocommerce_register_post', 'username_blacklist', 10, 3 );

/**
 * Username GREYLIST function.
 */
function username_greylist( $user_login, $user_email, $errors ) {

    $terms = get_field('greylist', 'option');
    $greylist = [];
    foreach ($terms as $term){
      array_push($greylist, $term['word']);
    }

    foreach($greylist as $string){
      if(strpos($user_login, $string) !== false){
        $message = 'The follow user account has been created, and is subject to approval: '.$user_login.' with the email address: '. $user_email;
        wp_mail( 'admin@streamersquare.com', 'Suspiscious Username Detected', $message );
      }
    }
}
add_action( 'register_post', 'username_greylist', 10, 3 );
add_action( 'woocommerce_register_post', 'username_greylist', 10, 3 );
