<?php
if( !defined( 'ABSPATH')){ exit(); }
global $or_template_directory;

/*

Template Name: Plugin security

*/
?>
<div class="currency-reserves" id="content">
  <div class="d-flex align-items-center mb-2 position-relative"><a class="back-link" href="#"></a>
    <h2 class="sidebar-title"><?php the_title() ?></h2>
  </div>
    <?php
    if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
</div>