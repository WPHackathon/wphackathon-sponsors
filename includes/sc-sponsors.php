<?php

// Shortcode to show the list of Sponsors
function wphackathon_sc_sponsors( $atts ) {

  // Add Shortcode Attributes
  $atts = shortcode_atts(
		array(
			'order'          => 'asc',
			'orderby'        => 'title',
			'posts_per_page' => 10000,
			'columns'        => 3,
		), $atts );

  // Add Sponsors Query arguments
  $args = array(
    'order'          => $atts['order'],
    'orderby'        => $atts['orderby'],
    'posts_per_page' => $atts['posts_per_page'],
    'columns'        => $atts['columns'],
    'post_type'      => 'sponsor'
  );

  $the_query = new WP_Query( $args ); ?>

  <?php if ( $the_query->have_posts() ) : ?>

    <div id="wph-sponsors">
      <ul class="wph-sponsor-list wph-columns-<?php echo $atts['columns']; ?>">

    <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post();

        $terms = get_the_term_list( $post_id, 'sponsorship' );
        $terms = strip_tags($terms);

      ?>

        <li>
          <?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' ); ?>
          <span class="sponsor"><a href="<?php the_permalink(); ?>" title="<?php _e( 'Sponsor', $wph_textdomain ); ?>"><?php echo the_title(); ?></a></span>
          <span class="sponsoring"><?php _e( 'Sponsoring', $wph_textdomain ); ?>: <?php echo $terms; ?></span>
          <span class="read-more"><a href="<?php the_permalink(); ?>" title="<?php _e( 'Read more about ', $wph_textdomain ) . ' ' . the_title(); ?>"><?php _e( 'Read more', $wph_textdomain ); ?></a></span>
        </li>

      <?php endwhile; ?>
    <!-- end of the loop -->

      </ul>
    </div>

    <?php wp_reset_postdata(); ?>

  <?php else : ?>
      <p><?php _e( 'Sorry, still no sponsors for this WPHackathon.' ); ?></p>
  <?php endif;

}
add_shortcode( 'wph_sponsors', 'wphackathon_sc_sponsors' );
