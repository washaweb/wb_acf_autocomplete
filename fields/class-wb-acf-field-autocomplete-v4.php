<?php

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

// check if class already exists
if( !class_exists('wb_acf_field_autocomplete') ) :


class wb_acf_field_autocomplete {
	
	
	function __construct()
	{
		//warn plugin incompatibility
		add_action( 'admin_notices', array($this, 'wb_acf_field_not_compatible') );
	}

	function wb_acf_field_not_compatible() {
    $class = 'notice notice-error';
    $message = __( 'ERROR, you current version of ACF is not compatible with WB ACF Autocomplete plugin, please update your ACF to version 5.', 'wb-acf-autocomplete' );
 
    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
	}


}


// initialize
new wb_acf_field_autocomplete();

// class_exists check
endif;

?>