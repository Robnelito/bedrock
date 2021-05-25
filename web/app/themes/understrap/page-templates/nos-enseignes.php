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

<?php
$args = array('post_type' => 'nos_enseignes', 'order' => 'ASC', 'posts_per_page' => -1);
$wp_query = new WP_Query($args);
?>

<div class="row">

  <?php while()?>

</div>

</div>

<?php
get_footer();
?>
