<?php

// Shortcode to show the form for Sponsors Application
function wphackathon_sc_sponsors_application( $atts ) {

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) ) {

    	$name               = $_POST['wph-sponsor-name'];
    	$firstname          = $_POST['wph-sponsor-first-name'];
    	$secondname         = $_POST['wph-sponsor-second-name'];
    	$email              = $_POST['wph-sponsor-email'];
    	$phone              = $_POST['wph-sponsor-phone'];
    	$website            = $_POST['wph-sponsor-website'];
    	$vat                = $_POST['wph-sponsor-vat-number'];
    	$description        = $_POST['wph-sponsor-description'];
    	$sponsordescription = $_POST['wph-sponsor-sponsorship-description'];
      $sponsorship        = $_POST['cat'];

      $street1     = $_POST['wph-sponsor-street-address1'];
      $street2     = $_POST['wph-sponsor-street-address2'];
      $city        = $_POST['wph-sponsor-city'];
      $state       = $_POST['wph-sponsor-state'];
      $zipcode     = $_POST['wph-sponsor-zip-code'];
      $country     = $_POST['wph-sponsor-country'];

    	// Add the content of the form to $post as an array
    	$post = array(
    		'post_title'	  => $name,
    		'post_content'	=> $description,
    		'post_status'	  => 'draft',
    		'post_type'	    => 'sponsor',
        'meta_input'    => array(
          'sponsor_first_name'  => $firstname,
          'sponsor_second_name' => $secondname,
          'sponsor_email'       => $email,
          'sponsor_phone'       => $phone,
          'sponsor_website'     => $website,
          'sponsor_vat_number'  => $vat,
          'sponsor_description' => $sponsordescription,
          'sponsor_street1'     => $street1,
          'sponsor_street2'     => $street2,
          'sponsor_city'        => $city,
          'sponsor_state'       => $state,
          'sponsor_zip_code'    => $zipcode,
          'sponsor_country'     => $country,
        ),
    	);

    	$post_id = wp_insert_post( $post );

      wp_set_post_terms( $post_id, $_POST['cat'], 'sponsorship', false );

    } // end IF


  ?>


  <!-- New Sponsor Form -->

  <div id="postbox">

    <form id="new_post" name="new_post" method="post" action="">

    <h3><?php _e( 'Contact Information', $wph_textdomain ); ?></h3>

    <p>
      <label for="wph-sponsor-name"><?php _e( 'Company Full Name (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-name" value="" name="wph-sponsor-name" tabindex="2" size="30" / required>
    </p>

    <p>
      <label for="wph-sponsor-first-name"><?php _e( 'First Name (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-first-name" value="" name="wph-sponsor-first-name" tabindex="3" size="20" / required>
    </p>

    <p>
      <label for="wph-sponsor-second-name"><?php _e( 'Second Name (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-second-name" value="" name="wph-sponsor-second-name" tabindex="4" size="20" / required>
    </p>

    <p>
      <label for="wph-sponsor-email"><?php _e( 'Email (required)', $wph_textdomain); ?></label><br />
      <input type="email" id="wph-sponsor-email" name="wph-sponsor-email" value="" tabindex="5" size="20" required>
    </p>

    <p>
      <label for="wph-sponsor-phone"><?php _e( 'Phone Number (required)', $wph_textdomain); ?></label><br />
      <input type="text" id="wph-sponsor-phone" name="wph-sponsor-phone" value="" tabindex="6" size="20" required>
    </p>

    <p>
      <label for="wph-sponsor-website"><?php _e( 'Website (required)', $wph_textdomain); ?></label><br />
      <input type="text" id="wph-sponsor-website" name="wph-sponsor-website" value="" tabindex="7" size="20" required>
    </p>

    <p>
      <label for="wph-sponsor-vat-number"><?php _e( 'VAT Number (required)', $wph_textdomain); ?></label><br />
      <input type="text" id="wph-sponsor-vat-number" name="wph-sponsor-vat-number" value="" tabindex="8" size="20" required>
    </p>

    <p>
      <label for="wph-sponsor-description"><?php _e( 'Describe your Company (required)', $wph_textdomain ); ?></label><br />
      <textarea id="wph-sponsor-description" name="wph-sponsor-description" tabindex="9" cols="50" rows="6"></textarea>
    </p>

    <h3><?php _e( 'Direction', $wph_textdomain ); ?></h3>

    <p>
      <label for="wph-sponsor-street-address1"><?php _e( 'Address 1 (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-street-address1" name="wph-sponsor-street-address1" value="" tabindex="10" size="50" required>
    </p>

    <p>
      <label for="wph-sponsor-street-address2"><?php _e( 'Address 2', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-street-address2" name="wph-sponsor-street-address2" value="" tabindex="11" size="50">
    </p>

    <p>
      <label for="wph-sponsor-city"><?php _e( 'City (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-city" name="wph-sponsor-city" value="" tabindex="12" size="30" required>
    </p>

    <p>
      <label for="wph-sponsor-state"><?php _e( 'State (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-state" name="wph-sponsor-state" value="" tabindex="13" size="30" required>
    </p>

    <p>
      <label for="wph-sponsor-zip-code"><?php _e( 'ZIP Code (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-zip-code" name="wph-sponsor-zip-code" value="" tabindex="14" size="30" required>
    </p>

    <p>
      <label for="wph-sponsor-country"><?php _e( 'Country (required)', $wph_textdomain ); ?></label><br />
      <input type="text" id="wph-sponsor-country" name="wph-sponsor-country" value="" tabindex="15" size="30" required>
    </p>

    <h3><?php _e( 'Sponsorship', $wph_textdomain ); ?></h3>

    <p>
      <label><?php _e( 'With what would you like to Sponsor? (required)', $wph_textdomain ); ?></label><br />
        <?php

        $select_cats = wp_dropdown_categories( array( 'echo' => 0, 'taxonomy' => 'sponsorship', 'hide_empty' => 0 ) );
        $select_cats = str_replace( "name='cat' id=", "name='cat[]' id=", $select_cats );
        echo $select_cats;

        ?>

    </p>

    <p>
      <label for="wph-sponsor-sponsorship-description"><?php _e( 'Describe the Sponsorship (required)', $wph_textdomain ); ?></label><br />
      <textarea id="wph-sponsor-sponsorship-description" name="wph-sponsor-sponsorship-description" tabindex="17" cols="50" rows="6"></textarea>
    </p>

    <p><input type="submit" value="<?php _e( 'Sponsor', $wph_textdomain ); ?>" tabindex="18" id="submit" name="submit" /></p>

    <input type="hidden" name="action" value="new_sponsor" />

    </form>

  </div>

  <!--// New Sponsor Form -->

  <?php

}
add_shortcode( 'wph_sponsors_application', 'wphackathon_sc_sponsors_application' );
