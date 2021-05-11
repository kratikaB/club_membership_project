<?php
/*
Plugin Name: PMPro Customizations
Plugin URI: https://www.paidmembershipspro.com/wp/pmpro-customizations/
Description: Customizations for my Paid Memberships Pro Setup
Version: .1
Author: Paid Memberships Pro
Author URI: https://www.paidmembershipspro.com
*/
 
//Now start placing your customization code below this line


function my_pmprorh_init( ) {
    // Don't break if Register Helper is not loaded.
    if( ! function_exists ( 'pmprorh_add_registration_field' ) ) {
        return false;
    }

    //define the fields
    $fields = array();

    $fields[] = new PMProRH_Field (
        'company',
        'text',
        array(
            'label' => 'Regular',
            'profile' => true,
    ));

    // Add the fields into a new checkout_boxes are of the checkout page.
    foreach ( $fields as $field ) {
        pmprorh_add_registration_field(
            'checkout_boxes', // location on checkout page
            $field            // PMProRH_Field object
        );
    }
}
// add_action( 'init', 'my_pmprorh_init' );
