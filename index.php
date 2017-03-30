<?php
/*
Plugin Name: WPHackathon - Sponsors
Version: 1.0.0
Plugin URI: https://wphackathon.com
Description: Creates a Custom Post Type to manage the Sponsors participating in the WPHackathon
Author: WPHackathon
Author URI: https://wphackathon.com
*/

define( 'WPH_SPONSORS_PATH', dirname( __FILE__ ) );

$wph_textdomain = 'wphackathon-cpt-sponsors';

/* Custom Post Type - Sponsors */
include( WPH_SPONSORS_PATH . '/includes/cpt-sponsors.php' );

/* Custom Taxonomy Sponsors Sponsorships */
include( WPH_SPONSORS_PATH . '/includes/ct-sponsorships.php' );

/* Shortcode - Sponsors */
include( WPH_SPONSORS_PATH . '/includes/sc-sponsors.php' );

/* Shortcode - Sponsors Application */
include( WPH_SPONSORS_PATH . '/includes/sc-sponsors-application.php' );

/* Widget - Sponsors */
// include( WPH_SPONSORS_PATH . '/includes/widget-sponsors.php' );

?>
