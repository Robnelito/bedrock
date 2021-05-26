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



<?php
  $args = array('post_type' => 'nos_enseignes', 'order' => 'ASC', 'posts_per_page' => -1);
  $wp_query = new WP_Query($args);
?>

<div id="content">

  <button onclick="trieAlphabetic('A','B')">A B</button>
  <button onclick="trieAlphabetic('C','D')">C D</button>
  <button onclick="trieAlphabetic('E','F')">E F</button>
  <button onclick="trieAlphabetic('G','H')">G H</button>
  <button onclick="trieAlphabetic('I','J')">I J</button>
  <button onclick="trieAlphabetic('K','L')">K L</button>
  <button onclick="trieAlphabetic('M','N')">M N</button>
  <button onclick="trieAlphabetic('O','P')">O P</button>
  <button onclick="trieAlphabetic('Q','R')">Q R</button>
  <button onclick="trieAlphabetic('S','T')">S T</button>
  <button onclick="trieAlphabetic('U','V')">U V</button>
  <button onclick="trieAlphabetic('W','X')">W X</button>
  <button onclick="trieAlphabetic('Y','Z')">Y Z</button>


  <div class="container row text-center" id="event-area">
    <?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
    <?php $test = get_the_title();?>

      <div class="col-md-3 my-event-card <?php echo($test[0])?>" id=""> 
      
      <p class="enseigne-image"><?php echo the_field('photo-enseigne')?></p>
      <p class="enseigne-type"><?php echo the_field('type')?></p>
      <p class="enseigne-title"><?php echo the_title()?></p>
      <p class="enseigne-etage"> <?php echo the_field('etage')?> </p>
      
      <?= the_field("enseigne") ?> </div>


    <?php endwhile;wp_reset_postdata();?>
  </div>
</div>

<?php
get_footer();
?>
