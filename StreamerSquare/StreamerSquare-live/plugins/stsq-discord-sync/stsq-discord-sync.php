<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
 * Plugin Name: StreamerSquare Discord Sync
 * Description: Sync up for Discord
 * Plugin URI: https://streamersquare.com
 * Version: 1.0
 * Author: Mitch Canter
 * Author URI: https://mitchcanter.me
 * Text Domain: stsq-discord-sync
 */

 add_action( 'transition_post_status', 'solarstream_bot_new_post', 10, 3 );
 add_action( 'transition_post_status', 'solarstream_bot_new_course', 10, 3 );
 add_action( 'transition_post_status', 'solarstream_bot_new_event', 10, 3 );

 function solarstream_bot_new_post( $new, $old, $post ) {
     if ( ( $new == 'publish' ) && ( $old != 'publish' ) && ( $post->post_type == 'post' ) ) {
 					$endpoint = 'https://solarstream-bot.onrender.com/new_post';

 					$body = $post;

 					$body = wp_json_encode( $body );

 					$options = [
 						'body'        => $body,
 						'headers'     => [
 							'Content-Type' => 'application/json',
 						],
 						'timeout'     => 60,
 						'blocking'    => true,
 						'sslverify'   => false,
 					];
 			wp_remote_post( $endpoint, $options );

 	} else {
 		return;
 	}
 }

 function solarstream_bot_new_course( $new, $old, $post ) {
     if ( ( $new == 'publish' ) && ( $old != 'publish' ) && ( $post->post_type == 'courses' ) ) {
 					$endpoint = 'https://solarstream-bot.onrender.com/new_course';

 					$body = $post;

 					$body = wp_json_encode( $body );

 					$options = [
 						'body'        => $body,
 						'headers'     => [
 							'Content-Type' => 'application/json',
 						],
 						'timeout'     => 60,
 						'blocking'    => true,
 						'sslverify'   => false,
 					];
 			wp_remote_post( $endpoint, $options );

 	} else {
 		return;
 	}
 }

 function solarstream_bot_new_event( $new, $old, $post ) {
     if ( ( $new == 'publish' ) && ( $old != 'publish' ) && ( $post->post_type == 'tribe_events' ) ) {
 					$endpoint = 'https://solarstream-bot.onrender.com/new_event';

 					$body = $post;

 					$body = wp_json_encode( $body );

 					$options = [
 						'body'        => $body,
 						'headers'     => [
 							'Content-Type' => 'application/json',
 						],
 						'timeout'     => 60,
 						'blocking'    => true,
 						'sslverify'   => false,
 					];
 			wp_remote_post( $endpoint, $options );

 	} else {
 		return;
 	}
 }
