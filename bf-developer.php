<?php
/**
 * Plugin Name: BRAINfork.net Developer Tools
 * Plugin URI: http://dev.BRAINfork.net
 * Description: A suite of tools used for development of WordPress code. Compiled by @brainfork
 * Version: 0.1
 * Author: Kaleb J. Barker
 * Author URI: http://BRAINfork.net
 * Text Domain: bf-dev
 * License: GPL2
 */

if ( !function_exists( 'write_log' ) ) {
    function write_log ( $log, $message = NULL)  {
        if ( true === WP_DEBUG ) {
        	if ( $message ) {
        		error_log( $message );
        	}
            if ( is_array( $log ) || is_object( $log ) ) {
                error_log( print_r( $log, true ) );
            } else {
                error_log( $log );
            }
        }
    }
}