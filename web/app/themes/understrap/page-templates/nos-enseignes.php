<?php

/**
 * Template Name: nos-enseignes
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>

<div id="content">
  <div class="container" id="event-area">
    
  </div>
</div>

<?php
  $args = array('post_type' => 'nos_enseignes', 'order' => 'ASC', 'posts_per_page' => -1);
  $wp_query = new WP_Query($args);
?>

<div id="content">
  <div class="">
    <?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
    <p><?php echo the_field("enseigne");?></p>
  </div>

  <?php
    endwhile;
    wp_reset_postdata();
  ?>
</div>
<?php
get_footer();
?>
