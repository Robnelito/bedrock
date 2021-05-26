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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<?php
  $args = array('post_type' => 'nos_enseignes', 'order' => 'ASC', 'posts_per_page' => -1);
  $wp_query = new WP_Query($args);
?>

<div id="content">

  <button class="trieBtn" onclick="trieAlphabetic('A','B')">A B</button>
  <button class="trieBtn" onclick="trieAlphabetic('C','D')">C D</button>
  <button class="trieBtn" onclick="trieAlphabetic('E','F')">E F</button>
  <button class="trieBtn" onclick="trieAlphabetic('G','H')">G H</button>
  <button class="trieBtn" onclick="trieAlphabetic('I','J')">I J</button>
  <button class="trieBtn" onclick="trieAlphabetic('K','L')">K L</button>
  <button class="trieBtn" onclick="trieAlphabetic('M','N')">M N</button>
  <button class="trieBtn" onclick="trieAlphabetic('O','P')">O P</button>
  <button class="trieBtn" onclick="trieAlphabetic('Q','R')">Q R</button>
  <button class="trieBtn" onclick="trieAlphabetic('S','T')">S T</button>
  <button class="trieBtn" onclick="trieAlphabetic('U','V')">U V</button>
  <button class="trieBtn" onclick="trieAlphabetic('W','X')">W X</button>
  <button class="trieBtn" onclick="trieAlphabetic('Y','Z')">Y Z</button>

  <select name="Type" id="select_type" onchange="trieByType()">
      <option value="All">Tout afficher</option>
     <?php while($wp_query->have_posts()): $wp_query->the_post(); ?>

      <option value="<?php echo the_field('type')?>"><?php echo the_field('type')?></option>

    <?php endwhile;wp_reset_postdata();?>
  </select>

  <div class="container row text-center" id="event-area">
    <?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
    <?php $test = get_the_title();?>

      <div class="col-md-3 my-event-card <?php echo($test[0])?> <?php echo the_field('type')?>"> 
      
      <img src="<?php echo the_field('photo_enseigne') ?>" alt="" srcset="">
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
