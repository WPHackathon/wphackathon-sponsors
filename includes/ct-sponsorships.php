<?php

// Register Custom Taxonomy Sponsorship
function wphackathon_ct_sponsorship() {

	$labels = array(
		'name'                       => _x( 'Sponsorships', 'Taxonomy General Name', $wph_ct_textdomain ),
		'singular_name'              => _x( 'Sponsorship', 'Taxonomy Singular Name', $wph_ct_textdomain ),
		'menu_name'                  => __( 'Sponsorships', $wph_ct_textdomain ),
		'all_items'                  => __( 'All Sponsorships', $wph_ct_textdomain ),
		'parent_item'                => __( 'Parent Sponsorship', $wph_ct_textdomain ),
		'parent_item_colon'          => __( 'Parent Sponsorship:', $wph_ct_textdomain ),
		'new_item_name'              => __( 'New Sponsorship Name', $wph_ct_textdomain ),
		'add_new_item'               => __( 'Add New Sponsorship', $wph_ct_textdomain ),
		'edit_item'                  => __( 'Edit Sponsorship', $wph_ct_textdomain ),
		'update_item'                => __( 'Update Sponsorship', $wph_ct_textdomain ),
		'view_item'                  => __( 'View Sponsorship', $wph_ct_textdomain ),
		'separate_items_with_commas' => __( 'Separate Sponsorships with commas', $wph_ct_textdomain ),
		'add_or_remove_items'        => __( 'Add or remove Sponsorships', $wph_ct_textdomain ),
		'choose_from_most_used'      => __( 'Choose from the most used', $wph_ct_textdomain ),
		'popular_items'              => __( 'Popular Sponsorships', $wph_ct_textdomain ),
		'search_items'               => __( 'Search Sponsorships', $wph_ct_textdomain ),
		'not_found'                  => __( 'Not Found', $wph_ct_textdomain ),
		'no_terms'                   => __( 'No Sponsorships', $wph_ct_textdomain ),
		'items_list'                 => __( 'Sponsorships list', $wph_ct_textdomain ),
		'items_list_navigation'      => __( 'Sponsorships list navigation', $wph_ct_textdomain ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'sponsorship', array( 'sponsor' ), $args );

}
add_action( 'init', 'wphackathon_ct_sponsorship', 0 );
